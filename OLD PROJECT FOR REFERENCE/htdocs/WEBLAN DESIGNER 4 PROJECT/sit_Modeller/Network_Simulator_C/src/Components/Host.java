package Components;

import Listener.HostListener;
import Model.IP;
import Popup.HostPopup;
import UI.MainPanel;
import java.awt.Point;

public class Host extends Device {

    public HostPopup popup;
    public Switch swtch;
    public IP ip;
    public IP gateway;
    public HostListener listener;
    public static String hostIconPath = "/Img/Computer.png";

    public Host(Point pos, MainPanel panel) {
        super(panel.getAvailableName("Host"), hostIconPath, panel, pos);
        this.ip = null;
        this.gateway = null;
        this.swtch = null;
        this.panel = panel;
        listener = new HostListener(panel, this);
        this.addMouseMotionListener(listener);
        this.addMouseListener(listener);
        popup = new HostPopup(this);
        System.out.println("[System] New host created @ x: " + pos.x + ", y: " + pos.y);
    }

    @Override
    public void updateToolTip() {
        if (ip != null) {
            this.setToolTipText(name + ": " + ip.toString() + "/24");
        } else {
            this.setToolTipText(name + ": Not Assigned");
        }
    }

    @Override
    public void handlePacket(Packet packet) {
        packet.path.add(this);

        if (packet.dstIP.equals(ip)) {
            System.out.println("[Packet] Packet Arrived! Packet stops here: " + name + " (TTL= " + packet.TTL + ")");
            packet.simulate(this, this);
            packet.isRouting = false;
        }
        if (swtch == null && packet.isRouting) {
            System.out.println("[Packet] Host isolated! Packet stops here: " + name + " (TTL= " + packet.TTL + ")");
            packet.isRouting = false;
        }
        if (swtch != null && packet.isRouting) {
            if (ip.sameNetwork(packet.dstIP) && packet.isRouting) {
                Route route = swtch.getRoute(packet.dstIP);
                if (route == null && packet.isRouting) {
                    System.out.println("[Packet] No Route to " + packet.dstIP.toString() + "! sending to Default Gateway");
                    Router router = null;
                    if (swtch.getDevice(gateway)instanceof Router) {
                        router = (Router) swtch.getDevice(gateway);
                    }
                    if (gateway != null&&router!=null) {
                        System.out.println("[Packet] Route to Gateway Found! Sending packet to " + router.name);
                        packet.simulate(this, swtch);
                        packet.nextHop = router;
                        swtch.handlePacket(packet);
                    }
                    if (gateway == null||router==null) {
                        System.out.println("[Packet] Gateway not ready! Packet stops here: " + name + " (TTL= " + packet.TTL + ")");
                        packet.isRouting = false;
                    }
                }
                if (route != null && packet.isRouting) {
                    System.out.println("[Packet] Route Found! Sending packet to " + route.destination.toString());
                    packet.simulate(this, swtch);
                    packet.nextHop = null;
                    swtch.handlePacket(packet);
                }
            }
            if (!ip.sameNetwork(packet.dstIP) && packet.isRouting) {
                if (gateway != null) {
                    Route route = swtch.getRoute(gateway);
                    if (route == null && packet.isRouting) {
                        System.out.println("[Packet] No Route to Gateway! Packet stops here: " + name + " (TTL= " + packet.TTL + ")");
                        packet.isRouting = false;
                    }
                    if (route != null && packet.isRouting) {
                        Router router = null;
                        if (swtch.getDevice(gateway) instanceof Router) {
                            router = (Router) swtch.getDevice(gateway);
                        }
                        if (router!=null) {
                            System.out.println("[Packet] Route to Gateway Found! Sending packet to " + router.name);
                            packet.simulate(this, swtch);
                            packet.nextHop = router;
                            swtch.handlePacket(packet);
                        }
                    }
                }
                if (gateway == null||!(swtch.getDevice(gateway) instanceof Router)) {
                    System.out.println("[Packet] Gateway not ready! Packet stops here: " + name + " (TTL= " + packet.TTL + ")");
                    packet.isRouting = false;
                }
            }         
        }
    }

    @Override
    public void remove() {
        if (swtch != null) {
            swtch.disconnect(this);
        }
        panel.hosts.remove(this);
        
    }

    @Override
    public Point getCentralPoint() {
        return super.getImagePoint();
    }
}