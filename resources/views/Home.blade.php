<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebLan Designer</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <div class="logo_right">
        <img src="{{ asset('Images/AUT_Logo.jpg') }}" alt="AUT_Logo" class="logo">
    </div>

    <div class="webLanTitleDiv">
        <h1 class="webLanTitle">Web<br />LAN</h1>
    </div>

    <div class="DarkPurpleBar">
        <div class="DarkPurpleButtons">
            <form action="/logout" method="post">
                @csrf
                <button class="smallButton">Logout</button>
            </form>
        </div>
    </div>
    <div class="PurpleBar">
        <div class="NavBar">
            <div class="dropdown">
                <button class='navbarButton'>Wired LAN</button>
                <div class="dropdown-content">
                    <a href="/Bluetooth/BluetoothTutorial">Tutorial</a>

                    <a href="/Bluetooth/BluetoothQuiz">Quiz</a>

                    <a href="/Bluetooth/BluetoothModelling">Modelling</a>

                    <a href="/Bluetooth/BluetoothScenarios">Scenarios</a>

                    <a href="/Bluetooth/BluetoothKeyTerms">Key Terms</a>

                    <a href="/Bluetooth/BluetoothReview">Review Questions</a>

                </div>
            </div>
            <div class="dropdown">
                <button class='navbarButton'>Wireless LAN</button>
                <div class="dropdown-content">
                    <a href="/DataLink/DataLinkTutorial">Tutorial</a>

                    <a href="/DataLink/DataLinkQuiz">Quiz</a>

                    <a href="/DataLink/DataLinkModelling">Modelling</a>

                    <a href="/DataLink/DataLinkScenarios">Scenarios</a>

                    <a href="/DataLink/DataLinkKeyTerms">Key Terms</a>

                    <a href="/DataLink/DataLinkReview">Review Questions</a>

                </div>
            </div>

            <div class="dropdown">
                <button class='navbarButton'>TCP / IP</button>
                <div class="dropdown-content">
                    <a href="/TCPIP/TCPIPTutorial">Tutorial</a>

                    <a href="/TCPIP/TCPIPQuiz">Quiz</a>

                    <a href="/TCPIP/TCPIPModelling">Modelling</a>

                    <a href="/TCPIP/TCPIPScenarios">Scenarios</a>

                    <a href="/TCPIP/TCPIPKeyTerms">Key Terms</a>

                    <a href="/TCPIP/TCPIPReview">Review Questions</a>

                </div>
            </div>

            <div class="dropdown">
                <button class='navbarButton'> DataLink </button>
                <div class="dropdown-content">
                    <a href="/WiredLan/WiredLanTutorial">Tutorial</a>

                    <a href="/WiredLan/WiredLanQuiz">Quiz</a>

                    <a href="/WiredLan/WiredLanModelling">Modelling</a>

                    <a href="/WiredLan/WiredLanScenarios">Scenarios</a>

                    <a href="/WiredLan/WiredLanKeyTerms">Key Terms</a>

                    <a href="/WiredLan/WiredLanReview">Review Questions</a>

                </div>
            </div>
            <div class="dropdown">
                <button class='navbarButton'>Bluetooth</button>
                <div class="dropdown-content">
                    <a href="/WirelessLan/WirelessLanTutorial">Tutorial</a>

                    <a href="/WirelessLan/WirelessLanQuiz">Quiz</a>

                    <a href="/WirelessLan/WirelessLanModelling">Modelling</a>

                    <a href="/WirelessLan/WirelessLanScenarios">Scenarios</a>

                    <a href="/WirelessLan/WirelessLanKeyTerms">Key Terms</a>

                    <a href="/WirelessLan/WirelessLanReview">Review Questions</a>

                </div>
            </div>
        </div>
    </div>

</head>


<body class="body">
    <div class='loggedInBody'>
        <h1 class="header2">Home Page</h1>

        <div class="header2">&#8220;An Interactive system for Teaching and Learning Wired, Wireless LAN, TCP/IP
            Networking and Data Link Protocol Design&#8221;
        </div>
        <p><b>Faculty members:</b> <span class="header2"> Nurul I. Sarkar (Project Leader)</span>, <span
                class="header2">Krassie Petrova</span> and <span class="header2">Mee Loong (Bobby) Yang</span> <br />
            <b>Developers Stage 1:</b> <span class="header2">Jeff Chiang</span>, <span class="header2">Geoff Lee</span>
            and <span class="header2">Trung Ly</span> <br />
            <b>Developers Stage 2:</b> <span class="header2">Hoang Nam Nguyen</span>
            <br />
            <b>Developers Stage 3:</b> <span class="header2">Tracy Leung</span><br />
            <b>Developers Stage 4:</b> <span class="header2">Vikram Simha Reddy Karra</span> , <span
                class="header2">Kadek Harry Indra</span> , <span class="header2">Quang Minh Vu</span> and <span
                class="header2">Kunye Song</span> <br />
            <b>Developers Stage 5:</b>
            <span class="header2">Zachary Annabell</span> and <span class="header2">Mark Soluiman</span> <br />
        <p>The
            project was funded in part by the Auckland University of Technology through a
            contestable RELTS grant.
            <br /><br />
            The Auckland University of Technology, School of Engineering, Computer and Mathematical Sciences hosts
            the WebLan-Designer at <a href="http://weblandesigner.aut.ac.nz">http://weblandesigner.aut.ac.nz</a>
        </p>
        <p>Last updated: May 2024.<br />
            Version 5.0</p>

        <p>For further information or enquiries please contact us at <a
                href="mailto:nsarkar@aut.ac.nz">nsarkar@aut.ac.nz</a> or <a
                href="mailto:kpetrova@aut.ac.nz">kpetrova@aut.ac.nz</a> or <a
                href="mailto:bobby.yang@aut.ac.nz">bobby.yang@aut.ac.nz</a></p>
        <p align="center">Copyright &copy2014 to 2022 Auckland University of Technology. All rights reserved.
        </p>


    </div>
    <br /> <br />
</body>

<footer class="footer">
    <div class="social-icons">
        <a href="https://www.facebook.com/autuni" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.linkedin.com/in/yourprofile" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://twitter.com/yourhandle" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.youtube.com/yourchannel" target="_blank"><i class="fab fa-youtube"></i></a>
        <a href="https://www.instagram.com/yourusername" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
</footer>

</html>
