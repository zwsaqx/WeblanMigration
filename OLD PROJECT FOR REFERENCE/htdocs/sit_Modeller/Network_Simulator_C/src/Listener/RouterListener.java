package Listener;

import Components.Host;
import Components.Router;
import UI.MainPanel;

import java.awt.event.*;
import javax.swing.JButton;

public class RouterListener extends MainMouseListener {

    private Router router;

    public RouterListener(MainPanel mainPanel, Router router) {
        super(mainPanel);
        this.router = router;
       
    }

  @Override
    public void mouseClicked(MouseEvent event) {
         if (super.getActive()) {
            if (event.getButton() == MouseEvent.BUTTON3&& event.getSource() instanceof JButton) {
                router.popup.show(router, event.getX(), event.getY());
            }
            if (event.getButton() == MouseEvent.BUTTON1) {
                router.panel.controlPanel.updateInfo(router);
                router.panel.controlPanel.updateRoute(router);
            }
        }
    }

    @Override
    public void mouseEntered(MouseEvent event) {
        if (super.getActive()) {
            router.updateToolTip();
        }
    }
}