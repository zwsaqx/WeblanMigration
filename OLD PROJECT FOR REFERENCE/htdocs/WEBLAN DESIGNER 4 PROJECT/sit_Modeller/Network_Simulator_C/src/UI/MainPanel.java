package UI;

import Components.*;
import Listener.MainMouseListener;
import Model.IP;
import Popup.MainPanelPopup;
import Popup.PacketPopup;
import java.awt.*;
import java.awt.event.KeyEvent;
import java.awt.event.KeyListener;
import java.util.ArrayList;
import java.util.LinkedList;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.*;

/**
 *
 * @author Huy Truong
 */
public class MainPanel extends JLayeredPane {

    public LinkedList<Host> hosts;
    public LinkedList<Switch> switches;
    public LinkedList<Router> routers;
    public Packet packet;
    public ControlPanel controlPanel;
    public MainPanelPopup popup;
    public MainMouseListener mainMouseListener;
    private boolean debugMode;
    

    /**
     * Creates new form MainPanel
     */
    public MainPanel() {
        super();
        setSize(900, 550);
        setLayout(null);
        hosts = new LinkedList<>();
        switches = new LinkedList<>();
        routers = new LinkedList<>();
        packet = null;
        debugMode = false;
        popup = new MainPanelPopup(this);
        mainMouseListener = new MainMouseListener(this);
        this.addMouseListener(mainMouseListener);
    }

    @Override
    public void paintComponent(Graphics g) {
        super.paintComponent(g);
        Graphics2D g2 = (Graphics2D) g;
        g2.setStroke(new BasicStroke(4));
        removeAll();

        g2.setColor(Color.RED);
        for (Router router : routers) {
            for (Router r : router.connectedRouters.values()) {
                Point p1 = router.getCentralPoint();
                Point p2 = r.getCentralPoint();
                g2.drawLine(p1.x, p1.y, p2.x, p2.y);

            }
        }

        g2.setColor(Color.BLACK);
        for (Switch swtch : switches) {
            for (Device device : swtch.connectedDevices) {
                Point p1 = swtch.getCentralPoint();
                Point p2 = device.getCentralPoint();
                g2.drawLine(p1.x, p1.y, p2.x, p2.y);

            }
        }

        if (!hosts.isEmpty()) {
            for (Host host : hosts) {
                add(host, 0, -1);
            }
        }
        if (!switches.isEmpty()) {
            for (Switch swtch : switches) {
                add(swtch, 0, -1);
            }
        }
        if (!routers.isEmpty()) {
            for (Router router : routers) {
                add(router, 0, -1);
            }
        }
        if (packet != null) {
            add(packet, 1, -1);
        }
        repaint();
    }

    public void addDevice(String actionCommand, Point lastPos) throws Exception {
        switch (actionCommand) {
            case "Host":
                hosts.add(new Host(lastPos, this));
                break;
            case "Switch":
                switches.add(new Switch(lastPos, this));
                break;
            case "Router":
                routers.add(new Router(lastPos, this));
                break;
            case "Packet":
                if (packet != null) {
                    throw new Exception("[Warning] Error! Only one packet allowed!");
                } else {
                    this.packet = new Packet(lastPos, this);
                    packet.popup = new PacketPopup(this);
                }
                break;

        }
    }

    public Device getDeviceByIP(IP ip) {
        for (Host host : hosts) {
            if (host.ip != null && host.ip.equals(ip)) {
                return host;
            }
        }

        for (Router router : routers) {
            for (IP i : router.getIPs()) {
                if (i.equals(ip)) {
                    return router;
                }
            }
        }
        return null;
    }

    public Device getDeviceByName(String name) {
        for (Host host : hosts) {
            if (host.name.equals(name)) {
                return host;
            }
        }
        for (Router router : routers) {
            if (router.name.equals(name)) {
                return router;
            }
        }
        for (Switch swtch : switches) {
            if (swtch.name.equals(name)) {
                return swtch;
            }
        }
        return null;
    }

    public ArrayList<IP> getExistingIP() {
        ArrayList<IP> existingIPs = new ArrayList<>();
        for (Host host : hosts) {
            if (host.ip != null) {
                existingIPs.add(host.ip);
            }
        }
        for (Router router : routers) {
            for (IP ip : router.getIPs()) {
                existingIPs.add(ip);
            }
        }

        return existingIPs;
    }

    public ArrayList<String> getExistingName() {
        ArrayList<String> existingNames = new ArrayList<>();
        for (int i = 1; i <= 15; i++) {
            existingNames.add("Host " + i);
            existingNames.add("Router " + i);
            existingNames.add("Switch " + i);
        }
        for (Host host : hosts) {
            existingNames.add(host.name);
        }
        for (Router router : routers) {
            existingNames.add(router.name);
        }
        for (Switch swtch : switches) {
            existingNames.add(swtch.name);
        }
        return existingNames;
    }


    public void removePacket() {
        packet = null;
        System.out.println("[System] Packet is deleted!");
    }

    void setControlPanel(ControlPanel controlPanel) {
        this.controlPanel = controlPanel;
    }

    public boolean hasIP(IP ip) {
        for (IP i : getExistingIP()) {
            if (i.equals(ip)) {
                return true;
            }
        }
        return false;
    }

    public void activateListeners() {
        mainMouseListener.setActive(true);
        for (Host host : hosts) {
            host.listener.setActive(true);
        }
        for (Switch swtch : switches) {
            swtch.listener.setActive(true);
        }
        for (Router router : routers) {
            router.listener.setActive(true);
        }

        packet.listener.setActive(true);

    }

    public void deactivateListeners() {
        mainMouseListener.setActive(false);
        for (Host host : hosts) {
            host.listener.setActive(false);
        }
        for (Switch swtch : switches) {
            swtch.listener.setActive(false);
        }
        for (Router router : routers) {
            router.listener.setActive(false);
        }

        packet.listener.setActive(false);
    }

    public String getAvailableName(String string) {
        if ("Host".equals(string)) {
            for (int i = 1; i <= 15; i++) {
                if (getDeviceByName("Host " + i) == null) {
                    return "Host " + i;
                }
            }
        }
        if ("Router".equals(string)) {
            for (int i = 1; i <= 15; i++) {
                if (getDeviceByName("Router " + i) == null) {
                    return "Router " + i;
                }
            }
        }
        if ("Switch".equals(string)) {
            for (int i = 1; i <= 15; i++) {
                if (getDeviceByName("Switch " + i) == null) {
                    return "Switch " + i;
                }
            }
        }
        return null;
    }

    public boolean isValidHostIP(String s) {
        try {
            if (!IP.isValidAddress(s)) {
                throw new Exception("[Warning] Error! Invalid IP!");
            }
            IP ip = new IP(s);
            String[] octets;

            octets = ip.getIPStr().split("\\.");
            if ("0".equals(octets[3]) || "255".equals(octets[3])) {
                throw new Exception("[Warning] Error! IP address is invalid! Only host addresses allowed!");
            }

            if (getExistingIP().contains(ip)) {
                throw new Exception("[Warning] Error! The IP has already been assigned!");
            }

        } catch (Exception e) {
            return false;
        }
        return true;
    }
    
    public void resetRoutingtables() {
        System.out.println("[System] All active routes will be deleted!");
        for (Router router : routers) {
            System.out.println("[System] Deleting "+router.name+" routes!");
            ArrayList<Route> routes = new ArrayList<>(router.routingTable.routes);
            for (Route route : routes) {
                router.routingTable.routes.remove(route);
            }
        }
    }
    
    public void setDebugMode(boolean i) {
        if (i==true) {
            System.out.println("[System] Entering debug mode!");
            debugMode = i;
        }
        if (i==false) {
            System.out.println("[System] Exiting debug mode!");
            debugMode = i;
        }
    }

    public boolean getDebugMode() {
        return debugMode;
    }
}
