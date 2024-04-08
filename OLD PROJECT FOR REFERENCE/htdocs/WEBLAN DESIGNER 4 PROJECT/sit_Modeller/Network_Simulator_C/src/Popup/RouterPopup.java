/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Popup;

import Components.Device;
import Components.Switch;
import Components.Router;
import Listener.RouterListener;
import Model.IP;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.util.ArrayList;
import java.util.Hashtable;
import javax.swing.*;
import javax.swing.border.BevelBorder;

/**
 *
 * @author Huy Truong
 */
public class RouterPopup extends JPopupMenu {

    private ActionListener menuListener;
    private Router router;
    public RouterListener routerListener;

    public RouterPopup(Router router) {
        super();
        this.router = router;
        initiateMenu();
        routerListener = new RouterListener(router.panel, router);
        router.addMouseListener(routerListener);
    }

    private void initiateMenu() {
        menuListener = new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent event) {
                switch (event.getActionCommand()) {
                    case "Set Name":
                        setName();
                        break;
                    case "Set IP & Connect":
                        setIPandConnect();
                        break;
                    case "Disconnect...":
                        disconnect();
                        break;
//                    case "Routes Table":
//                        route();
//                        break;
                    case "Remove":
                        remove();
                        break;
                }

            }
        };

        JMenuItem item;
        add(item = new JMenuItem("Set Name"));
        item.setHorizontalTextPosition(JMenuItem.RIGHT);
        item.addActionListener(menuListener);

        addSeparator();

        add(item = new JMenuItem("Set IP & Connect"));
        item.setHorizontalTextPosition(JMenuItem.RIGHT);
        item.addActionListener(menuListener);

        add(item = new JMenuItem("Disconnect..."));
        item.setHorizontalTextPosition(JMenuItem.RIGHT);
        item.addActionListener(menuListener);

        addSeparator();

//        add(item = new JMenuItem("Routes Table"));
//        item.setHorizontalTextPosition(JMenuItem.RIGHT);
//        item.addActionListener(menuListener);
//
//
//        addSeparator();

        add(item = new JMenuItem("Remove"));
        item.setHorizontalTextPosition(JMenuItem.RIGHT);
        item.addActionListener(menuListener);

        setBorder(new BevelBorder(BevelBorder.RAISED));

    }

    private void setName() {
        String s = (String) JOptionPane.showInputDialog(
                router.getParent(),
                "Enter new name: \n",
                "Set name: " + router.name,
                JOptionPane.PLAIN_MESSAGE,
                new ImageIcon(getClass().getResource("/Img/Edit Name.png")),
                null,
                router.name);
        System.out.println("[System] [" + router.name + "] is renamed to [" + s + "]");
        router.setName(s);
    }

    private void setIPandConnect() {
        //<editor-fold defaultstate="collapsed" desc="Switch Panel">
        JPanel switchPanel = new JPanel(new GridLayout(4, 2, 3, 3));

        JLabel label = new JLabel("Networks: ");
        switchPanel.add(label);

        final JComboBox switches = new JComboBox();
        Hashtable<String, Switch> availableSwitches = new Hashtable<>();

        for (Switch swtch : router.panel.switches) {
            if (!router.connectedSwitches.contains(swtch)) {
                availableSwitches.put(swtch.name, swtch);
            }
        }
        switches.setModel(new DefaultComboBoxModel(availableSwitches.keySet().toArray()));

        if (switches.getItemCount() > 0) {
            switchPanel.add(switches);
        } else {
            JLabel jLabel = new JLabel("No available switch!");
            switchPanel.add(jLabel);
        }
        String[] netmask1 = {"255.255.255.0"};
        JComboBox subnet1 = new JComboBox(netmask1);
        final JTextField ipField = new JTextField();

        JLabel ipLabel = new JLabel("IP Address:");
        switchPanel.add(ipLabel);

        switchPanel.add(ipField);

        JLabel subnetLabel = new JLabel("Subnet Mask:");
        switchPanel.add(subnetLabel);

        switchPanel.add(subnet1);
        switchPanel.add(new JLabel());

        switchPanel.setBorder(BorderFactory.createEmptyBorder(10, 10, 10, 10));
        //</editor-fold>
        //<editor-fold defaultstate="collapsed" desc="Router Panel">
        JPanel routerPanel = new JPanel(new GridLayout(4, 2, 3, 3));

        JLabel jLabel = new JLabel("Router: ");
        routerPanel.add(jLabel);
        final JComboBox routers = new JComboBox();
        Hashtable<String, Router> availableRouters = new Hashtable<>();
        for (Router r : router.panel.routers) {
            if (r != router && !router.connectedRouters.contains(r)) {
                availableRouters.put(r.name, r);
            }
        }

        routers.setModel(new DefaultComboBoxModel(availableRouters.keySet().toArray()));

        if (routers.getItemCount() > 0) {
            routerPanel.add(routers);
        } else {
            JLabel i = new JLabel("Create more Router!");
            routerPanel.add(i);
        }

        JTextField scrIP = new JTextField();
        JTextField dstIP = new JTextField();

        JLabel srcRouter = new JLabel(router.name + " IP:");
        JLabel dstRouter = new JLabel("Destination IP:");

        routerPanel.add(srcRouter);
        routerPanel.add(scrIP);
        routerPanel.add(dstRouter);
        routerPanel.add(dstIP);

        String[] netmask2 = {"255.255.255.0"};
        JComboBox subnet2 = new JComboBox(netmask2);
        JLabel subnetLabel2 = new JLabel("Subnet Mask:");
        routerPanel.add(subnetLabel2);
        routerPanel.add(subnet2);


        routerPanel.setBorder(BorderFactory.createEmptyBorder(10, 10, 10, 10));
        //</editor-fold>

        JTabbedPane tabbedPane = new JTabbedPane();
        tabbedPane.addTab("Connect Network", switchPanel);
        tabbedPane.addTab("Connect Router", routerPanel);

        int result = JOptionPane.showConfirmDialog(router.getParent(), tabbedPane, "Set IP and Connect: " + router.name,
                JOptionPane.OK_CANCEL_OPTION, JOptionPane.PLAIN_MESSAGE,
                new ImageIcon(getClass().getResource("/Img/Edit IP.png")));
        if (result == JOptionPane.OK_OPTION) {
            //<editor-fold defaultstate="collapsed" desc="networkPanel">
            if (tabbedPane.getSelectedIndex() == 0) {
                try {
                    if (availableSwitches.isEmpty()) {
                        throw new Exception("[Warning] Error! No switch chosen!");
                    }
                    if (!router.panel.isValidHostIP(ipField.getText())) {
                        throw new Exception("[Warning] Error! Invalid IP!");
                    }
                    IP ip = new IP(ipField.getText());
                        Switch swtch = availableSwitches.get((String) switches.getSelectedItem());
                        router.connectSwitch(ip, swtch);

                } catch (Exception error) {
                    System.out.println(error.getMessage());
                    System.out.println("[System] No changes have been made!");
                }
            }
            //</editor-fold>
            //<editor-fold defaultstate="collapsed" desc="routerPanel">
            if (tabbedPane.getSelectedIndex() == 1) {
                try {

                    if (availableRouters.isEmpty()) {
                        throw new Exception("[Warning] Error! No router was chosen!");
                    }

                    if (!router.panel.isValidHostIP(scrIP.getText()) || !router.panel.isValidHostIP(dstIP.getText())) {
                        throw new Exception("[Warning] Error! Invalid IP!");
                    }
                    IP SIp = new IP(scrIP.getText());
                    IP DIp = new IP(dstIP.getText());
                    Router destinationRouter = (Router) availableRouters.get((String) routers.getSelectedItem());
                    router.connectRouter(SIp, DIp, destinationRouter);
                    
                } catch (Exception error) {
                    System.out.println(error.getMessage());
                    System.out.println("[System] No changes have been made!");
                }
            }
            //</editor-fold>
        }
    }

    private void disconnect() {
        JPanel disconnectPanel = new JPanel(new GridLayout());
        JLabel label = new JLabel("Device: ");
        JComboBox connectedDevices = new JComboBox();

        disconnectPanel.add(label);
        Hashtable<String, Device> devices = new Hashtable<>();
        if (!(router.connectedRouters.isEmpty() && router.connectedSwitches.isEmpty())) {
            for (Router r : router.getconnectedRouters()) {
                devices.put(r.name, r);
            }
            for (Switch s : router.getconnectedSwitches()) {
                devices.put(s.name, s);
            }

            connectedDevices.setModel(new DefaultComboBoxModel(devices.keySet().toArray()));
            disconnectPanel.add(connectedDevices);

        } else {
            JLabel jLabel = new JLabel("No device connected!");
            disconnectPanel.add(jLabel);
        }
        int result = JOptionPane.showConfirmDialog(router.panel, disconnectPanel, "Disconnect...",
                JOptionPane.OK_CANCEL_OPTION, JOptionPane.PLAIN_MESSAGE,
                new ImageIcon(getClass().getResource("/Img/Disconnect.png")));
        if (result == JOptionPane.OK_OPTION) {
            try {
                Device selectedDevice = devices.get((String) connectedDevices.getSelectedItem());
                router.disconnect(selectedDevice);

            } catch (Exception error) {
                System.out.println(error.getMessage());
                System.out.println("[System] No changes have been made!");
            }
        }
    }

    private void remove() {
        int result = JOptionPane.showConfirmDialog(router.panel, new JLabel("Are you sure to remove the device and its configuration?"), "Remove...",
                JOptionPane.OK_CANCEL_OPTION, JOptionPane.PLAIN_MESSAGE,
                new ImageIcon(getClass().getResource("/Img/Remove_Computer.png")));
        if (result == JOptionPane.OK_OPTION) {
            router.remove();
            System.out.println("[System] "+router.name +" removed!");
        }
    }

    private void route() {
        int result = JOptionPane.showConfirmDialog(router.panel, router.routingTable, "Routing Table",
                JOptionPane.OK_CANCEL_OPTION, JOptionPane.PLAIN_MESSAGE,
                null);
        if (result == JOptionPane.OK_OPTION) {
            try {
            } catch (Exception error) {
                System.out.println(error.getMessage());
                System.out.println("[System] No changes have been made!");
            }
        }
    }
}