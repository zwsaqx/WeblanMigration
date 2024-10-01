<!DOCTYPE html>
<html lang="en">
@auth
    @include('partials.header')

    <body class="body">
        <div class='loggedInBody'>
            <h1 class="header1">ECMS WebLAN Homepage</h1>

            <div class="header1">&#8220;An Interactive system for Teaching and Learning Wired, Wireless LAN, TCP/IP
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

            <p>For further information or enquiries please contact at <a
                    href="mailto:nsarkar@aut.ac.nz">nsarkar@aut.ac.nz</a> </p>
            <p align="center">Copyright &copy2014 to 2024 Auckland University of Technology. All rights reserved.
            </p>


        </div>
        <br /> <br />
    </body>

    @include('partials.footer')
@else
    <meta http-equiv="refresh" content="0; URL=/" />

@endauth

</html>
