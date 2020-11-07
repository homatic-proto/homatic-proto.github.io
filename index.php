<?php
@$State = $_GET['State'];
if($State == "on")
 {
  $file = fopen("State.json", "w") or die("can't open file");
  fwrite($file, '{"State": "on"}');
  fclose($file);
 } 
else if ($State == "off")
 {
  $file = fopen("State.json", "w") or die("can't open file");
  fwrite($file, '{"State": "off"}');
  fclose($file);
 }
if($State == "on1")
 {
  $file = fopen("State.json", "w") or die("can't open file");
  fwrite($file, '{"State": "on1"}');
  fclose($file);
 } 
else if ($State == "off1")
 {
  $file = fopen("State.json", "w") or die("can't open file");
  fwrite($file, '{"State": "off1"}');
  fclose($file);
 }
if($State == "on2")
 {
  $file = fopen("State.json", "w") or die("can't open file");
  fwrite($file, '{"State": "on2"}');
  fclose($file);
 } 
else if ($State == "off2")
 {
  $file = fopen("State.json", "w") or die("can't open file");
  fwrite($file, '{"State": "off2"}');
  fclose($file);
 }

if($State == "on3")
 {
  $file = fopen("State.json", "w") or die("can't open file");
  fwrite($file, '{"State": "on3"}');
  fclose($file);
 } 
else if ($State == "off3")
 {
  $file = fopen("State.json", "w") or die("can't open file");
  fwrite($file, '{"State": "off3"}');
  fclose($file);
 }
?>

<html>
  <head>      
    
    <title>Smart Switch Board</title>
   
  </head>
  <body>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card-2 w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#footer" class="w3-bar-item w3-button">Structure</a>
  <a href="#footer" class="w3-bar-item w3-button">Patent pending</a>
  <a href="#work" class="w3-bar-item w3-button">NoT</a>
  <a href="#work" class="w3-bar-item w3-button">IoT</a>
  <a href="#footer" class="w3-bar-item w3-button">More</a>
</nav>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-

bars"></i></a>
  <a href="#home" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="#team" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Switch</a>
  <a href="#work" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Set-Up</a>
  <a href="#pricing" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Features</a>
  <a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Contact</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Know us <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="#footer" class="w3-bar-item w3-button">VVP engineering College</a>
      <a href="#footer" class="w3-bar-item w3-button">Patent Pending Technology</a>
      <a href="#footer" class="w3-bar-item w3-button">Interested</a>
    </div>
  </div>
  <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-teal" title="Search"><i class="fa fa-search"></i></a>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-mobile w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Switch</a>
    <a href="#work" class="w3-bar-item w3-button">Set-Up</a>
    <a href="#pricing" class="w3-bar-item w3-button">Features</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    <a href="#" class="w3-bar-item w3-button">Search</a>
  </div>
</div>



<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>YOUR SWITCH BOARD</h2>
<p>Just Tap To Switch </p>

<div class="w3-row"><br>

<div class="w3-quarter">
 <h3>BULB</h3>
  <a href="?State=on">
  <img src="bulbon.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity"></a>
 
  <p>ON</p>
</div>

<div class="w3-quarter">
<h3>FAN</h3>
<a href="?State=on1">
  <img src="fanon.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity"></a>
  
  <p>ON</p>
</div>

<div class="w3-quarter">
  <h3>PLUG</h3>
<a href="?State=on2">
  <img src="switchon.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity"></a>
  <p>ON</p>
</div>

<div class="w3-quarter">
 <h3>POWER</h3>
<a href="?State=on3">
  <img src="poweron.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
 </a>
  <p>ON</p>
</div>

<div class="w3-row"><br>

<div class="w3-quarter">
<a href="?State=off">
  <img src="bulboff.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
 </a>
  <p>OFF</p>
</div>

<div class="w3-quarter">
<a href="?State=off1">
  <img src="fanoff.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
</a>
  <p>OFF</p>
</div>

<div class="w3-quarter">
<a href="?State=off2">
  <img src="switchoff.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
 </a> 
  <p>OFF</p>
</div>

<div class="w3-quarter">
<a href="?State=off3">
  <img src="poweroff.png" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  </a>
  <p>OFF</p>
</div>


</div>
</div>


<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="title.jpg" alt="Smart" style="width:100%;height:100%;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Low Cost Smart Switch Board">Smart Switch</button>
  </div>
</div>
<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4>Prototype has implemented successfully</h4>
      <h5>Because we can! <i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p>To know more about us !</p>
      <p>Go to our portal <a class="w3-text-teal" href="/w3css/default.asp">VVP ENGINEERING COLLEGE ELECTRONICS AND COMMUNICATION DEPARTMENT</a>and find us!</p>
    </div>
    <footer class="w3-container w3-teal">
      <p>Thank you for your Kind Support</p>
    </footer>
  </div>
</div>

<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>How This Tech Works</h2>
<p>We had efficiently implemented emerging technology of Digital Word, The "Internet of Things" often abbreviated to "IoT". As name suggest it is internet of things, 

where "things" can actually communicate to each other Virtually! and the other technology we had used is "Network of Things" often abbreviated to "NoT".
</p>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="Things-Network.jpg" alt="NoT" style="width:100%">
  <div class="w3-container">
  <h3>NoT</h3>
  <h4>SetUp</h4>
  <p>WLAN hotspot in your device</p>
  <p>Network SSID as Given to you</p>
  <p>PASSWORD as Given to you</p>
  <p>Open App or Browser And Controll Board in Home</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="iot.png" alt="IoT" style="width:85%">
  <div class="w3-container">
  <h3>IoT</h3>
  <h4>SetUp</h4>
  <p>Turn on Data Connection or WLAN</p>
  <p>Open Given link in Browser</p>
  <p>Login Once</p>
  <p>Controll your Switch Board from Any where</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card-2 w3-white">
  <img src="Android-PNG.png" alt="Android" style="width:80%">
  <div class="w3-container">
  <h3>Android App</h3>
  <h4>SetUp</h4>
  <p>Set IP in label Given to you</p>
  <p>Tap on OK Button </p>
  <p>Tap on IoT Button </p>
  <p>Controll your Switch Board from Any where</p>
  </div>
  </div>
</div>

</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>

<!-- Pricing Row -->
<div class="w3-row-padding w3-center w3-padding-64" id="pricing">
    <h2>Features</h2>
    <p>Choose a Board that fits your needs.</p><br>
    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Basic</p>
        </li>
        <li class="w3-padding-16"><b>4</b> AC Plugs</li>
        <li class="w3-padding-16"><b>Hotspot</b> Easy</li>
        <li class="w3-padding-16"><b>Wi-Fi</b> Connection</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-check-square"></i> </h2>
          <span class="w3-opacity">keeps On!</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Set this</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme-l2">
          <p class="w3-xlarge">Modular</p>
        </li>
        <li class="w3-padding-16"><b>Multiple</b> plug</li>
        <li class="w3-padding-16"><b>Multiple</b> Access</li>
        <li class="w3-padding-16"><b>Low</b> Power Cunsption</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-check-square"></i></h2>
          <span class="w3-opacity">keeps On!</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Set this</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-hover-shadow">
        <li class="w3-theme">
          <p class="w3-xlarge">Data Usage</p>
        </li>
        <li class="w3-padding-16"><b>1</b> Kbyte/multiple Switching</li>
        <li class="w3-padding-16"><b>Low</b> Data rate </li>
        <li class="w3-padding-16"><b>low</b> Mainteness </li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide"><i class="fa fa-check-square"></i></h2>
          <span class="w3-opacity">per Day!</span>
        </li>
        <li class="w3-theme-l5 w3-padding-24">
<a href="?State=on1">
          <button class="w3-button w3-teal w3-padding-large"><i class="fa fa-check"></i> Show Usage</button></a>
        </li>
      </ul>
    </div>
</div>

<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p>Swing by for a Desigen Embeded Technology.</p>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>Rajkot,Gujarat</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>+91 89-80-981427</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>homaticinfo@gmail.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <input class="w3-check" type="checkbox" checked name="Like">
      <label>I Like it!</label>
<a href="?State=on1">
      <button type="submit" class="w3-button w3-right w3-theme">Send</button></a>
      </form>
    </div>
  </div>
</div>

<!-- Google Maps -->
<div id="googleMap" style="width:100%;height:100px;"></div>
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(22.2651517,70.7084825);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDA6_GmwnkEaaCbwRtugXqPgr4AtEL5RIc=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center" id="footer">
  <h4>Let's Join</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-google-plus"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <a class="w3-button w3-large w3-teal w3-hide-small" href="javascript:void(0)" title="Linkedin"><i class="fa fa-linkedin"></i></a>
<p>  Patent Pending Technology</p>
<p>Powered by <a href="https://#" target="_blank">Keval Jagatiya in association with VVP Engineering College</a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Go To Top</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
// Script for side navigation
function w3_open()
{
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close()
{
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
  </body>
</html>