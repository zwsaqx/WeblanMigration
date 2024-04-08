/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package UI;


import javax.swing.*;

/**
 *
 * @author Huy Truong
 */
public class Main {

    private static GUI gui;

    /**
     * @param args the command line arguments
     */

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws Exception {

        try {
            UIManager.setLookAndFeel(
                    UIManager.getSystemLookAndFeelClassName());
            
        } catch (ClassNotFoundException | InstantiationException | IllegalAccessException | UnsupportedLookAndFeelException e) {
        }
        gui = new GUI();
        gui.setVisible(true);
        
    }

    public static void restart() {
        gui.dispose();
        gui = new GUI();
        gui.setVisible(true);
    }

    
}
