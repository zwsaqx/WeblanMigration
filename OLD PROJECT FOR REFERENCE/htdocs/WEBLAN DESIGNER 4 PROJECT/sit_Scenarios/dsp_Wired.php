<div align="center" class="darkBlueTextJumbo">Wired LAN Scenarios</div>
<br />
<div class="redText">Scenario-based questions and suggested answers, followed  by  scenario-based exercises.</div>
<br />
<br />
<a href="#Scenario1">[Scenario 1]</a> <a href="#Scenario2">[Scenario 2]</a> <a href="#Scenario3">[Scenario 
3]</a> <a href="#Scenario4">[Scenario 4]</a><br />
<a href="#Exercise1">[Exercise 1]</a> <a href="#Exercise2">[Exercise 2]</a> <br />
<br />
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="normalText">
  <tr>
    <td> <span class="darkBlueTextJumbo"><a name="Scenario1"></a>Scenario 1</span><br />
	Kiwi International Limited (KIL) is a telecommunications equipment manufacturing company based in Wellington. The company has leased space in Auckland city consisting of one level of an office block and a warehouse in a separate location, some 1000 meters away. KIL wishes to purchase and install some network equipment in Auckland to provide a network for their Windows XP workstations and for three servers: two NetWare servers (NET1) and (NET2) and one Windows 2003 server (WINS).
	<blockquote> 
	  <span class="darkBlueText">Auckland Office</span>
      <br />All machines have Combo cards installed. The network must comply with the following criteria:
      <ul>
        <li>Two departments: Equipment and Services are in the warehouse</li>
        <li>Two departments: Sales and Marketing are in the office block</li>
        <li>Each warehouse department has five users and one network-connected printer <br />(Total = 10 users; 2 printers).</li>
        <li>Each office block department has six users and one network-connected printer <br />(Total = 12 users; 2 printers).</li>
        <li>The two sites (warehouse and office block) should be connected to one another using Ethernet switches.</li>
        <li>NET1 (a NetWare server) should be located at the Warehouse.</li>
        <li>NET2 (a NetWare server) and WINS (Windows 2003 server) should be located in the office block.</li>
      </ul>
    </blockquote> 

      <P><span class="redText">Question: </span>Draw a diagram detailing how KIL's new Auckland network will 
        be set up. </P>
      <P><span class="redText">Answer: </span><img src="images/scenario1_wired.gif" width="600" height="500" align="top"></P>
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
      eMART, an international company (with a head office in Wellington), has 
      recently established three regional branches located in Auckland, Christchurch, 
      and Japan. Based on the following description, <span class="redText">draw up a detailed diagram 
      to illustrate the company&#8217;s networking infrastructure</span>. Include in 
      the diagram the whole internal network (all LANs) with the connecting devices, 
      the Internet connections, and all telecommunication links. Clearly label 
      the elements of the diagram.
      <ul>
        <li>The company&#8217;s eCommerce site (B-to-C) is hosted by the company 
          itself and is physically located in the head office in Wellington. The 
          company&#8217;s databases are physically located in Auckland.</li>
        <li>The head office (Wellington) has one Novell Netware server, one Web 
          server, four PCs and one printer networked together in a LAN using STAR 
          physical topology.</li>
        <li>The Japan branch has one Novell Netware server, four PCs and one printer 
          networked together in a LAN using STAR physical topology.</li>
        <li>The Christchurch branch has one Novell Netware server, four PCs and one 
        printer networked together in a LAN using BUS physical topology.</li> 
        <li>The Auckland branch has one Novell Netware server, one Database server, 
          four PCs and one printer networked together in a LAN using RING physical 
          topology.</li>
        <li>The Wellington and Japan branches use a high-speed digital link (1.54 
          Mbps) to access the Internet.</li>
        <li>Both the Christchurch and the Auckland branches have an ADSL (740 kbps) 
        for fast Internet access.</li> 
        <li>Each branch has a dedicated router for linking to the outside world 
          over the Internet. All the branches use a local ISP for their Internet 
          connection. </li>
      </ul>
      <P><span class="redText">Answer: </span><img src="images/scenario2_wired.jpg" align="top" width="600" height="500"></P>
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
        <span class="darkBlueText">Designing a network on multiple floors in two 
        buildings</span><br>
        Kiwi Computer Company (KCC) Limited is a manufacturer of computer supplies 
        (who design, manufacture and wholesale a range of computer hardware components). 
        KCC Ltd has recently leased two adjacent buildings in Central Auckland 
        and will set up new departmental networks. The diagram below shows the 
        basic structure of the company&#8217;s operation that spans seven floors 
        in two buildings (viz, Reception &amp; Conference rooms, Human resources, 
        Administration, Management &amp; Personnel, Design, Manufacture &amp; 
        Assembly, Stores &amp; inventory, Sales &amp; Marketing). <br><br />
        <img src="images/2buildings.gif" width="614" height="347"> 
      </p>
      <p>The following is a schedule of the number of PCs, printers, file servers, 
        database servers, web server, and some additional equipment required by 
        each department.</p>
      <table width="600" border="1" bordercolor="#000000" class="normalText">
        <tr align="center"> 
          <td width="200">&nbsp;</td>
          <td width="40">PCs</td>
          <td width="45">Printers</td>
          <td width="75">File servers</td>
          <td width="75">Database servers</td>
          <td width="75">Web servers</td>
          <td width="90">CAD/CAM workstations</td>
        </tr>
        <tr align="center"> 
          <td>Reception &amp; Conference room</td>
          <td>3</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr align="center"> 
          <td>Human Resources</td>
          <td>15</td>
          <td>1</td>
          <td>-</td>
          <td>1</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr align="center"> 
          <td>Administration </td>
          <td>20</td>
          <td>1</td>
          <td>1</td>
          <td>1</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr align="center"> 
          <td>Management &amp; Personnel</td>
          <td>20</td>
          <td>1</td>
          <td>-</td>
          <td>1</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr align="center"> 
          <td>Design, Manufacture, Assembly</td>
          <td>40</td>
          <td>2</td>
          <td>1</td>
          <td>1</td>
          <td>1</td>
          <td>2</td>
        </tr>
        <tr align="center"> 
          <td>Stores, Inventory</td>
          <td>10</td>
          <td>1</td>
          <td>1</td>
          <td>1</td>
          <td>-</td>
          <td>-</td>
        </tr>
        <tr align="center"> 
          <td>Salea &amp; Marketing</td>
          <td>10</td>
          <td>1</td>
          <td>-</td>
          <td>1</td>
          <td>-</td>
          <td>-</td>
        </tr>
      </table>
      <P><span class="redText">Question: </span>Draw a detailed diagram of the 
        proposed network.</P>
      <P><span class="redText">Answer: </span><img src="images/scenario3_wired.jpg" width="600" height="500" align="top"></P>
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
        <span class="darkBlueText">University Network Design</span><br>
        Two of the departments of the University are about to be rehoused, and
         jointly need to install a new computer laboratory. This laboratory will
        
        occupy two adjacent rooms, with each room containing 40 PCs. The departments
         require:<br>
      <ul>
        <li>Each laboratory must be capable of operating independently. It should 
        be possible to disable the network in each room separately, and at a single 
        point.</li>
        <li>The two laboratories should be capable of being combined for use with 
        large classes.</li>
        <li>Each laboratory requires access to its own Windows 2003 server. Both laboratories 
        require access to the same Linux server.</li>
		</ul>
      </p>
      <P><span class="redText">Question: </span>Draw up a LAN diagram for the 
        situation described above.</P>
      <P><span class="redText">Answer: </span><img src="images/scenario4_wired.jpg" width="600" height="500" align="top"></P>
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
        JOY PHYSICIAN GROUP &#8211; A group of physicians is building a new four-story 
        building which is 1,000 meters away from the hospital. Draw up a detailed 
        diagram of the proposed network for the JOY PHYSICIAN GROUP to meet the 
        following requirements:<br>
      <ul>
        <li>There will be 25 workstations (Windows XP) on each floor in different
           offices and two network-connected printers (Total = 100 workstations;
          8 
        printers).</li>
        <li>The network will link into the hospital&#8217;s network.</li>
        <li>There will be two NetWare servers and one Windows 2003 server.</li>
        <li>Network speed: 100 Mbps at the end-user level.</li>
        <li>Network design should be around Ethernet technology.</li>
      </ul>
      <P><span class="redText">Question: </span>Draw a diagram detailing how
         JPG&#8217;s 
        new Auckland network will be set up.</P>
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
        KIWI BUSINESS LIMITED (KBL), an International company (with a head office 
        in Auckland), has recently established three regional branches located 
        in Wellington, Christchurch, and Singapore. Based on the following description, 
        <span class="redText">draw up a detailed diagram of the company&#8217;s 
        networking Infrastructure</span>. Include the whole internal network (all 
        LANs) with the connecting devices, the Internet connections, and all telecommunication 
        links in your diagram. Clearly label the elements of the diagram.<br>
      <ul>
		<li>The company&#8217;s eBusiness site (B-to-C) is hosted by the company itself 
        and is physically located in the head office Auckland. The company&#8217;s 
        databases are physically located in Wellington.</li>
        <li>The head office (Auckland) has one Novell NetWare server, one Web server, 
        eight PCs and one printer networked together in a LAN using STAR physical 
        topology.</li>
        <li>The Singapore branch has one Novell NetWare server, eight PCs and
          one printer networked together in a LAN using BUS physical topology.</li>
        <li>The Christchurch branch has one Novell NetWare server, eight PCs and one 
        printer networked together in a LAN using RING physical topology.</li>
        <li>The Wellington branch has one Novell NetWare server, one Database server, 
        eight PCs and one printer networked together in a LAN using STAR physical 
        topology.</li>
        <li>The Auckland and Singapore branches use a high-speed digital link (1.54 
        Mbps) to access the Internet and to contact each other.</li>
        <li>Both the Auckland and Christchurch branches have an ADSL (740 Kbps)
          for  fast Internet access and linking with other branches.</li>
        <li>Each branch has a dedicated router for linking to the outside world over 
        the Internet. The branches and the head office are connected through the 
        Internet.</li>
        </ul>
    <br />
      <a href="#Top">[To Top]</a>
	</td>
  </tr>
</table>
