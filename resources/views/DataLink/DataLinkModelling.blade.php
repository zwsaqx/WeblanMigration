<!DOCTYPE html>
<html lang="en">
@auth
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <style>
        .edgeLoad-EDGE-15569127 {
            visibility: visible;
        }

        #container {
            position: relative;
            width: 650px;
            height: 450px;
            border: 1px solid #ccc;
            overflow: hidden;
            background: white;
        }

        .device {
            position: absolute;
            width: 73px;
            height: 59px;
            background-color: rgba(0, 0, 0, 0.1);
            border: 1px solid #000;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #PlayButton,
        #PauseButton,
        #StopButton {
            margin: 10px;
            padding: 10px;
            background-color: #ccc;
            border: none;
            cursor: pointer;
        }

        #info {
            margin-top: 20px;
            font-size: 14px;
        }

        #Packet {
            display: none;
            position: absolute;
            left: 66px;
            top: 46px;
        }
    </style>

    @include('partials.header')

    <body class="body">
        <div class='loggedInBody'>
            <h1 class='header1'>Data Link Protocol Modelling</h1>

            <div style="text-align: center; margin: 0 auto; width: fit-content;">
                <a href="/DataLink/DataLinkModelling">[Model 1]</a>
                <a href="/DataLink/DataLinkModelling2">[Model 2]</a><br />
            </div>
            <br />
            <table width="100%" border="0" cellpadding="0" cellspacing="0" class="normalText">
                <tr>
                    <td>
                        <span class="title">
                            <div style="text-align: center; margin: 0 auto; width: fit-content;">
                                Model 1: Data travelling from host-to-host on the same subnet
                            </div>
                        </span>
                        <br />

                        <div id="container" style="margin: 0 auto;">
                            <div id="PC1" class="device" style="left: 66px; top: 46px;"><img
                                    src="{{ asset('../Images/Data/PC1.png') }}" width="156" height="87" /><br>PC1
                            </div>
                            <div id="PC2" class="device" style="left: 66px; top: 173px;"><img
                                    src="{{ asset('../Images/Data/PC1.png') }}" width="156" height="87" />PC2</div>
                            <div id="PC3" class="device" style="left: 62px; top: 291px;"><img
                                    src="{{ asset('../Images/Data/PC1.png') }}" width="156" height="87" />PC3</div>
                            <div id="Switch" class="device" style="left: 372px; top: 188px; position: absolute;">
                                <img src="{{ asset('../Images/Data/Switch.png') }}" width="86" height="66" />

                            </div>
                            <div id="Switch" style="left: 385px; top: 255px; position: absolute;">
                                <span style="">Switch</span>
                            </div>

                            <div id="Text"
                                style="left: 355px; top: 25px; position: absolute; color:hsl(105, 97%, 25%); ">
                                <span style=""><strong>PC1 can send data to PC2 and PC3. <br> The data is encapsulated
                                        in
                                        the
                                        Ethernet Frame. <br><br> See "Ethernet frame structure" below for more
                                        details.</strong></span>
                            </div>

                            <div id="Text" style="left: 35px; top: 115px; position: absolute;">
                                <span style="font-size: 12px;">3A:5B:4C:1D:2E:9F</span>
                            </div>

                            <div id="Text" style="left: 35px; top: 245px; position: absolute;">
                                <span style="font-size: 12px;">D4:A7:22:4B:56</span>
                            </div>

                            <div id="Text" style="left: 35px; top: 360px; position: absolute;">
                                <span style="font-size: 12px;">89:13:7C:20:1F</span>
                            </div>

                            <div id="Packet" class="packet" style="left: 38px; top: 16px;"><img
                                    src="{{ asset('../Images/Data/PPP-Frame.png') }}" width="96" height="66" /></div>


                            <svg width="100%" height="100%">
                                <line x1="190" y1="85" x2="350" y2="175" stroke="black"
                                    stroke-width="2" />
                                <line x1="190" y1="210" x2="350" y2="210" stroke="black"
                                    stroke-width="2" />
                                <line x1="190" y1="320" x2="350" y2="255" stroke="black"
                                    stroke-width="2" />
                            </svg>
                        </div>

                        <div style=" height: 100%; margin: 0; display: flex; justify-content: center; align-items: center;">
                            <button id="PlayButton">Play</button>
                            <button id="PauseButton">Pause/Resume</button>
                            <button id="StopButton">Stop</button>
                        </div>


                        <script type="text/javascript">
                            document.addEventListener('DOMContentLoaded', function() {
                                let animation;

                                function startAnimation() {
                                    animation = anime({
                                        targets: ['#Packet'],
                                        translateX: [{
                                                value: 310,
                                                duration: 2000
                                            },
                                            {
                                                value: 0,
                                                duration: 2000
                                            }
                                        ],
                                        translateY: [{
                                                value: 180,
                                                duration: 2000
                                            },
                                            {
                                                value: 280,
                                                duration: 2000
                                            }
                                        ],
                                        easing: 'easeInOutQuad',
                                        loop: false,
                                        autoplay: false
                                    });
                                    animation.play();
                                }

                                document.getElementById("PlayButton").onclick = function() {

                                    startAnimation();
                                };

                                document.getElementById("PauseButton").onclick = function() {
                                    if (animation.paused) {
                                        animation.play();
                                    } else {
                                        animation.pause();
                                    }
                                };

                                document.getElementById("StopButton").onclick = function() {
                                    animation.pause();
                                    animation.seek(0);
                                    location.reload();
                                };

                                const devices = [{
                                        id: 'PC1',
                                        mac: '1A:23:F9:CD:06:9B'
                                    },
                                    {
                                        id: 'PC2',
                                        mac: '5C:66:AB:90:75:B1'
                                    },
                                    {
                                        id: 'PC3',
                                        mac: '49:BD:D2:C7:56:2A'
                                    },
                                    {
                                        id: 'Switch',
                                        mac: '00:14:22:01:23:45'
                                    }
                                ];

                                devices.forEach(device => {
                                    document.getElementById(device.id).onmouseover = function() {
                                        document.getElementById("info").innerText = `${device.id} MAC: ${device.mac}`;
                                    };
                                    document.getElementById(device.id).onmouseout = function() {
                                        document.getElementById("info").innerText =
                                            "Hover over a device to see its MAC address.";
                                    };
                                });
                            });
                        </script>
                        <script>
                            document.getElementById("PlayButton").addEventListener("click", function() {
                                document.getElementById("Packet").style.display = "block"; // Show the Packet
                            });
                            document.getElementById("StopButton").addEventListener("click", function() {
                                document.getElementById("Packet").style.display = "none"; // Show the Packet
                            });
                        </script>
                        <br />

                        <p>In this scenario, PC1 is connected to PC2 and PC3 via a switch.
                            PC1 is the “source host”, whereas PC2 and PC3 are the “destination hosts.”

                            The Data Link Layer is divided into two sublayers: the Media Access Control layer (MAC)
                            and the Logical Link Control layer (LLC).

                            The MAC addresses you see on each device are implemented on the devices' adapters.

                            The model below shows a wired network topology, where an Ethernet Frame is used to encapsulate
                            PC1's data before transmission over the link to PC3.


                        <p>When the switch receives a frame, the switch inspects the MAC address of the source host, learns
                            the source host's location, stores the information in the switch table and use a
                            &ldquo;time-to-live&rdquo; (TTL) field to forget the mapping in the end. It indexes the switch
                            table using the destination's/destinations' MAC address. If it has a destination appointed, it
                            would forward the frame on the interface indicated, or else the frame would forward out to all
                            the interfaces except for the interface it arrived at. <br /><br />Hover over the switch in the
                            animation to see its switching table.</p>
                        <p>All network layer packets are encapsulated into frames. Once formatted into frames, they can
                            travel across different network topologies using different types of protocols. (See Model 2 for
                            more
                            details)</a><br /><br />In a frame, a Header and Trailer are given to create a Protocol Data
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
