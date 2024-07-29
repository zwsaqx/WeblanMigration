<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebLan Designer</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('../css/app.css') }}">
    <div class="logo_right">
        <img src="{{ asset('../Images/AUT_Logo.jpg') }}" alt="AUT_Logo" class="logo">
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
            <div class='dropdown'> <button class='navbarButtonHome' onclick="window.location.href='/Home'">
                    <p class="homebuttontext">Home</p>
                </button>
            </div>
            <div class="dropdown">
                <button class='navbarButton' onclick="window.location.href='/WiredLan/WiredLanTutorial'">Wired
                    LAN</button>
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
                <button class='navbarButton' onclick="window.location.href='/WirelessLan/WirelessLanTutorial'">Wireless
                    LAN</button>
                <div class="dropdown-content">
                    <a href="/WirelessLan/WirelessLanTutorial">Tutorial</a>
                    <a href="/WirelessLan/WirelessLanQuiz">Quiz</a>
                    <a href="/WirelessLan/WirelessLanModelling">Modelling</a>
                    <a href="/WirelessLan/WirelessLanScenarios">Scenarios</a>
                    <a href="/WirelessLan/WirelessLanKeyTerms">Key Terms</a>
                    <a href="/WirelessLan/WirelessLanReview">Review Questions</a>
                </div>
            </div>

            <div class="dropdown">
                <button class='navbarButton' onclick="window.location.href='/TCPIP/TCPIPTutorial'">TCP / IP</button>
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
                <button class='navbarButton' onclick="window.location.href='/DataLink/DataLinkTutorial'"> DataLink
                </button>
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
                <button class='navbarButton'
                    onclick="window.location.href='/Bluetooth/BluetoothTutorial'">Bluetooth</button>
                <div class="dropdown-content">
                    <a href="/Bluetooth/BluetoothTutorial">Tutorial</a>
                    <a href="/Bluetooth/BluetoothQuiz">Quiz</a>
                    <a href="/Bluetooth/BluetoothModelling">Modelling</a>
                    <a href="/Bluetooth/BluetoothScenarios">Scenarios</a>
                    <a href="/Bluetooth/BluetoothKeyTerms">Key Terms</a>
                    <a href="/Bluetooth/BluetoothReview">Review Questions</a>
                </div>
            </div>
        </div>
    </div>

</head>
