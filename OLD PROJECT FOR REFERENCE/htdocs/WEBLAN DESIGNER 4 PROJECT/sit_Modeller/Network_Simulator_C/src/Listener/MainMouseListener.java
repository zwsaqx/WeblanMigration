package Listener;

import UI.MainPanel;
import java.awt.Point;
import java.awt.event.MouseEvent;
import java.awt.event.MouseListener;
import java.awt.event.MouseMotionListener;
import javax.swing.JButton;
import javax.swing.SwingUtilities;

public class MainMouseListener
        implements MouseListener, MouseMotionListener{

    Point mouseLocation = new Point(0, 0);
    MainPanel panel;
    JButton draggedButton = null;
    private boolean active;

    public MainMouseListener(MainPanel panel) {
        this.panel = panel;
        this.active = true;
    }

    
    @Override
    public void mouseClicked(MouseEvent event) {
        if (active && event.getSource() instanceof MainPanel) {
            if (event.getButton() == MouseEvent.BUTTON3) {
                panel.popup.show(event);
            }
        }
    }

    @Override
    public void mouseEntered(MouseEvent event) {
    }

    @Override
    public void mouseExited(MouseEvent event) {
    }

    @Override
    public void mousePressed(MouseEvent event) {
        if (active) {
            if (event.getSource() instanceof JButton) {
                this.draggedButton = (JButton) event.getSource();
                mouseLocation = SwingUtilities.convertPoint(event.getComponent(), event.getPoint(), panel);
            }
        }
    }

    @Override
    public void mouseReleased(MouseEvent event) {
        if (active) {
            if (event.getSource() != panel && draggedButton != null) {
                if (draggedButton.getLocation().x >= 860 || draggedButton.getLocation().x <= -20
                        || draggedButton.getLocation().y >= 460 || draggedButton.getLocation().y <= -20) {
                    draggedButton.setLocation(370, 250);
                }

                this.draggedButton = null;
            }
        }
    }

    @Override
    public void mouseDragged(MouseEvent event) {
        if (active) {
            if (event.getSource() != panel && draggedButton != null) {
                Point newLoc = SwingUtilities.convertPoint(event.getComponent(), event.getPoint(), panel);

                int deltaX = newLoc.x - mouseLocation.x;
                int deltaY = newLoc.y - mouseLocation.y;

                int x = draggedButton.getX() + deltaX;
                int y = draggedButton.getY() + deltaY;

                draggedButton.setLocation(x, y);

                this.mouseLocation = newLoc;

                panel.paintComponents(panel.getGraphics());
            }
        }
    }

    @Override
    public void mouseMoved(MouseEvent e) {
       
    }
    
    public boolean getActive() {
        return active;
    }

   
    public void setActive(boolean active) {
        this. active = active;
                
    }
}