<!DOCTYPE html>
<html lang="en">
    @auth

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>TCP/IP Tutorial</h1>
    <h3>Learning outcomes</h3>
    <p>By the end of this tutorial, you will be able to:</p>
    <ol type="1">
        <li>Define the following key terms related to TCP/IP Networking: Address Resolution Protocol, Application Layer,
            broadcast domain, collision domain, convergence, default route, domain name system, EIGRP, gateway, frame,
            hop limit, IPv4, MAC address.</li>
        <li>Using Network Simulator to create your own network, assign IP address for PCs, router interfaces and observe
            how packet are transferred between nodes
        </li>
        <li>Mastering Subnetting technique. Troubleshooting simple TCP/IP networks.
        </li>
        <li>Assess your knowledge about TCP/IP Networking through the interactive quizzes.
        </li>
    </ol>

    <h3>Lab Materials and Setup</h3>
    <p>For this tutorial, you will need:
    </p>
    <ul>
        <li>Pencil and paper.
        </li>
        <li>Internet access.
        </li>
        <li>Access to the WebLan-Designer.
        </li>
    </ul>

    <h3>Recommended sequence of study
    </h3>

    <img src="{{ asset('Images/TCPIP/TCPIP_Tutorial.png') }}" alt="">

    <h3>Task 1: Access the WebLan Designer 3 at <a href="http://weblandesigner.aut.ac.nz">WebLan-Designer 3</a></h3>
    <h3 style="display: inline;">Task 2: TCP/IP Model Quiz </h3>
    <p style="display: inline;">[Time up to 10 minutes]</p>
    <ul>
        <li>Go through the <a href="/TCPIP/TCPIPQuiz">TCP/IP Model Quiz</a> to test your prior knowledge
            about TCP/IP design. Record your score for self assessment.</li>
    </ul>

    <h3 style="display: inline;">Task 3: TCP/IP Key Terms </h3>
    <p style="display: inline;">[Time up to 10 minutes]</p>
    <ul>
        <li>Go through the <a href="/TCPIP/TCPIPKeyTerms">TCP/IP Key Terms</a> to brush your knowledge about
            TCP/IP design.</li>
    </ul>

    <h3 style="display: inline;">Task 4: TCP/IP Modelling </h3>
    <p style="display: inline;">[Time up to 10 minutes]</p>
    <ul>
        <li>Explore the <a href="/TCPIP/TCPIPModelling">TCP/IP Modelling</a> features and develop various
            TCP/IP models.</li>
    </ul>

    <h3 style="display: inline;">Task 5: TCP/IP Networking Scenarios </h3>
    <p style="display: inline;">[Time up to 10 minutes]</p>
    <ul>
        <li>Go through the <a href="/TCPIP/TCPIPScenarios">Given real-world TCP/IP situations.</a></li>
    </ul>


    <h3 style="display: inline;">Task 6: Review Questions </h3>
    <p style="display: inline;">[Time up to 10 minutes]</p>
    <ul>
        <li>Go through the <a href="/TCPIP/TCPIPReview">review questions and answers</a></li>
    </ul>

    <h3 style="display: inline;">Task 7: TCP/IP Quiz </h3>
    <p style="display: inline;">[Time up to 10 minutes]</p>
    <ul>
        <li>Go through the <a href="/TCPIP/TCPIPQuiz">TCP/IP Quiz</a> again to test your knowledge about
            TCP/IP design. Record your score for self assessment.</li>
        <li>Give these two scores (from Task 2 and 7) to your lecturer. This exercise will enable us to evaluate the
            effectivness of the Web-Desinger 3.</li>
    </ul>
</body>
@else
<meta http-equiv="refresh" content="0; URL=/">
@endauth

</html>
