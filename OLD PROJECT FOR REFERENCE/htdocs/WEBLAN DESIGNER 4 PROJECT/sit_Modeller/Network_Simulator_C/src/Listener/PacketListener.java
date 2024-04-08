package Listener;

import Components.Host;
import Components.Packet;
import UI.MainPanel;

import java.awt.event.*;
import javax.swing.JButton;

public class PacketListener extends MainMouseListener {

    private Packet packet;
   

    public PacketListener(MainPanel mainPanel, Packet packet) {
        super(mainPanel);
        this.packet = packet;
   
    }

    @Override
    public void mouseClicked(MouseEvent event) {
         if (super.getActive()) {
            if (event.getButton() == MouseEvent.BUTTON3&& event.getSource() instanceof JButton) {
                packet.popup.show(packet, event.getX(), event.getY());
            }
            
        }
    }

    @Override
    public void mouseEntered(MouseEvent event) {
        if (super.getActive()) {
            //packet.updateToolTip();
        }
    }
}