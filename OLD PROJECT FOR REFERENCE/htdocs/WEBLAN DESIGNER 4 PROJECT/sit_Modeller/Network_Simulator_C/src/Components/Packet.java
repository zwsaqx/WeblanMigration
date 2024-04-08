/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Components;

import Listener.PacketListener;
import Model.IP;
import Popup.PacketPopup;
import UI.MainPanel;
import java.awt.Point;
import java.util.*;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.*;

/**
 *
 * @author Huy Truong
 */
public class Packet extends JButton implements Runnable {

    public IP srcIP;
    public IP dstIP;
    public Router nextHop;
    public int TTL;
    public ArrayList<Device> path;
    public PacketPopup popup;
    public MainPanel panel;
    public boolean isRouting;
    public boolean isRunning;
    private ArrayList<Point> calculatedPath;
    public PacketListener listener;
    public Thread myThread;

    public Packet(Point pos, final MainPanel panel) {
        super();
        myThread = null;
        this.panel = panel;
        this.srcIP = null;
        this.dstIP = null;
        this.nextHop = null;
        this.TTL = 10;
        this.calculatedPath = new ArrayList<>();
        this.isRouting = false;
        this.path = new ArrayList<>();
        setBounds(pos.x, pos.y, 32, 22);
        setIcon(new ImageIcon(getClass().getResource("/Img/Envelop.png")));
        setOpaque(false);
        setContentAreaFilled(false);
        setBorderPainted(false);
        listener = new PacketListener(panel, this);
        this.addMouseMotionListener(listener);
        this.addMouseListener(listener);
        System.out.println("[System] New packet created @ x: " + pos.x + ", y: " + pos.y);
    }
    
    public void send() {
        try {
            if (srcIP == null || dstIP == null) {
                throw new Exception("[Packet] Packet is not ready yet!");
            }
            if (!panel.getExistingIP().contains(srcIP)) {
                throw new Exception("[Packet] "+srcIP.toString() + " does not exist in network!");
            }

            
            calculatedPath.clear();
            path.clear();
            isRouting = true;

            Device device = panel.getDeviceByIP(srcIP);
            System.out.println("[Packet] Packet starts from " + device.name);
            device.handlePacket(this);

            myThread = new Thread(this);
            myThread.start();

        } 
        catch (StackOverflowError error) {
            System.out.println("[Warning] Loop detected in the network! Please delete surplus connection!");
        }catch (Exception error) {
            System.out.println(error.getMessage());
        }

    }

    public void simulate(Device start, Device end) {

        int x1 = start.getCentralPoint().x;
        int y1 = start.getCentralPoint().y;
        int x2 = end.getCentralPoint().x;
        int y2 = end.getCentralPoint().y;

        if ((x2 - x1) != 0) {

            float ratio = ((float) (y2 - y1) / (float) (x2 - x1));

            int width = (x2 - x1);

            if (width > 0) {
                for (int i = 0; i < width; i++) {
                    int x = Math.round(x1 + i);
                    int y = Math.round(y1 + (ratio * i));
                    calculatedPath.add(new Point(x, y));
                }
            } else {
                for (int i = 0; i > width; i--) {
                    int x = Math.round(x1 + i);
                    int y = Math.round(y1 + (ratio * i));
                    calculatedPath.add(new Point(x, y));
                }
            }
        } else {
            if (y1 < y2) {
                while (y1 < y2) {
                    calculatedPath.add(new Point(x1, y1));
                    y1++;
                }
            } else {
                while (y1 > y2) {
                    calculatedPath.add(new Point(x1, y1));
                    y1--;
                }
            }

        }
    }

    @Override
    public void run() {
        isRunning = true;
        panel.deactivateListeners();
        for (Point point : calculatedPath) {
            if (!isRunning) {
                System.out.println("[Warning] Simulation stopped by user!");
                break;
            }
            if (!panel.controlPanel.getPauseStatus()) {
                Packet.this.setLocation(point);
                panel.repaint();
                try {
                    Thread.sleep(20L);
                } catch (InterruptedException ex) {
                    Logger.getLogger(Packet.class.getName()).log(Level.SEVERE, null, ex);
                }
            } else {
                System.out.println("[Warning] Simulation paused by user!");
                while (panel.controlPanel.getPauseStatus()) {
                    try {
                        Thread.sleep(100L);
                    } catch (InterruptedException ex) {
                        Logger.getLogger(Packet.class.getName()).log(Level.SEVERE, null, ex);
                    }
                }
                System.out.println("[Warning] Simulation resumed by user!");
            }
        }
        isRunning = false;
        panel.activateListeners();
    }

    
}
