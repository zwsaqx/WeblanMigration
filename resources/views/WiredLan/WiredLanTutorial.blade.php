<!DOCTYPE html>
@auth
    <html lang="en">

    @include('partials.header')

    <body class="body">
        <div class='loggedInBody'>


            <h1 class='header1'>Wired Lan Tutorial</h1>
            <h3>Learning outcomes </h3>
            <p>By the end of this tutorial, you will be able to:
                <br>
            <ol type="1">
                <li>Define the following key terms related to Lan design: Bus, star and ring physical topology,channel,
                    channel
                    access protocol, CSMA/CD, token passing, workstation, file server, hubs, switches, routers, UTP Cat
                    5e,coaxial cable, and optical cable.
                <li>Develop various Lan models using the modelling feature of WebLan Designer 3.
                <li>Solve Lan desing exercises on paper and verify the results using WebLan Designer 3.
                <li>Assess your knowledge of networking through the interactive quizzes.
                <li>Solve scenario based Lan design exercises.
            </ol>
            <h3>Lab Materials and Setup</h3>
            <p>For this tutorial you will need:</p>
            <ul style="list-style-type:square">
                <li>Pencil and paper.</li>
                <li>Internet access.</li>
                <li>Access to the WebLan- Designer 3.</li>
            </ul>
            <h3>Recommended sequence of study</h3>
            <img src="{{ asset('Images/Wired/wired_tutorial.gif') }}" alt="">

            <h3>Task 1: Access the WebLan Designer 3 at <a href="http://weblandesigner.aut.ac.nz">WebLan-Designer 3</a></h3>

            <h3 style="display: inline;">Task 2: Wired Lan Quiz </h3>
            <p style="display: inline;">[Time up to 10 minutes]</p>
            <ul>
                <li>Go through the <a href="/WiredLan/WiredLanQuiz">WiredLan Quiz</a> to test your prior knowledge of Lan
                    design. Record your score for self assessment.</li>
            </ul>

            <h3 style="display: inline;">Task 3: Wired Lan Key Terms </h3>
            <p style="display: inline;">[Time up to 10 minutes]</p>
            <ul>
                <li>Go through the <a href="/WiredLan/WiredLanKeyTerms">WiredLan Key Terms</a> to brush your knowledge of
                    Lan
                    design.</li>
            </ul>

            <h3 style="display: inline;">Task 4: Wired Lan Modelling </h3>
            <p style="display: inline;">[Time up to 10 minutes]</p>
            <ul>
                <li>Explore the <a href="/WiredLan/WiredLanModelling">WiredLan Modelling</a> features and develop various
                    Lan
                    models.</li>
            </ul>

            <h3 style="display: inline;">Task 5: Lan Design Exercises </h3>
            <p style="display: inline;">[Time up to 10 minutes]</p>
            <ul>
                <li> Solve the following Wired Lan design exercises on paper and then verify the results using the WebLan
                    Modelling</li>
            </ul>
            <p>You are given the following components:</p>
            <table>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                </tr>
                <tr>
                    <td>File server</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Workstation</td>
                    <td>15</td>
                </tr>
                <tr>
                    <td>Printer</td>
                    <td>2</td>
                </tr>
            </table>
            <p>Draw a diagram to show how the above components can be connected to construst a Lan using the following
                topologies:</p>

            <ol type="1">
                <li>Physical bus and logical bus</li>
                <li>Physical bus and logical star</li>
                <li>Physical ring and logical ring </li>
                <li>Physical star and logical ring</li>
                <li>Physical star and logical star</li>
            </ol>
            <a href="/WiredLan/WiredLanModelling">Click here for Lan Modelling </a>
            <br>
            <br>

            <h3 style="display: inline;">Task 6: Review Questions </h3>
            <p style="display: inline;">[Time up to 10 minutes]</p>
            <ul>
                <li>Go through the <a href="/WiredLan/WiredLanReview">review questions and answers</a></li>
            </ul>

            <h3 style="display: inline;">Task 7: Wried Lan Quiz </h3>
            <p style="display: inline;">[Time up to 10 minutes]</p>
            <ul>
                <li>Go through the <a href="/WiredLan/WiredLanQuiz">Wired Lan Quiz</a> again to test your knowledge about
                    Lan
                    design. Record your score for self assessment.</li>
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
