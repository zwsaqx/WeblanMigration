<!DOCTYPE html>
@auth
    <html lang="en">
    @include('partials.header')

    <body class="body">
        <div class='loggedInBody'>
            <div align="center" class="darkBlueTextJumbo">Wired LAN Review Questions</div>
            <p><span class="darkBlueText">Question 1:</span> What is the main purpose of a server in a client-server network?
            </p>
            <p><span class="redText">Answer: </span>A server is a dedicated computer on a network which makes the network
                resources (e.g., network disk space) available to client computers. The functions of a server may include:
                sharing printers, and redirecting print jobs.</p>
            <br />
            <p><span class="darkBlueText">Question 2:</span> What are the resources that can be shared in a network? </p>
            <p><span class="redText">Answer:</span> Files, folders, printers, CD-ROM towers, scanners, modem pools, routers,
                gateways.</p>
            <br />
            <p><span class="darkBlueText">Question 3:</span> How does the MAC address help determine whether the packet being
                delivered across an Ethernet wire is for the computer that possesses the physical address in the packet?
            </p>
            <p><span class="redText">Answer:</span> The packet (more specifically the 'frame') contains the MAC address of
                the source and the destination computers and a CRC code. All other computers connected to the cable listen
                to see if the frame is meant for them (i.e. whether the frame containing their unique MAC address). If the
                computer finds a frame with its MAC address, it opens the frame and processes the data.</p>
            <br />
            <p><span class="darkBlueText">Question 4:</span> What layer of the OSI model is concerned with turning binary
                code into a physical signal? </p>
            <p><span class="redText">Answer:</span> The physical layer.</p>
            <br />
            <p><span class="darkBlueText">Question 5:</span> What is the purpose of data encryption when sending data across
                the Internet? </p>
            <p><span class="redText">Answer: </span>Encryption &quot;scrambles&quot; data into cipher text, thus preventing
                unauthorised viewing by hackers when send across the Internet. Data can be decrypted at the destination
                through the use of a secret key or a password.</p>
            <br />
            <p><span class="darkBlueText">Question 6:</span> Which physical device creates and destroys data frames on a
                network? </p>
            <p><span class="redText">Answer:</span> The network interface card (NIC).</p>
            <br />
            <p><span class="darkBlueText">Question 7:</span> At which layer of the OSI model would the FTP protocol operate?
            </p>
            <p><span class="redText">Answer: </span>The application layer.</p>
            <br />
            <p><span class="darkBlueText">Question 8: </span>Which layer is of the OSI model is responsible for breaking
                application data up and putting them back together? </p>
            <p><span class="redText">Answer: </span>The transport layer.</p>
            <br />
            <p><span class="darkBlueText">Question 9: </span>What does PCM stand for and where is it commonly used? </p>
            <p><span class="redText">Answer: </span>PCM stands for Pulse Code Modulation. PCM is used to digitise analog
                data by using sampling techniques.</p>
            <br />
            <p><span class="darkBlueText">Question 10:</span> What are the advantages of using multiplexing? </p>
            <p><span class="redText">Answer: </span>Multiplexing is used to reduce the cost associated with sending multiple
                signals over the same physical path.</p>
            <br />
            <p><span class="darkBlueText">Question 11: </span>Describe statistical TDM. </p>
            <p><span class="redText">Answer: </span>Statistical TDM allocates bandwidth for each device on demand. It is a
                very cost effective way for multiple systems to share the same transmission medium. Most computer networks
                use some form of statistical multiplexing because the devices on the network do not need to transmit data
                all the time.</p>
            <br />
            <p><span class="darkBlueText">Question 12: </span>Why do digital signals attenuate sooner than analog signals?
            </p>
            <p><span class="redText">Answer: </span>As digital signals travel farther and farther down the line, the
                crispness of the wave is not as distinct as the initial signal. The wave shapes begin to become more
                rounded, and it becomes more difficult for the receiver to differentiate between high and low values when
                the edges are smoothed instead of being square.</p>
            <br />
            <p><span class="darkBlueText">Question 13:</span> Describe the role of encoding. </p>
            <p><span class="redText">Answer: </span>The role of encoding is to define the properties of the signal to
                represent data.</p>
            <br />
            <p><span class="darkBlueText">Question 14:</span> List the components required to connect three PCs using an
                Ethernet Hub </p>
            <p><span class="redText">Answer: </span>Components: three PCs, three NICs, three CAT5 cables with RJ-45
                connectors on each end, one Ethernet Hub.</p>
            <br />
            <p><span class="darkBlueText">Question 15: </span>What is WDM? </p>
            <p><span class="redText">Answer:</span> WDM stands for Wavelength Division Multiplexing. It is a multiplexing
                technique in which the full capacity of an optical fibre cable is divided into smaller channels; each
                channel carries an individual data source at the highest supported rate.</p>
            <br />
            <p><span class="darkBlueText">Question 16:</span> What is the Nyquist theorem? </p>
            <p><span class="redText">Answer: </span>When digitising an analog signal it is very important to select an
                appropriate sampling rate to capture all the information contained in the signal. The Nyquist theorem states
                that the sampling frequency must be at least twice as high as the highest frequency component of the signal.
                For example, at least 8000 samples are required to capture all the information from a 4 KHz telephone
                channel.</p>
            <br />
            <p><span class="darkBlueText">Question 17: </span>How many networks can a router connect? </p>
            <p><span class="redText">Answer:</span> There isn't a theoretical limit. Rather, this depends on the number of
                interfaces a router has.</p>
            <br />
            <p><span class="darkBlueText">Question 18:</span> What is a LAN? </p>
            <p><span class="redText">Answer:</span> LAN stands for a Local Area Network. A class of computer networks that
                covers a relatively small geographic area, e.g. a room, building or a campus.</p>
            <br />
            <p><span class="darkBlueText">Question 19: </span>Can a LAN have routers? </p>
            <p><span class="redText">Answer:</span> Yes. LANs often contain many routers to segment the LANs into many
                smaller broadcast domains as well as for security reasons.</p>
            <br />
            <p><span class="darkBlueText">Question 20: </span>What is the purpose of an NIC? </p>
            <p><span class="redText">Answer:</span> It provides an Ethernet station with a 6-byte physical address. Most of
                the physical and data-link layer duties are done by the NIC.</p>
            <br />
            <p><span class="darkBlueText">Question 21: </span>What is the different between a unicast, multicast and
                broadcast address? </p>
            <p><span class="redText">Answer:</span> Unicast address identifies one of the addresses in a group.
                Multicast address identifies a group of stations.
                Broadcast address identifies all stations on the network.
            </p>
            <br />
            <p><span class="darkBlueText">Question 22: </span>What are the advantages of dividing an Ethernet LAN with a
                bridge? </p>
            <p><span class="redText">Answer:</span> A bridge can raise the bandwidth and separate collision domains.</p>
            <br />
            <p><span class="darkBlueText">Question 23: </span>What is the relationship between a switch and a bridge? </p>
            <p><span class="redText">Answer:</span> A layer-2 switch is an N-Port bridge with additional sophistication that
                allowed faster handling of packets.</p>
            <br />
            <p><span class="darkBlueText">Question 24: </span>What are common Fast Ethernet implementations? </p>
            <p><span class="redText">Answer:</span> The common Fast Ethernet implementations are 100Base-TX, 100Base-FX and
                100Base-T4.</p>
            <br />
            <p><span class="darkBlueText">Question 25: </span>What is a hub? </p>
            <p><span class="redText">Answer:</span> It is a multiport repeater.</p>
            <br />
            <p><span class="darkBlueText">Question 26: </span>What is Ethernet? </p>
            <p><span class="redText">Answer:</span> Ethernet is a Local Area Network (LAN) cabling and signalling
                specification for baseband networks. Ethernet uses a bus or star topology for connecting different nodes in
                a network.</p>
            <br />
            <p><span class="darkBlueText">Question 27: </span>What is network peripheral? </p>
            <p><span class="redText">Answer:</span> A network that is directly connected to any devices that contains
                circuitry.</p>
            <br />
            <p><span class="darkBlueText">Question 28: </span>How do we define the capacity of a communications channel?
            </p>
            <p><span class="redText">Answer:</span> By bandwidth.</p>
            <br />
            <p><span class="darkBlueText">Question 29: </span>What IEEE number defines the Ethernet? </p>
            <p><span class="redText">Answer:</span> 802.3</p>
            <br />
            <p><span class="darkBlueText">Question 30: </span>List and describe the function of each of the seven layers of
                the OSI model. Include examples of protocols that function at each layer </p>
            <p class="redText">Answer:</p>
            <table width="600" border="1" cellpadding="5" cellspacing="0" bordercolor="#CCCCCC" class="normalText">
                <tr>
                    <td width="123" valign="top">
                        <p><strong>OSI Layer </strong></p>
                    </td>
                    <td width="108" valign="top">
                        <p><strong>Protocols </strong></p>
                    </td>
                    <td width="367" valign="top">
                        <p><strong>Function </strong></p>
                    </td>
                </tr>
                <tr>
                    <td width="123" valign="top">
                        <p>Application </p>
                        <p>&nbsp; </p>
                    </td>
                    <td width="108" valign="top">
                        <p align="left">HTTP, FTP, Email </p>
                    </td>
                    <td width="367" valign="top">
                        <p>Allows applications to use the network </p>
                    </td>
                </tr>
                <tr>
                    <td width="123" valign="top">
                        <p>Presentation </p>
                        <p>&nbsp; </p>
                    </td>
                    <td width="108" valign="top">
                        <p>NCP </p>
                    </td>
                    <td width="367" valign="top">
                        <p>Translates (i.e. data formatting) and encrypts data (data security) </p>
                    </td>
                </tr>
                <tr>
                    <td width="123" valign="top">
                        <p>Session </p>
                        <p>&nbsp; </p>
                    </td>
                    <td width="108" valign="top">
                        <p>NetBIOS </p>
                    </td>
                    <td width="367" valign="top">
                        <p>Establishes sessions by applications on separate computers </p>
                    </td>
                </tr>
                <tr>
                    <td width="123" valign="top">
                        <p>Transport </p>
                        <p>&nbsp; </p>
                    </td>
                    <td width="108" valign="top">
                        <p>TCP, UDP </p>
                    </td>
                    <td width="367" valign="top">
                        <p>Breaks down application layer messages into smaller packets (TCP segments or UDP datagrams) which
                            are reassembled at the receiving end. TCP ensures reliable, error-free end-to-end data delivery.
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="123" valign="top">
                        <p>Network </p>
                        <p>&nbsp; </p>
                    </td>
                    <td width="108" valign="top">
                        <p>IP </p>
                    </td>
                    <td width="367" valign="top">
                        <p>Addresses and routes IP datagrams in connectionless mode. Fragments and reassembles datagrams to
                            satisfy the requirements of the data link layer. </p>
                    </td>
                </tr>
                <tr>
                    <td width="123" valign="top">
                        <p>Data link </p>
                        <p>&nbsp; </p>
                    </td>
                    <td width="108" valign="top">
                        <p>CSMA/CD, Token passing </p>
                    </td>
                    <td width="367" valign="top">
                        <p>Provides channel access; error control. </p>
                    </td>
                </tr>
                <tr>
                    <td width="123" valign="top">
                        <p>Physical </p>
                        <p>&nbsp; </p>
                    </td>
                    <td width="108" valign="top">
                        <p>EIA 232 </p>
                    </td>
                    <td width="367" valign="top">
                        <p>Transmits data over a physical medium; encoding and decoding. </p>
                    </td>
                </tr>
            </table>

            <br />
            <a href="#Top">[To Top]</a>
        </div>
    </body>
    @include('partials.footer')
@else
    <meta http-equiv="refresh" content="0; URL=/">
@endauth

</html>
