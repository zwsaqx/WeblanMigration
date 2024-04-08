<div align="center" class="darkBlueTextJumbo">TCP/IP Networking Scenarios</div>
<br />
<div class="redText">Scenario-based questions and suggested answers</div>
<br />
<br />
<a href="#Scenario1">[Scenario 1]</a> <a href="#Scenario2">[Scenario 2]</a> <a href="#Scenario3">[Scenario 
3]</a> <a href="#Scenario4">[Scenario 4]</a><br />
<a href="#Exercise1">[Exercise 1]</a> <a href="#Exercise2">[Exercise 2]</a> <br />
<br />
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="normalText">
  <tr>
    <td> <span class="darkBlueTextJumbo"><a name="Scenario1"></a>Scenario 1</span><br />
<span class="darkBlueText">Simple Subnetting</span><br>
	<p>A small ISP called Freedom Internet has 3 branches namely Headquarter, Branch A and Branch B. The Headquarter is connected to each of its branches using high speed WAN serial connections. Branch A and Branch B each has 2 department: Payroll and Technical and each department occupies a LAN connecting to its Branch’s main router.</p>
<p>You are currently hired by Freedom Internet to help them design an IP addressing scheme and assuming you are given the network address of 192.168.20.0/24 to start off with. You are also given a list of addressing requirements below:</p>
	<blockquote> 	  
            <ul>
        <li>Branch A’s Payroll requires 20 hosts</li>
        <li>Branch B’s Payroll requires 20 hosts</li>
        <li>Branch A’s Technical requires 20 hosts</li>
        <li>Brach A’s Technical requires 20 hosts</li>
        <li>The link from Branch A to Headquarter requires and IP address for each end of the link</li>
        <li>The link from Branch B to Headquarter requires an IP address for each end of the link</li>
             </ul>
    </blockquote> 
      <P><span class="redText">Question: </span>Design a IP addressing scheme for Freedom Internet </P>
      <P><span class="redText">Topology: </span><img src="/images/TCPIP_Scenario 1.png" width="600" height="500" align="top"></P>
 <P><span class="redText">Hint: </span>Subnet mask of /27 (255.255.255.224) is used.</P>	  

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
 <span class="darkBlueText">IP Communication Troubleshooting</span><br>
<p>Given the below topology:</p>
</span><img src="images/TCPIP_Scenario 2.png" align="top" width="600" height="500">
<p>The User of PC 1 reports that he cannot retrieve files from PC 3. You as the administrator are required to troubleshoot the problem.  The list of IP addresses of each device has been emailed to you</p>  
 <p><i>IP Addressing chart:</i></p>
<table width="600" border="1" bordercolor="#000000" class="normalText">
        <tr align="center"> 
          <td width="40">Device/Port Label</td>
          <td width="40">IP Address/Subnet Mask</td>
                          </tr>
        <tr align="center"> 
          <td>PC 1</td>
          <td>192.168.7.2/24</td>
                  <tr align="center"> 
          <td>PC 2</td>
 <td>192.168.8.3/24</td>
                           </tr>
<tr align="center"> 
          <td>PC 3</td>
 <td>192.168.4.2/24</td>
                           </tr>
<tr align="center"> 
          <td>PC 4</td>
 <td>192.168.3.3/24</td>
                           </tr>
<tr align="center"> 
          <td>Branch A/ Fa0/1</td>
 <td>192.168.8.1/24</td>
                           </tr>
<tr align="center"> 
          <td>Branch A/ Se0/0/0</td>
 <td>192.168.4.2/24</td>
                           </tr>
<tr align="center"> 
          <td>Headquarter/ Se0/3</td>
 <td>192.168.4.1/24</td>
                           </tr>
<tr align="center"> 
          <td>Headquarter/ Se0/2</td>
 <td>192.168.2.4/24</td>
                           </tr>
<tr align="center"> 
          <td>Branch B/ Se0/0</td>
 <td>192.168.2.2/24</td>
                           </tr>
<tr align="center"> 
          <td>Branch B/ Fa0/0</td>
 <td>192.168.3.1/24</td>
                           </tr>

</table>
<P><span class="redText">Question: </span>Identify the problem and list necessary step to allow user on PC 1 to communicate to user on PC 3 and vice versa.</P>

            <P><span class="redText">Hint: </span>Check Default Gateway. Are they in the same subnet?</P>
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
        <span class="darkBlueText">Port Forwarding</span><br>
<p>Given the below topology:</p>
            <img src="images/TCPIP_Scenario 3.png" > 
          <p>Network administrator of ABC Company is requested to provide remote access for a staff. The staff wants to access to his work PC and local web server in the headquarter office. Company ABC is using an Internet package which includes with a static IP address: 120.135.4.88. The staff only has dynamic IP addresses.</p>
     
      <P><span class="redText">Question:</span> What sort of configurations can the administrator do to allow staff to remotely access their work PC ?</P>
      <P><span class="redText">Hint:</span> Think of number of ports available.
</p>
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
        <span class="darkBlueText">Troubleshooting Routing Information Protocol (RIP)</span><br>
        <p>Given the below topology</p>
</span><img src="images/TCPIP_Scenario 4.png"  align="top">
<p>The ABC Company has deployed RIP as their routing protocol. Recently, a User from Branch A reports that he cannot access and retrieve files from the Remote Server located on a remote Branch. 
As the lead administrator for the ABC Company, you are reported from another admin on your team that he believes the problem lies with the RIP configuration itself and he has emailed you routing tables for all routers in the network. </p>
 <img src="images/router_table.png" width="600" height="400" align="top">   <br/> 
      </p>

      <P><span class="redText">Question: </span>Identify the error and suggest necessary actions to allow the User access to the Remote Server.</P>
      <P><span class="redText">Hint: </span>RIP Protocol configuration. </P>
	  <br />
      <a href="#Top">[To Top]</a>
	  </td>
  </tr>
</table>
<br>
<br>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="normalText">
  <tr> 
    <td> <p><span class="darkBlueTextJumbo"><a name="Exercise1"></a>Exercise 1</span><br />
        You are given a Class b address of 152.152.0.0. 223 networks need to be created. <br /><br />
        

<span class="redText">Identify the subnet mask<br />
List the first three valid network addresses.<br />
List the last valid network address.<br />
How many subnets are there?</span>
<br>
    <br />
      <a href="#Top">[To Top]</a>
	</td>
  </tr>
</table>
<br>
<br>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="normalText">
  <tr> 
    <td> <p><span class="darkBlueTextJumbo"><a name="Exercise2"></a>Exercise 2</span><br />
        Given the Routing table of Router R below <br /><br />
  <img src="../images/TCPIP Exercise img.PNG" width="401" height="155" alt=""/>   <br />   

<span class="redText">Draw a network topology that is compatible with the routing table above.</span>
<br>
    <br />
      <a href="#Top">[To Top]</a>
	</td>
  </tr>
</table>
<br>
<br>