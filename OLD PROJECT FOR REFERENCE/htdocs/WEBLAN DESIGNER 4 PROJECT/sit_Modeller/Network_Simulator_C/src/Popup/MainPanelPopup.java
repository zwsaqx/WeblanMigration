package Popup;
import UI.MainPanel;
import java.awt.Point;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.MouseEvent;
import javax.swing.ImageIcon;
import javax.swing.JMenuItem;
import javax.swing.JPopupMenu;
import javax.swing.border.BevelBorder;

public class MainPanelPopup extends JPopupMenu {

        private MainPanel panel;
        private ActionListener menuListener;
        private Point position = new Point(0, 0);

        public MainPanelPopup(final MainPanel panel) {
            super();
            this.panel = panel;
            
            menuListener = new ActionListener() {
                @Override
                public void actionPerformed(ActionEvent event) {
                    try {
                        panel.addDevice(event.getActionCommand(), position);
                    } catch (Exception ex) {
                        System.out.println(ex.getMessage());
                        System.out.println("[Warning] Error! Adding device failed!");
                    }
                }
            };

            JMenuItem item;
            this.add(item = new JMenuItem("Host", new ImageIcon(getClass().getResource("/Img/Add_Computer.png"))));
            item.setHorizontalTextPosition(JMenuItem.RIGHT);
            item.addActionListener(menuListener);

            this.addSeparator();

            this.add(item = new JMenuItem("Router", new ImageIcon(getClass().getResource("/Img/Add_Router.png"))));
            item.setHorizontalTextPosition(JMenuItem.RIGHT);
            item.addActionListener(menuListener);

            this.addSeparator();

            this.add(item = new JMenuItem("Switch", new ImageIcon(getClass().getResource("/Img/Add_Switch.png"))));
            item.setHorizontalTextPosition(JMenuItem.RIGHT);
            item.addActionListener(menuListener);
            
             this.addSeparator();

            this.add(item = new JMenuItem("Packet", new ImageIcon(getClass().getResource("/Img/Add_Packet.png"))));
            item.setHorizontalTextPosition(JMenuItem.RIGHT);
            item.addActionListener(menuListener);

            this.setBorder(new BevelBorder(BevelBorder.RAISED));
           
        }

        public void show(MouseEvent e) {
            position = e.getPoint();
            this.show(panel, e.getX(), e.getY());
        }
    }