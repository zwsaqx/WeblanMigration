@auth
    @include('partials.header')

    <body class="body">
        <div class='loggedInBody'>
            <h1 class='header1'>Data Link Review Questions</h1>
            <p><span class="darkBlueText">Question 1</span>: What are the advantages of fibre optic over other mediums? </p>
            <p><span class="redText">Answer</span>: It is not susceptible to electrical interference. Higher bandwidth.
                Signal
                degrading is small over long distances.</p>
            <br />
            <p><span class="darkBlueText">Question 2: </span>What is the difference between a straight-through and crossover
                cable?
            </p>
            <p><span class="redText">Answer:</span> A straight-through cable is used to connect two different devices
                together
                (Computers to switches, hubs)
                . Crossover cable is used to connect two similar devices together.</p>
            <br />
            <p><span class="darkBlueText">Question 3:</span> List some types of cable used in data communication? </p>
            <p><span class="redText">Answer: </span>STP, UTP, coaxial, fibre optic.</p>
            <br />
            <p><span class="darkBlueText">Question 4: </span>What are the possible analog-to-analog modulation techniques?
            </p>
            <p><span class="redText">Answer:</span> Amplitude modulation, Phase modulation, Frequency modulation.</p>
            <br />
            <p><span class="darkBlueText">Question 5:</span> What are the possible digital-to-analog modulation techniques?
            </p>
            <p><span class="redText">Answer:</span> Amplitude Shift Keying, Frequency Shift Keying, Phase Shift Keying.</p>
            <br />
            <p><span class="darkBlueText">Question 6: </span> List some common type of transmission impairment?</p>
            <p><span class="redText">Answer: </span> Noise, Distortion, Attenuation, Delay Distortion, Dispersion.</p>
            <br />
            <p><span class="darkBlueText">Question 7:</span> What are the components of data communication?</p>
            <p><span class="redText">Answer:</span> Message, Sender, Receiver, Transmission Medium, Protocol.</p>
            <br />
            <p><span class="darkBlueText">Question 8:</span> What is the color sequence of a straight-through cable?</p>
            <p><span class="redText">Answer: </span>Orange/white, orange, green/white, blue, blue/white, green, brown/white,
                brown
                at both ends of the cable.</p>
            <br />
            <p><span class="darkBlueText">Question 9: </span>What is the maximum length allowed for an UTP cable?</p>
            <p><span class="redText">Answer:</span> 90 to 100 meters.</p>
            <br />
            <p><span class="darkBlueText">Question 10: </span>What are the common techniques for error detection?</p>
            <p><span class="redText">Answer:</span> CRC and Checksum.</p>
            <br />
            <p><span class="darkBlueText">Question 11:</span> What are the common techniques for error correction? </p>
            <p><span class="redText">Answer:</span> Automatic repeat requests, Error-correcting code, Hybrid schemes.</p>
            <br />
            <p><span class="darkBlueText">Question 12:</span> What is noise in data transfer?</p>
            <p><span class="redText">Answer:</span> Noise is unwanted electrical or electromagnetic energy that degrades the
                quality
                of signals and data.</p>
            <br />
            <p><span class="darkBlueText">Question 13:</span> What is asynchronous transmission? </p>
            <p><span class="redText">Answer: </span>The transmission of data in which each character is a self-contained
                unit with
                its own start and stop bits and an uneven interval between them.</p>
            <br />
            <p><span class="darkBlueText">Question 14:</span> What is the purpose of cables being shielded and having
                twisted pairs?
            </p>
            <p><span class="redText">Answer:</span> The main purpose is to prevent crosstalk. </p>
            <br />
            <p><span class="darkBlueText">Question 15:</span> What is crosstalk? </p>
            <p><span class="redText">Answer: </span>A type of electromagnetic interference (noise) that affects data being
                transmitted.</p>
            <br />
            <p><span class="darkBlueText">Question 16:</span> What is ICMP</p>
            <p><span class="redText">Answer:</span> Internet Control Message Protocol. It provides rules and standards for
                message
                communication in TCP/IP stack.</p>
            <br />
            <p><span class="darkBlueText">Question 17:</span> What is the maximum distance that a fibre optic cable can
                take? </p>
            <p><span class="redText">Answer:</span> Multimode: up to 10Km, Single mode: up to 60Km.</p>
            <br />
            <p><span class="darkBlueText">Question 18:</span> What is the transmission rate of a CAT5 cable?</p>
            <p><span class="redText">Answer: </span>10 to 100 mbps.</p>
            <br />
            <p><span class="darkBlueText">Question 19:</span> What is the common transmission rate of fibre optic cable?
            </p>
            <p><span class="redText">Answer: </span>Per channel speed: 100Gbit/s.</p>
            <br />
            <p><span class="darkBlueText">Question 20: </span> What should you do if you want to transfer files between
                different
                platforms:</p>
            <p><span class="redText">Answer:</span> Using FTP (File Transfer Protocol) because it is platform independent.
            </p>
            <br />
            <p><span class="darkBlueText">Question 21:</span> What does the header of the frame contains? </p>
            <p><span class="redText">Answer:</span> Synchronization bytes, Addresses and Frame Identifier.</p>
            <br />
            <p><span class="darkBlueText">Question 22:</span> Describe the two sublayers in the Data Link Layer.</p>
            <p><span class="redText">Answer:</span> The upper sublayer defines software processes, providing services to the
                network
                layer protocols. The Lower sublayer defines the media access processes performed by the hardware.</p>
            <br />
            <p><span class="darkBlueText">Question 23:</span> List the three elements of a Data Link Frame. </p>
            <p><span class="redText">Answer: </span>Data, Header, Trailer.</p>
            <br />
            <p><span class="darkBlueText">Question 24:</span> Is the Data Link Address the MAC Address? True or False?</p>
            <p><span class="redText">Answer:</span> True. </p>
            <br />
            <p><span class="darkBlueText">Question 25:</span> What type of architecture does PPP use? </p>
            <p><span class="redText">Answer: </span>Layer Architecture.</p>
            <br />
            <p><span class="darkBlueText">Question 26:</span> Does a point-to-point link need Data Link Address?</p>
            <p><span class="redText">Answer:</span> No.</p>
            <br />
            <p><span class="darkBlueText">Question 27:</span> How is the Data Link address shown? </p>
            <p><span class="redText">Answer:</span> In Hexadecimal, 48bits.</p>
            <br />
            <p><span class="darkBlueText">Question 28:</span> Which LAN technologies use controlled access?</p>
            <p><span class="redText">Answer: </span>Token ring, FDDI.</p>
            <br />
            <p><span class="darkBlueText">Question 29:</span> What is the name given to addresses added at the Data Link
                Layer? </p>
            <p><span class="redText">Answer: </span>Physical Address.</p>
            <br />
            <p><span class="darkBlueText">Question 30: </span> What options are available to use with PPP?</p>
            <p><span class="redText">Answer:</span> Authentication, multilink and compression. </p>
            <br />
            <a href="#Top">[To Top]</a>

        </div>
    </body>
    @include('partials.footer')
@else
    <meta http-equiv="refresh" content="0; URL=/">
@endauth
