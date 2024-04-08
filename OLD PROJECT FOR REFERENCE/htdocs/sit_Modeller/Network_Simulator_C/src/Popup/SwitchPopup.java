/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Popup;

import Components.*;
import Listener.SwitchListener;
import java.awt.event.*;
import javax.swing.*;
import javax.swing.border.BevelBorder;

/**
 *
 * @author Huy Truong
 */
public class SwitchPopup extends JPopupMenu {

    private ActionListener menuListener;
    private Switch swtch;
    public SwitchListener networkListener;

    public SwitchPopup( Switch swtch) {
        super();
        this.swtch = swtch;
        initiateMenu();
         
    }

    private void initiateMenu() {
        menuListener = new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent event) {
                switch (event.getActionCommand()) {
                    case "Set Name":
                        setName();
                        break;
                       
                    case "Remove":
                        remove();
                        break;
                }
            }
        };

        JMenuItem item;
        add(item = new JMenuItem("Set Name"));
        item.setHorizontalTextPosition(JMenuItem.RIGHT);
        item.addActionListener(menuListener);

        addSeparator();

        add(item = new JMenuItem("Remove"));
        item.setHorizontalTextPosition(JMenuItem.RIGHT);
        item.addActionListener(menuListener);

        setBorder(new BevelBorder(BevelBorder.RAISED));

    }

    private void setName() {

        String oldName = swtch.name;
        String s = (String) JOptionPane.showInputDialog(
                swtch.getParent(),
                "Enter new name: \n",
                "Set name: " + swtch.name,
                JOptionPane.PLAIN_MESSAGE,
                new ImageIcon(getClass().getResource("/Img/Edit Name.png")),
                null,
                oldName);
        try {
                if (s==null||s.isEmpty()) {
                    throw new Exception("[Warning] Error! Name is empty!");
                }
                if (swtch.panel.getExistingName().contains(s)) {
                    throw new Exception("[Warning] Error! Name has already been used or reserved!");
                }
               
                swtch.setName(s);
                System.out.println("[System] ["+swtch.name+"] is renamed to " + s);
            } catch (Exception error) {
                System.out.println(error.getMessage());
                System.out.println("[System] No changes have been made!");
            }

    }

    private void remove() {
        int result = JOptionPane.showConfirmDialog(swtch.panel, new JLabel("Are you sure to remove " + swtch.name + " and its configuration?"), "Remove...",
                JOptionPane.OK_CANCEL_OPTION, JOptionPane.PLAIN_MESSAGE,
                new ImageIcon(getClass().getResource("/Img/Remove_Computer.png")));
        if (result == JOptionPane.OK_OPTION) {
          swtch.remove();
        }
    }
}