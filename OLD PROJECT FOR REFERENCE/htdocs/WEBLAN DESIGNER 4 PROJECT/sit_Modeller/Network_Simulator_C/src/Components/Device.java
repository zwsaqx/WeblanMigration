/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Components;

import UI.MainPanel;
import java.awt.Point;
import javax.swing.ImageIcon;
import javax.swing.JButton;

/**
 *
 * @author Huy Truong
 */
public abstract class Device extends JButton {

    public String name;
    public MainPanel panel;
    public ImageIcon icon;

    public Device(String name, String iconPath, MainPanel panel, Point pos) {
        super();
        this.name = name;
        this.panel = panel;
        this.icon = new ImageIcon(getClass().getResource(iconPath));
        setBounds(pos.x, pos.y, icon.getIconWidth(), icon.getIconHeight());
        setIcon(icon);
        setOpaque(false);
        setContentAreaFilled(false);
        setBorderPainted(false);
    }

    public Point getImagePoint() {
        return new Point(this.getLocation().x + icon.getIconWidth() / 2, this.getLocation().y + icon.getIconHeight() / 2);
    }

    public void setName(String s) {
        try {
            if (s == null || s.isEmpty()) {
                throw new Exception("[Warning] Error! Name is empty!");
            }
            if (panel.getExistingName().contains(s)) {
                throw new Exception("[Warning] Error! Name has already been used or reserved!");
            }
            this.name = s;
        } catch (Exception error) {
            System.out.println(error.getMessage());
            System.out.println("[System] No changes have been made!");
        }
    }

    

    public abstract Point getCentralPoint();

    public abstract void updateToolTip();

    public abstract void handlePacket(Packet packet);

    public abstract void remove();
}
