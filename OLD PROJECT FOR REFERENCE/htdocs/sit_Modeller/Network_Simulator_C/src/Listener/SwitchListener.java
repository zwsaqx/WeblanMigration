package Listener;

import Components.Switch;
import UI.MainPanel;

import java.awt.event.*;
import javax.swing.JButton;

public class SwitchListener extends MainMouseListener{

    private Switch network;
    

    public SwitchListener(MainPanel panel, Switch network) {
        super(panel);
        this.network = network;
        
    }

   
    @Override
    public void mouseClicked(MouseEvent event) {
         if (super.getActive()) {
            if (event.getButton() == MouseEvent.BUTTON3&& event.getSource() instanceof JButton) {
                network.popup.show(network, event.getX(), event.getY());
            }
            if (event.getButton() == MouseEvent.BUTTON1) {
                network.panel.controlPanel.updateInfo(network);
                network.panel.controlPanel.updateRoute(network);
            }
        }
    }

    @Override
    public void mouseEntered(MouseEvent event) {
        if (super.getActive()) {
            network.updateToolTip();
        }
    }
}