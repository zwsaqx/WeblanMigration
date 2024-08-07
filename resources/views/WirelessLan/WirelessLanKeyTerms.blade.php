<!DOCTYPE html>
@auth
    <html lang="en">

    @include('partials.header')

    <body class="body">
        <div class='loggedInBody'>
            <h1 class="header1">Wireless LAN Key Terms</h1>
            <br />
            <div class="header1">
                <a href="#a">[A]</a> <a href="#b">[B]</a> <a href="#c">[C]</a>
                <a href="#d">[D]</a> <a href="#e">[E]</a> <a href="#f">[F]</a> <a href="#g">[G]</a>
                <a href="#h">[H]</a> <a href="#i">[I]</a> <a href="#k">[K]</a> <a href="#l">[L]</a>
                <a href="#m">[M]</a> <a href="#n">[N]</a> <a href="#o">[O]</a> <a href="#p">[P]</a>
                <a href="#r">[R]</a> <a href="#s">[S]</a> <a href="#t">[T]</a> <a href="#u">[U]</a>
                <a href="#v">[V]</a> <a href="#w">[W]</a>
            </div><br>
            <br>


            <span class="darkBlueText" id="a">Access Point: </span>See AP. <a href="#top">[Back to Top]</a><br>
            <br>

            <span class="darkBlueText">Ad Hoc: </span>A class of wireless networking architecture
            in which there is no fixed infrastructure or wireless access points. In ad hoc
            networks, each mobile station acts as router to communicate with other stations.
            Such a network can exist on a temporary basis to share some resources among the
            mobile stations. Ad hoc topologies are an example of peer-to-peer networks. <a href="#top">[Back
                to Top]</a><br>
            <br>

            <span class="darkBlueText">AP: </span>Stands for Access Point. Typically, infrastructure-based wireless networks
            provide access to the wired backbone network via an AP. The AP may act as a repeater, bridge, router, or even as
            a
            gateway to regenerate, forward, filter, or translate messages. All communications between mobile devices have to
            take place via the AP. <a href="#top">[Back to Top]</a><br>
            <br>

            <span class="darkBlueText">Antenna: </span>An electromagnetic device used to send and receive broadcast signals
            at
            particular frequencies. Wireless networking devices use antennae. <a href="#top">[Back to Top]</a><br>
            <br>
            <span class="darkBlueText" id="b">Beacon: </span>A special packet sent by a
            device to announce its presence. <a href="#top">[Back to Top]</a><br>
            <br>
            <span class="darkBlueText">Beacon Interval: </span>The period of time before a <em>beacon </em> will be sent out
            (in
            <em>milliseconds </em> - ms or in <em>kilomicroseconds </em> - Kmsec)
            . <a href="#top">[Back to Top]</a><br>
            <br>
            <span class="darkBlueText">Bluetooth:</span> A wireless computing and telecommunications
            specification for personal area networks (<em>PAN</em>s). Used to define a communication
            protocol for the interaction of mobile personal computing devices and computers.
            Operates in a close range around 10 metres, data rate
            up
            to
            1Mbps at 2.4GHz. <a href="#top">[Back
                to Top]</a><br>
            <br>
            <span class="darkBlueText">BSS: </span>Stands for Basic Service Set. Mobile stations which are within the same
            radio
            coverage area, communicate with the associated access point (AP) forming a basic service set (BSS). <a
                href="#top">[Back to Top]</a><br>
            <br>
            <span class="darkBlueText">BSSID: </span>Stands for Basic Service Set Identifier. Each AP (access point) in a
            BSS
            network has a unique identifier (BSSID). <a href="#top">[Back to Top]</a><br>
            <br>
            <span class="darkBlueText" id="c">CDMA:</span> Stands for Code Division Multiple Access. A digital
            wireless
            transmission method based on the principle of encoding signals using different communication channels (multiple
            frequencies) simultaneously. A <em>spread spectrum </em>technique. <a href="#top">[Back to Top]</a><br>
            <br>
            <span class="darkBlueText">CDPD:</span> Stands for Cellular Digital Packet Data. A cellular communications
            technology for mobile computing; sends data over unused cellular voice channels at a rate of 19.2Kbps. <a
                href="#top">[Back to Top]</a><br>
            <br>
            <span class="darkBlueText">Cell:</span> In mobile telephony this term is used to denote the geographical area
            covered and served by a cell office. <a href="#top">[Back to Top]</a><br>
            <br>

            <span class="darkBlueText">Cell Office:</span> The office that controls a particular cell (the cell
            transmitter). <a href="#top">[Back to Top]</a><br>
            <br>
            <span class="darkBlueText">Cellular Packet Radio:</span> A generic term for mobile computing communications
            technologies; sends data over radio frequencies different from those used for cellular telephones. <a
                href="#top">[Back to Top]</a><br>
            <br>

            <span class="darkBlueText">Cellular Telephony:</span> See <em>mobile telephony</em>. <a href="#top">[Back to
                Top]</a><br>
            <br>

            <span class="darkBlueText">CO:</span> Stands for Central Office. Usually refers
            to the local communication provider's facility where copper local telephone cables
            (also known as the &quot;subscriber loop&quot;, the &quot;local loop&quot; or the &quot;last mile&quot;)
            link
            to long-distance digital fibre-optic communications lines. <a href="#top">[Back to Top]</a><br>
            <br>
            <span class="darkBlueText">Connectionless:</span> A protocol that sends the data
            across the network to its destination without a guarantee of receipt. Radio broadcasting
            is an example of a connectionless communication. <a href="#top">[Back to Top]</a><br>
            <br>
            <span class="darkBlueText">Connection-Oriented:</span> A protocol that establish
            a connection between the sender and the receiver, to ensure that source data
            will be delivered to its destination. A telephone conversation is an example
            of connection-oriented communication. <a href="#top">[Back to Top]</a><br>
            <br>
            <span class="darkBlueText">CSMA/CA: </span>Carrier Sense Multiple Access with Collision Avoidance<strong>.
            </strong>This is a popular access method used in wireless LANs. Before transmission, a station senses the
            channel.
            If the channel is idle, the packet is transmitted right away. If the channel is busy, the stations keep sensing
            the
            channel until it is idle, then waits a uniformly distributed random backoff period before sensing the channel
            again.
            If the channel is still idle it transmits its packet, otherwise it backs off again. The backoff mechanism
            results in
            the avoidance of the collision of packets from multiple transmitters. All directed traffic receives a positive
            acknowledgement. Packets are retransmitted if an acknowledgement is not received. <a href="#top">[Back to
                Top]</a><br>
            <br>
            <span class="darkBlueText" id="d">Data Link Layer:</span> Layer 2 in the OSI reference
            model. Main responsibilities include access to the networking medium (physical
            layer) and error-free delivery of data frames. <a href="#top">[Back to Top]</a><br>
            <br>
            <span class="darkBlueText">Demodulation: </span> The inverse process of modulation is called demodulation. In
            this
            process the information signal is separated from the carrier signal.<a href="#top"> [Back to Top]</a><br>
            <br>
            <span class="darkBlueText">Dipole Antenna: </span>An antenna typically used with wireless networking devices in
            offices (but away from any exterior walls to avoid signals leaking out). The signal range is 360 degrees
            horizontally and 75 degrees vertically. <a href="#top">[Back to Top]</a><br>
            <br>
            <span class="darkBlueText">Directional Antenna:</span> An antenna which is capable of signal redirection as well
            as
            of signal enhancement (i.e. it receives a signal and then enhances its strength, sending it in a certain
            direction).
            <a href="#top">[Back to Top]</a><br>
            <br>
            <span class="darkBlueText">DSSS: </span>Stands for Direct Sequence Spread Spectrum. A transmission technique
            used to
            avoid interference and achieve a higher throughput. Instead of a single carrier frequency, a sender and receiver
            agree to use a set of frequencies concurrently. The practical application of DSSS is in wireless LANs. <a
                href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText" id="e">EAP:</span> Stands for Extensible Authentication Protocol. Used as an
            optional <em>IEEE 802.1x </em> security feature. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Electronic Eavesdropping:</span> &quot;Listening&quot; to signals
            passing through a communications medium. Eavesdropping in wireless networking
            might be especially easy, because data are broadcast into the atmosphere.<a href="#top"> [Back to
                Top]</a><br />
            <br />
            <span class="darkBlueText">ESS: </span>Stands for Extended Service Set. In a large scale campus-wide wireless
            LAN
            (<em>WLAN </em>)
            a wired backbone network would connect several BSSs via APs to form a single
            network and thereby extend the wireless coverage area. Such a single network
            is called an extended service set (ESS) and has its own identifier, the ESSID,
            which is the 'name' of that network and is used to distinguish it from different
            networks. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText" id="f">FHSS: </span>Stands for Frequency Hopping Spread Spectrum. A
            technology
            normally used in wireless LANs. FHSS operates by transmitting short bursts of data on different frequencies. One
            burst is transmitted on one frequency, a second burst is transmitted on a second and different frequency, and so
            forth. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText" id="g">Gateway:</span> A term used to denote the software installed on a
            computer
            that transmits data between networks. Examples include gateways in intranets through which Internet traffic is
            directed, or email gateways. In wireless networking, gateways are often used to authenticate users and as access
            points. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Geosynchronous Orbit: </span> A satellite orbit where the satellite remains fixed
            over a
            certain spot (on the Earth). A minimum of three <em>geosynchronous satellites </em> are required for global
            coverage. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Geosynchronous Satellites:</span> These are placed at about 36,000 km above the
            Earth,
            the speed of their rotation matches exactly the speed of the rotation of the Earth. Microwave satellites are
            geosynchronous. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">GHz (GigaHertz): </span> 1 000 000 000 Hz. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText" id="h">HF: </span>Stands for High Frequency<strong>. </strong>HF waves are
            Radio
            waves (3 MHz to 30 MHz). Propagate using line-of-sight. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Hot Spot: </span>A spot within an AP's range where
            anyone can walk in and connect to the network (either free or for a fee). Typically
            short range. Also called &quot;cool spot&quot;. <a href="#top">[Back to Top]</a><br />
            <br />

            <span class="darkBlueText">IEEE 802: </span>An IEEE project to define LAN standards
            for the data link and the physical layers of the OSI model. <a href="#top">[Back
                to Top]</a><br />
            <br />
            <span class="darkBlueText">IEEE 802.11:</span> The original standard for wireless LAN with a maximum bandwidth
            of
            1- and 2-Mbps operating in the 2.4 GHz band, adopted in 1997. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">IEEE 802.11a:</span> The high-speed wireless LAN with a maximum bandwidth of 54 Mbps
            operating in the 5 GHz band, adopted in 1999. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">IEEE 802.11b:</span> The wireless LAN standard with a maximum bandwidth of 11 Mbps
            operating in the 2.4 GHz band, adopted in 1999. See also <em>Wi-Fi</em>. <a href="#top">[Back to
                Top]</a><br />
            <br />
            <span class="darkBlueText">IEEE 802.11b/a/g:</span> Generally refers to wireless LAN standards. <a
                href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">IEEE 802.11g: </span>A newer standard, backward compatible
            with the IEEE 802.11b, with a maximum bandwidth of 54 Mbps operating in the 2.4
            GHz band. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">IEEE 802.1x: </span>An IEEE standard for EAP encapsulation
            (both for wired and for wireless Ethernet, but particularly well suited for wireless
            LANs). <a href="#top">[Back to Top]</a><br />
            <br />

            <span class="darkBlueText">Infrared: </span>A line-of-sight transmission method that that uses electromagnetic
            waves whose frequency range is above that of microwave but below the visible light (operating between 100 GHz
            and
            100 THz). Infrared frequencies are often used for short or medium-range LANs with point-to-point network
            connections
            (from several meters up to 40 km). <a href="#top">[Back to Top]</a><br />
            <br />

            <span class="darkBlueText">Infrastructure:</span> A class of wireless networking architecture in which mobile
            stations communicate with each other via access points, which are usually linked to a wired backbone. Such a
            network
            has fixed infrastructure and a centralized control. The infrastructure topology is essentially a client-server
            network with a wired backbone network providing services through its access points (APs). <a
                href="#top">[Back
                to Top]</a><br />
            <br />

            <span class="darkBlueText" id="i">Ionosphere:</span></span> The outermost layer
            of the Earth's atmosphere, just below 'space'.<a href="#top">[Back to Top]</a><br />
            <br />

            <span class="darkBlueText">Ionospheric Propagation:</span> Radio waves transmission
            where the waves first radiate up into the ionosphere of the Earth and then reflect
            back to the Earth. <a href="#top">[Back to Top]</a><br />
            <br />

            <span class="darkBlueText">Isotropic Antenna:</span> A theoretical, ideal antenna
            whose signal range is 360 degrees in all directions. It is used as a baseline
            for measuring a real antenna's signal strength, in units called &quot;dBi&quot;, where
            the i stands for <em>isotropic antenna</em>. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">IR:</span> See <em>infrared. </em><a href="#top">[Back to Top]</a><br>
            <br>
            <span class="darkBlueText" id="k">KHz (KiloHertz): </span> 1000 Hertz. <a href="#top">[Back to
                Top]</a><br />
            <br />
            <span class="darkBlueText">Kilomicrosecond: </span>One kilomicrosecond (Kmsec)
            equals 1000 <em>microseconds </em> (the same as one <em>millisecond</em>). <a href="#top">[Back
                to Top]</a><br />
            <br />
            <span class="darkBlueText" id="l">LEO Satellites: </span>Low Earth Orbit satellites, placed close to
            the
            earth; they circulate at a very high speed to maintain their orbit. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Line-of-Sight:</span> Refers to the need for narrow-band
            transmitters and receives to have an unobstructed path between them. If they
            can 'see' each other, they can also exchange data with one another. <a href="#top">[Back
                to Top]</a><br />
            <br />
            <span class="darkBlueText">Line-of-Sight Transmission:</span> A type of wireless
            transmission in which the transmitter and the receiver need to be able to 'see'
            each other i.e. they must be in each other's <em>line-of-sight </em>. A limitation of line-of-sight is that the
            transmission is interrupted by large land masses, such as hills and mountains.<a href="#top">[Back to
                Top]</a><br />
            <br />
            <span class="darkBlueText">LF: </span>Stands for Low frequency . Radio waves in the range between 30 KHz and
            300
            KHz. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText" id="m">MEO Satellites:</span> Medium Earth orbit
            Satellites, &quot;positioned&quot; between LEO and geosynchronous satellites; very susceptible
            to weather conditions. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">MHz (MegaHertz): </span> 1 000 000 (10<font size="2"><sup>6</sup></font>)
            Hertz.
            <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Millisecond: </span>One millisecond (msec) equals 0.001
            seconds. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Microsecond:</span> One microsecond (&mu;s) equals 0.000001
            (10<font size="2"><sup>-6</sup></font>) seconds. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Microwave: </span> Electromagnetic waves in the frequency range 1 to 30 gigahertz.
            Wireless LAN such as IEEE 802.11b/a uses frequency in the microwave range. Noticeable because of the dish shaped
            antennas. Analogue, digital, or a combination of both signals can be transmitted over the microwave frequency
            band.
            It can be affected by weather conditions. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">MF: </span>Stands for Middle Frequency. Radio waves in the range of:300 KHz to 3
            MHz.<a href="#top"> [Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Mobile Telephony: </span> A wireless communication
            technique where the geographical area covered is divided into cells; each cell
            is served by its own transmitter. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Modulation: </span>A method in which a characteristic of an electromagnetic wave
            (the
            carrier) is altered by the information-bearing signal. Types of modulation include amplitude modulation,
            frequency
            modulation, phase modulation and pulse-code modulation. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">MTSO: </span>Stands for Mobile Telephony Switching Office. The office that controls
            and
            coordinates communication between the <em>cell office </em> (CO) and the main telephone control office. <a
                href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText" id="n">Network Layer:</span> Layer 3 of the OSI reference model. Main
            responsibilities include node addressing and routing of packets across interconnected networks. <a
                href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Narrow-Band Radio:</span> A broadcast wireless technology which uses a single radio
            frequency. Low-powered narrow-band radio does not require licensing but is limited to a 1000 m range. <a
                href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText" id="o">OFDM: </span>Stands for Orthogonal Frequency Division Multiplexing.
            This
            wireless transmission technique breaks the original signal into smaller signals and uses different frequencies
            to
            transmit the resulting smaller signals at the same time. Used in <em>IEEE 802.11a </em> and in <em>IEEE802.11g.
            </em><a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Omnidirectional Antenna:</span> Similar to a <em>dipole antenna </em>but with a
            better
            reach. Its coverage is 360 degrees horizontally. <a href="#top">[Back to Top]</a><br />
            <br />

            <span class="darkBlueText" id="p">Packet:</span> In networking, a specially
            organized and formatted collection of digital data. Different protocols use
            different names for their packets - for example ATM packets are called &quot;cells&quot;. <a
                href="#top">[Back
                to Top]</a><br />
            <br />

            <span class="darkBlueText">Packet Header:</span> Information added to the beginning of the data sent from one
            OSI
            layer to another; typically contains addressing and sequencing information. <a href="#top">[Back to
                Top]</a><br />
            <br />

            <span class="darkBlueText">PAN:</span> Stands for Personal-Area Network. Typically a PAN is created in a small
            space such as an office, where the networking devices not connected permanently. Example; a meeting where the
            participants use Bluetooth enabled notebooks to share data as needed during the meeting. <a
                href="#top">[Back to
                Top]</a><br />
            <br />
            <span class="darkBlueText">Payload:</span> The data portion of a <em>packet</em>, which carries the
            <em></em>meaningful information communicated between sender and receiver. <a href="#top">[Back to
                Top]</a><br />
            <br />
            <span class="darkBlueText">PCMCIA Card: </span>Wireless laptops use PCMCIA cards for transmission and reception
            of
            data. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Physical Layer: </span>Layer 1 - the bottom layer of the OSI reference model. Deals
            with
            signal transmission/reception standards. The physical details of cables and other networking hardware and their
            specification are the responsibility of the physical layer. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Propagation Speed: </span> The rate at which a signal or a bit travels (distance per
            second). <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Propagation Time: </span> The time a signal needs to travel from one point to
            another.
            <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText" id="r">Radar: </span>Stands for Radio Detection And Ranging. A device used
            to
            detect distant objects by measuring the time needed for radio signals to travel to the object and back. <a
                href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Radio Frequency</strong>:</span> The band of frequencies of the electromagnetic
            spectrum
            in the range between voice and infrared frequencies (from 3KHz to 300GHz). <a href="#top">[Back to
                Top]</a><br />
            <br />
            <span class="darkBlueText">Radio Waves: </span> Electromagnetic waves in the <em>radio frequency </em> range.
            <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Receiver: </span>A data communications device which captures and interprets
            electromagnetic signals at one or more frequencies. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">RF: </span>see <em>radio frequency</em>. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">RFI: </span>Stands for Radio Frequency Interference. Signal interference caused by
            electrical devices that emit radio waves at the same frequency as used by network signal transmissions. <a
                href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText" id="s">Satellite Communications: </span>A satellite can be thought of as a
            microwave tower in the sky. It offers relatively high bandwidth. There are several orbit types for satellites:
            (1)
            Low Earth Orbit (<em>LEO</em>); (2) Medium Earth Orbit (<em>MEO</em>); and (3) <em>Geosynchronous</em>. <a
                href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Satellite Microwave:</span> A <em>microwave </em> communications system that uses
            <em>geosynchronous </em> satellites to relay signals between sender and receiver. <a href="#top">[Back to
                Top]</a><br />
            <br />
            <span class="darkBlueText">Scatter Infrared Network:</span> An infrared LAN technology. Uses the property of
            flat
            reflective surfaces such as walls and ceilings to bounce wireless signals. As bouncing introduces delays and
            <em>attenuation, </em> this type of wireless LAN is rather slow; it supports a very narrow bandwidth. <a
                href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">SHF:</span> Stands for Super High Frequency. Radio waves in the 3 GHz to 30 GHz
            range;
            use <em>line-of-sight propagation </em> and <em>space propagation. </em><a href="#top">[Back to
                Top]</a><br />
            <br />
            <span class="darkBlueText">Signal: </span> Electromagnetic waves which are propagated along a transmission
            medium.
            <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Sine Wave: </span> A representation of an electromagnetic wave (amplitude versus
            time).
            <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Single Frequency Radio: </span>Wireless networking technology which transmits data
            using
            a single broadcast frequency. Opposite to <em>spread-spectrum </em> (uses two or more frequencies). <a
                href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Space Propagation: </span> A type of wave propagation which can penetrate the
            ionosphere. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Spread Spectrum Radio:</span> A wireless communications technology based on the
            principle of spreading data transmissions across the whole frequency band, to increase the bandwidth. In
            addition
            spread-spectrum makes the signal resistant to noise and interference. Used in digital <em>cellular
                telephony</em>,
            and in <em>WLAN</em>s. (See also <em>FHSS </em>, <em>DSSS </em>, and <em>CDMA </em>). <a href="#top">[Back
                to
                Top]</a><br />
            <br />
            <span class="darkBlueText">Surface Propagation:</span> The propagation of low
            radio frequencies, where the electromagnetic waves travel along the surface of
            the Earth. The <em>attenuation </em> increases with distance and depends on the
            terrain as well as on the frequency used (higher over dry land, lower over water). <a href="#top">[Back
                to Top]</a><br />
            <br />
            <span class="darkBlueText" id="t">THz (TeraHertz): </span> 1 000 000 000 000 (10<font size="2">
                <sup>12</sup>
            </font>) Hertz. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Terrestrial Microwave:</span> Microwave transmission between antennae using
            line-of-sight communications between transmitters and receives (usually positioned on towers, on mountain-tops,
            or
            on the roofs of tall buildings). <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Transceiver:</span> Stands for <strong>trans </strong>mitter/re
            <strong>ceiver</strong>.
            Combines the functions of a transmitter and of receiver in a single device. <a href="#top">[Back to
                Top]</a><br />
            <br />
            <span class="darkBlueText">Transmitter:</span> A communications device used to
            broadcast radio signals. <a href="#top">[Back to Top]</a><br />
            <br />

            <span class="darkBlueText">Troposphere: </span> The layer of atmosphere surrounding the Earth. <a
                href="#top">[Back to Top]</a><br />
            <br />

            <span class="darkBlueText">Tropospheric Propagation: </span> Line-of-sight transmission
            from antenna to antenna or earth to troposphere and back to earth. <a href="#top">[Back
                to Top]</a><br />
            <br />

            <span class="darkBlueText" id="u">Uplink: </span> Transmission from an earth station to a satellite.
            <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">UWB:</span> Stands for Ultra Wide Band. Signals are
            sent in extremely short pulses over a wide portion of the frequency spectrum.
            Requires very low power which makes it possible for the signal to penetrate
            obstacles such as doors. In addition, the extremely short &quot;life&quot; of the signal makes it difficult to
            detect. The wide bandwidth spread minimises the risk of interference. Used in &quot;surface-penetrating&quot;
            radars. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText" id="v">VHF: </span>Stands for Very Higher Frequency. Radio waves in the 30
            MHz
            to 300 MHz range; <em>line-of-sight propagation </em> is used. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">VLF: </span>Stands for Very Low Frequency. Radio waves in the 3 KHz to 30 KHz range;
            <em>surface propagation </em> is used. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText" id="w">Wavelength: </span> The propagation speed of a signal divided by its
            frequency. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">WebLan-Designer: </span> A web-based software tool developed at the Auckland
            University
            of Technology, to enhance the learning and teaching of wired and wireless LAN design. <a href="#top">[Back
                to
                Top]</a><br />
            <br />
            <span class="darkBlueText">WECA:</span> Stands for Wireless Ethernet Compatibility Alliance. The former name of
            the
            <em>Wi-Fi </em>Alliance of vendors. Was established with the purpose of promoting the <em>IEEE 802.11 </em>
            standards. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">WEP:</span> Stands for Wired Equivalent Privacy. Used as a security protocol in
            <em>IEEE
                802.11b </em> (<em>Wi-Fi</em>) networks. WEP employs 64-bit or 128-bit encryption. <a href="#top">[Back
                to
                Top]</a><br />
            <br />
            <span class="darkBlueText">Wi-Fi: </span>Stands for Wireless Fidelity and was originally a name used for
            <em>IEEE
                802.11b</em>. Refers to any <em>IEEE 802.11 </em> wireless networking standard. <a href="#top">[Back to
                Top]</a><br />
            <br />
            <span class="darkBlueText">Wireless: </span>A network connection which deploys the transmission of
            electromagnetic
            frequency through the atmosphere to carry data transmissions. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Wireless Bridge:</span> Typically a pair, these devices (most often narrow-band and
            tight beam) relay network traffic from one location to another. Available for spread-spectrum radio, infrared,
            and
            laser technologies. Operates at a distance up to 40 km. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Wireless Bridging:</span> Just as a bridge connects
            two networks, a wireless bridge does the same by maintaining a point-to-point
            connection between them. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Wireless Channel: </span>Generally refers to a communication medium in which signals
            travel through space instead of through a physical cable. Electromagnetic radio waves are used as a wireless
            channel. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">Wireless Transmission: </span> Data transmission using unguided media. <a
                href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">WLAN: </span>Stands for Wireless LAN. This term refers to a local area network
            (LAN),
            which uses either infrared (<em>IR</em>) or radio frequencies (<em>RF</em>) rather than a physical cable as the
            transmission medium. Example: an <em>Wi-Fi </em> network. <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">WPA: </span>Stands for Wi-Fi Protected Access. Adds security to <em>Wi-Fi </em>
            networks, replacing <em>WEP </em>. It uses <em>802.1x </em> and <em>EAP </em> to restrict network access. Its
            encryption standard is called Temporal Key Integrity Protocol (TKIP). <a href="#top">[Back to Top]</a><br />
            <br />
            <span class="darkBlueText">WPAN:</span> Stands for Wireless Personal-Area Network. <a href="#top">[Back to
                Top]</a><br>
            <br>
        </div>
    </body>

    @include('partials.footer')
@else
    <meta http-equiv="refresh" content="0; URL=/">
@endauth

</html>
