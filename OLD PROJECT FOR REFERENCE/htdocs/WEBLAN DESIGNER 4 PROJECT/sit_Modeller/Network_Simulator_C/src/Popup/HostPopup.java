/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Popup;

import Components.Host;
import Components.Switch;
import Listener.HostListener;
import Model.IP;
import java.awt.GridLayout;
import java.awt.event.*;
import java.util.Hashtable;
import javax.swing.*;
import javax.swing.border.BevelBorder;

/**
 *
 * @author Huy Truong
 */
public class HostPopup extends JPopupMenu {

    public ActionListener menuListener;
    public Host host;
    public JMenuItem connectItem;
    public JMenuItem disconnectItem;
    public HostListener hostListener;

    public HostPopup(final Host host) {
        super();
        this.host = host;
        initiateMenu();

    }

    private void initiateMenu() {
        menuListener = new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent event) {

                switch (event.getActionCommand()) {
                    case "Set Name":
                        setName();
                        break;
                    case "Set IP":
                        setIP();
                        break;
                    case "Connect To...":
                        connect();
                        break;
                    case "Disconnect...":
                        disconnect();
                        break;
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


        add(item = new JMenuItem("Set IP"));
        item.setHorizontalTextPosition(JMenuItem.RIGHT);
        item.addActionListener(menuListener);


        addSeparator();

        connectItem = new JMenuItem("Connect To...");
        add(connectItem);
        connectItem.setHorizontalTextPosition(JMenuItem.RIGHT);
        connectItem.addActionListener(menuListener);

        disconnectItem = new JMenuItem("Disconnect...");
        add(disconnectItem);
        disconnectItem.setHorizontalTextPosition(JMenuItem.RIGHT);
        disconnectItem.addActionListener(menuListener);

        addSeparator();

        add(item = new JMenuItem("Remove"));
        item.setHorizontalTextPosition(JMenuItem.RIGHT);
        item.addActionListener(menuListener);

        setBorder(new BevelBorder(BevelBorder.RAISED));
        disconnectItem.setEnabled(false);

    }

    private void setName() {
        String s = (String) JOptionPane.showInputDialog(
                host.getParent(),
                "Enter new name: \n",
                "Set name: " + host.name,
                JOptionPane.PLAIN_MESSAGE,
                new ImageIcon(getClass().getResource("/Img/Edit Name.png")),
                null,
                host.name);
                System.out.println("[System] ["+host.name+"] is renamed to ["+s+"]");
                host.setName(s);
    }

    private void setIP() {
        String[] netmask = {"255.255.255.0"};
        final JComboBox subnet = new JComboBox(netmask);
        final JTextField ipField = new JTextField();
        final JTextField gatewayField = new JTextField();

        if (host.ip != null) {
            ipField.setText(host.ip.toString());
        }

        if (host.gateway != null) {
            gatewayField.setText(host.gateway.toString());
        }

        JPanel setIPPanel = new JPanel(new GridLayout(3, 2, 3, 3));

        setIPPanel.add(new JLabel("IP Address:     "));
        setIPPanel.add(ipField);
        setIPPanel.add(new JLabel("Default Gateway:"));
        setIPPanel.add(gatewayField);
        setIPPanel.add(new JLabel("Subnet Mask:   "));
        setIPPanel.add(subnet);

        int result = JOptionPane.showConfirmDialog(host.getParent(), setIPPanel, "Set IP: " + host.name,
                JOptionPane.OK_CANCEL_OPTION, JOptionPane.PLAIN_MESSAGE,
                new ImageIcon(getClass().getResource("/Img/Edit IP.png")));
        if (result == JOptionPane.OK_OPTION) {

            try {
                if (host.panel.isValidHostIP(ipField.getText())) {
                    IP newIP = new IP(ipField.getText());
                        host.ip = newIP;       
                    System.out.println("["+host.name+"] IP Address: "+newIP.toString());
                }

                if (!IP.isValidAddress(gatewayField.getText())) {
                    throw new Exception("[Warning] Error! Invalid IP!");
                }
                IP gateway = new IP(gatewayField.getText());
                String[] octets;

                octets = gateway.getIPStr().split("\\.");
                if ("0".equals(octets[3]) || "255".equals(octets[3])) {
                    throw new Exception("[Warning] Error! IP address is invalid! Only host addresses allowed!");
                }
                if (!gateway.sameNetwork(host.ip)) {
                    throw new Exception("[Warning] Error! Gateway must be in "+host.ip.getNetworkSub24().toString()+" network!");
                }
                host.gateway = gateway;
                System.out.println("["+host.name+"] Default Gateway: "+gateway.toString());


            } catch (Exception error) {
                System.out.println(error.getMessage());
                System.out.println("[System] No changes have been made!");
            }

        }
    }

    private void connect() {
        JPanel connectPanel = new JPanel(new GridLayout(1, 2));

        JLabel label = new JLabel("Switch: ");
        JComboBox switches = new JComboBox();
        Hashtable<String, Switch> availableSwitches = new Hashtable<>();
        availableSwitches.clear();

        connectPanel.add(label);
        for (Switch swtch : host.panel.switches) {
            availableSwitches.put(swtch.name, swtch);

        }
        if (!availableSwitches.isEmpty()) {
            switches.setModel(new DefaultComboBoxModel(availableSwitches.keySet().toArray()));
            connectPanel.add(switches);
        } else {
            JLabel jLabel = new JLabel("No available network!");
            connectPanel.add(jLabel);
        }

        int result = JOptionPane.showConfirmDialog(host.panel, connectPanel, "Connect To...",
                JOptionPane.OK_CANCEL_OPTION, JOptionPane.PLAIN_MESSAGE,
                new ImageIcon(getClass().getResource("/Img/Connect.png")));
        if (result == JOptionPane.OK_OPTION && switches.getSelectedItem() != null) {
            Switch swtch = availableSwitches.get((String) switches.getSelectedItem());
            swtch.connect(host);
            System.out.println("[System] Link between ["+host.name +"] and ["+host.swtch.name+"] established!");
        }

    }

    private void disconnect() {
        int result = JOptionPane.showConfirmDialog(host.panel, new JLabel("Are you sure to disconnect " + host.name + "?"), "Disconnect...",
                JOptionPane.OK_CANCEL_OPTION, JOptionPane.PLAIN_MESSAGE,
                new ImageIcon(getClass().getResource("/Img/Disconnect.png")));
        if (result == JOptionPane.OK_OPTION) {
            
            host.swtch.disconnect(host);             
        }

    }

    private void remove() {
        int result = JOptionPane.showConfirmDialog(host.panel, new JLabel("Are you sure to remove the device and its configuration?"), "Remove...",
                JOptionPane.OK_CANCEL_OPTION, JOptionPane.PLAIN_MESSAGE,
                new ImageIcon(getClass().getResource("/Img/Remove_Computer.png")));
        if (result == JOptionPane.OK_OPTION) {
            
            host.remove();
            System.out.println("[System] "+host.name +" removed!");
        }
    }
}