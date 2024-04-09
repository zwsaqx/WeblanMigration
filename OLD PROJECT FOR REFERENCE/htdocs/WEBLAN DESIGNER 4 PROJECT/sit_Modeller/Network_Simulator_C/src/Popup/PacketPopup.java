/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Popup;

import Components.Packet;
import Listener.PacketListener;
import Model.IP;
import UI.MainPanel;
import java.awt.GridLayout;
import java.awt.event.*;
import javax.swing.*;
import javax.swing.border.BevelBorder;

/**
 *
 * @author Huy Truong
 */
public class PacketPopup extends JPopupMenu {

    private ActionListener menuListener;
    public PacketListener packetListener;
    private Packet packet;

    public PacketPopup(MainPanel panel) {
        super();
        this.packet = panel.packet;
        initiateMenu();
        packetListener = new PacketListener(packet.panel, packet);
        packet.addMouseListener(packetListener);
    }

    private void initiateMenu() {
        menuListener = new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent event) {
                switch (event.getActionCommand()) {
                    case "Send Packet":
                        packet.send();
                        break;
                    case "Set Source & Target":
                        setIPs();
                        break;

                    case "Remove":
                        remove();
                        break;
                }

            }
        };

        JMenuItem item;


        add(item = new JMenuItem("Send Packet"));
        item.setHorizontalTextPosition(JMenuItem.RIGHT);
        item.addActionListener(menuListener);

        addSeparator();

        add(item = new JMenuItem("Set Source & Target"));
        item.setHorizontalTextPosition(JMenuItem.RIGHT);
        item.addActionListener(menuListener);

        addSeparator();

        add(item = new JMenuItem("Remove"));
        item.setHorizontalTextPosition(JMenuItem.RIGHT);
        item.addActionListener(menuListener);

        setBorder(new BevelBorder(BevelBorder.RAISED));

    }

    private void setIPs() {

        final JTextField srcField = new JTextField();
        final JTextField dstField = new JTextField();
        final JTextField ttlField = new JTextField();


        if (packet.srcIP != null) {
            srcField.setText(packet.srcIP.toString());
        }

        if (packet.dstIP != null) {
            dstField.setText(packet.dstIP.toString());
        }

        ttlField.setText("10");

        JPanel setIPsPanel = new JPanel(new GridLayout(3, 2, 3, 3));

        setIPsPanel.add(new JLabel("Source IP:      "));

        setIPsPanel.add(srcField);

        setIPsPanel.add(new JLabel("Destination IP: "));

        setIPsPanel.add(dstField);

        setIPsPanel.add(new JLabel("Packet TTL:  "));
        
        setIPsPanel.add(ttlField);

        int result = JOptionPane.showConfirmDialog(packet.getParent(), setIPsPanel, "Set Src and Dst IP",
                JOptionPane.OK_CANCEL_OPTION, JOptionPane.PLAIN_MESSAGE,
                new ImageIcon(getClass().getResource("/Img/Edit IP.png")));
        if (result == JOptionPane.OK_OPTION) {

            try {
                if (!IP.isValidAddress(srcField.getText()) || !IP.isValidAddress(dstField.getText())) {
                    throw new Exception("[Warning] Error! Invalid IP!");
                }
                IP srcIP = new IP(srcField.getText());
                IP dstIP = new IP(dstField.getText());

                String[] octets1 = srcIP.getIPStr().split("\\.");
                String[] octets2 = dstIP.getIPStr().split("\\.");

                if ("0".equals(octets1[3]) || "255".equals(octets1[3]) || "0".equals(octets2[3]) || "255".equals(octets2[3])) {
                    throw new Exception("[Warning] Error! Only host addresses allowed!");
                }

                packet.srcIP = srcIP;
                packet.dstIP = dstIP;
                System.out.println("Packet source IP is: " + srcIP.toString());
                System.out.println("Packet destination IP is: " + dstIP.toString());

                int ttl = Integer.parseInt(ttlField.getText());

                if (ttl > 25) {
                    throw new Exception("[Warning] Error! TTL larger than 25!");
                }
                if (ttl <= 0) {
                    throw new Exception("[Warning] Error! TTL can not be negative!");
                }

                packet.TTL = ttl;
                System.out.println("Packet TTL is: " + packet.TTL);
                
            } catch (NumberFormatException error) {
                System.out.println("Invalid input!");
                System.out.println("[System] No changes have been made!");

            } catch (Exception error) {
                System.out.println(error.getMessage());
                System.out.println("[System] No changes have been made!");
            }


        }
    }

    private void remove() {
        int result = JOptionPane.showConfirmDialog(packet.panel, new JLabel("Are you sure to remove this packet?"), "Remove...",
                JOptionPane.OK_CANCEL_OPTION, JOptionPane.PLAIN_MESSAGE,
                new ImageIcon(getClass().getResource("/Img/Remove_Computer.png")));
        if (result == JOptionPane.OK_OPTION) {
            packet.panel.removePacket();
        }
    }
}