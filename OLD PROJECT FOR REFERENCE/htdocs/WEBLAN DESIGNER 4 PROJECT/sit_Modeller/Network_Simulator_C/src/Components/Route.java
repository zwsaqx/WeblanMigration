/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Components;

import Model.IP;
import java.util.Timer;
import java.util.TimerTask;

/**
 *
 * @author BiHeo
 */
public class Route {

    public IP destination;
    private Device nextHop;
    private int hops;
//    private int counter;
//    private Timer timer;
    

    public Route(IP dst, Device nextHop, int hops) {
        this.destination = dst;
        this.nextHop = nextHop;
        this.hops = hops;
//        this.counter = 20;
//        this.timer = new Timer();
//        initTimers();
    }

//     public void initTimers() {
//        timer.schedule(new TimerTask() {
//            @Override
//            public void run() {
//                counter--;
//                if (counter <=0) {
//                    hops = 16;
//                    timer.cancel();
//                    System.out.println("[System] Route to network " + destination.toString() + " expired by timer");
//                }
//            }
//        }, 0, 1000);
//        
//    }
    
    public boolean isDefaultRoute() {
        if (destination.sameNetwork(new IP(0L))) {
            return true;
        }
        return false;
    }

    public boolean isLocalRoute() {
        if (hops == 0) {
            return true;
        }
        return false;
    }

    public IP getNetwork() {
        return destination.getNetworkSub24();
    }

    public void setNextHop(Device device) {
        this.nextHop = device;
    }

    public Device getNextHop() {
        return this.nextHop;
    }

    public void setHop(int i) {
        if (hops<16) {
            this.hops = i;
        }
    }

    public int getHop() {
        return this.hops;
    }

    public IP getDestination (){
        return this.destination;
    }
}
