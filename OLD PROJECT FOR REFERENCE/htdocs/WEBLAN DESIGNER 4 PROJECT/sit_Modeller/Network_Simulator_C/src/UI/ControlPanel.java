/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package UI;

import Components.*;
import java.io.IOException;
import java.io.OutputStream;
import java.io.PrintStream;
import javax.swing.*;

/**
 *
 * @author Huy Truong
 */
public class ControlPanel extends JPanel {

    public MainPanel mainPanel;

    /**
     * Creates new form ControlPanel
     */
    public ControlPanel() {
        initComponents();
        redirectSystemStreams();

    }

    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        consolePanel = new javax.swing.JPanel();
        consolePane = new javax.swing.JScrollPane();
        console = new javax.swing.JTextArea();
        infoPanel = new javax.swing.JPanel();
        jLabel1 = new javax.swing.JLabel();
        jLabel2 = new javax.swing.JLabel();
        infoType = new javax.swing.JLabel();
        infoName = new javax.swing.JLabel();
        info3 = new javax.swing.JLabel();
        info4 = new javax.swing.JLabel();
        jTitle3 = new javax.swing.JLabel();
        jTitle4 = new javax.swing.JLabel();
        routePanel = new javax.swing.JPanel();
        jScrollPane1 = new javax.swing.JScrollPane();
        routeLabel = new javax.swing.JLabel();
        stopButton = new javax.swing.JButton();
        restartButton = new javax.swing.JButton();
        pauseButton = new javax.swing.JToggleButton();

        setBorder(javax.swing.BorderFactory.createEtchedBorder());
        setMaximumSize(new java.awt.Dimension(900, 150));
        setMinimumSize(new java.awt.Dimension(900, 150));

        consolePanel.setBorder(javax.swing.BorderFactory.createTitledBorder("Console"));

        console.setEditable(false);
        console.setBackground(new java.awt.Color(51, 51, 255));
        console.setColumns(20);
        console.setFont(new java.awt.Font("Arial", 1, 11)); // NOI18N
        console.setForeground(new java.awt.Color(255, 255, 255));
        console.setRows(5);
        consolePane.setViewportView(console);

        javax.swing.GroupLayout consolePanelLayout = new javax.swing.GroupLayout(consolePanel);
        consolePanel.setLayout(consolePanelLayout);
        consolePanelLayout.setHorizontalGroup(
            consolePanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(consolePane, javax.swing.GroupLayout.DEFAULT_SIZE, 417, Short.MAX_VALUE)
        );
        consolePanelLayout.setVerticalGroup(
            consolePanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(consolePane, javax.swing.GroupLayout.DEFAULT_SIZE, 123, Short.MAX_VALUE)
        );

        infoPanel.setBorder(javax.swing.BorderFactory.createTitledBorder("Device Info"));

        jLabel1.setText("Device Type:");

        jLabel2.setText("Name:");

        infoType.setText(" ");

        infoName.setText(" ");

        info3.setText(" ");

        info4.setText(" ");

        javax.swing.GroupLayout infoPanelLayout = new javax.swing.GroupLayout(infoPanel);
        infoPanel.setLayout(infoPanelLayout);
        infoPanelLayout.setHorizontalGroup(
            infoPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(infoPanelLayout.createSequentialGroup()
                .addContainerGap()
                .addGroup(infoPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jLabel1, javax.swing.GroupLayout.DEFAULT_SIZE, 95, Short.MAX_VALUE)
                    .addComponent(jLabel2, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(jTitle3, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(jTitle4, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(infoPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING, false)
                    .addComponent(info3, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(info4, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(infoName, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(infoType, javax.swing.GroupLayout.PREFERRED_SIZE, 100, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addContainerGap())
        );
        infoPanelLayout.setVerticalGroup(
            infoPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(infoPanelLayout.createSequentialGroup()
                .addContainerGap()
                .addGroup(infoPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addGroup(infoPanelLayout.createSequentialGroup()
                        .addComponent(infoType)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(infoName)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(info3))
                    .addGroup(infoPanelLayout.createSequentialGroup()
                        .addComponent(jLabel1)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(jLabel2)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(jTitle3, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(infoPanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(info4)
                    .addComponent(jTitle4, javax.swing.GroupLayout.PREFERRED_SIZE, 14, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addContainerGap(38, Short.MAX_VALUE))
        );

        routePanel.setBorder(javax.swing.BorderFactory.createTitledBorder("Routes"));

        jScrollPane1.setViewportView(routeLabel);

        stopButton.setText("Stop");
        stopButton.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                stopButtonMouseClicked(evt);
            }
        });

        restartButton.setText("Restart");
        restartButton.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                restartButtonMouseClicked(evt);
            }
        });

        pauseButton.setText("Pause");
        pauseButton.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                pauseButtonMouseClicked(evt);
            }
        });

        javax.swing.GroupLayout routePanelLayout = new javax.swing.GroupLayout(routePanel);
        routePanel.setLayout(routePanelLayout);
        routePanelLayout.setHorizontalGroup(
            routePanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(routePanelLayout.createSequentialGroup()
                .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 204, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(routePanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                    .addComponent(stopButton, javax.swing.GroupLayout.Alignment.LEADING, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(pauseButton, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(restartButton, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                .addGap(2, 2, 2))
        );
        routePanelLayout.setVerticalGroup(
            routePanelLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jScrollPane1, javax.swing.GroupLayout.DEFAULT_SIZE, 123, Short.MAX_VALUE)
            .addGroup(routePanelLayout.createSequentialGroup()
                .addComponent(pauseButton)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(stopButton)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addComponent(restartButton))
        );

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(this);
        this.setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addComponent(consolePanel, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(infoPanel, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(routePanel, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(consolePanel, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
            .addComponent(infoPanel, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
            .addComponent(routePanel, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
        );
    }// </editor-fold>//GEN-END:initComponents

    private void pauseButtonMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_pauseButtonMouseClicked
        if (pauseButton.isSelected()) {
            pauseButton.setText("Resume");
        } else {
            pauseButton.setText("Pause");
        }
    }//GEN-LAST:event_pauseButtonMouseClicked

    private void restartButtonMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_restartButtonMouseClicked
        Main.restart();
    }//GEN-LAST:event_restartButtonMouseClicked

    private void stopButtonMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_stopButtonMouseClicked
        if (mainPanel.packet != null) {
            pauseButton.setSelected(false);
            pauseButton.setText("Pause");
            mainPanel.packet.isRunning = false;
        }
    }//GEN-LAST:event_stopButtonMouseClicked

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JTextArea console;
    private javax.swing.JScrollPane consolePane;
    private javax.swing.JPanel consolePanel;
    private javax.swing.JLabel info3;
    private javax.swing.JLabel info4;
    private javax.swing.JLabel infoName;
    private javax.swing.JPanel infoPanel;
    private javax.swing.JLabel infoType;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JLabel jTitle3;
    private javax.swing.JLabel jTitle4;
    private javax.swing.JToggleButton pauseButton;
    private javax.swing.JButton restartButton;
    private javax.swing.JLabel routeLabel;
    private javax.swing.JPanel routePanel;
    private javax.swing.JButton stopButton;
    // End of variables declaration//GEN-END:variables

    private void updateTextArea(final String text) {
        SwingUtilities.invokeLater(new Runnable() {
            @Override
            public void run() {
                console.append(text);
            }
        });
    }

    private void redirectSystemStreams() {
        OutputStream out = new OutputStream() {
            @Override
            public void write(int b) throws IOException {
                updateTextArea(String.valueOf((char) b));
            }

            @Override
            public void write(byte[] b, int off, int len) throws IOException {
                updateTextArea(new String(b, off, len));
            }

            @Override
            public void write(byte[] b) throws IOException {
                write(b, 0, b.length);
            }
        };

        System.setOut(new PrintStream(out, true));
        System.setErr(new PrintStream(out, true));
    }

    void setMainPanel(MainPanel mainPanel) {
        this.mainPanel = mainPanel;
    }

    public void updateInfo(Device device) {
        jLabel1.setText("Device Type:");
        jLabel2.setText("Name:");

        if (device instanceof Host) {
            jTitle3.setText("IP Address:");
            jTitle4.setText("Default Gateway:");

            Host host = (Host) device;

            infoType.setText("Host");
            infoName.setText(host.name);
            if (host.ip != null) {
                info3.setText(host.ip.toString() + "/24");
            } else {
                info3.setText("Not Assigned");
            }

            if (host.gateway != null) {
                info4.setText(host.gateway.toString() + "/24");
            } else {
                info4.setText("Not Assigned");
            }


        } else if (device instanceof Switch) {
            jTitle3.setText("Connected device: ");
            jTitle4.setText("");
            info4.setText("");
            Switch swtch = (Switch) device;
            infoType.setText("Switch");
            infoName.setText(swtch.name);
            info3.setText(swtch.routes.size() + " Device(s)");
        } else if (device instanceof Router) {
            jTitle3.setText("Connected device: ");
            jTitle4.setText("Routing table:");

            Router router = (Router) device;
            infoType.setText("Router");
            infoName.setText(router.name);
            info3.setText((router.connectedRouters.size() + router.connectedSwitches.size()) + " Device(s)");
            info4.setText(router.routingTable.routes.size() + " Route(s)");

        }
    }

    public void updateRoute(Device device) {
        routeLabel.setText("");
        routeLabel.setVerticalAlignment(JLabel.TOP);
        routeLabel.setVerticalTextPosition(JLabel.TOP);
        if (device instanceof Host) {
            String text = "";
            text += "<html><table border=1 width=\"180\">";
            text += "<tr><td>IP Address</td><td>Device Name</td>";

            Host host = (Host) device;
            boolean isEmpty = true;
            if (host.ip != null && host.swtch != null && host.swtch.routes.size() >= 2) {
                for (Route route : host.swtch.routes) {
                    if (route.destination.sameNetwork(host.ip)) {
                        Device d = route.getNextHop();
                        if (d!=host) {
                            text += "<tr><td>" + route.destination.toString() + "</td><td>" + d.name + "   </td>";
                            isEmpty = false;
                        }
                    }
                }

            }
            if (isEmpty) {
                text += "<tr><td>(Empty)</td><td>(Empty)</td>";
            }
            routeLabel.setText(text);

        } else if (device instanceof Switch) {
            String text = "";
            text += "<html><table border=1 width=\"180\">";
            text += "<tr><td>MAC Address</td><td>Device Name</td>";
            Switch swtch = (Switch) device;
            
               if (!swtch.connectedDevices.isEmpty()) {
                for (Route route: swtch.routes) {
                    Device d = (Device) route.getNextHop();
                    text += "<tr><td>   N/a </td><td>" + d.name + "</td>";
                }
                routeLabel.setText(text);
            }
             else {
                text += "<tr><td>(Empty)</td><td>(Empty)</td>";
                routeLabel.setText(text);
            }

        } else if (device instanceof Router) {
            String text = "";
            text += "<html><table border=1 width=\"180\">";
            text += "<tr><td>Network</td><td>Next Hop</td><td>Hops</td>";

            Router router = (Router) device;
            if (!router.routingTable.routes.isEmpty()) {
                for (Route route: router.routingTable.routes) {
                    text += "<tr><td>" + route.destination.toString() + "</td><td>" + route.getNextHop().name + "</td><td>" + route.getHop() + "</td>";
                }
                routeLabel.setText(text);
            } else {
                text += "<tr><td>(Empty)</td><td>(Empty)</td><td>(Empty)</td>";
                routeLabel.setText(text);
            }
        }
    }

    public boolean getPauseStatus() {
        return pauseButton.isSelected();
    }
}
