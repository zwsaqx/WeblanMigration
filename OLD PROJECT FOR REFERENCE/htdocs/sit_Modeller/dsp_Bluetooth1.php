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
	.s_head{
		font: bold 23px/normal Verdana, Arial, Helvetica, sans-serif;
    	color: #000066;
	}
	ul.s_ques, ul.s_menu_ul{
		margin:0;
		padding: 0;
	}
    div[id^='slave'], #mastermac1, #mastermac2{
        font-size:0.8rem;
        color:#1b1bd6;
        font-weight:bold;
        display:none;
    }
    .rounddata{
        width: 32px;
        height: 32px;
        border-radius: 50% !important;
        background-color: #00ffe7;
        padding-top: 3px;
        border: 1px solid #39746f;
        color: #0f4e49;
        font-weight: bold;
        position:absolute;
        top:0px;
        left:0px;
    }
	p.s_questext, footer{
    	font: bold 12px/normal Verdana, Arial, Helvetica, sans-serif;
    	color: #000066;
	}
	li.s_ans .s_anstext, .col-form-label, .form-control, p{
		
		font: normal 12px/normal Verdana, Arial, Helvetica, sans-serif;
    	color: #000000;
	}
    #cani{
        color: #000066;
    }
	footer{
		background-color:#BFCFFF;
	}
</style>
<style>
            canvas { border: 1px solid black; }
            div#preload { display: none; }
            .zidx1{
                z-index : 1;
            }
            #w1{
                transform: rotate(215deg);
                top: 175px;
                left: 320px;
            }
            #w2{
                transform: rotate(270deg);
                top: 235px;
                left: 365px;
            }
            #w3{
                transform: rotate(315deg);
                top: 302px;
                left: 342px;
            }
            #w4{
                transform: rotate(0deg);
                top: 327px;
                left: 281px;
            }
            #w5{
                transform: rotate(45deg);
                top: 292px;
                left: 215px;
            }
            #w6{
                transform: rotate(90deg);
                top: 230px;
                left: 200px;
            }
            #w7{
                transform: rotate(135deg);
                top: 170px;
                left: 235px;
            }
            #w8{
                transform: rotate(90deg);
                top: 235px;
                left: 525px;
            }
            #w9{
                transform: rotate(215deg);
                top: 165px;
                left: 630px;
            }
            #w10{
                transform: rotate(270deg);
                top: 235px;
                left: 675px;
            }
            #w11{
                transform: rotate(315deg);
                top: 310px;
                left: 655px;
            }
            #w12{
                transform: rotate(0deg);
                top: 327px;
                left: 605px;
            }
            #w13{
                transform: rotate(45deg);
                top: 292px;
                left: 541px;
            }
            #w14{
                transform: rotate(90deg);
                top: 230px;
                left: 510px;
            }
            #w15{
                transform: rotate(135deg);
                top: 170px;
                left: 545px;
            }
            
            #w16{
                transform: rotate(90deg);
                top: 235px;
                left: 835px;
            }
            #w17{
                transform: rotate(245deg);
                top: 180px;
                left: 865px;
            }
            #w18{
                transform: rotate(270deg);
                top: 235px;
                left: 945px;
            }
            #w19{
                transform: rotate(295deg);
                top: 295px;
                left: 942px;
            }
            #w20{
                transform: rotate(315deg);
                top: 323px;
                left: 886px;
            }
            #w21{
                transform: rotate(345deg);
                top: 297px;
                left: 790px;
            }
            #hovertext{
                font-size: 14px;
                font-weight: 600;
                color: rgb(50, 23, 191);
                text-decoration: none solid rgb(0, 0, 0);
                display: none;
            }
            #masterinfo1 p, #txtz p{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 14px;
                font-weight: 700;
                color: rgb(201, 99, 29);
                text-decoration: none solid rgb(78, 201, 30);
            }
            #masterpico1 p, #masterpico2 p, #masterpico3 p{
                font-family: Arial, Helvetica, sans-serif;
                font-size: 14px;
                font-weight: 700;
                color: #1d6874;
                text-decoration: none solid rgb(78, 201, 30);
                line-height:17px;
                
            }
</style>
</head>

		<div class="col-10 pt-2">
            <div id="preload">
                <img src="images/S1.png" id="s1" width="1" height="1" alt="Image 01" />
                <img src="images/S2.png" id="s2" width="1" height="1" alt="Image 01" />
                <img src="images/S3.png" id="s3" width="1" height="1" alt="Image 01" />

                
                <img src="images/L1.png" width="1" height="1" alt="Image 01" />
                <img src="images/L2.png" width="1" height="1" alt="Image 01" />
                <img src="images/L3.png" width="1" height="1" alt="Image 01" />
                <img src="images/L4.png" width="1" height="1" alt="Image 01" />
                <img src="images/L5.png" width="1" height="1" alt="Image 01" />
                <img src="images/L6.png" width="1" height="1" alt="Image 01" />
                <img src="images/L7.png" width="1" height="1" alt="Image 01" />
                <img src="images/L8.png" width="1" height="1" alt="Image 01" />

                <img src="images/PDA1.png" width="1" height="1" alt="Image 01" />
                <img src="images/PDA2.png" width="1" height="1" alt="Image 01" />
                <img src="images/PDA3.png" width="1" height="1" alt="Image 01" />
                <img src="images/PDA4.png" width="1" height="1" alt="Image 01" />
                <img src="images/PDA5.png" width="1" height="1" alt="Image 01" />
                <img src="images/PDA6.png" width="1" height="1" alt="Image 01" />


                
                

            </div>
            <h2 class="s_head text-center p-3">
						Bluetooth Network Modelling
            </h2>
            
            <form>
                <div class="form-group row">
                    <label for="nodes" class="col-sm-5 col-form-label text-right">Nodes</label>
                    <div class="col-sm-3">
                    <select class="form-control" name="nodes" id="nodes">
                                
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                
                            </select>
                    </div>
                </div>
                <div class="text-center">
                            <input type="button" id="btnGenerate" name="btnGenerate" value="Generate Model...">
                </div>
                
                
                
                <div class="">
                    <p class="text-center mt-5 d-none s_head" id="cani">Click On Play Button for Bluetooth Animation</p>
                    <div id="txtz" class="d-none">
                        <p class="" id="" >General Operation of Master and Slave: The Master transmits information to the Slave and the Slave listens to master.</p>
                        
                        <p>
                            <b>Inquiry Process:</b> First time Master and Slave devices know nothing about each other, so they must discover each other. Thus, one device sends an inquiry to the other. The listening device will then respond with its unique network address (MAC ADDRESS).
                        </p>
                        <p>
                            <b>Paring Process:</b> Once the Master and Slave exchanged their identification (MAC ADDRESS). Next, they form the actual Bluetooth connection by having each other’s network address (MAC ADDRESS), which is exchanged in Inquiry Process.
                        </p>
                    </div>
                </div>
                
                
                <div class="row mt-2 text-center border-0" >
                    <div id="dx" class="col-9 border border-0" style="width:1100px;height:500px;position:relative;">
                        <canvas id="myCanvas" width="1100" height="500" class="border-0" style="">
                            <p>Fallback Content. Canvas does not Supported</p>
                        </canvas>
                        <div id="mastermac1" style="position:absolute;top:200px;left:238px;">
                            30-DD-FC-83-DA-39
                        </div>
                        <div id="mastermac2" style="position:absolute;;top:195px;left:557px;">
                            2E-D4-55-C6-0E-6B
                        </div>
                        <div id="slave1" style="position:absolute;">
                            
                        </div>
                        <div id="slave2" style="position:absolute;">
                            
                        </div>
                        <div id="slave3" style="position:absolute;">
                            
                        </div>
                        <div id="slave4" style="position:absolute;">
                            
                        </div>
                        <div id="slave5" style="position:absolute;">
                            
                        </div>
                        <div id="slave6" style="position:absolute;">
                            
                        </div>
                        <div id="slave7" style="position:absolute;">
                            
                        </div>
                        <div id="slave8" style="position:absolute;">
                        slave8
                        </div>
                        <div id="slave9" style="position:absolute;">
                        slave9
                        </div>
                        <div id="slave10" style="position:absolute;">
                        slave10
                        </div>
                        <div id="slave11" style="position:absolute;">
                            
                        </div>
                        <div id="slave12" style="position:absolute;">
                            
                        </div>
                        <div id="slave13" style="position:absolute;">
                            
                        </div>
                        <div id="slave14" style="position:absolute;">
                            
                        </div>
                        <div id="slave15" style="position:absolute;">
                            
                        </div>
                        <div id="slave16" style="position:absolute;">
                            
                        </div>
                        <div id="slave17" style="position:absolute;">
                            
                        </div>
                        <div id="slave18" style="position:absolute;">
                            
                        </div>
                        
                        <div id="rounddata1" class="rounddata d-none" style="position:absolute;z-index:10">
                            D
                        </div>
                        <div id="rounddata2" class="rounddata d-none" style="position:absolute;z-index:10">
                            D
                        </div>
                        <div id="rounddata3" class="rounddata d-none" style="position:absolute;z-index:10">
                            D
                        </div>

                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w1" width="32" height="32"   />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w2" width="32" height="32"   />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w3" width="32" height="32"  />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w4" width="32" height="32"  />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1"  id="w5" width="32" height="32"  />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w6" width="32" height="32" />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w7" width="32" height="32"  />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w8" width="32" height="32"  />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w9" width="32" height="32" />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w10" width="32" height="32"  />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w11" width="32" height="32"  />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w12" width="32" height="32" />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w13" width="32" height="32"  />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w14" width="32" height="32"  />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w15" width="32" height="32" />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w16" width="32" height="32"  />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w17" width="32" height="32"  />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w18" width="32" height="32" />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w19" width="32" height="32"  />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w20" width="32" height="32"  />
                        <img src="images/wifi.png" class="wifi invisible position-absolute zidx1" id="w21" width="32" height="32"  />
                    </div>
                    <div class="col-3">
                        <div id="masterinfo1" class="invisible text-left">
                            <p><b>MAC ADDRESS:</b></p>     
                            <p>MAC address is a unique identifier assigned to a network interface controller (NIC) for use as a network address in communications within a network segment</p>
                            <p>A Bluetooth address sometimes referred to as a Bluetooth MAC address, is a 48-bit value that uniquely identifies a Bluetooth device.</p>
                            <p>A MAC address is usually what is displayed on one Bluetooth device when another Bluetooth device need to be differentiated between other Bluetooth devices.</p>
                        </div>
                        <div id="masterpico1"  class="d-none text-left" >
                            <p>In Bluetooth networks, Master Node to control when and where devices can send data. In this model, a single master device can be connected to up to Max seven different slave devices. Any slave device in one piconet can only be connected to a single master. Master can send data to any of its slaves and request data from them as well. Slaves are only allowed to transmit to and receive from their master. They can't talk to other slaves in the piconet.</p>
                        </div>
                        <div id="masterpico2"  class="d-none text-left" >
                            <p>In Bluetooth networks, Master Node to control when and where devices can send data. In this Scatternet, Master devices can be connected to up to seven different slave devices and Can Communicate with only those 7 Slaves. Slave that is connected to M1 and M2 is known as Bridge slave which Communicates with two masters. Masters can send data to any of its slaves and request data from them as well. Slaves are only allowed to transmit to and receive from their master. They can't talk to other slaves in the Scatternet.</p>
                        </div>
                        <div id="masterpico3"  class="d-none text-left" >
                            <p>In Bluetooth networks, Master Device to control when and where devices can send data. In this Scatternet, Master devices can be connected to up to seven different slave devices and can only communicate with only those 7 devices. The M3 is a slave in Piconet 2. master Devices send data to any of its slaves and request data from them as well. Slaves are only allowed to transmit to and receive from their master. They can't talk to other slaves in the Scatternet.</p>
                        </div>
                    </div>
                </div>
                <div class="text-center" id="hovertext">
                Hover over each device or press the Pause/Resume button to see the MAC addresses.
                </div>
                <div id="grp" class="d-none">
                    <section class="my-5 text-center">
							<input type="button" name="btnPlay" id="btnPlay" value="Play">
							<input type="button" name="btnPauseOrResume" id="btnPauseOrResume" value="Pause/Resume">
							<input type="button" name="btnStop" id="btnStop" value="Stop" >
				    </section>
                    <div class="row">
                        <div class="col-1 col-form-label">No of Scatternet</div>
                        <div class="col-3 col-form-label" id="dispscatternet"></div>
                        
                    </div>
                    <div class="row">
                        <div class="col-1 col-form-label">No of Piconet</div>
                        <div class="col-3 col-form-label" id="disppiconet"></div>
                        
                    </div>
                    <div class="row">
                        <div class="col-1 col-form-label">No of Nodes</div>
                        <div class="col-3 col-form-label" id="dispnodes"></div>
                    </div>
                    
                    
                </div>
                
            </form>

		</div>
	</div>
  

</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/seedrandom/3.0.5/seedrandom.min.js">
    </script>
    <script>
        $(document).ready(function(){

            sleep = function(seconds){
                var e = new Date().getTime() + (seconds * 1000);
                while (new Date().getTime() <= e) {}
            }

            var w = 64;
            var h = 64;

            var ctx = null;
            var scatternets = -1;
            var nodes = -1;
            var canvas = null;

            var rowCount = 6;
            const imagesFileNames = ["L1.png", "L2.png", "L3.png", "L4.png", "L5.png", "L6.png", "L7.png", "L8.png", "PDA1.png", "PDA2.png", "PDA3.png", "PDA4.png", "PDA5.png", "PDA6.png"]
            const images = [];
            const wifiImages = [];
            let rotateDeg = [180, 2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

            var loadedImageCount = 0;

            

            let xList = [285, 375, 310, 210, 120, 60, 110];
            let yList = [85,  210, 330, 370, 320, 210, 110];
            let xThres = [40,30,35,45,50,40,30];
            let yThres = [40,40,25,5,5,40,50];

            let macAddresses = ['2C:54:91:88:C9:E3', '00:1B:44:11:3A:B7', 'B1:A4:1B:A7:35:F8', '15:CA:23:E5:FA:38', '26:2C:47:7A:28:F4', '30:EF:7F:8E:AF:FF', 'FD:FA:C0:DD:45:80', '6F:03:10:E8:42:6B',     
                                '25:10:18:B6:32:57', '89:9B:84:F4:CB:E5', '8B:52:3F:D9:93:BA', 'F7:6F:1D:55:CF:4F', '4E:8B:9A:3C:9C:0F', '2F:50:3A:5D:AE:8F', '3E:7E:C0:A4:A8:B5', '22:D1:4F:89:B2:62',
                                'A9:F6:8F:D0:E8:ED', '40:95:37:03:A9:CD', '6F:DD:F8:9A:F9:18','18:66:91:DA:47:69', '5C-56-FD-0D-EB-DE']
            
            
            displayMacAddress = function(evt){
                let listIdx1 = 0, listIdx2 = 0;
                let ax = 0;
                let nodesCount = parseInt($("#nodes").val());
                if(evt.offsetX >= xList[listIdx1] + ax  && evt.offsetX <= xList[listIdx1] + ax + 64 && evt.offsetY >= yList[listIdx1] && evt.offsetY <= yList[listIdx1] + 64 ){
                    $("#slave"+(listIdx1+1)).removeClass("d-none").addClass("d-block");
                }else{
                        $("#slave"+(listIdx1+1)).removeClass("d-block").addClass("d-none");
                        listIdx1++;
                        listIdx2++; // listIdx2 = 1
                        
                        if(evt.offsetX >= xList[listIdx1] + ax  && evt.offsetX <= xList[listIdx1] + ax + 64 && evt.offsetY >= yList[listIdx1] && evt.offsetY <= yList[listIdx1] + 64){
                            
                            if(nodesCount >= (listIdx1+2))
                                $("#slave"+(listIdx1+1)).removeClass("d-none").addClass("d-block");
                        }else{
                            $("#slave2").removeClass("d-block").addClass("d-none");
                            listIdx1++;
                            listIdx2++; // listIdx2 = 2
                            
                            if(evt.offsetX >= xList[listIdx1] + ax  && evt.offsetX <= xList[listIdx1] + ax + 64 && evt.offsetY >= yList[listIdx1] && evt.offsetY <= yList[listIdx1] + 64){
                                
                                if(nodesCount >= (listIdx1+2))
                                    $("#slave"+(listIdx1+1)).removeClass("d-none").addClass("d-block");
                            }else{
                                $("#slave"+(listIdx1+1)).removeClass("d-block").addClass("d-none");
                                listIdx1++;
                                listIdx2++;  // listIdx2 = 3
                                
                                if(evt.offsetX >= xList[listIdx1] + ax  && evt.offsetX <= xList[listIdx1] + ax + 64 && evt.offsetY >= yList[listIdx1] && evt.offsetY <= yList[listIdx1] + 64){
                                    
                                    if(nodesCount >= (listIdx1+2))
                                        $("#slave"+(listIdx1+1)).removeClass("d-none").addClass("d-block");
                                }else{
                                    $("#slave"+(listIdx1+1)).removeClass("d-block").addClass("d-none");
                                    listIdx1++;
                                    listIdx2++; // listIdx2 = 4
                                    
                                    if(evt.offsetX >= xList[listIdx1] + ax  && evt.offsetX <= xList[listIdx1] + ax + 64 && evt.offsetY >= yList[listIdx1] && evt.offsetY <= yList[listIdx1] + 64){
                                        
                                        if(nodesCount >= (listIdx1+2))
                                            $("#slave"+(listIdx1+1)).removeClass("d-none").addClass("d-block");
                                    }else{
                                        $("#slave"+(listIdx1+1)).removeClass("d-block").addClass("d-none");
                                        listIdx1++;
                                        listIdx2++; // listIdx2 = 5
                                        
                                        if(evt.offsetX >= xList[listIdx1] + ax  && evt.offsetX <= xList[listIdx1] + ax + 64 && evt.offsetY >= yList[listIdx1] && evt.offsetY <= yList[listIdx1] + 64){
                                            
                                            if(nodesCount >= (listIdx1+2))
                                                $("#slave"+(listIdx1+1)).removeClass("d-none").addClass("d-block");
                                        }else{
                                            $("#slave"+(listIdx1+1)).removeClass("d-block").addClass("d-none");
                                            listIdx1++;
                                            if (listIdx1 >= 7){
                                                listIdx1 = 0;
                                            }
                                            listIdx2++; // listIdx2 = 6
                                            
                                            
                                            if(evt.offsetX >= xList[listIdx1] + ax  && evt.offsetX <= xList[listIdx1] + ax + 64 && evt.offsetY >= yList[listIdx1] && evt.offsetY <= yList[listIdx1] + 64){
                                                
                                                if(nodesCount >= (listIdx1+2))
                                                    $("#slave"+(listIdx1+1)).removeClass("d-none").addClass("d-block");
                                            }else{
                                                $("#slave"+(listIdx1+1)).removeClass("d-block").addClass("d-none");
                                                
                                                listIdx1 = 0;
                                                                                                                                                
                                                listIdx2 += 1;  // listIdx2 = 7
                                                
                                                ax = 310;
                                                
                                                if(evt.offsetX >= xList[listIdx1] + ax  && evt.offsetX <= xList[listIdx1] + ax + 64 && evt.offsetY >= yList[listIdx1] && evt.offsetY <= yList[listIdx1] + 64){
                                                    
                                                    if(nodesCount >= (listIdx2+2))
                                                        $("#slave"+(listIdx2+1)).removeClass("d-none").addClass("d-block");
                                                }else{
                                                    $("#slave"+(listIdx2+1)).removeClass("d-block").addClass("d-none");
                                                    listIdx1++; // listIdx1 = 1
                                                    listIdx2++;  // listIdx2 = 8
                                                    ax = 310;
                                                    if(evt.offsetX >= xList[listIdx1] + ax  && evt.offsetX <= xList[listIdx1] + ax + 64 && evt.offsetY >= yList[listIdx1] && evt.offsetY <= yList[listIdx1] + 64){
                                                        
                                                        if(nodesCount >= (listIdx2+2))
                                                            $("#slave"+(listIdx2+1)).removeClass("d-none").addClass("d-block");
                                                    }else{
                                                        $("#slave"+(listIdx2+1)).removeClass("d-block").addClass("d-none");
                                                        listIdx1++; // listIdx1 = 2
                                                        listIdx2++; // listIdx2 = 9
                                                        ax = 310;
                                                        if(evt.offsetX >= xList[listIdx1] + ax  && evt.offsetX <= xList[listIdx1] + ax + 64 && evt.offsetY >= yList[listIdx1] && evt.offsetY <= yList[listIdx1] + 64){
                                                            
                                                            if(nodesCount >= (listIdx2+2))
                                                                $("#slave"+(listIdx2+1)).removeClass("d-none").addClass("d-block");
                                                        }else{
                                                            $("#slave"+(listIdx2+1)).removeClass("d-block").addClass("d-none");
                                                            listIdx1++; // listIdx1 = 3
                                                            listIdx2++; // listIdx2 = 10
                                                            ax = 310;
                                                            if(evt.offsetX >= xList[listIdx1] + ax  && evt.offsetX <= xList[listIdx1] + ax + 64 && evt.offsetY >= yList[listIdx1] && evt.offsetY <= yList[listIdx1] + 64){
                                                                
                                                                if(nodesCount >= (listIdx2+2))
                                                                    $("#slave"+(listIdx2+1)).removeClass("d-none").addClass("d-block");
                                                            }else{
                                                                $("#slave"+(listIdx2+1)).removeClass("d-block").addClass("d-none");
                                                                listIdx1++; // listIdx1 = 4
                                                                listIdx2++;  // listIdx2 = 11
                                                                ax = 310;
                                                                if(evt.offsetX >= xList[listIdx1] + ax  && evt.offsetX <= xList[listIdx1] + ax + 64 && evt.offsetY >= yList[listIdx1] && evt.offsetY <= yList[listIdx1] + 64){
                                                                    
                                                                    if(nodesCount >= (listIdx2+2))
                                                                        $("#slave"+(listIdx2+1)).removeClass("d-none").addClass("d-block");
                                                                }else{
                                                                    $("#slave"+(listIdx2+1)).removeClass("d-block").addClass("d-none");
                                                                    listIdx1 += 2; // listIdx1 = 6
                                                                    
                                                                    listIdx2++; // listIdx2 = 12
                                                                    ax = 310;
                                                                    
                                                                    if(evt.offsetX >= xList[listIdx1] + ax  && evt.offsetX <= xList[listIdx1] + ax + 64 && evt.offsetY >= yList[listIdx1] && evt.offsetY <= yList[listIdx1] + 64){
                                                                        
                                                                        if(nodesCount >= (listIdx2+2))
                                                                            $("#slave"+(listIdx2+1)).removeClass("d-none").addClass("d-block");
                                                                    }else{
                                                                        $("#slave"+(listIdx2+1)).removeClass("d-block").addClass("d-none");
                                                                        listIdx1 = 0;// listIdx1 = 0
                                                                        ax = 310 * 2;
                                                                        listIdx2++; // listIdx2 = 13
                                                                        
                                                                        if(evt.offsetX >= xList[listIdx1] + ax  && evt.offsetX <= xList[listIdx1] + ax + 64 && evt.offsetY >= yList[listIdx1] && evt.offsetY <= yList[listIdx1] + 64){
                                                                            
                                                                            if(nodesCount >= (listIdx2+2))
                                                                                $("#slave"+(listIdx2+1)).removeClass("d-none").addClass("d-block");
                                                                        }else{
                                                                            $("#slave"+(listIdx2+1)).removeClass("d-block").addClass("d-none");
                                                                            
                                                                            listIdx1++;// listIdx1 = 1
                                                                            listIdx2++; // listIdx2 = 14
                                                                            ax = 310 * 2;
                                                                            if(evt.offsetX >= xList[listIdx1] + ax  && evt.offsetX <= xList[listIdx1] + ax + 64 && evt.offsetY >= yList[listIdx1] && evt.offsetY <= yList[listIdx1] + 64){
                                                                                
                                                                                if(nodesCount >= (listIdx2+2))
                                                                                    $("#slave"+(listIdx2+1)).removeClass("d-none").addClass("d-block");
                                                                            }else{
                                                                                $("#slave"+(listIdx2+1)).removeClass("d-block").addClass("d-none");
                                                                                listIdx1++;// listIdx1 = 2
                                                                                listIdx2++; // listIdx2 = 15
                                                                                ax = 310 * 2;
                                                                                if(evt.offsetX >= xList[listIdx1] + ax  && evt.offsetX <= xList[listIdx1] + ax + 64 && evt.offsetY >= yList[listIdx1] && evt.offsetY <= yList[listIdx1] + 64){
                                                                                    if(nodesCount >= (listIdx2+2))
                                                                                        $("#slave"+(listIdx2+1)).removeClass("d-none").addClass("d-block");
                                                                                }else{
                                                                                    $("#slave"+(listIdx2+1)).removeClass("d-block").addClass("d-none");
                                                                                    listIdx1++;// listIdx1 = 3
                                                                                    listIdx2++;// listIdx2 = 16
                                                                                    ax = 310 * 2;
                                                                                    if(evt.offsetX >= xList[listIdx1] + ax  && evt.offsetX <= xList[listIdx1] + ax + 64 && evt.offsetY >= yList[listIdx1] && evt.offsetY <= yList[listIdx1] + 64){
                                                                                        if(nodesCount >= (listIdx2+2))
                                                                                            $("#slave"+(listIdx2+1)).removeClass("d-none").addClass("d-block");
                                                                                    }else{
                                                                                        $("#slave"+(listIdx2+1)).removeClass("d-block").addClass("d-none");
                                                                                        listIdx1++;// listIdx1 = 3
                                                                                        listIdx2++;// listIdx2 = 16
                                                                                        ax = 310 * 2;
                                                                                        if(evt.offsetX >= xList[listIdx1] + ax  && evt.offsetX <= xList[listIdx1] + ax + 64 && evt.offsetY >= yList[listIdx1] && evt.offsetY <= yList[listIdx1] + 64){
                                                                                            if(nodesCount >= (listIdx2+2))
                                                                                                $("#slave"+(listIdx2+1)).removeClass("d-none").addClass("d-block");
                                                                                        }else{
                                                                                            $("#slave"+(listIdx2+1)).removeClass("d-block").addClass("d-none");
                                                                                            
                                                                                        }
                                                                                        
                                                                                    }
                                                                                }
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                }
                    
                ax = 0;
                var nx1 = 250 - (w / 2);
                var ny1 = 250 - (h / 2);
                
                if(evt.offsetX >= nx1  && evt.offsetX <= nx1 + ax + 64 && evt.offsetY >= ny1 && evt.offsetY <= ny1 + 64 ){
                    //$("#masterinfo").removeClass("d-none").addClass("d-block");
                    $("#mastermac1").removeClass("d-none").addClass("d-block");
                }else{
                    $("#mastermac1").removeClass("d-block").addClass("d-none");
                   // $("#masterinfo").removeClass("d-block").addClass("d-none");
                    ax = 310 * 1;
                    
                    if(evt.offsetX >= nx1 + ax && evt.offsetX <= nx1 + ax + 64 && evt.offsetY >= ny1 && evt.offsetY <= ny1 + 64 && scatternets >= 2){
                        //$("#masterinfo").removeClass("d-none").addClass("d-block");
                        $("#mastermac2").removeClass("d-none").addClass("d-block");
                    }else{
                        $("#mastermac2").removeClass("d-block").addClass("d-none");
                        //$("#masterinfo").removeClass("d-block").addClass("d-none");
                        ax = 310 + 160;
                        
                        if(evt.offsetX >= nx1 + ax && evt.offsetX <= nx1 + ax + 64 && evt.offsetY >= ny1 && evt.offsetY <= ny1 + 64 && scatternets == 3){
                            //$("#masterinfo").removeClass("d-none").addClass("d-block");
                        }else{
                            
                           // $("#masterinfo").removeClass("d-block").addClass("d-none");
                        }
                    }
                }
            }
            
            //$("#rounddata1").html("D").css("left", xList[0] + 15).css("top", yList[0] + 45);
            
            //$("#rounddata2").html("D").css("left", xList[0] + 15 + (310 * 1)).css("top", yList[0] + 45);
            //$("#rounddata3").html("D").css("left", xList[0] + 15 + (310 * 2)).css("top", yList[0] + 45);

            $('#rounddata1').css('transform', 'translate('+(xList[0] + 65)+'px,'+(yList[0] + 45)+'px)');
            $('#rounddata2').css('transform', 'translate('+(xList[0] + 65 + (310 * 1))+'px,'+(yList[0] + 45)+'px)');
            $('#rounddata3').css('transform', 'translate('+(xList[0] + 65 + (310 * 2))+'px,'+(yList[0] + 45)+'px)');

            createNodes = function(scatternetIndex, sx1, sy1,  xAxis, imgIndex){
                
                
                var nx1 = (sx1 ) - (w / 2);
                var ny1 = (sy1 ) - (h / 2);
                
                if (scatternetIndex < 2){
                    for(var idx = 0; idx < nodes; idx++){
                        //console.log("nodes", nodes);
                        if (idx == 0){
                            
                            ctx.font = "bold 15px Arial";
                            if(xAxis == 0)
                                ctx.fillStyle="#1b1bd6";
                            else
                                ctx.fillStyle = '#fb008a';
                            ctx.moveTo(nx1 + 10, ny1+85);
                            ctx.textAlign = "start";
                            ctx.fillText("Master-"+masterNbr, nx1 + 10, ny1+85);
                            ctx.stroke();
                            
                            masterNbr++;

                            let img = new Image();
                            img.src = 'images/S3.png';
                            
                            ctx.beginPath();
                            ctx.drawImage(img, nx1, ny1, w, h);
                            
                            if(xAxis > 0){                       
                                slaveNbr++;
                            }

                            nx1 = nx1;
                            ny1 = ny1 - 100;
                        
                        }else{
                            var img = null;
                            if(idx == 2 && scatternetIndex ==1 && scatternets == 3){
                                img = new Image();
                                img.src = 'images/S1.png';

                                ctx.font = "bold 15px Arial";
                                ctx.fillStyle="#1b1bd6"
                                ctx.fillText("Master-"+masterNbr, xList[idx-1] + xAxis + 15, yList[idx-1] + 85, w, h);
                                masterNbr++;

                                
                                slaveNbr++;

                                
                                
                                ctx.drawImage(img, xList[idx-1] + xAxis+13, yList[idx-1] , w, h);
                            }else{
                                var img = images[imgIndex+idx];
                                
                            
                                if(xAxis == 0){

                                    ctx.font = "bold 15px Arial";
                                    ctx.fillStyle="#1b1bd6"
                                    ctx.fillText("Slave-"+slaveNbr, xList[idx-1] + xAxis + 10, yList[idx-1] +  78, w, h);
                                    
                                    //console.log("wifiIdxZZZZ", wifiIdx);
                                    if(wifiIdx != 14 && wifiIdx != 16 ){
                                        $("#w"+wifiIdx).removeClass("invisible").addClass("visible");
                                        
                                    }else{
                                        //$("#w"+wifiIdx).removeClass("visible").addClass("invisible");
                                    }
                                    wifiIdx++;
                                    ctx.drawImage(img, xList[idx-1] + xAxis, yList[idx-1] , w, h);
                                    slaveNbr++;
                                    
                                }
                                else
                                {
                                    

                                    if(idx != 6){
                                            ctx.font = "bold 15px Arial";
                                            ctx.fillStyle="#1b1bd6"
                                            if(slaveNbr >= 7)
                                                slaveNbr = 1;
                                            ctx.fillText("Slave-"+slaveNbr, xList[idx-1] + xAxis + 15, yList[idx-1] + 78, w, h);
                                            
                                            slaveNbr++;
                                            ctx.drawImage(img, xList[idx-1] + xAxis + 15, yList[idx-1] , w, h);

                                            //$("#w"+wifiIdx).removeClass("invisible").addClass("visible");
                                            //wifiIdx++;
                                    }
                                }
                            }
                        } 
                    }
                
                }else{
                    wifiIdx -= nodes;
                    slaveNbr = 0;
                    var tmp_ythres = 0;
                    for(var idx = 0; idx < nodes; idx++){
                        
                        if(idx > 3){
                            tmp_ythres = 70;
                        }
                        else{
                            if(idx > 2){
                                tmp_ythres = 50;
                            }else{
                                tmp_ythres = 35;
                            }
                        }
                        var img = images[imgIndex+idx];

                        ctx.font = "bold 15px Arial";
                        ctx.fillStyle="#1b1bd6"
                        if(idx != 5){
                            ctx.fillText("Slave-"+slaveNbr, xList[idx-1] + xAxis + xThres[idx-1] - 30, yList[idx-1] + yThres[idx-1] + tmp_ythres, w, h);
                        }else{
                            ctx.fillText("Slave-"+slaveNbr, xList[idx-1] + xAxis + xThres[idx-1] - 22, yList[idx-1] + yThres[idx-1] + tmp_ythres +19, w, h);
                        }
                            
                        ctx.stroke();
                        
                        if(idx != 5)
                            ctx.drawImage(img, xList[idx-1] + xAxis, yList[idx-1] , w, h);
                        else
                            ctx.drawImage(img, xList[idx-1] + xAxis+5, yList[idx-1] +20, w, h);

                        slaveNbr++;
                        //console.log("wifiIdx", wifiIdx);
                        if(wifiIdx != 16)
                            $("#w"+wifiIdx).removeClass("invisible").addClass("visible");
                                    
                        wifiIdx++;
                    }
                }

            }
            createScatternets = function(){
                
                var sx1 = 250;
                var sy1 = 250;

                let xAxis = 0;
                
                let circles = 3;

                let imgIndex = 0;
                
                for(var idx = 0; idx < scatternets; idx++){
                    ctx.beginPath();
                    ctx.setLineDash([10,10]);
                    ctx.strokeStyle="#dcdcdc";
                    ctx.arc(sx1, sy1, 200, 0, 2 * Math.PI);
                    ctx.stroke();
                    ctx.font = "bold 15px Arial";
                    ctx.fillStyle="#ff4f19"
                    ctx.textAlign = "start";
                    ctx.fillText("Piconet-"+(idx+1), sx1-25, sy1+225, w, h);
                    ctx.stroke();
                    
                    createNodes(idx, sx1, sy1, xAxis, imgIndex);

                    nodes -= 8;
                    imgIndex += 8;
                    sx1 = sx1 + 320;
                    
                    xAxis = xAxis + 310;
                    
                    
                }
            }
            
            
            processNetworks = function(){
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                nodes = parseInt($("#nodes").val());
                if(nodes == 15 ){
                        nodes++;
                }else{
                        if(nodes >= 16 ){
                            nodes +=2;
                        }
                }
                scatternets = Math.ceil( nodes / 8) ;
                createScatternets();
            }
            var prng = new Math.seedrandom();
            getRandomInt = function (min, max) {
               
                min = Math.ceil(min);
                max = Math.floor(max);
                let randValue = prng();
                return Math.floor(randValue * (max - min) + min); 
            }
            preLoadImage = function(i){
                let img = new Image();
                let randomIndex = getRandomInt(0, imagesFileNames.length);
                let imgName = imagesFileNames[randomIndex];
                img.addEventListener('load', function() {
                    loadedImageCount++;
                        }, false);
                img.src = 'images/'+imgName;
                return img;
            }
            insertMacAddress = function(){
                let listIdx = 0;
                for(let m = 0; m < macAddresses.length; m++){
                    if(m  < 7){
                        if (listIdx >= 7){
                            listIdx = 0;
                        }
                        if(m  == 2){
                            $("#slave"+(m+1)).html(macAddresses[m]).css("left", xList[listIdx]+60).css("top", yList[listIdx]-15);
                        }
                        else{
                            if(m  == 4){
                                $("#slave"+(m+1)).html(macAddresses[m]).css("left", xList[listIdx]-10).css("top", yList[listIdx]-20);
                            }else{
                                $("#slave"+(m+1)).html(macAddresses[m]).css("left", xList[listIdx] +40).css("top", yList[listIdx]-20);
                            }
                            
                        }
                        
                        
                    }
                    if(m  >= 7 && m < 13){
                        if (listIdx >= 7){
                            listIdx = 0;
                        }
                        if(m == 12){
                            listIdx++;
                        }
                        if (m+1 == 10){
                            $("#slave"+(m+1)).html(macAddresses[m]).css("left", xList[listIdx]+60 + 310 ).css("top", yList[listIdx] -17 );
                        }else{
                            if (m+1 == 12){
                                $("#slave"+(m+1)).html(macAddresses[m]).css("left", xList[listIdx]+10 + 310 ).css("top", yList[listIdx] -17 );
                            }else{
                                $("#slave"+(m+1)).html(macAddresses[m]).css("left", xList[listIdx]+40 + 310 ).css("top", yList[listIdx] -17 );
                            }
                        }
                        
                        
                    }
                    if(m >= 13){
                        if (listIdx >= 7){
                            listIdx = 0;
                        }
                        if (m+1 == 18){
                            $("#slave"+(m+1)).html(macAddresses[m]).css("left", xList[listIdx]+35 + (310 * 2) ).css("top", yList[listIdx] + 3 );
                        }else{
                            $("#slave"+(m+1)).html(macAddresses[m]).css("left", xList[listIdx]+40 + (310 * 2) ).css("top", yList[listIdx] -17 );
                        }
                        
                    }
                    listIdx++;
                }
            }
            var scatterToAnimate = -1;
            var animateHappening = false;
            var startX = -1;
            var startY = -1;
            let slaveNbr = 1;
            let masterNbr = 1;
            let actualNodes = 0;
            let wifiIdx = 1;
            $("#btnGenerate").click(function (){
                
                loadedImageCount = 0;

                slaveNbr = 1;
                masterNbr = 1;
                slaveVisible = [];

                $("#cani").removeClass("d-none").addClass("d-block");
                $("#grp").removeClass("d-none").addClass("d-block");
                
                $(".rounddata").removeClass("d-block").addClass("d-none");
                $("div[id^='slave'], #mastermac1, #mastermac2").removeClass("d-block").addClass("d-none");

                $("#masterpico1, #masterpico2, #masterpico3 #hovertext, #txtz").removeClass("d-block").addClass("d-none");
                $("#masterinfo1").removeClass("visible").addClass("invisible");
                wifiIdx = 1;
                $(".wifi").removeClass("visible").addClass("invisible");

                insertMacAddress();
                canvas = document.getElementById('myCanvas');
                
                var sx1 = 250;
                var sy1 = 250;
                
                
                
                if (canvas.getContext) {
                    ctx = canvas.getContext('2d');
                    $("#myCanvas").bind("mousemove", function(evt){       
                        if(pause == false)  {
                            displayMacAddress(evt);
                        }            
                            
                    });
                    nodes = parseInt($("#nodes").val());
                    actualNodes = nodes;

                    
                    if(actualNodes == 15 ){
                        actualNodes++;
                    }else{
                        if(actualNodes >= 16 ){
                            actualNodes +=2;
                        }
                    }
                    $("#hovertext, #txtz").removeClass("d-none").addClass("d-block");
                    let visThres = 0;
                    scatternets = Math.ceil( actualNodes / 8) ;
                    if (scatternets == 1){
                        $("#dispscatternet").html("0");
                        $("#masterpico1").removeClass("d-none").addClass("d-block");
                        $("#masterpico2").removeClass("d-block").addClass("d-none");
                        $("#masterpico3").removeClass("d-block").addClass("d-none");
                        visThres=1;
                    }
                    if (scatternets == 2){
                        $("#dispscatternet").html("1");
                        $("#masterpico1").removeClass("d-block").addClass("d-none");
                        $("#masterpico2").removeClass("d-none").addClass("d-block");
                        $("#masterpico3").removeClass("d-block").addClass("d-none");
                        visThres=2;
                    }
                    if (scatternets == 3){
                        $("#dispscatternet").html("2");
                        $("#masterpico1").removeClass("d-block").addClass("d-none");
                        $("#masterpico2").removeClass("d-block").addClass("d-none");
                        $("#masterpico3").removeClass("d-none").addClass("d-block");
                        visThres=2;
                    }
                    $("#disppiconet").html(scatternets)
                    $("#dispnodes").html(actualNodes);
                    
                    for(let cx = 0; cx < nodes - visThres; cx++){
                        slaveVisible.push("#slave"+(cx+1));
                    }

                    let i = 0;
                    for(i = 0; i < actualNodes; i++){
                        let img = preLoadImage(i);
                        images.push(img)

                        let imgWifi = new Image();
                        imgWifi.src = 'images/wifi.png';

                        wifiImages.push(imgWifi)
                    }
                    
                    processNetworks();
                    
                    
                } else {
                    console.log("Context Does not Supported");
                }
                
            });
            var animateCount = 1;
            var animateCountMaximum = 0;
            
            let pause = false;
            let play = false;
            let left = xList[0] + 65;
            let top = yList[0] + 45;
            let left3 = xList[0] + 65;
            let top3 = yList[0] + 45;
            let aniIdx = 0
            dataAnimate1 = function(){
                
                if(!pause){
                    console.log("left3", left3, "top3", top3);
                    //$("#rounddata1").html("D").css("left", left).css("top", top);
                    console.log('translate('+left+'px, '+top+'px)');
                    $("#rounddata1").html("D").css("transform", 'translate('+left+'px, '+top+'px)');
                    
                    if(actualNodes >= 10)
                        //$("#rounddata2").html("D").css("left", left + (310 * 1)).css("top", top);
                        $("#rounddata2").html("D").css("transform", 'translate('+(left + (310 * 1))+'px, '+top+'px)');
                                            
                    if(scatternets >=3 ){
                        //$("#rounddata3").html("D").css("left", left3 + (310 * 2)).css("top", top3);
                        $("#rounddata3").html("D").css("transform", 'translate('+(left3 + (310 * 2))+'px, '+top3+'px)');
                        
                    }
                        
                    
                    sleep(0.4);
                    
                    if(animateCount < 15){
                        left -=3;
                        top += 5;
                    }
                    if(animateCount < 12){
                        left3 -=7;
                        top3 += 3;
                    }else{
                        left3 -=3;
                        top3 += 2;
                    }

                    animateCount++;
                    if(animateCount < animateCountMaximum){
                        if(animateHappening && !pause){
                            //window.requestAnimationFrame(dataAnimate1);
                        }
                            
                    }else{
                        $(".rounddata").removeClass("d-block").addClass("d-none");
                        play = false;
                        
                        aniIdx=0;
                        clearInterval(intervalHandle);
                    }
                    if(animateCount > 15){
                        $("#rounddata1").removeClass("d-block").addClass("d-none");
                        $("#rounddata2").removeClass("d-block").addClass("d-none");
                    }
                }
                
                
            }
            
            var intervalHandle = null;
            let slaveVisible = [];

            $("#btnPlay").click(function (){
                if (intervalHandle != null){
                    clearInterval(intervalHandle);
                }

                play = true;
                pause = false;
                
                animateHappening = true;
                animateCountMaximum = 15;
                
                $("div[id^='slave'], #mastermac1, #mastermac2").removeClass("d-block").addClass("d-none");
                
                $("#masterinfo1").removeClass("visible").addClass("invisible");


                $("div[id^='rounddata']").removeClass("d-block").addClass("d-none");

                $("#rounddata1").removeClass("d-none").addClass("d-block");
                if(actualNodes >= 10)
                    $("#rounddata2").removeClass("d-none").addClass("d-block");
                if(scatternets ==3 ){
                    $("#rounddata3").removeClass("d-none").addClass("d-block");
                    animateCountMaximum = 45;
                }
                animateCount = 1;
                left = xList[0] + 65;
                top = yList[0] + 45;

                left3 = xList[0] + 65;
                top3 = yList[0] + 45;

                //$("#rounddata1").html("D").css("left", left).css("top", top);
                
                $('#rounddata2').css('transform', 'translate('+(xList[0] + 65 + (310 * 1))+'px,'+(yList[0] + 45)+'px)');
                $('#rounddata3').css('transform', 'translate('+(xList[0] + 65 + (310 * 2))+'px,'+(yList[0] + 45)+'px)');
                dataAnimate1();
                intervalHandle = setInterval(dataAnimate1,700);
            });
            $("#btnStop").click(function (){
                
                animateHappening = false;
                clearInterval(intervalHandle);
                $(".rounddata").removeClass("d-block").addClass("d-none");
                if(play){
                    $(slaveVisible.toString()).removeClass("d-none").addClass("d-block");
                    $("#mastermac1").removeClass("d-none").addClass("d-block");
                    if(scatternets >= 2){
                        $("#mastermac2").removeClass("d-none").addClass("d-block");
                    }
                    $("#masterinfo1").removeClass("invisible").addClass("visible");
                }
                    
                play = false;
                pause = false;
            });
            $("#btnPauseOrResume").click(function(evt){
                if (play == true){
                    pause = !pause;
                    if(pause == false){
                        $(slaveVisible.toString()).removeClass("d-block").addClass("d-none");
                        $("#mastermac1").removeClass("d-block").addClass("d-none");
                        $("#mastermac2").removeClass("d-block").addClass("d-none");
                        $("#masterinfo1").removeClass("visible").addClass("invisible");
                        //dataAnimate1();
                    }else{
                        $(slaveVisible.toString()).removeClass("d-none").addClass("d-block");
                        $("#mastermac1").removeClass("d-none").addClass("d-block");
                        if(scatternets >= 2){
                            $("#mastermac2").removeClass("d-none").addClass("d-block");
                        }
                         $("#masterinfo1").removeClass("invisible").addClass("visible");
                    }
                }
                
            });
        });
    </script>
</html>




    
