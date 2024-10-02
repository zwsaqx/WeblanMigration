{{-- <!DOCTYPE html>
<html lang="en">
@auth
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            let animation;
            let isPaused = false; // Variable to track the paused state

            function startAnimation() {
                // Show the frame image
                const frame = document.getElementById("EthernetFrame");
                frame.style.opacity = 1;

                // Define the animation for the frame
                animation = anime({
                    targets: frame,
                    translateX: [{
                            value: 350,
                            duration: 2000
                        }, // Move to Switch
                        {
                            value: 0,
                            duration: 0
                        }, // Reset position to PC1
                        {
                            value: 200,
                            duration: 2000
                        }, // Move to PC3
                        {
                            value: 300,
                            duration: 2000
                        }, // Move to PC4
                        {
                            value: 250,
                            duration: 2000
                        }, // Back to Switch
                        {
                            value: 200,
                            duration: 2000
                        }, // Move to Laptop1
                        {
                            value: 600,
                            duration: 2000
                        }, // Move to Laptop2
                    ],
                    easing: 'easeInOutSine',
                    loop: false,
                    autoplay: false,
                    update: function(anim) {
                        // Stop the animation completely if paused
                        if (isPaused) {
                            anim.pause();
                        }
                    }
                });
                animation.play();
            }

            document.getElementById("PlayButton").onclick = function() {
                startAnimation();
            };

            document.getElementById("PauseButton").onclick = function() {
                if (isPaused) {
                    animation.play();
                    isPaused = false; // Update state to playing
                } else {
                    animation.pause();
                    isPaused = true; // Update state to paused
                }
            };

            document.getElementById("StopButton").onclick = function() {
                animation.pause();
                animation.seek(0); // Reset animation
                document.getElementById("EthernetFrame").style.opacity = 0; // Hide frame
                isPaused = false; // Reset the paused state
            };

            const devices = [{
                    id: 'PC1',
                    mac: '1A:23:F9:CD:06:9B'
                },
                {
                    id: 'PC3',
                    mac: '5C:66:AB:90:75:B1'
                },
                {
                    id: 'PC4',
                    mac: '49:BD:D2:C7:56:2A'
                },
                {
                    id: 'Laptop1',
                    mac: 'A1:B2:C3:D4:E5:F6'
                },
                {
                    id: 'Laptop2',
                    mac: 'E1:F2:G3:H4:I5:J6'
                },
                {
                    id: 'Switch',
                    mac: '00:14:22:01:23:45'
                }
            ];

            devices.forEach(device => {
                document.getElementById(device.id).onmouseover = function() {
                    document.getElementById("info").innerText = $ {
                        device.id
                    }
                    MAC: $ {
                        device.mac
                    };
                };
                document.getElementById(device.id).onmouseout = function() {
                    document.getElementById("info").innerText =
                        "Hover over a device to see its MAC address.";
                };
            });
        });
    </script>

    <style>
        .loggedInBody {
            text-align: center;
        }

        #animation-container {
            position: relative;
            width: 900px;
            /* Adjust as needed */
            height: 600px;
            /* Adjust as needed */
            margin: 0 auto;
            border: 1px solid #ccc;
            background: white;
            overflow: hidden;
        }

        .device {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .frame {
            position: absolute;
            width: 250px;
            /* Increased width for better visibility */
            height: auto;
            /* Maintain aspect ratio */
            opacity: 0;
            /* Initially hidden */
            pointer-events: none;
            /* Prevent interactions */
        }

        .line {
            position: absolute;
            background: #000;
            height: 2px;
            /* Line thickness */
            transform-origin: 0 0;
            /* Set transform origin for rotation */
        }

        #info {
            margin-top: 20px;
            font-size: 14px;
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
                                Model 2: Data travelling from host-to-host on different subnets
                            </div>
                        </span>
                        <br />
                        <br />
                        In this model, PC1 is sending packets to PC3, PC4, Laptop 1, and Laptop 2.
                        PC1 is the “source host,” PC3, PC4, Laptop 1, and Laptop 2 are the “destination hosts.”

                        <p>As the packet travels from source host to destination hosts, it will cross devices using various
                            protocol types...</p>

                        <div id="animation-container">
                            <img src="{{ asset('../Images/Data/PC1.png') }}" id="PC1" class="device"
                                style="left: 50px; top: 50px;" alt="PC1">
                            <img src="{{ asset('../Images/Data/PC3.png') }}" id="PC3" class="device"
                                style="left: 400px; top: 50px;" alt="PC3">
                            <img src="{{ asset('../Images/Data/PC4.png') }}" id="PC4" class="device"
                                style="left: 400px; top: 200px;" alt="PC4">
                            <img src="{{ asset('../Images/Data/Laptop1.png') }}" id="Laptop1" class="device"
                                style="left: 200px; top: 400px;" alt="Laptop1">
                            <img src="{{ asset('../Images/Data/Laptop2.png') }}" id="Laptop2" class="device"
                                style="left: 600px; top: 400px;" alt="Laptop2">
                            <img src="{{ asset('../Images/Data/Switch.png') }}" id="Switch" class="device"
                                style="left: 250px; top: 200px;" alt="Switch">
                            <img src="{{ asset('../Images/Data/Ethernet Frame Sturcture.png') }}" id="EthernetFrame"
                                class="frame" alt="Ethernet Frame">

                            <!-- Lines connecting devices to the switch -->
                            <div id="line1" class="line"
                                style="left: 120px; top: 100px; width: 300px; transform: rotate(0deg);"></div>
                            <div id="line2" class="line"
                                style="left: 400px; top: 100px; width: 150px; transform: rotate(0deg);"></div>
                            <div id="line3" class="line"
                                style="left: 400px; top: 220px; width: 200px; transform: rotate(90deg);"></div>
                            <div id="line4" class="line"
                                style="left: 270px; top: 350px; width: 150px; transform: rotate(45deg);"></div>
                            <div id="line5" class="line"
                                style="left: 590px; top: 350px; width: 150px; transform: rotate(135deg);"></div>
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
                                let isPaused = false; // Variable to track the paused state

                                function startAnimation() {
                                    // Show the frame image
                                    const frame = document.getElementById("EthernetFrame");
                                    frame.style.opacity = 1;

                                    // Define the animation for the frame
                                    animation = anime({
                                        targets: frame,
                                        translateX: [{
                                                value: 350,
                                                duration: 2000
                                            }, // Move to Switch
                                            {
                                                value: 0,
                                                duration: 0
                                            }, // Reset position to PC1
                                            {
                                                value: 200,
                                                duration: 2000
                                            }, // Move to PC3
                                            {
                                                value: 300,
                                                duration: 2000
                                            }, // Move to PC4
                                            {
                                                value: 250,
                                                duration: 2000
                                            }, // Back to Switch
                                            {
                                                value: 200,
                                                duration: 2000
                                            }, // Move to Laptop1
                                            {
                                                value: 600,
                                                duration: 2000
                                            }, // Move to Laptop2
                                        ],
                                        easing: 'easeInOutSine',
                                        loop: false,
                                        autoplay: false,
                                        update: function(anim) {
                                            // Stop the animation completely if paused
                                            if (isPaused) {
                                                anim.pause();
                                            }
                                        }
                                    });
                                    animation.play();
                                }

                                document.getElementById("PlayButton").onclick = function() {
                                    startAnimation();
                                };

                                document.getElementById("PauseButton").onclick = function() {
                                    if (isPaused) {
                                        animation.play();
                                        isPaused = false; // Update state to playing
                                    } else {
                                        animation.pause();
                                        isPaused = true; // Update state to paused
                                    }
                                };

                                document.getElementById("StopButton").onclick = function() {
                                    animation.pause();
                                    animation.seek(0); // Reset animation
                                    document.getElementById("EthernetFrame").style.opacity = 0; // Hide frame
                                    isPaused = false; // Reset the paused state
                                };

                                const devices = [{
                                        id: 'PC1',
                                        mac: '1A:23:F9:CD:06:9B'
                                    },
                                    {
                                        id: 'PC3',
                                        mac: '5C:66:AB:90:75:B1'
                                    },
                                    {
                                        id: 'PC4',
                                        mac: '49:BD:D2:C7:56:2A'
                                    },
                                    {
                                        id: 'Laptop1',
                                        mac: 'A1:B2:C3:D4:E5:F6'
                                    },
                                    {
                                        id: 'Laptop2',
                                        mac: 'E1:F2:G3:H4:I5:J6'
                                    },
                                    {
                                        id: 'Switch',
                                        mac: '00:14:22:01:23:45'
                                    }
                                ];

                                devices.forEach(device => {
                                    document.getElementById(device.id).onmouseover = function() {
                                        document.getElementById("info").innerText = $ {
                                            device.id
                                        }
                                        MAC: $ {
                                            device.mac
                                        };
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
                        <span class="redText"><strong>Ethernet Frame Structure</strong></span>
                        <p><img src="{{ asset('../Images/Data/Ethernet Frame Sturcture.png') }}" width="1000"
                                height="150" alt="" /></p>
                        <p><span class="redText">Preamble (8 bytes): </span>...</p>

                        <br />
                        <br />
                        <span class="redText"><strong>Point-to-Point Protocol (PPP) Frame Structure</strong></span><br />
                        <img src="{{ asset('../Images/Data/PPP Frame Structure.png') }}" width="745" height="99"
                            alt="" />
                        <br />
                        <span class="redText">Flag (1 byte): </span>...</span>

                        <br />
                        <br />
                        <span class="redText"><strong>802.11 Wireless Frame Structure</strong></span><br />
                        <p><img src="{{ asset('../Images/Data/802.11 Frame1.png') }}" width="761" height="108"
                                alt="" /></p>

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

</html> --}}
<!DOCTYPE html>
<html lang="en">
@auth
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            let animation;
            let isPaused = false; // Variable to track the paused state

            function startAnimation() {
                const frame = document.getElementById("EthernetFrame");
                frame.style.opacity = 1;

                animation = anime({
                    targets: frame,
                    translateX: [{
                            value: 350,
                            duration: 2000
                        }, // Move to Switch
                        {
                            value: 0,
                            duration: 0
                        }, // Reset to PC1
                        {
                            value: 200,
                            duration: 2000
                        }, // Move to PC3
                        {
                            value: 300,
                            duration: 2000
                        }, // Move to PC4
                        {
                            value: 250,
                            duration: 2000
                        }, // Back to Switch
                        {
                            value: 200,
                            duration: 2000
                        }, // Move to Laptop1
                        {
                            value: 600,
                            duration: 2000
                        } // Move to Laptop2
                    ],
                    easing: 'easeInOutSine',
                    loop: false,
                    autoplay: false,
                    update: function(anim) {
                        if (isPaused) {
                            anim.pause();
                        }
                    }
                });
                animation.play();
            }

            document.getElementById("PlayButton").onclick = function() {
                startAnimation();
            };

            document.getElementById("PauseButton").onclick = function() {
                if (isPaused) {
                    animation.play();
                    isPaused = false;
                } else {
                    animation.pause();
                    isPaused = true;
                }
            };

            document.getElementById("StopButton").onclick = function() {
                animation.pause();
                animation.seek(0);
                document.getElementById("EthernetFrame").style.opacity = 0;
                isPaused = false;
            };

            const devices = [{
                    id: 'PC1',
                    mac: '1A:23:F9:CD:06:9B'
                },
                {
                    id: 'PC3',
                    mac: '5C:66:AB:90:75:B1'
                },
                {
                    id: 'PC4',
                    mac: '49:BD:D2:C7:56:2A'
                },
                {
                    id: 'Laptop1',
                    mac: 'A1:B2:C3:D4:E5:F6'
                },
                {
                    id: 'Laptop2',
                    mac: 'E1:F2:G3:H4:I5:J6'
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

    <style>
        .loggedInBody {
            text-align: center;
        }

        #animation-container {
            position: relative;
            width: 900px;
            height: 600px;
            margin: 0 auto;
            border: 1px solid #ccc;
            background: white;
            overflow: hidden;
        }

        .device {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .frame {
            position: absolute;
            width: 250px;
            height: auto;
            opacity: 0;
            pointer-events: none;
        }

        .line {
            position: absolute;
            background: #000;
            height: 2px;
            transform-origin: 0 0;
        }

        #info {
            margin-top: 20px;
            font-size: 14px;
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
                                Model 2: Data travelling from host-to-host on different subnets
                            </div>
                        </span>
                        <br />
                        <br />
                        In this model, PC1 is sending packets to PC3, PC4, Laptop 1, and Laptop 2.
                        PC1 is the “source host,” PC3, PC4, Laptop 1, and Laptop 2 are the “destination hosts.”

                        <p>As the packet travels from source host to destination hosts, it will cross devices using various
                            protocol types...</p>

                        <div id="animation-container">
                            <img src="{{ asset('../Images/Data/PC1.png') }}" id="PC1" class="device"
                                style="left: 50px; top: 100px;" alt="PC1">
                            <img src="{{ asset('../Images/Data/PC3.png') }}" id="PC3" class="device"
                                style="left: 500px; top: 100px;" alt="PC3">
                            <img src="{{ asset('../Images/Data/PC4.png') }}" id="PC4" class="device"
                                style="left: 500px; top: 250px;" alt="PC4">
                            <img src="{{ asset('../Images/Data/Laptop1.png') }}" id="Laptop1" class="device"
                                style="left: 200px; top: 400px;" alt="Laptop1">
                            <img src="{{ asset('../Images/Data/Laptop2.png') }}" id="Laptop2" class="device"
                                style="left: 600px; top: 400px;" alt="Laptop2">
                            <img src="{{ asset('../Images/Data/Switch.png') }}" id="Switch" class="device"
                                style="left: 400px; top: 450px;" alt="Switch">
                            <img src="{{ asset('../Images/Data/Ethernet Frame Sturcture.png') }}" id="EthernetFrame"
                                class="frame" alt="Ethernet Frame">

                            <!-- Lines connecting devices to the switch -->
                            <div id="line1" class="line"
                                style="left: 120px; top: 120px; width: 200px; transform: rotate(0deg);"></div>
                            <div id="line2" class="line"
                                style="left: 400px; top: 120px; width: 100px; transform: rotate(0deg);"></div>
                            <div id="line3" class="line"
                                style="left: 400px; top: 220px; width: 200px; transform: rotate(90deg);"></div>
                            <div id="line4" class="line"
                                style="left: 270px; top: 350px; width: 150px; transform: rotate(45deg);"></div>
                            <div id="line5" class="line"
                                style="left: 590px; top: 350px; width: 150px; transform: rotate(135deg);"></div>
                        </div>

                        <div>
                            <button id="PlayButton">Play</button>
                            <button id="PauseButton">Pause/Resume</button>
                            <button id="StopButton">Stop</button>
                        </div>
                        <div id="info">Hover over a device to see its MAC address.</div>

                        <br />
                        <br />
                        <span class="redText"><strong>Ethernet Frame Structure</strong></span>
                        <p><img src="{{ asset('../Images/Data/Ethernet Frame Sturcture.png') }}" width="1000"
                                height="150" alt="" /></p>
                        <p><span class="redText">Preamble (8 bytes): </span>...</p>

                        <br />
                        <br />
                        <span class="redText"><strong>Point-to-Point Protocol (PPP) Frame Structure</strong></span><br />
                        <img src="{{ asset('../Images/Data/PPP Frame Structure.png') }}" width="745" height="99"
                            alt="" />
                        <br />
                        <span class="redText">Flag (1 byte): </span>...</span>

                        <br />
                        <br />
                        <span class="redText"><strong>802.11 Wireless Frame Structure</strong></span><br />
                        <p><img src="{{ asset('../Images/Data/802.11 Frame1.png') }}" width="761" height="108"
                                alt="" /></p>

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
