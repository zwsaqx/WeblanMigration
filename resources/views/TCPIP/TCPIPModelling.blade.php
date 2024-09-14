<!DOCTYPE html>
<html lang="en">
@auth
    @include('partials.header')

    <body class="body">
        <div class='loggedInBody'>
            <h1 class="header1">TCP/IP Modelling</h1>

            <p><b>This is the link to download the Network Simulator program. Please click on the link below to start the
                    download process.</b></p>
            </ br>

            <a href="{{ route('downloadJar') }}">Network Simulator v2.8 RC</a>

            <p>System Requirement required to run the Network Simulator:</p>

            <ul>
                <li>Windows XP, Windows 7</li>
                <li>16 MB RAM or higher</li>
                <li>Internet Connection </li>
                <li>Mouse and Keyboard</li>
            </ul>

            <p><b>In order for the program to run, you need to install Java on your PC or laptop.</b></p>

            <p>If you do not have Java on your computer:</p>

            <a href="http://www.java.com/en/download/index.jsp" target="_blank">Click here to download Java.</a>



        </div>
    </body>
    @include('partials.footer')
@else
    <meta http-equiv="refresh" content="0; URL=/">
@endauth

</html>
