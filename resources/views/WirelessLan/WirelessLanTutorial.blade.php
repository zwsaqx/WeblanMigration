<!DOCTYPE html>
@auth
    <html lang="en">
    @include('partials.header')

    <body class="body">
        <div class='loggedInBody'>
            <h1 class='header1'>Wireless Lan Tutorial </h1>

            <h3>Learning Outcomes</h3>
            <p>By the end of this tutorial, you will be able to:</p>
            <ol type="1">
                <li>
                    Define the following key terms related to wireless LAN design: Ad hoc network, Infrastructure network,
                    PCMCIA card, Access point, Wireless channel, CSMA/CA, OFDM, Modulation, Demodulation, Direct Sequence
                    Spread Spectrum (DSSS), Frequency Hopping Spread Spectrum (FHSS).

                </li>
                <li>
                    Develop various wireless LAN models using the modelling feature of WebLan-Designer 3.

                </li>
                <li>
                    Solve Wireless LAN design exercises on paper and verify the results using WebLan-Designer 3.

                </li>
                <li>
                    Assess your knowledge about wireless networking through the interactive quizzes.
                </li>
                <li>
                    Solve scenario based Wireless LAN design exercises.

                </li>
            </ol>

            <h3>Lab Materials and Setup</h3>
            <p>For this tutorial, you will need:</p>
            <ul>
                <li>Pencil and paper.</li>
                <li>Internet access.</li>
                <li>Access to the WebLan-Designer 3.</li>
            </ul>
            <h3>Recommended sequence of study</h3>
            <img src="{{ asset('Images/Wireless/wireless_tutorial.gif') }}" alt="">
            <h3>Task 1: Access the WebLan Designer 3 at <a href="http://weblandesigner.aut.ac.nz">WebLan-Designer 3</a></h3>
            <h3 style="display: inline;">Task 2: Wireless Lan Quiz </h3>
            <p style="display: inline;">[Time up to 10 minutes]</p>
            <ul>
                <li>Go through the <a href="/WirelessLan/WirelessLanQuiz">WirelessLan Quiz</a> to test your prior knowledge
                    of Lan design. Record your score for self assessment.</li>
            </ul>

            <h3 style="display: inline;">Task 3: Wireless Lan Key Terms </h3>
            <p style="display: inline;">[Time up to 10 minutes]</p>
            <ul>
                <li>Go through the <a href="/WirelessLan/WirelessLanKeyTerms">WirelessLan Key Terms</a> to brush your
                    knowledge of Lan design.</li>
            </ul>

            <h3 style="display: inline;">Task 4: Wireless Lan Modelling </h3>
            <p style="display: inline;">[Time up to 10 minutes]</p>
            <ul>
                <li>Explore the <a href="/WirelessLan/WirelessLanModelling">WirelessLan Modelling</a> features and develop
                    various Lan models.</li>
            </ul>

            <h3 style="display: inline;">Task 5: Lan Design Exercises </h3>
            <p style="display: inline;">[Time up to 10 minutes]</p>
            <ul>
                <li> Solve the following Wireless Lan design exercises on paper and then verify the results using the WebLan
                    Modelling</li>
            </ul>
            <p>You are given the following components:</p>
            <table>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                </tr>
                <tr>
                    <td>Mobile station</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>PDA</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>Printer</td>
                    <td>2</td>
                </tr>
            </table>
            <p>Draw a diagram to show how the above components can be connected to construst a Wireless Lan using the
                following topologies:</p>

            <ol type="1">
                <li>AD Hoc</li>
                <li>Infrastructure</li>

            </ol>
            <a href="/WirelessLan/WirelessLanModelling">Click here for Wireless Lan Modelling </a>
            <br>
            <br>

            <h3 style="display: inline;">Task 6: Review Questions </h3>
            <p style="display: inline;">[Time up to 10 minutes]</p>
            <ul>
                <li>Go through the <a href="/WirelessLan/WirelessLanReview">review questions and answers</a></li>
            </ul>

            <h3 style="display: inline;">Task 7: Wrieless Lan Quiz </h3>
            <p style="display: inline;">[Time up to 10 minutes]</p>
            <ul>
                <li>Go through the <a href="/WirelessLan/WirelessLanQuiz">Wired Lan Quiz</a> again to test your knowledge
                    about Lan design. Record your score for self assessment.</li>
                <li>Give these two scores (from Task 2 and 7) to your lecturer. This exercise will enable us to evaluate the
                    effectivness of the WebLan-Desinger 3.</li>
            </ul>
        </div>
    </body>

    @include('partials.footer')
@else
    <meta http-equiv="refresh" content="0; URL=/">
@endauth

</html>
