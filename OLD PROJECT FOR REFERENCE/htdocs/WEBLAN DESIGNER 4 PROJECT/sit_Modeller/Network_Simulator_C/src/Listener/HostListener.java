package Listener;

import Components.Host;
import UI.MainPanel;

import java.awt.event.*;
import javax.swing.JButton;

public class HostListener   extends MainMouseListener{

    private Host host;

public HostListener(MainPanel mainPanel,Host host) {
        super(mainPanel);
        this.host = host;
    }    

    @Override
    public void mouseClicked(MouseEvent event) {
         if (super.getActive()) {
            if (event.getButton() == MouseEvent.BUTTON3&& event.getSource() instanceof JButton) {
                host.popup.show(host, event.getX(), event.getY());
                if (host.swtch==null) {
                    host.popup.connectItem.setEnabled(true);
                    host.popup.disconnectItem.setEnabled(false);
                } else {
                    host.popup.connectItem.setEnabled(false);
                    host.popup.disconnectItem.setEnabled(true);
                }
            }
            if (event.getButton() == MouseEvent.BUTTON1) {
                host.panel.controlPanel.updateInfo(host);
                host.panel.controlPanel.updateRoute(host);
            }
        }
    }

    @Override
    public void mouseEntered(MouseEvent event) {
        if (super.getActive()) {
            host.updateToolTip();
        }
    }

     
    
}