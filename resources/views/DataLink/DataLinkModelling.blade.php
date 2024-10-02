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
    </style>

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

                        <p>In this scenario, PC1 is connected to PC2 and PC3 via a switch. <br>
                            PC1 is the “source host”, whereas PC2 and PC3 are the “destination hosts.”</p>
                        <p>
                            The Data Link Layer is divided into two sublayers: the Media Access Control layer (MAC)
                            and the Logical Link Control layer (LLC).
                        </p>
                        <p>The MAC addresses you see on each device are implemented on the devices' adapters.</p>
                        <p>
                            The model below shows a wired network topology, where an Ethernet Frame is used to encapsulate
                            PC1's data before transmission over the link to PC3.
                        </p>
                        <br />

                        <div id="container">
                            <div id="PC1" class="device" style="left: 66px; top: 46px;">PC1</div>
                            <div id="PC2" class="device" style="left: 66px; top: 173px;">PC2</div>
                            <div id="PC3" class="device" style="left: 62px; top: 291px;">PC3</div>
                            <div id="Switch" class="device" style="left: 372px; top: 188px;">Switch</div>
                        </div>

                        <div>
                            <button id="PlayButton">Play</button>
                            <button id="PauseButton">Pause/Resume</button>
                            <button id="StopButton">Stop</button>
                        </div>
                        <div id="info">Hover over a device to see its MAC address.</div>

                        <script type="text/javascript">
                            document.addEventListener('DOMContentLoaded', function() {
                                let animation;

                                function startAnimation() {
                                    animation = anime({
                                        targets: ['#PC1', '#PC2', '#PC3', '#Switch'],
                                        translateX: [{
                                                value: 100,
                                                duration: 1000
                                            },
                                            {
                                                value: 0,
                                                duration: 1000
                                            }
                                        ],
                                        easing: 'easeInOutSine',
                                        loop: true,
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
                                    animation.seek(0); // Reset animation
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

                        <br />
                        <br />
                        <p>When the switch receives a frame, it inspects the MAC address of the source host...</p>
                        <p>... (additional content here) ...</p>
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
