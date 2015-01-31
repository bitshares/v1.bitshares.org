<?php

$section_title = "Download Software";
$section_meta_description = "";
$section_meta_keywords = "";
include '../inc/header.php';

?>
<body>
<div class="wrapper">
<?php include("../inc/nav.php");?>


  <!-- Start Content Section -->
<section class="generic-content "   >
<center>
<div class="row " >
<div class="large-12 medium-12 small-12 columns">
<h2>Download BitShares Client</h2>
<h2 class="subheader">You have options when it comes to downloading BitShares,<br> The World’s First Decentralized Exchange</h2>
</div>
<hr>
</div>

<!--<div class="row">
<div class="large-4 medium-4 small-12 left columns">
 <div class="top"></div>
    <ul class="side-nav doc-side-nav" >
          <li><a href="#Gateways">Gateways</a></li>
          <li><a href="#Gateway-vs-Exchange">Gateway vs Exchange</a></li>
          <li><a href="#Generating-Revenue-as-a-Gateway">Generating Revenue</a></li>
          <li><a href="#How-it-works">How it works</a></li>
          <li><a href="#5">Legal Compliance</a></li>
          <li><a href="#6">Gateway vs Exchange</a></li>
          <li><a href="#7">Security</a></li>
          <li><a href="#8">Unlimited Opportunity</a></li>             
        </ul>
<hr>
  </div>-->

<div class="row ">
<!--<img class="show-for-medium-up" style="width: 100%; height: auto; opacity: 0.6;"src="../assets/images/bg-trianlge-mesh-sm.svg">-->

<!-- Particles BTS  -->

<!--<div id="particles-vision" style="height: 120px;"></div>
   <script src="../assets/js/particles.js"></script>

</div>-->
    
<div class="large-12 columns">
<div class="top"></div>
<p>The BitShares software runs on all major operating systems: Windows, Linux, and Mac OS X. <br>
  Be sure to download and install the version of the BitShares software found below that is compatible with your computer’s operating system:</p>
</div>

<span class="label awesome radius secondary">BitShares 0.5.3</span>



</div>
<div class="row">

<a  class="download"  href="../binaries/BitShares-v0.5.3.exe" onclick="thanks();">
<div class="large-4 medium-4 small-12 columns outline text-center panel-download">
<img style="height: 48px;margin: 0 0 24px 0;" src="../assets/images/icons/windows.svg">
<h4>BitShares Client Windows</h4>
<p><span class="label tiny awesome radius">x32-bit/64-bit</span></p>


<small>SHA1 = e93ebd8877237493f46c109ff5e3d2bce4af65f4</small>

</div>
</a>

<a class="download"  href="../binaries/BitShares-0.5.3.dmg" onclick="thanks();">
<div class="large-4 medium-4 small-12 columns outline text-center panel-download">

<img style="height: 48px;margin: 0 0 24px 0;" src="../assets/images/icons/apple.svg">
<h4>BitShares Client Mac OS X</h4>
<p> <span class="label tiny awesome radius">Mavericks</span></p>

<small>SHA1 = 2773310e694ffa8b4f794114e25d85de9a8f5797</small>
</div>
</a>


<a  class="download"  href="../binaries/bitshares-0.5.3-linux-x86_64.tar.gz" onclick='thanks();'>
<div class="large-4 medium-4 small-12 columns outline text-center panel-download" >

<img style="height: 48px;margin: 0 0 24px 0;" src="../assets/images/icons/linux.svg">
<h4>BitShares Client Linux </h4>
 <p><span class="label tiny awesome radius">32-bit/64-bit</span></p>

<small class="">SHA1 = 2e6ac45b9aa52ed1952a78b24ed69f0bf9c699fc</small>

</div>
</a>


</div>
<div class="row">
<hr>
</div>
<div class="row">

  <div class="large-12 medium-12 small-12 columns ">
  <img class=""  style="height: 64px;margin: 24px 0 24px 0;" src="../assets/images/icons/console.svg">
  
  <p>BitShares software is public domain, meaning BitShares has no owner. 
  Once you have downloaded BitShares, installed the software, and registered your account on the blockchain, you will become part of the BitShares community. 
  Upon joining the BitShares community, you should take pride in knowing that BitShares is open-source and can be audited by anyone so that everyone using the system can have confidence in the integrity of the network. 
  All BitShares code can be found at the following location on github</p>
  <center><a target="_blank" href="https://github.com/BitShares"><i class=" size-24 fi-social-github"></i></a></center>
  </div>

  
</div>
<div class="row">
<hr>
</div>
</div>
</center>
</section>
</div>
<script>
function thanks() {
    setTimeout(function () {
        document.location.pathname = "../resources/thankyou";
    }, 1000);
}
</script>

</script>
<!--// End Content Section  -->  
<?php
include("../inc/footer.php");
?>
