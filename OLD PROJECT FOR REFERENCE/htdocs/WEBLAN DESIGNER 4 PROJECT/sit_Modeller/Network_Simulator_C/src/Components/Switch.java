package Components;

import Listener.SwitchListener;
import Model.IP;

import Popup.SwitchPopup;
import UI.MainPanel;
import java.awt.Point;
import java.util.ArrayList;
import java.util.Timer;
import java.util.TimerTask;

public class Switch extends Device {

    public static String switchIconPath = "/Img/Switch.png";
    public SwitchPopup popup;
    public SwitchListener listener;
    public ArrayList<Device> connectedDevices;
    public ArrayList<Route> routes;

    public Switch(Point pos, MainPanel panel) {
        super(panel.getAvailableName("Switch"), switchIconPath, panel, pos);
        this.panel = panel;
        this.connectedDevices = new ArrayList<>();
        this.routes = new ArrayList<>();
        listener = new SwitchListener(panel, this);
        this.addMouseMotionListener(listener);
        this.addMouseListener(listener);
        this.popup = new SwitchPopup(this);
        ARPTimers();
        System.out.println("[System] New Switch created @ x: " + pos.x + ", y: " + pos.y);
    }

    public void ARPTimers() {
        Timer timer = new Timer();
        timer.schedule(new TimerTask() {
            @Override
            public void run() {
                updateARPTable();
            }
        }, 0, 3000);

    }

    public ArrayList<Router> getRouters() {
        ArrayList<Router> routers = new ArrayList<>();
        for (Device device : connectedDevices) {
            if (device instanceof Router) {
                routers.add((Router) device);
            }
        }
        return routers;
    }

    public ArrayList<Host> getHosts() {
        ArrayList<Host> hosts = new ArrayList<>();
        for (Device device : connectedDevices) {
            if (device instanceof Host) {
                hosts.add((Host) device);
            }
        }
        return hosts;
    }

    public Route getRoute(IP ip) {
        for (Route route : routes) {
            if (route.destination.equals(ip)) {
                return route;
            }
        }
        return null;
    }

    public Device getDevice(IP ip) {
        for (Route route : routes) {
            if (route.destination.equals(ip)) {
                return route.getNextHop();
            }
        }
        return null;
    }

    @Override
    public void remove() {
        for (Host host : getHosts()) {
            this.disconnect(host);
        }
        for (Router router : getRouters()) {
            this.disconnect(router);
        }
System.out.println("["+this.name+"] Device removed!");
        panel.switches.remove(this);
        
    }

    @Override
    public void updateToolTip() {
        String text = "<html><body bgcolor=white><h4 align=center>" + this.name + "</h4><table border=1>";
        text += "<tr><td>MAC Address</td><td>Device</td>";
        for (Device device : connectedDevices) {
            
            text += "<tr><td>N/a</td><td>" + device.name + "</td>";
        }
        if (connectedDevices.isEmpty()) {
            text += "<tr><td>(Empty)</td><td>(Empty)</td>";
        }
        this.setToolTipText(text);
    }

    @Override
    public void handlePacket(Packet packet) {
        packet.path.add(this);
            Device dstdevice = this.getDevice(packet.dstIP);
            Router gateway = packet.nextHop;
            if (dstdevice != null &&gateway==null&& packet.isRouting) {
                packet.simulate(this, dstdevice);
                dstdevice.handlePacket(packet);              
            } else
            if (gateway != null && packet.isRouting) {
                packet.simulate(this, gateway);
                gateway.handlePacket(packet);              
            }           
    }

    @Override
    public Point getCentralPoint() {
        return super.getImagePoint();
    }

    @Override
    public void setName(String name) {
        super.name = name;
    }

    public void connect(Device device) {
        if (device instanceof Host) {
            Host host = (Host) device;
            connectedDevices.add(host);
            host.swtch = this;
            
        }
        if (device instanceof Router) {
            Router router = (Router) device;
            connectedDevices.add(router);
            
        }
    }

    public void disconnect(Device device) {
        if (device instanceof Host) {
            Host host = (Host) device;
            System.out.println("[System] Link between ["+this.name +"] and ["+host.name+"] removed!");
            connectedDevices.remove(host);
            host.swtch = null;
            
        }
        if (device instanceof Router) {
            Router router = (Router) device;
            connectedDevices.remove(router);
            IP ip = router.getIP(this);
            System.out.println("[System] Link between ["+this.name +"] and ["+router.name+"] removed!");
            router.routingTable.getRoute(ip).setHop(16);
            router.connectedSwitches.remove(ip);    
        }
    }

    public void updateARPTable() {
        routes.clear();
        for (Device device : connectedDevices) {
            IP ip = null;

            if (device instanceof Router) {
                Router r = (Router) device;
                ip = r.getIP(this);
            }
            if (device instanceof Host) {
                Host h = (Host) device;
                if (h.ip != null) {
                    ip = h.ip;
                }
            }
            routes.add(new Route(ip, device, 0));
        }
    }

}