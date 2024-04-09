<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
<head>
<title>WebLan-Designer Wired LAN Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="images/lug.ico" rel="shortcut icon" type="image/x-icon">
<style>
	html, body, form{
		margin:0;
		padding:0;
	}
	header{
		background:url("images/Banner2.jpg");
		background-repeat:repeat-x;
		height:111px;
	}
	.col-2 {
		-ms-flex: 0 0 14.666667%;
		flex: 0 0 14.666667%;
		max-width: 11.466667%;
	}
	.s_menu_li{
		background-image:url("images/Button1.jpg");
		background-repeat: repeat;
		background-color:#819fff;
		border-bottom: 1px solid white;
    	width:187px;
	}
	.s_menu_li_txt_right{
		
		background-image:none;
		background-color:#BFCFFF;
		border-bottom: 1px solid white;
		width:187px;
	}
	.s_menu_ul li a {
		font: bold 12px/21px Verdana, Arial, Helvetica, sans-serif;
    	color: #ffffff;
    	height: 22px;
		display:block;
    	text-decoration: none;
		text-align:center;
		
	}
	.s_menu_ul li.s_menu_li_txt_right a{
		text-align:right;
		color:#000066;
		font-weight:bold;
		padding-right:10px;
	}
	input[type="radio"]{
    	vertical-align: middle;
	}
	input[type="submit"], input[type="reset"], input[type="button"]{
    	font-size:revert;
		line-height:normal;
	}
	ul{
		list-style: none;
	}
	h2.s_head{
		font: bold 23px/normal Verdana, Arial, Helvetica, sans-serif;
    	color: #000066;
	}
	ul.s_ques, ul.s_menu_ul{
		margin:0;
		padding: 0;
	}
	div.s_questext, footer{
    	font: bold 12px/normal Verdana, Arial, Helvetica, sans-serif;
    	color: #000066;
	}
	li.s_ans .s_anstext, .txt{
		
		font: normal 12px/normal Verdana, Arial, Helvetica, sans-serif;
    	color: #000000;
	}
	.correct{
		color:#009933;
	}
	.incorrect{
		color: #ff0000;
	}
	footer{
		background-color:#BFCFFF;
	}
</style>

</head>

		<div class="col-10">
			<div id="quizcontainerid">
				<form id="msform" action="score2.php" method="post">
					
					<h2 class="s_head text-center p-3">
						Bluetooth Network Quiz
					</h2>
					<div id="questions">
						
					</div>



						<section class="my-5">
							<input type="button" name="btnBack" id="btnBack" value="Back">
							<input type="button" name="btnNext" id="btnNext" value="Next">
							<input type="button" name="btnFinish" id="btnFinish" value="Finish" >
							<input type="reset" name="btnCancel" value="Cancel">
						</section>
				</form>
			</div>
			

			<div id="summaryid" class=" d-none">
				<h2 class="s_head text-center p-3">
							Bluetooth Network Quiz Summary
				</h2>
				<div class="row">
					<div class="col-4 txt mb-2">
						Correctly Answered:
					</div>
					<div class="col-8 txt mb-2">
						<span id="correctid">0</span> Questions
					</div>
					<div class="col-4 txt mb-2">
						Incorrectly Answered:
					</div>
					<div class="col-8 txt mb-2">
						<span id="incorrectid">0</span> Questions
					</div>
					<div class="col-4 txt mb-2">
						Unanswered Questions:
					</div>
					<div class="col-8 txt mb-2">
						<span id="unansweredid">0</span> Questions
					</div>
					<div class="col-4 txt mb-2">
						Total Questions:
					</div>
					<div class="col-8 txt">
					<span id="totalquestionsid">0</span> Questions
					</div>
					<div class="col-4 txt mb-2">
						Score (Correctly Answered / Total Questions):
					</div>
					<div class="col-8 txt">
					<span id="scoreid1">0</span>%
					</div>
					<div class="col-4 txt mb-2">
						Score (Correctly Answered / Total Attempted):
					</div>
					<div class="col-8 txt">
					<span id="scoreid2">0</span>%
					</div>
				</div>
				<div id="results" class="mt-5">

				</div>
			</div>
		</div>
	</div>
	


  

</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script>
	$(document).ready(function(){
		console.log("JQuery Working");

		var questionsArray = [];
		

		createQuestionArray = function (){
			let ques1 = {
						"id": 1,
						"q" : "If Piconet has only one secondary station, the TDMA operation is very _____________",
						"a" : ["Complicated","Complexed","Simple","Small"],
						'c' : "C"
					}
			questionsArray.push(ques1);

			let ques2 = {
						"id": 2,
						"q" : "Multiple Piconets form a network called a ____________",
						"a" : ["Small area","Scatter net","Network allocation vector","Gadgets"],
						'c' : "B"
					}
			questionsArray.push(ques2);

			let ques3 = {
						"id": 3,
						"q" : "A Piconet network can have up to _________",
						"a" : ["9 station","8 station","7 station","6 Station"],
						'c' : "B"
					}
			questionsArray.push(ques3);

			let ques4 = {
						"id": 4,
						"q" : "When the Piconet networks they have been combined, they form what is regarded as _________",
						"a" : ["Scatternet","Small Net","Large Net","Narrow Net"],
						'c' : "A"
					}
			questionsArray.push(ques4);

			let ques5 = {
						"id": 5,
						"q" : "A wireless network __________ waves to transmit signals.",
						"a" : ["Sound","Radio","Mechanical","Luay"],
						'c' : "B"
					}
			questionsArray.push(ques5);

			let ques6 = {
						"id": 6,
						"q" : "What device senses and receives radio signals in a wireless network?",
						"a" : ["Modem","Router","Digital translator"],
						'c' : "B"
					}
			questionsArray.push(ques6);

			let ques7 = {
						"id": 7,
						"q" : "Bluetooth network consists of one primary device and up to",
						"a" : ["5 devices","7 Devices","9 Devices","11 Devices"],
						'c' : "B"
					}
			questionsArray.push(ques7);

			let ques8 = {
						"id": 8,
						"q" : "Bluetooth has been used as a sophisticated version of ",
						"a" : ["CSK","FSK","TDMA","CDMA"],
						'c' : "B"
					}
			questionsArray.push(ques8);

			let ques9 = {
						"id": 9,
						"q" : "A Bluetooth is a network called",
						"a" : ["Wireless Network","WAN","Piconet","LAN"],
						'c' : "C"
					}
			questionsArray.push(ques9);

			let ques10 = {
						"id": 10,
						"q" : "An interconnected collection of piconet is called ___________",
						"a" : ["scatternet","micronet","mininet"],
						'c' : "multinet"
					}
			questionsArray.push(ques10);

			let ques11 = {
						"id": 11,
						"q" : "Bluetooth uses __________",
						"a" : ["frequency hopping spread spectrum","orthogonal frequency division multiplexing","time division multiplexing","channel division multiplexing"],
						'c' : "A"
					}
			questionsArray.push(ques11);
					
			let ques12 = {
						"id": 12,
						"q" : "Unauthorised access of information from a wireless device through a bluetooth connection is called _________",
						"a" : ["bluemaking","bluesnarfing","bluestring","bluescoping"],
						'c' : "B"
					}
			questionsArray.push(ques12);

			let ques13 = {
						"id": 13,
						"q" : "What is A2DP (advanced audio distribution profile)?",
						"a" : ["a bluetooth profile for streaming audio","a bluetooth profile for streaming video","a bluetooth profile for security","a bluetooth profile for file management"],
						'c' : "A"
					}
			questionsArray.push(ques13);
			
			let ques14 = {
						"id": 14,
						"q" : "In a piconet, one master device ________",
						"a" : ["can not be slave","can be slave in another piconet","can be slave in the same piconet","can be master in another piconet"],
						'c' : "B"
					}
			questionsArray.push(ques14);

			let ques15 = {
						"id": 15,
						"q" : "Bluetooth transceiver devices operate in ______ band.",
						"a" : ["2.4 GHz ISM","2.5 GHz ISM","2.6 GHz ISM","2.7 GHz ISM"],
						'c' : "A"
					}
			questionsArray.push(ques15);

			let ques16 = {
						"id": 16,
						"q" : "Bluetooth supports _______",
						"a" : ["point-to-point connections","point-to-multipoint connection","both point-to-point connections and point-to-multipoint connection","multipoint to point connection"],
						'c' : "C"
					}
			questionsArray.push(ques16);

			let ques17 = {
						"id": 17,
						"q" : "A scatternet can have maximum __________",
						"a" : ["10 piconets","20 piconets","30 piconets","40 piconets"],
						'c' : "A"
					}
			questionsArray.push(ques17);

			let ques18 = {
						"id": 18,
						"q" : "Notebook computers are integrated with Wi-Fi adapters.",
						"a" : ["False","True","NA"],
						'c' : "B"
					}
			questionsArray.push(ques18);

			let ques19 = {
						"id": 19,
						"q" : "Bluetooth is a--------- technology which connects devices which are called gadgets in a small area.",
						"a" : ["Wired LAN","Wireless LAN","VLAN","None of the above "],
						'c' : "B"
					}
			questionsArray.push(ques19);

			let ques20 = {
						"id": 20,
						"q" : "In a Piconet, there can be up to------- parked nodes in the net.",
						"a" : ["63","127","255","511"],
						'c' : "C"
					}
			questionsArray.push(ques20);

			let ques21 = {
						"id": 21,
						"q" : "A Bluetooth Piconet network consists of _________ primary device(s) and up to _________ secondary devices.",
						"a" : ["one; five","five; three","two; six","one; seven"],
						'c' : "D"
					}
			questionsArray.push(ques21);

			let ques22 = {
						"id": 22,
						"q" : "Bluetooth uses _________ method in the physical layer to avoid interference from other devices or other networks.",
						"a" : ["DSSS","FHSS","FDMA","none of the above"],
						'c' : "A"
					}
			questionsArray.push(ques22);
			
			let ques23 = {
						"id": 23,
						"q" : "IEEE 802.11a, has a data rate of _________Mbps.",
						"a" : ["1","2","6","none of the above"],
						'c' : "C"
					}
			questionsArray.push(ques23);

			let ques24 = {
						"id": 24,
						"q" : "IEEE 802.11b, has a data rate of _________ Mbps.",
						"a" : ["1","2","5.5","none of the above"],
						'c' : "C"
					}
			questionsArray.push(ques24);

			let ques25 = {
						"id": 25,
						"q" : "IEEE 802.11g, has a data rate of _________ Mbps.",
						"a" : ["1","2","11","22"],
						'c' : "D"
					}
			questionsArray.push(ques25);

			let ques26 = {
						"id": 26,
						"q" : "IEEE has defined the specifications for a wireless LAN, called _________, which covers the physical and data link layers.",
						"a" : ["IEEE 802.3","IEEE 802.5","IEEE 802.11","IEEE 802.2"],
						'c' : "C"
					}
			questionsArray.push(ques26);

			let ques27 = {
						"id": 27,
						"q" : "In Bluetooth, the _________ layer is roughly equivalent to the physical layer of the Internet model.",
						"a" : ["radio","baseband","L2CAP","none of the above"],
						'c' : "A"
					}
			questionsArray.push(ques27);

			let ques28 = {
						"id": 28,
						"q" : "In Bluetooth, the current data rate is _________ Mbps",
						"a" : ["2","5","11","none of the above"],
						'c' : "D"
					}
			questionsArray.push(ques28);

			let ques29 = {
						"id": 29,
						"q" : "The access method in Bluetooth is _________.",
						"a" : ["FDMA","TDD-TDMA","CDMA","none of the above"],
						'c' : "B"
					}
			questionsArray.push(ques29);

			let ques30 = {
						"id": 30,
						"q" : "Because of the weaknesses of WEP, it is possible for an attacker to identify two packets derived from the same IV.",
						"a" : ["True","False"],
						'c' : "A"
					}
			questionsArray.push(ques30);

			let ques31 = {
						"id": 31,
						"q" : "Most Bluetooth devices use a class 2 radio which has a range of ___________ feet.",
						"a" : ["10","18","15","33"],
						'c' : "D"
					}
			questionsArray.push(ques31);

			let ques32 = {
						"id": 32,
						"q" : "The IEE 802.15.1-2005 Wireless Personal Area Network standard was based on the __________ specifications.",
						"a" : ["Bluetooth v2. 1","Bluetooth V1. 2","Bluetooth V1.0","Bluetooth V1. 1"],
						'c' : "A"
					}
			questionsArray.push(ques32);

			let ques33 = {
						"id": 33,
						"q" : "A(n) __________ packet contains a field that indicates the function of the packet and an identifier field used to match requests and responses.",
						"a" : ["ICMP","TKIP","EAP","RADIUS"],
						'c' : "B"
					}
			questionsArray.push(ques33);

			let ques34 = {
						"id": 34,
						"q" : "An _________ is an AP that is set up by an attacker.",
						"a" : ["Active twin","Authorized twin","Internal replica","Evil twin"],
						'c' : "B"
					}
			questionsArray.push(ques34);

			let ques35 = {
						"id": 35,
						"q" : "Because PEAP can be vulnerable to specific types of attacks, CISCO now recommends that users migrate to a more secure EAP than PEAP.",
						"a" : ["True","False"],
						'c' : "B"
					}
			questionsArray.push(ques35);

			let ques36 = {
						"id": 36,
						"q" : "Aps use antennas which radiate a signal in all the directions.",
						"a" : ["True","False"],
						'c' : "B"
					}
			questionsArray.push(ques36);

			let ques37 = {
						"id": 37,
						"q" : "__________ technology enables users to connect wirelessly to a wide range of computing and telecommunication devices.",
						"a" : ["Port security","Bluetooth","Supplicant"],
						'c' : "B"
					}
			questionsArray.push(ques37);

			let ques38 = {
						"id": 38,
						"q" : "Bluetooth includes ________________ channels.",
						"a" : ["40","50","69","79"],
						'c' : "D"
					}
			questionsArray.push(ques38);

			let ques39 = {
						"id": 39,
						"q" : "Bluetooth operates on _____________ GHZ band.",
						"a" : ["2","21","24","25"],
						'c' : "C"
					}
			questionsArray.push(ques39);

			let ques40 = {
						"id": 40,
						"q" : "Any  one criterion for wireless personal area network is ____________",
						"a" : ["Less market potential","Less compatibility","Less technical feasibility","high technical feasibility"],
						'c' : "D"
					}
			questionsArray.push(ques40);

			let ques41 = {
						"id": 41,
						"q" : "Assigning different slots for uplink & downlink using the same frequency is called ____________",
						"a" : ["FDD","CDD","TDD","EDD"],
						'c' : "C"
					}
			questionsArray.push(ques41);

			

			let ques42 = {
						"id": 42,
						"q" : "Bluetooth applies _____________ for separation of Piconets.",
						"a" : ["CDMA","FH-CDMA","BH-CDMA","FH-BH"],
						'c' : "B"
					}
			questionsArray.push(ques42);

			let ques43 = {
						"id": 43,
						"q" : "A GSM system consists of how many sub systems.",
						"a" : ["2","3","4","5"],
						'c' : "B"
					}
			questionsArray.push(ques43);

			let ques44 = {
						"id": 44,
						"q" : "Each Bluetooth device performs frequency hopping with ____________ hops/sec.",
						"a" : ["1200","1400","1600","1800"],
						'c' : "C"
					}
			questionsArray.push(ques44);

			let ques45 = {
						"id": 45,
						"q" : "Bluetooth devices are not backward compatible with previous versions.",
						"a" : ["True","False"],
						'c' : "B"
					}
			questionsArray.push(ques45);

			let ques46 = {
						"id": 46,
						"q" : "Which of the following choices is not one of the three types of packets used by EAP?",
						"a" : ["Request","Response","Success","Error"],
						'c' : "D"
					}
			questionsArray.push(ques46);

			

			let ques47 = {
						"id": 47,
						"q" : "Slave devices that are connected to a Piconet and are sending transmissions are known as what?",
						"a" : ["Active slave","passive slaves","Hybrid drones","Neutral drones"],
						'c' : "A"
					}
			questionsArray.push(ques47);

			let ques48 = {
						"id": 48,
						"q" : "Class 3 Bluetooth transceiver range.",
						"a" : ["10 m","100 m","33 m","330 m"],
						'c' : "A"
					}
			questionsArray.push(ques48);

			let ques49 = {
						"id": 49,
						"q" : "Class 1 Bluetooth transceiver range.",
						"a" : ["10 meters","100 meters","33 metres","330 metres"],
						'c' : "B"
					}
			questionsArray.push(ques49);

			
			let ques50 = {
						"id": 50,
						"q" : "Who is defining Bluetooth specifications?",
						"a" : ["Bluetooth Forum","IEEE","Bluetooth SIG","Ericsson"],
						'c' : "C"
					}
			questionsArray.push(ques50);

			let ques51 = {
						"id": 51,
						"q" : "Bluetooth is a Los (line-of-sight) technology.",
						"a" : ["True","False"],
						'c' : "B"
					}
			questionsArray.push(ques51);

			let ques52 = {
						"id": 52,
						"q" : "Bluetooth (version 1.1) transfer rate.",
						"a" : ["128 kbps","56 kbps","2 kbps","732.2 kbps"],
						'c' : "D"
					}
			questionsArray.push(ques52);

			let ques53 = {
						"id": 53,
						"q" : "Bluetooth’s frequency band.",
						"a" : ["UNII","GSM","ISM","VHF"],
						'c' : "C"
					}
			questionsArray.push(ques53);

			let ques54 = {
						"id": 54,
						"q" : "Infrared (IrDA) connection set up is faster than Bluetooth.",
						"a" : ["True","False"],
						'c' : "A"
					}
			questionsArray.push(ques54);

			let ques55 = {
						"id": 55,
						"q" : "The Piconet coordinator in a WirelessHD network should be a battery operated device for mobility.",
						"a" : ["True","False"],
						'c' : "B"
					}
			questionsArray.push(ques55);

			let ques56 = {
						"id": 56,
						"q" : "In which frequency range does WHDI operate?",
						"a" : ["2.4 GHz","800 MHz","5 GHz","400 KHZ"],
						'c' : "C"
					}
			questionsArray.push(ques56);

			let ques57 = {
						"id": 57,
						"q" : "Bluetooth is named after a(n) ____________ King.",
						"a" : ["Swiss","Danish","German","English"],
						'c' : "B"
					}
			questionsArray.push(ques57);

			let ques58 = {
						"id": 58,
						"q" : "Which of the following is NOT true about Bluetooth?",
						"a" : ["Bluetooth is considered to be a long-distance wireless technology","Bluetooth has a bandwidth of 720 kbps.","Bluetooth is considered to be low bandwidth wireless technology.","Bluetooth has a range of about 30 feet."],
						'c' : "A"
					}
			questionsArray.push(ques58);

			let ques59 = {
						"id": 59,
						"q" : "Which of the following is NOT a device that is likely to use Bluetooth technology?",
						"a" : ["PDA","toy","cell phone","High-speed router"],
						'c' : "D"
					}
			questionsArray.push(ques59);

			let ques60 = {
						"id": 60,
						"q" : "Which of the following is difficult to transmit using Bluetooth?",
						"a" : ["Printing commands","Music","Large Images","Voice"],
						'c' : "C"
					}
			questionsArray.push(ques60);

			let ques61 = {
						"id": 61,
						"q" : "Pairing is the process of __________",
						"a" : ["Using two Bluetooth device from the same company","requiring the use of two Bluetooth devices to accomplish a specific task","Connecting Bluetooth devices to one another","Using compatible Bluetooth devices."],
						'c' : "C"
					}
			questionsArray.push(ques61);

			let ques62 = {
						"id": 62,
						"q" : "Bluetooth allows the station to define a quality of ",
						"a" : ["Time level","Service Level","Data Level","Segment Level"],
						'c' : "B"
					}
			questionsArray.push(ques62);

			let ques63 = {
						"id": 63,
						"q" : "In a piconet network, one master device",
						"a" : ["Can be a master in another piconet","Cannot be slave","Can be a slave in the same piconet","None of the above"],
						'c' : "D"
					}
			questionsArray.push(ques63);

			let ques64 = {
						"id": 645,
						"q" : "In a scatter net, the slave node of one piconet may ___________",
						"a" : ["May act as a master in a piconet that is part of the scatter net","May act as slave in a piconet that is part of the scatter net","Cannot be slave","Can be slave in the same piconet"],
						'c' : "A"
					}
			questionsArray.push(ques64);

			let ques65 = {
						"id": 65,
						"q" : "The master-slave connection in Bluetooth networks are",
						"a" : ["Dependent","Independent","Similar","Relatively dependent"],
						'c' : "B"
					}
			questionsArray.push(ques65);

			let ques66 = {
						"id": 66,
						"q" : "Which of the following is NOT true about the Tapwave Zodiac?",
						"a" : ["It can synchronize with Outlook to store contact information.","It can play MP3 files.","It allows you to use Bluetooth technology to play up to 20 other Zodiacs.","It is a wireless gaming device that uses Bluetooth technology."],
						'c' : "C"
					}
			questionsArray.push(ques66);

			let ques67 = {
						"id": 67,
						"q" : "A Bluetooth LAN is an ______________?",
						"a" : ["ad hoc network","infrastructure signals","ad hoc signals","infrastructure LAN"],
						'c' : "A"
					}
			questionsArray.push(ques67);

			let ques68 = {
						"id": 68,
						"q" : "What does 100BaseT mean?",
						"a" : ["100 Mbps, baseband, twisted pair","100 bps, baseband, twisted pair","100 meters, baseband, transmit","100 kilometers, baseband, transmit"],
						'c' : "A"
					}
			questionsArray.push(ques68);

			let ques69 = {
						"id": 69,
						"q" : "Select the correct statement regarding 802.15 Bluetooth",
						"a" : ["FHSS operates at 1600 hops per second over 79 one MHz channels","Bluetooth is a centralized access model where the master nodes acts as the centralized controller","FHSS is a spread spectrum technology used in 802.15 WPANs","All of the above are correct"],
						'c' : "D"
					}
			questionsArray.push(ques69);

			let ques70 = {
						"id": 70,
						"q" : `Consider the following statements: <br/>
								1. Bluetooth is a wireless technology which creates WPAN to exchange data.<br/>
								2. Bluetooth uses the electromagnetic spectrum in the range 2402-2480 MHz.<br/>
								Which of the statements given above is/are correct?
						`,
						"a" : ["only 1","only 2","Both 1 and 2","Neither 1 nor 2"],
						'c' : "C"
					}
			questionsArray.push(ques70);

			let ques71 = {
						"id": 71,
						"q" : "Bluetooth standard is named after ___________",
						"a" : ["King Ronaldo Bluetooth","Pope Vincent Bluetooth","King Herald Bluetooth","Pope Francis Bluetooth"],
						'c' : "C"
					}
			questionsArray.push(ques71);

			let ques72 = {
						"id": 72,
						"q" : "Which modulation scheme is used by Bluetooth?",
						"a" : ["DQPSK","MSK","GFSK","BPSK"],
						'c' : "C"
					}
			questionsArray.push(ques72);

			let ques73 = {
						"id": 73,
						"q" : "What is the channel symbol rate in Bluetooth for each user?",
						"a" : ["270.833 Kbps","1 Gbps","100 Mbps","1 Mbps"],
						'c' : "D"
					}
			questionsArray.push(ques73);

			let ques74 = {
						"id": 74,
						"q" : "What is the raw channel bit error rate of Bluetooth?",
						"a" : ["10<sup>-3</sup>","10<sup>-10</sup>","10<sup>3</sup>","10<sup>-1</sup>"],
						'c' : "A"
					}
			questionsArray.push(ques74);

			let ques75 = {
						"id": 75,
						"q" : "The amount that the Bluetooth frequency varies, which is between 280 and 350 KHz, is called the _______________.",
						"a" : ["Direct sequence","Modulation index","Hopping sequence","I-phase"],
						'c' : "B"
					}
			questionsArray.push(ques75);

			let ques76 = {
						"id": 76,
						"q" : "Which of the following topologies are supported by ZigBee?",
						"a" : ["Scatternet and SCO","Tree, star, and mesh","Inverted tree and ACL","Piconet and master/slave"],
						'c' : "B"
					}
			questionsArray.push(ques76);

			let ques77 = {
						"id": 77,
						"q" : "The addressing mechanism of the Bluetooth can include up to",
						"a" : ["2 Addresses","4 Addresses","6 Addresses","8 Addresses"],
						'c' : "B"
					}
			questionsArray.push(ques77);

			let ques78 = {
						"id": 78,
						"q" : "If a piconet has only one secondary station, the TDMA operation is very",
						"a" : ["Complicated","Complexed","Simple","Small"],
						'c' : "C"
					}
			questionsArray.push(ques78);

			
			

		/*
			let ques = {
						"id": ,
						"q" : "",
						"a" : ["","","",""],
						'c' : ""
					}
			questionsArray.push(ques);
		*/

		}

		
		let options = ['A', 'B', 'C', 'D'];
		createQuestionArray();
		var pageIdx = 1;
		var quesIdx = 0;
		var breakIdx = 0;
		for(let qi = 0; qi < questionsArray.length; qi++){
			let sec = "";
			console.log("qi % 10", qi % 10);
			if (qi % 10 == 0){
				sec = "<section id='s"+(breakIdx+1)+"' class='s_quizbox s_quizbox_"+(breakIdx+1)+"'> </section>";
				console.log(sec);
				$("#questions").append(sec);
				breakIdx++;
			}
			
			let ul = "<ul class='s_ques mb-4 ml-2' id='ul"+(qi+1)+"'></ul>";
			let li = "";
			for(let ai = 0; ai < questionsArray[qi]["a"].length; ai++){
				li += `<li class='s_ans'> 
								<span >
									<input type='radio' name='rq${(qi + 1)}' id='q${(qi + 1)}-${options[ai]}' value='${options[ai]}'  />
								</span>
								<span class='s_anstext'>
									${questionsArray[qi]["a"][ai]}
								</span>
							</li>`;
			}
			let qs = "<div class='s_questext'>"+questionsArray[qi]["q"]+"</div>";
			
			
			
			$("#s"+(breakIdx)).append(qs);
			$("#s"+(breakIdx)).append(ul);
			$("#ul"+(qi + 1)).append(li);
			//console.log(sec, qs);
		}
		
		
		var n_panels = Math.ceil(questionsArray.length/10);
		current_idx = 1;
		$(".s_quizbox_2, .s_quizbox_3, .s_quizbox_4, .s_quizbox_5, .s_quizbox_6, .s_quizbox_7, .s_quizbox_8, .s_quizbox_9, .s_quizbox_10, .s_quizbox_11").addClass("d-none");

		function changePanel(selected_idx){
			console.log("selected_idx", selected_idx, " current_idx ", current_idx, "n_panels", n_panels, $(".s_quizbox_"+current_idx));

			$(".s_quizbox_"+current_idx).removeClass("d-block").addClass("d-none");
			$(".s_quizbox_"+selected_idx).removeClass("d-none").addClass("d-block");
			current_idx = selected_idx;
			
			if(current_idx == n_panels){
				$("#btnNext").removeClass("d-inline").addClass("d-none");
				$("#btnBack").removeClass("d-inline").addClass("d-none");
			}else{
				if(current_idx < n_panels){
					$("#btnNext").removeClass("d-none").addClass("d-inline");
					
				}else{
					$("#btnNext").removeClass("d-inline").addClass("d-none");
				}
			}
			if(current_idx == 1){
				$("#btnBack").removeClass("d-inline").addClass("d-none");
			}
			else{
				$("#btnBack").removeClass("d-none").addClass("d-inline");
			}
		}
		changePanel(current_idx);
		$("#btnBack").click(function() {
			//console.log("Back Button Clicked");
			if(pageIdx < 8){
				quesIdx += 10;
				pageIdx += 1;
			}
			
			changePanel(current_idx-1);
		});
		$("#btnNext").click(function() {
			//console.log("Next Button Clicked");
			if(pageIdx > 1){
				quesIdx -= 10;
				pageIdx -= 1;
			}
			
			changePanel(current_idx+1);
		});
		$("#btnFinish").click(function() {
			//console.log("Next Button Clicked");
			$("#quizcontainerid").removeClass("d-display").addClass("d-none");
			$("#summaryid").removeClass("d-none").addClass("d-display");
		});
		quizcontainerid
		$("#btnFinish").click(function(){

			var conf = confirm('Are you sure you want to finish the quiz ?');
			let correct_answer_count = 0;
			let incorrect_answer_count = 0;
			let unanswered_count = 0;
			if(conf){
				let displayOption = "";
				let tmpIdx = -1;
				let correctAnswer = "";
				let feedback = "";

				for(let qi = 0; qi < questionsArray.length; qi++){
					var answers = document.getElementsByName('rq'+(qi+1));
					let student_answer = "";
					let ansIdx = -1;
					for(let j = 0; j < answers.length; j++){
						if(answers[j].checked){
							//console.log(answers[j].value);
							student_answer = answers[j].value;
							ansIdx = j;
						}
					}
					let qs = "<div class='s_questext'>"+questionsArray[qi]["q"]+"</div>";
					

					
					if(student_answer.length == 0){
						unanswered_count++;
						//console.log("unanswered_count", unanswered_count);
						if(ansIdx == -1){
							displayOption = questionsArray[qi]["c"];
							tmpIdx = options.indexOf(displayOption);
							correctAnswer = questionsArray[qi]["a"][tmpIdx]
						}
						//console.log("ansIdx", ansIdx, "displayOption", displayOption, "tmpIdx", tmpIdx, "correctAnswer", correctAnswer);
						feedback = `<div class='txt ml-2'>You did not answer this question.</div>
									<div class='txt ml-2 mb-3'>The correct answer is: ${displayOption}. ${correctAnswer}</div>
									`;
					}else{
						if (student_answer == questionsArray[qi].c){
							correct_answer_count++;
							displayOption = questionsArray[qi]["c"];
							tmpIdx = options.indexOf(displayOption);
							correctAnswer = questionsArray[qi]["a"][tmpIdx]
							feedback = `<div class='txt ml-2 mb-3 correct'>You answered correctly: ${displayOption}. ${correctAnswer}</div>
									`;
						}else{
							incorrect_answer_count++;
							displayOption = options[ansIdx];
							tmpIdx = options.indexOf(displayOption);
							correctAnswer = questionsArray[qi]["a"][tmpIdx]
							feedback = `<div class='txt ml-2 incorrect'>You answered incorrectly: ${displayOption}. ${correctAnswer}</div>`;
							displayOption = questionsArray[qi]["c"];
							tmpIdx = options.indexOf(displayOption);
							correctAnswer = questionsArray[qi]["a"][tmpIdx]
							feedback += `<div class='txt ml-2 mb-3'>The correct answer is: ${displayOption}. ${correctAnswer}</div>`;
						}
					}
					
					$("#results").append(qs).append(feedback);
				}
				$('#correctid').html(correct_answer_count);
				$('#incorrectid').html(incorrect_answer_count);
				$('#unansweredid').html(unanswered_count);
				$("#totalquestionsid").html(questionsArray.length);
				$("#scoreid1").html((correct_answer_count / questionsArray.length).toFixed(2));
				if(correct_answer_count+incorrect_answer_count == 0){
					$("#scoreid2").html("0.00");
				}else
				{
					$("#scoreid2").html((correct_answer_count / (correct_answer_count+incorrect_answer_count)).toFixed(2));
				}
				
				//console.log("correct_answer_count-->", correct_answer_count);

			}
		});
	});
</script>

</html>




    
