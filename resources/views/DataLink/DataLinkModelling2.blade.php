<!DOCTYPE html>
<html lang="en">
@auth
    @include('partials.header')

    <body class="body">
        <div class='loggedInBody'>
            <h1 class='header1'>Data Link Protocol Modelling</h1>
            <br />
            <div class='header1'>Animation-based Models</div>
            <br />
            <div style="text-align: center; margin: 0 auto; width: fit-content;">
                <a href="/DataLink/DataLinkModelling">[Model 1]</a>
                <a href="/DataLink/DataLinkModelling2">[Model 2]</a><br />
            </div>

            {{-- <a href="index.php?fuseaction=<?php echo $XFA['dataModelling']; ?>">[Model 1]</a> <a
            href="index.php?fuseaction=<?php echo $XFA['dataModel2']; ?>">[Model 2]</a></a><br /> --}}

            <br />
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="normalText">
                <tr>
                    <td> <span class="title">
                            <div style="text-align: center; margin: 0 auto; width: fit-content;"><strong>Model 2: Data
                                    travelling
                                    from host-to-host
                                    on different subnets</strong></div>
                        </span> <br />
                        <br />
                        In this model, PC1 is sending packets to PC3, PC4, Laptop 1 and Laptop 2.
                        PC1 is the &ldquo;source host&rdquo;, PC3, PC4, Laptop 1 and Laptop 2 are the &ldquo;destination
                        hosts&rdquo;.

                        <p>As the packet travels from source host to destination hosts, it will cross devices using various
                            protocol types. The Data Link Layer not only performs the initial encapsulation of the frames,
                            but also decapsulating, processing and encapsulating it to new frames for it to pass through the
                            media from one device to another.<br />
                            <!--Adobe Edge Runtime-->
                            <meta http-equiv="X-UA-Compatible" content="IE=Edge">
                            <script type="text/javascript" charset="utf-8" src="https://animate.adobe.com/runtime/5.0.1/edge.5.0.1.min.js"></script>
                            <script type="text/javascript">
                                document.addEventListener('DOMContentLoaded', function() {
                                    try {
                                        var script = document.createElement('script');
                                        script.type = 'text/javascript';
                                        script.src = "{{ asset('DataModel2_edge.js') }}";
                                        script.onload = function() {
                                            try {
                                                console.log('call datamodel2')
                                                AdobeEdge.loadComposition('DataModel2', 'EDGE-5752837', {
                                                    scaleToFit: "none",
                                                    centerStage: "none",
                                                    minW: "0",
                                                    maxW: "undefined",
                                                    width: "850px",
                                                    height: "550px"
                                                }, {
                                                    "dom": {}
                                                }, {
                                                    "dom": {}
                                                });
                                            } catch (e) {
                                                console.error('Adobe Edge composition initialization error:', e);
                                            }
                                        };
                                        script.onerror = function(e) {
                                            console.error('Error loading script:', e.message);
                                        };
                                        document.head.appendChild(script);
                                    } catch (e) {
                                        console.error('Script setup error:', e);
                                    }
                                });
                            </script>
                            <style>
                                .edgeLoad-EDGE-5752837 {
                                    visibility: visible;
                                }
                            </style>
                            <!--Adobe Edge Runtime End-->
                        <div id="Stage" class="EDGE-5752837">
                        </div>
                        <br />
                        <p>From the model above, you can see PC1 starts off sending an Ethernet Frame as it is in a wired
                            network. <a href="#Ethernet Frame Structure">(See Ethernet Frame Structure for more details.)
                            </a>The frame remains unchanged when it reaches PC3 and PC4 because they are also in a wired
                            network. A point to point connection occurs between the Router and Wireless Router, hence a PPP
                            Frame is used. <a href="#PPP Frame Structure">(See PPP Frame Structure for more details.)</a>
                            Because the two laptops are on a wireless network, the frame then changes from PPP to 802.11
                            Wireless Frame for packets to be delivered to the two Laptops. <a
                                href="#802.11 Wireless Frame Structure">(See 802.11 Wireless Frame Structure for more
                                details.)</a></p>

                        <br />
                        <br />
                        <span class="redText"><a name="Ethernet Frame Structure"></a><em><strong>Ethernet Frame
                                    Structure</strong></em></span>
                        <p><img src="{{ asset('../Images/Data/Ethernet Frame Sturcture.png') }}" width="806"
                                height="137" alt="" />
                        </p>
                        <p><span class="redText">Preamble (8 bytes): </span>Each of the first 7 bytes has a value of
                            10101010; followed by one last byte of 10101011. The first 7 bytes are used to wake up the
                            receiver and synchronize their clock to the senders. The last 2 bits of the 8th byte is to alert
                            the receiver data is about to come.
                        </p>
                        <p><span class="redText">Destination Address (6 bytes): </span>Contains the MAC address of the
                            destination adapter. If the address does not match, the frame is dropped.</p>
                        <p><span class="redText">Source Address (6 bytes): </span>Contains the MAC address of the source
                            adapter.</p>
                        <p><span class="redText">Type (2 bytes): </span>Indicates the network layer protocol used. </p>
                        <p><span class="redText">Payload (46 to 1,500 bytes): </span>Contains the data transferred from the
                            source host to the destination host(s). If the minimum size of this field is less than 46, the
                            data field needs to fill up the frame size to minimum length. If it exceeds 1,500 bytes, the
                            source host has to de-fragment the data.</p>
                        <p><span class="redText">Cyclic Redundancy Check (CRC) (4 bytes): </span>An error-detection
                            technique. The receiver adapter detects bit errors in the frame; the frame is dropped if error
                            is detected.</p>
                        <br />
                        <br />
                        <span class="redText"><a name="PPP Frame Structure"></a><strong><em>Point-to-Point Protocol (PPP)
                                    Frame Structure</em></strong></span><br />
                        <img src="{{ asset('../Images/Data/PPP Frame Structure.png') }}" width="745" height="99"
                            alt="" />
                        <br />
                        <span class="redText">Flag (1 byte): </span>Indicates start of PPP frame.<br />
                        <span class="redText">Address (1 byte): </span>High-Level Data Link Control (HDLC) broadcast
                        address.<br />
                        <span class="redText">Control (1 byte): </span>Used in HDLC for control purposes.<br />
                        <span class="redText">Type (2 byte): </span>Type of Protocol.<br />
                        <span class="redText">Data and Padding (46 to 1,500): </span>Contains data information. Padding is
                        additional bytes added to fill size of PPP frame.<br />
                        <span class="redText">Frame Check Sequence (FCS) (2 byte): </span>Error detection.<br />
                        <br />
                        <br />
                        <span class="redText"><a name="802.11 Wireless Frame Structure"></a><strong><em>802.11 Wireless
                                    Frame Structure</em></strong></span><br />

                        <p>In the 802.11 Wireless Frame as shown below, it consists of a MAC Header, Payload and Cyclic
                            Redundancy Check (CRC).</p>
                        <img src="{{ asset('../Images/Data/802.11 Frame1.png') }}" width="761" height="108"
                            alt="" />
                        <a href="#802.11 - Frame Control Field"><br />
                            (Click here for details on the 802.11 Frame Control Field.)
                        </a><br /><br />

                        <span class="redText">Duration/ID (2 bytes): </span>Indicates duration needed to receive the next
                        frame transmission.<br /><br />
                        <span class="redText">Address (Total of 20 bytes): </span>Four addresses have different purposes
                        depending on the frame type, hence it is numbered. Generally, Address 1 is used for receiving,
                        Address 2 for the transmitting, Address 3 for filtering and Address 4 is used when access points
                        forwards frames to each other in AD Hoc mode.<br /><br />
                        <span class="redText">Sequence Control (6 bytes): </span>Used for de-fragmentation and removing
                        duplicate frames.<br /><br />
                        <span class="redText">Payload (0-2312 bytes): </span>Contains information included in the type of
                        frames.<br /><br />
                        <span class="redText">Cyclic Redundancy Check (CRC) (4 bytes): </span>Error
                        detection.<br /><br /><br />

                        <span class="redText"><a name="802.11 - Frame Control Field"></a><strong><em>802.11 - Frame Control
                                    Field</em></strong></span><br />
                        <p>The Frame Control Field is used to define the type of 802.11 MAC frame and providing sufficient
                            information for other fields listed below to understand how a MAC frame is processed.</p>

                        <img src="{{ asset('../Images/Data/802.11 Frame control field.png') }}" width="781"
                            height="89" alt="" />
                        <br />
                        <span class="redText">Protocol Version (2 bits): </span>Provides current version of 802.11 protocol
                        used.<br /><br />

                        <span class="redText">Type and Subtype (2 & 4 bits respectively): </span>Determines the type and
                        function of the frame used.<br /><br />

                        <span class="redText">To DS and From DS (2 bits each): </span>Shows whether the frame is destined
                        for the distribution system.<br /><br />

                        <span class="redText">More Fragments (1 bit): </span>Shows whether additional fragments of frame are
                        needed.<br /><br />

                        <span class="redText">Retry (1 bit): </span>Shows whether the frame is being
                        re-transmitted.<br /><br />

                        <span class="redText">Power Management (1 bit): </span>Indicates the mode of the STA (Station),
                        whether the sender will be in power-saving mode or remain active after frame exchange.<br /><br />

                        <span class="redText">More Data (1 bit): </span>Used for access points to accommodate stations in
                        power-saving mode. It indicates any additional broadcast/multicast frames that are coming in or
                        being sent.<br /><br />

                        <span class="redText">WEP (1 bit): </span>Shows whether encryption or authentications are used in
                        the frame.<br /><br />

                        <span class="redText">Order (1 bit): </span>Indicates frames must be processed in order when
                        received. <br /><br />

                        <a href="#Top">[To Top]</a>
                    </td>
                </tr>
            </table>
            <br>
        </div>
    </body>

    @include('partials.footer')
@else
    <meta http-equiv="refresh" content="0; URL=/">
@endauth

</html>
