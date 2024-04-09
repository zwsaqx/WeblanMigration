package Model;

import java.util.StringTokenizer;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class IP {
    
    public static final int CLASS_A = 8;
    public static final int CLASS_B = 16;
    public static final int CLASS_C = 24;
    public static final int CLASS_D = 32;
    private static Pattern pattern = Pattern.compile("(\\d{1,3}+\\.){3}+\\d{1,3}+");
    private long ip;

    public static boolean isValidAddress(String ip) {
        if (pattern.matcher(ip).matches()) {
            StringTokenizer st = new StringTokenizer(ip, ".");
            while (st.hasMoreTokens()) {
                try {
                    int val = Integer.parseInt(st.nextToken());
                    if ((val > 255) || (val < 0)) {
                        return false;
                    }
                } catch (Throwable e) {
                    return false;
                }
            }
            return true;
        }
        return false;
    }

    public IP(long val) {
        this.ip = val;
    }

    public IP(String val) throws Exception {
        String[] str = new String[4];
        StringTokenizer tokens = new StringTokenizer(val, ".");
        str[3] = tokens.nextToken();
        str[2] = tokens.nextToken();
        str[1] = tokens.nextToken();
        str[0] = tokens.nextToken();

        setIP(Integer.parseInt(str[3]),
                Integer.parseInt(str[2]),
                Integer.parseInt(str[1]),
                Integer.parseInt(str[0]));
    }

    public void setIP(Integer i1, Integer i2, Integer i3, Integer i4) {
        setIP(i1.intValue(), i2.intValue(), i3.intValue(), i4.intValue());
    }

    public void setIP(long i1, long i2, long i3, long i4) {
        this.ip = (i1 << 24 | i2 << 16 | i3 << 8 | i4);
    }

    public void setIP(long newIP) {
        this.ip = newIP;
    }

    public long getIPLong() {
        return this.ip;
    }

    public long getIPByte(int b) {
        return this.ip >> b * 8 & 0xFF;
    }

    public Integer getIPByteInt(int b) {
        return new Integer((int) (this.ip >> b * 8 & 0xFF));
    }

    public String getIPByteStr(int b) {
        return String.valueOf(this.ip >> b * 8 & 0xFF);
    }

    public String getIPStr() {
        StringBuffer sb = new StringBuffer(20);
        for (int i = 3; i >= 0; i--) {
            sb.append(getIPByte(i));
            if (i != 0) {
                sb.append('.');
            }
        }
        return sb.toString();
    }

    public int getIPClass() {
        return getIPClass(this.ip);
    }

    private static final int getIPClass(long ip) {
        long reg = 0L;

        reg = 14L;
        if ((ip & reg << 28) == reg << 28) {
            return 32;
        }

        reg = 6L;
        if ((ip & reg << 29) == reg << 29) {
            return 24;
        }

        reg = 2L;
        if ((ip & reg << 30) == reg << 30) {
            return 16;
        }

        reg = 1L;
        if ((ip & reg << 31) == 0L) {
            return 8;
        }

        return -1;
    }

    public IP getNetworkIPByClass() {
        long reg = 0L;

        reg = 14L;
        if ((this.ip & reg << 28) == reg << 28) {
            return new IP(this.ip);
        }

        reg = 6L;
        if ((this.ip & reg << 29) == reg << 29) {
            return new IP(this.ip & 0xFFFFFF00);
        }

        reg = 2L;
        if ((this.ip & reg << 30) == reg << 30) {
            return new IP(this.ip & 0xFFFF0000);
        }

        reg = 1L;
        if ((this.ip & reg << 31) == reg << 31) {
            return new IP(this.ip & 0xFF000000);
        }

        return null;
    }

    public IP getNetworkIPByCIDR(int cidr) {
        long reg = -1L;
        return new IP(this.ip & reg >>> 32 - cidr << 32 - cidr);
    }

    public boolean isLegalHostWithCIDR(IP ip, int _cidr) {
        long reg = -1L;
        reg = reg >>> 32 - _cidr << 32 - _cidr;
        return (ip.getIPLong() & reg) == (this.ip & reg);
    }

    public boolean isLegalHostWithClasses(long _ip) {
        long mask = 32L;
        switch (getIPClass(_ip)) {
            case 8:
                mask = 8L;
                break;
            case 16:
                mask = 16L;
                break;
            case 24:
                mask = 24L;
                break;
            case 32:
                mask = 32L;
        }

        long reg = -1L;
        return (_ip & reg >>> (int) (32L - mask) << (int) (32L - mask)) == this.ip;
    }

    public String toString() {
        return getIPStr();
    }

    public boolean equals(Object obj) {
        if ((obj instanceof IP)) {
            return ((IP) obj).getIPLong() == this.ip;
        }
        if ((obj instanceof String)) {
            return obj.equals(toString());
        }
        return false;
    }

    private int getLastBitAppearanceOnByte(int i) {

        long l = getIPByte(i);
        int bit;
        if (l == 0L) {
            return 0;
        }

        for (bit = 8; bit > 0; bit--) {
            long mod = l % 2L;
            l /= 2L;

            if (mod == 1L) {
                break;
            }
        }
        return bit;
    }

    public int getMinimalMask() {
        int mask = 0;

        int mask3 = getLastBitAppearanceOnByte(3);
        int mask2 = getLastBitAppearanceOnByte(2);
        int mask1 = getLastBitAppearanceOnByte(1);
        int mask0 = getLastBitAppearanceOnByte(0);

        boolean b3 = mask3 == 0;
        boolean b2 = mask2 == 0;
        boolean b1 = mask1 == 0;
        boolean b0 = mask0 == 0;

        if ((b3) && (b2) && (b1) && (b0)) {
            return 0;
        }

        if ((b3) && (b2) && (b1) && (!b0)) {
            return 24 + mask0;
        }

        if ((b3) && (b2) && (!b1) && (b0)) {
            return 16 + mask1;
        }

        if ((b3) && (b2) && (!b1) && (!b0)) {
            return 24 + mask0;
        }

        if ((b3) && (!b2) && (b1) && (b0)) {
            return 8 + mask2;
        }

        if ((b3) && (!b2) && (b1) && (!b0)) {
            return 24 + mask0;
        }

        if ((b3) && (!b2) && (!b1) && (b0)) {
            return 16 + mask1;
        }

        if ((b3) && (!b2) && (!b1) && (!b0)) {
            return 24 + mask0;
        }

        if ((!b3) && (b2) && (b1) && (b0)) {
            return mask3;
        }

        if ((!b3) && (b2) && (b1) && (!b0)) {
            return 24 + mask0;
        }

        if ((!b3) && (b2) && (!b1) && (b0)) {
            return 16 + mask1;
        }

        if ((!b3) && (b2) && (!b1) && (!b0)) {
            return 24 + mask0;
        }

        if ((!b3) && (!b2) && (b1) && (b0)) {
            return 8 + mask2;
        }

        if ((!b3) && (!b2) && (b1) && (!b0)) {
            return 24 + mask0;
        }

        if ((!b3) && (!b2) && (!b1) && (b0)) {
            return 16 + mask1;
        }

        if ((!b3) && (!b2) && (!b1) && (!b0)) {
            return 24 + mask0;
        }

        return mask;
    }

    private String getBinStrByte(int i) {
        long l = getIPByte(i);
        long[] ip = new long[9];
        int numOfZeros;

        if (l == 0L) {
            return "00000000";
        }

        for (numOfZeros = 8; numOfZeros > 0; numOfZeros--) {
            ip[numOfZeros] = (l % 2L);
            l /= 2L;

            if (l == 0L) {
                break;
            }
        }
        numOfZeros--;

        String s = "";
        for (int j = 1; j <= numOfZeros; j++) {
            s = s + "0";
        }

        for (int j = numOfZeros + 1; j <= 8; j++) {
            s = s + ip[j];
        }

        return s;
    }

    public String getBinStrIP() {
        return getBinStrByte(3) + "."
                + getBinStrByte(2) + "."
                + getBinStrByte(1) + "."
                + getBinStrByte(0);
    }

    public boolean sameNetwork(IP ip) {
        IP ip1 = this.getNetworkSub24();
        IP ip2 = ip.getNetworkSub24();
        if (ip1.getIPLong()==ip2.getIPLong()) {
            return true;
        }
        return false;
    }
    
    public IP getNetworkSub24() {
        return getNetworkIPByCIDR(24);
    }
}