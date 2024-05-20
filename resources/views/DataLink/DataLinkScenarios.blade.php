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
    <div align="center" class="darkBlueTextJumbo">Data Link Protocol Scenarios</div>
<br />
<div class="redText">Scenario-based questions and suggested answers</div>
<br />
<br />
<a href="#Scenario1">[Scenario 1]</a> <a href="#Scenario2">[Scenario 2]</a> <a href="#Scenario3">[Scenario 
3]</a> <a href="#Scenario4">[Scenario 4]</a><br />

<br />
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="normalText">
  <tr>
    <td> <span class="darkBlueTextJumbo"><a name="Scenario1"></a>Scenario 1</span><br />
	An international company deploys VPN (Virtual Private Network) to enhance security for remote staff. Few staff reports that they cannot access to VPN service regardless of all changes made by administrator. From system logs, it appears that VPN tunnels are reinitialised after short period of time, making connections eventually times out. 
	
	<P><span class="redText">Question: </span>How the administrator can assure a stable VPN connection? </P>
</p> 
 </span><img src="{{asset('Images/DataLink/DataLink_Scenario1.png')}}" align="center"></P>

      <P><span class="redText">Hint:</span></p> <p> What does tunnelling do? </p>
      <br />

      <a href="#Top">[To Top]</a>
	</td>
  </tr>
</table>
<br>
<br>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="normalText">
  <tr> 
    <td> <span class="darkBlueTextJumbo"><a name="Scenario2"></a>Scenario 2</span><br />
A company provides hotspot solution to a residential area. The company faces a problem when some customers still cannot get optimal speed despite getting 5 bars in their laptops. The company has increased Wi-Fi access point density, configured access point with 802.11n mode, and installed more powerful routers and switches. However, the problem still persists. 
      <P><span class="redText">Question:</span> How the administrator can amend the problem and ensure everyone gets their desired Wi-Fi speed? </p>
</span><img src="{{asset('Images/DataLink/DataLink_Scenario2.gif')}}" width = "600" height = "400" align="center"></P>
<p><font size="2"><i>Source: http://www.metageek.net/wp-content/uploads/2012/08/new-inSSIDer-screenshot-for-1-6-11-doc.png</i><p>
      <P><span class="redText">Hint: </span>
<p>There are only 11 usable channels. In residential area, it is likely that channels 1, 6, and 11 which are the default channels for APs are not changed. When two or more APs are all set up with channel 1, 6 and 11, they are overlapped, although overlapping channels can co-exist due to Wi-Fi utilizes the listen-before-transmit (CSMA/CA) algorithm, the signal strength for each APs will be greatly degraded.</p>
	  <br />
      <a href="#Top">[To Top]</a>
	  </td>
  </tr>
</table>
<br>
<br>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="normalText">
  <tr> 
    <td> <p><span class="darkBlueTextJumbo"><a name="Scenario3"></a>Scenario 3</span><br />
A company ABC plans to open another office which is 5 km away from ABC headquarter. The new system in the office must synchronise its data with the central database at real-time to ensure normal operations. Both locations are connected to the Internet and using it as the only medium to transfer data. A backup plan is crucial in case of ISP failure.  
    
      <P><span class="redText">Question: </span>What options do they have?</P>
</span><img src="{{asset('Images/DataLink/DataLink_Scenario3.png')}}" align="center"></P>

      <P><span class="redText">Hint: </span>Revise the concept of Data Transmission and Data Link Layer.</p>
	  <br />
      <a href="#Top">[To Top]</a>
	  </td>
  </tr>
</table>
<br>
<br>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="normalText">
  <tr> 
    <td> <p><span class="darkBlueTextJumbo"><a name="Scenario4"></a>Scenario 4</span><br />
       An institute has a lab for student which consists of about 50 PCs. As growing demands of laptop users, IT department deploy Wi-Fi access points throughout the lab. A problem starts arising during peak hours. IT technician spots excessive amount of broadcasting packet floating around the network. 
      <P><span class="redText">Question: </span>What can they do to resolve the problem?</P>
<img src="{{asset('Images/DataLink/DataLink_Scenario3.png')}}"  align="center">

      <P><span class="redText">Hint: </span> Broadcast domain might be too big for current infrastructure to handle.</P>

	  <br />
      <a href="#Top">[To Top]</a>
	  </td>
   </tr>
</table>

</body>
@else
<meta http-equiv="refresh" content="0; URL=/">
@endauth
</html>