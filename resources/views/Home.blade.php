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

    <div class="DarkPurpleBar"></div>
    <div class="PurpleBar">
        <div class="NavBar">
            <div class="dropdown">
                <button class='navbarButton'>Bluetooth</button>
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
                <button> DataLink </button>
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
                <button>TCP / IP</button>
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


<body class="body">

    <br />
    <h1 class="header">WebLan Designer</h1>
    <form action="/logout" method="post">
        @csrf
        <button class="button">Logout</button>
    </form>



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
