/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Components;

import Model.IP;
import java.util.ArrayList;

/**
 *
 * @author BiHeo
 */
public class RoutingTable {

    public Router router;
    public ArrayList<Route> routes;

    public RoutingTable(Router router) {
        this.router = router;
        this.routes = new ArrayList<>();
    }

    public void learnRoute(RoutingTable table) {


        ArrayList<IP> receivedRoutes = new ArrayList<>(table.getNetworks());

        if (receivedRoutes.contains(Router.STATIC_ROUTE)) {
            receivedRoutes.remove(Router.STATIC_ROUTE);
        }

        for (IP ip : receivedRoutes) {
            Route rRoute = table.getRoute(ip);
            Route cRoute = this.getRoute(ip);
            if (rRoute.getHop() < 16) {
                if (cRoute == null) {
                    addNewRoute(table.router, table.getRoute(ip));
                }
                if (cRoute != null) {
                    updateRoute(table.router, table.getRoute(ip));
                }
            }
            if (rRoute.getHop() >= 16 && cRoute != null) {
                cRoute.setHop(16);
                rRoute.setHop(16);
                System.out.println("[" + this.router.name + "]" + " Route: " + cRoute.destination.toString() + " marked as infinite route!");
            }
        }


    }

    public void addNewRoute(Router router, Route route) {
        if (route.getHop() < 16) {
            Route newRoute = new Route(route.destination, router, route.getHop() + 1);
            this.routes.add(newRoute);
            System.out.println("[" + this.router.name + "]" + " New route " + route.destination.toString() +" added! Next hop: "+router.name+"!");
        }
    }

    public void updateRoute(Router router, Route route) {
        Route cRoute = getRoute(route.destination);
        if ((route.getHop() + 1) < cRoute.getHop() && (route.getHop() + 1) < 16) {
            cRoute.setNextHop(router);
            cRoute.setHop(route.getHop() + 1);
            System.out.println("[" + this.router.name + "]" + " Route: " + route.destination.toString() + " updated!");
        }
    }

    public void addDefaultRoute(Router router) {
        IP ip = new IP(0L);
        Route newRoute = new Route(ip, router, 1);
        this.routes.add(newRoute);
        System.out.println("[" + this.router.name + "]" + " Default route enabled! Exit route: " + router.name);
    }

    public Route getRoute(IP ip) {
        for (Route route : routes) {
            if (route.destination.sameNetwork(ip)) {
                return route;
            }
        }
        return null;
    }

    public ArrayList<IP> getNetworks() {
        ArrayList<IP> net = new ArrayList<>();
        for (Route route : routes) {
            net.add(route.destination);
        }
        return net;
    }

    public ArrayList<IP> getLocalNetworks() {
        ArrayList<IP> net = new ArrayList<>();
        for (Route route : routes) {
            if (route.isLocalRoute()) {
                net.add(route.destination);
            }
        }
        return net;
    }

    public void updateLocalRoute() {
        for (IP ip : router.connectedSwitches.keySet()) {
            Route route = getRoute(ip);
            if (route == null) {
                routes.add(new Route(ip.getNetworkSub24(), router.connectedSwitches.get(ip), 0));
            }
            if (route != null) {
                route.setHop(0);
                route.setNextHop(router.connectedSwitches.get(ip)); //????
            }
        }
        for (IP ip : router.connectedRouters.keySet()) {
            Route route = getRoute(ip);
            if (route == null) {
                routes.add(new Route(ip.getNetworkSub24(), router.connectedRouters.get(ip), 0));
            }
            if (route != null) {
                route.setHop(0);
                route.setNextHop(router.connectedRouters.get(ip));
            }
        }
    }

    public void sendRIPUpdate() {
        for (Router r : router.getconnectedRouters()) {
            r.routingTable.learnRoute(router.routingTable);
        }
        clearExpiredRoute();
    }

    public void clearExpiredRoute() {
        ArrayList<Route> currentRoutes = new ArrayList<>(routes);
        for (Route route : currentRoutes) {
            if (route.getHop() >= 16) {
                Device device = route.getNextHop();
                if (device instanceof Switch) {
                    routes.remove(route);
                }
                if (device instanceof Router) {
                    clearRoutesFrom((Router) device);
                }
                System.out.println("[" + this.router.name + "] Route to network " + route.destination.toString() + " expired");
            }
            if (route.getHop() == 0 && !router.hasDevice(route.getNextHop())) {
                route.setHop(16);
                sendRIPUpdate();
                System.out.println("[" + this.router.name + "]" + " Route: " + route.destination.toString() + " marked as infinite route!");
            }
        }
    }

    public void clearRoutesFrom(Router router) {
        ArrayList<Route> currentRoutes = new ArrayList<>(routes);
        for (Route r : currentRoutes) {
            if (r.getNextHop() == router) {
                routes.remove(r);
            }
        }
    }

    public Device getNextHop(IP ip) {
        for (Route route : routes) {
            if (route.destination.sameNetwork(ip)) {
                return route.getNextHop();
            }
        }
        return null;
    }

    public boolean isDefaultRouteEnabled() {
        if (getNextHop(new IP(0L)) != null) {
            return true;
        }
        return false;
    }
}
