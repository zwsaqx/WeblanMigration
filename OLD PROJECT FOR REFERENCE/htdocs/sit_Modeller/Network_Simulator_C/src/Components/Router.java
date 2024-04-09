package Components;

import Listener.RouterListener;
import Model.IP;
import Popup.RouterPopup;
import UI.MainPanel;
import java.awt.Point;
import java.util.*;

public class Router extends Device {

    public final static int MAXIMUM_INTERFACE = 3;
    public static String routerIconPath = "/Img/Router.png";
    public static IP STATIC_ROUTE;
    public Hashtable<IP, Router> connectedRouters;
    public Hashtable<IP, Switch> connectedSwitches;
    public RoutingTable routingTable;
    public RouterPopup popup;
    public RouterListener listener;
    public Timer timer;

    public Router(Point pos, MainPanel panel) {
        super(panel.getAvailableName("Router"), routerIconPath, panel, pos);
        STATIC_ROUTE = new IP(0L);
        connectedRouters = new Hashtable<>();
        connectedSwitches = new Hashtable<>();
        this.panel = panel;
        this.routingTable = new RoutingTable(this);
        listener = new RouterListener(panel, this);
        this.addMouseMotionListener(listener);
        this.addMouseListener(listener);
        popup = new RouterPopup(this);
        System.out.println("[System] New router created @ x: " + pos.x + ", y: " + pos.y);
        timer = new Timer();
        routerTimers();
    }

    public void routerTimers() {
        timer.schedule(new TimerTask() {
            @Override
            public void run() {
                if (!panel.getDebugMode()) {
                    routingTable.sendRIPUpdate();
                }
            }
        }, 10000, 10000);
        timer.schedule(new TimerTask() {
            @Override
            public void run() {
                if (!panel.getDebugMode()) {
                routingTable.updateLocalRoute();
                }
            }
        }, 3000, 3000);
    }

    public void connectRouter(IP SIp, IP DIp, Router router2) {
        try {
            
            if (!SIp.sameNetwork(DIp)) {
                throw new Exception("[Warning] Error! The IPs not in the same network!");
            }
            if (SIp.getIPLong() == DIp.getIPLong()) {
                throw new Exception("[Warning] Error! The IPs can't be the same!");
            }
            if (panel.hasIP(SIp) || panel.hasIP(DIp)) {
                throw new Exception("[Warning] Error! The IP has already been assigned!");
            }

            if (hasDuplicatedNetwork(SIp)) {
                throw new Exception("[Warning] Error! Network " + SIp.getNetworkSub24().toString() + " already exist in other interface!");
            }

            if (router2.hasDuplicatedNetwork(DIp)) {
                throw new Exception("[Warning] Error! Network " + DIp.getNetworkSub24().toString() + " already exist in other interface!");
            }
            System.out.println("[" + this.name + "] Interface IP Address: " + SIp.toString());
            System.out.println("[" + router2.name + "] Interface IP Address: " + DIp.toString());
            System.out.println("[System] Serial link between " + this.name + " and " + router2.name + " established!");
            router2.connectedRouters.put(DIp, this);
            this.connectedRouters.put(SIp, router2);


        } catch (Exception e) {
            System.out.println(e.getMessage());
            System.out.println("[System] No changes have been made!");
        }
    }
    
     public void connectSwitch(IP ip, Switch swtch) {
        try {
            
            
            if (panel.hasIP(ip)) {
                throw new Exception("[Warning] Error! The IP has already been assigned!");
            }

            if (hasDuplicatedNetwork(ip)) {
                throw new Exception("[Warning] Error! Network " + ip.getNetworkSub24().toString() + " already exist in other interface!");
            }

            swtch.connect(this);
                        this.connectedSwitches.put(ip, swtch);
                        System.out.println("[" + this.name + "] Interface IP Address: " + ip.toString());
                        System.out.println("[System] Link between " + this.name + " and " + swtch.name + " established!");
        } catch (Exception e) {
            System.out.println(e.getMessage());
            System.out.println("[System] No changes have been made!");
        }
    }

    public void disconnect(Device device) {
        if (device instanceof Router) {
            Router router = (Router) device;
            IP SIp = this.getIP(router);
            IP DIp = router.getIP(this);
            
            System.out.println("[System] Serial link between [" + this.name + "] and [" + router.name + "] removed!");
            router.connectedRouters.remove(DIp);
            router.routingTable.getRoute(DIp).setHop(16);
            router.routingTable.sendRIPUpdate();
            this.connectedRouters.remove(SIp);
            this.routingTable.getRoute(SIp).setHop(16);
            this.routingTable.sendRIPUpdate();
            
        }
        if (device instanceof Switch) {
            Switch swtch = (Switch) device;
            IP ip = this.getIP(swtch);
            System.out.println("[System] Link between [" + this.name + "] and [" + swtch.name + "] removed!");
            this.connectedSwitches.remove(ip);
            this.routingTable.getRoute(ip).setHop(16);
            this.routingTable.sendRIPUpdate();
            swtch.connectedDevices.remove(this);
            
        }
    }

    public IP getIP(Device device) {
        if (device instanceof Router) {
            Router router = (Router) device;
            for (IP ip : connectedRouters.keySet()) {
                if (connectedRouters.get(ip) == router) {
                    return ip;
                }
            }
        }
        if (device instanceof Switch) {
            Switch swtch = (Switch) device;
            for (IP ip : connectedSwitches.keySet()) {
                if (connectedSwitches.get(ip) == swtch) {
                    return ip;
                }
            }
        }
        return null;
    }

    public ArrayList<Router> getconnectedRouters() {
        ArrayList<Router> routers = new ArrayList<>();
        for (Router router : connectedRouters.values()) {
            routers.add(router);
        }
        return routers;
    }

    public ArrayList<Switch> getconnectedSwitches() {
        ArrayList<Switch> switches = new ArrayList<>();
        for (Switch swtch : connectedSwitches.values()) {
            switches.add(swtch);
        }
        return switches;
    }

    public ArrayList<IP> getIPs() {
        ArrayList<IP> ips = new ArrayList<>();
        for (IP ip : connectedSwitches.keySet()) {
            ips.add(ip);
        }
        for (IP ip : connectedRouters.keySet()) {
            ips.add(ip);
        }
        return ips;
    }

    public boolean hasIP(IP ip) {
        ArrayList<IP> ips = new ArrayList<>(getIPs());
        for (IP i : ips) {
            if (i.equals(ip)) {
                return true;
            }
        }
        return false;
    }

    public boolean hasNetwork(IP ip) {
        ArrayList<IP> ips = new ArrayList<>(getIPs());
        for (IP i : ips) {
            if (i.sameNetwork(ip)) {
                return true;
            }
        }
        return false;
    }
    
    public boolean hasDevice(Device device) {
        if (device instanceof Router) {
            Router r = (Router) device;
            return getconnectedRouters().contains(r);
        }
        if (device instanceof Switch) {
            Switch s = (Switch) device;
            return getconnectedSwitches().contains(s);
        }
        return false;
    }

    public boolean hasDuplicatedNetwork(IP ip) {
        for (IP i : connectedRouters.keySet()) {
            if (ip.sameNetwork(i)) {
                return true;
            }
        }
        for (IP i : connectedSwitches.keySet()) {
            if (ip.sameNetwork(i)) {
                return true;
            }
        }
        return false;
    }

    @Override
    public void handlePacket(Packet packet) {
        packet.path.add(this);
        packet.TTL -= 1;
        if (packet.TTL <= 0 && packet.isRouting) {
            packet.isRouting = false;
            System.out.println("[Packet] Packet is expired!");
        }
        if (hasIP(packet.dstIP) && packet.isRouting) {
            packet.isRouting = false;
            System.out.println("[Packet] Packet Arrived! Packet stops here: " + name + " (TTL= " + packet.TTL + ")");
        }
        if (!getIPs().contains(packet.dstIP) && packet.isRouting) {
            Route route = routingTable.getRoute(packet.dstIP);
            if (route != null) {

                if (route.getNextHop() instanceof Router) {
                    System.out.println("[Packet] Route Found! Forwarding to " + route.getNextHop().name);
                    packet.nextHop = (Router) route.getNextHop();
                    packet.simulate(this, route.getNextHop());
                    route.getNextHop().handlePacket(packet);
                }
                if (route.getNextHop() instanceof Switch) {
                    Switch swtch = (Switch) route.getNextHop();
                    Route r = swtch.getRoute(packet.dstIP);
                    if (r != null) {
                        System.out.println("[Packet] Route Found! Forwarding to " + route.getNextHop().name);
                        packet.nextHop = null;
                        packet.simulate(this, route.getNextHop());
                        route.getNextHop().handlePacket(packet);
                    } else {
                        route = null;
                    }
                }
            }

            if (routingTable.isDefaultRouteEnabled() && packet.isRouting) {

                Route defaultRoute = routingTable.getRoute(Router.STATIC_ROUTE);
                System.out.println("[Packet] Default Route used! Forwarding to " + defaultRoute.getNextHop().name);
                packet.nextHop = (Router) defaultRoute.getNextHop();
                packet.simulate(this, defaultRoute.getNextHop());
                defaultRoute.getNextHop().handlePacket(packet);

            }

            if (route == null && !routingTable.isDefaultRouteEnabled() && packet.isRouting) {
                System.out.println("[Packet] There is no route to " + packet.dstIP.toString());
                System.out.println("[Packet] Packet Dropped! Packet stops here: " + name + " (TTL= " + packet.TTL + ")");
            }
        }

    }

    @Override
    public Point getCentralPoint() {
        return super.getImagePoint();
    }

    @Override
    public void updateToolTip() {
        String text = "<html><body bgcolor=white><h4 align=center>" + this.name + " Interfaces</h4><table border=1>";
        text += "<tr><td>IP Address</td><td>Device</td>";
        for (IP ip : connectedSwitches.keySet()) {
            text += "<tr><td>" + ip.toString() + "</td><td>" + connectedSwitches.get(ip).name + "</td>";
        }

        for (IP ip : connectedRouters.keySet()) {
            text += "<tr><td>" + ip.toString() + "</td><td>" + connectedRouters.get(ip).name + "</td>";
        }

        if (connectedRouters.isEmpty() && connectedSwitches.isEmpty()) {
            text += "<tr><td>(Empty)</td><td>(Empty)</td>";
        }

        text += "</table>";

        text += "<html><body bgcolor=white><h4 align=center>" + this.name + " Routes</h4><table border=1>";
        text += "<tr><td>Network</td><td>Next Hop</td><td>Hops away</td>";

        for (Route route : routingTable.routes) {
            text += "<tr><td>" + route.destination.toString() + 
                    "</td><td>" + route.getNextHop().name + "</td><td>" + 
                    route.getHop() + "</td>";
        }

        if (routingTable.routes.isEmpty()) {
            text += "<tr><td>(Empty)</td><td>(Empty)</td><td>(Empty)</td>";
        }

        this.setToolTipText(text);
    }

    @Override
    public void remove() {
        ArrayList<Switch> switches = new ArrayList<>(connectedSwitches.values());
        for (Switch swtch : switches) {
            this.disconnect(swtch);
        }
        ArrayList<Router> routers = new ArrayList<>(connectedRouters.values());
        for (Router router : routers) {
            this.disconnect(router);
        }
        this.timer.cancel();
        panel.routers.remove(this);

    }
}