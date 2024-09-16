<!DOCTYPE html>
<html lang="en">
@auth
    <script type="text/javascript" charset="utf-8" src="https://animate.adobe.com/runtime/5.0.1/edge.5.0.1.min.js"></script>

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
                            <div style="text-align: center; margin: 0 auto; width: fit-content;">Model 1: Data travelling
                                from host-to-host on
                                the same subnet</div>
                        </span> <br />

                        <p>In this scenario, PC1 is connected to PC2 and PC3 via a switch. <br>
                            PC1 is the &ldquo;source host&rdquo;, where as PC2 and PC3 are the &ldquo;destination
                            hosts&rdquo;.</p>
                        <p>
                            The Data Link Layer is divided into two sublayers. These are the Media Access Control layer
                            (MAC)
                            and Logical Link Control layer (LLC). MAC layer addresses the frame and marks the
                            beginning and end of a frame. The LLC layer prepares data for transmission, identifies the
                            network protocols and frames the network layer packet.</p>
                        <p>The MAC addresses you see on each device are actually implemented on the devices' adapters, also
                            referred to as the Network Interface Card (NIC).</p>
                        <p>
                            The model below shows a wired network topology, an Ethernet Frame is used to encapsulate PC1's
                            data before transmission over the link to PC3.</p>
                        <br />
                        <!--Adobe Edge Runtime-->
                        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
                        <script type="text/javascript">
                            document.addEventListener('DOMContentLoaded', function() {
                                try {
                                    var script = document.createElement('script');
                                    script.type = 'text/javascript';
                                    script.src = "{{ asset('DataModel1_edge.js') }}";
                                    script.onload = function() {
                                        try {
                                            AdobeEdge.loadComposition('DataModel1', 'EDGE-15569127', {
                                                scaleToFit: "none",
                                                centerStage: "both",
                                                minW: "0",
                                                maxW: "undefined",
                                                width: "650px",
                                                height: "450px"
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
                            .edgeLoad-EDGE-15569127 {
                                visibility: visible;
                                /* Ensure the composition is visible */
                            }
                        </style>
                        <!--Adobe Edge Runtime End-->
                        <div id="Stage" class="EDGE-15569127">
                        </div>
                        <br />
                        <br />
                        <p>When the switch receives a frame, the switch inspects the MAC address of the source host, learns
                            the source host's location, stores the information in the switch table and use a
                            &ldquo;time-to-live&rdquo; (TTL) field to forget the mapping in the end. It indexes the switch
                            table using the destination's/destinations' MAC address. If it has a destination appointed, it
                            would forward the frame on the interface indicated, or else the frame would forward out to all
                            the interfaces except for the interface it arrived at. <br /><br />Hover over the switch in the
                            animation to see its switching table.</p>
                        <p>All network layer packets are encapsulated into frames. Once formatted into frames, they can
                            travel across different network topologies using different types of protocols.

                            <a href="/DataLink/DataLinkModelling2">(See Model 2 for more details)</a>
                            {{-- <a
                                href="index.php?fuseaction=<?php echo $XFA['dataModel2']; ?>">(See Model 2 for more
                                details)</a> --}}


                            <br /><br />In a frame, a Header and Trailer are given to create a Protocol Data
                            Unit. This is encapsulation.
                        </p>
                        <span class="redText"><strong><em>Structure of Frame</em></strong></span>
                        <br />
                        <img src="{{ asset('../Images/Data/Basic Frame Structure.png') }}" width="745" height="99"
                            alt="" />
                        <p><span class="redText">Header: </span>Contains information as to what network interface and
                            protocols are being used.</p>
                        <p><span class="redText">Payload:</span> Contains the actual information being transmitted.
                        <p><span class="redText">Trailer:</span> Used to determine whether the frame contains any errors.
                        </p>
                        <br />

                        <span class="redText"><em><strong>Ethernet Frame Structure</strong></em></span>
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
