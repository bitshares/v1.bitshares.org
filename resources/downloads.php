<?php

$section_title = "BitShares - Download";
$section_meta_description = "Download the BitShares client today! We support all major operating systems. BitShares software is public domain and the source code is available via GitHub.";
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

<span class="label awesome radius secondary">BitShares 0.9.2</span>




</div>
<div class="row">

<a target="_blank"  href="https://github.com/BitShares/bitshares/releases">
<div class="large-3 medium-3 small-12 columns outline text-center panel-download " >

<img style="height: 48px;margin: 0 0 24px 0;" src="../assets/images/icons/github.svg">
<h4>BitShares Releases</h4>
 <p><span class="label tiny awesome radius">Download via GitHub</span></p>

<!--<small class="">external download</small>-->

</div>
</a>


<a  class="download"   href="../binaries/BitShares-v0.9.2.exe" onclick="ga('set', 'nonInteraction', false);ga('send', 'event', { eventCategory: 'download', eventAction: 'click', eventLabel: 'bitshares_client'});" >
<div class="large-3 medium-3 small-12 columns outline text-center panel-download">
<img style="height: 48px;margin: 0 0 24px 0;" src="../assets/images/icons/windows.svg">
<h4>BitShares Client</h4>
<p><span class="label tiny awesome radius">x32-bit/64-bit</span></p>


<!--<small>local download</small>-->

</div>
</a>

<a class="download"  href="../binaries/BitShares-0.9.2.dmg" onclick="ga('set', 'nonInteraction', false);ga('send', 'event', { eventCategory: 'download', eventAction: 'click', eventLabel: 'bitshares_client'});">
<div class="large-3 medium-3 small-12 columns outline text-center panel-download">

<img style="height: 48px;margin: 0 0 24px 0;" src="../assets/images/icons/apple.svg">
<h4>BitShares Client</h4>
<p> <span class="label tiny awesome radius">Mavericks</span></p>

<!--<small>local download</small>-->
</div>  
</a>


<a  class="download"  href="../binaries/bitsharesGUI-0.9.2-linux-x86_64.tar.gz" onclick="ga('set', 'nonInteraction', false);ga('send', 'event', { eventCategory: 'download', eventAction: 'click', eventLabel: 'bitshares_client'});">
<div class="large-3 medium-3 small-12 columns outline text-center panel-download" >

<img style="height: 48px;margin: 0 0 24px 0;" src="../assets/images/icons/linux.svg">
<h4>BitShares Client</h4>
 <p><span class="label tiny awesome radius">Linux 64-bit</span></p>

<!--<small class="">local download</small>-->

</div>
</a>


</div>
<div class="row">
<center><a class="label awesome tiny warning radius" href="#" data-reveal-id="risks">What are the risks?</a>
<div id="risks" style="font-size: 1rem;" class="text-primary reveal-modal small " data-reveal>
  <h2>Risks</h2>

  <p class="subheader">Like all financial systems, trading on the bitshares platform comes with risks.</p>
  <hr>
  <p>
 Besides the typical risks associated with using a cryptocurrency, like losing your private keys or loss of funds due to implementation bugs, bitAssets on the Bitshares network come with systemic risk of global undercollateralization.</p>
  
   <p>BitAssets are similar to a contract for a difference where one position (the bitAsset, like bitUSD) is fungible across all contracts and the other position (the BTS) is forced to cover every 30 days or if the price moves too far. This is the reason there is systemic demand for bitAssets which can support their price.</p>
  
   <p>Shorting a bitAsset into existence requires <span class="label awesome success">300% collateral </span> (and for there to be no bitAsset sellers below the price feed from external exchanges), and margin calls occur at <span class="label awesome success">200% collateralization. </span> This is to try to ensure that the market engine will always be able to buy back a bitAsset up to its true price according to the price feeds. These rules are very conservative, but there is nothing that prevents the market from very quickly changing its valuation of BTS so that the market engine cannot buy back a bitAsset for 100% value.</p>
  
   <p>In short, a bitAsset is best understood to be a claim for BTS on the mininimum of the price of the asset it is supposed to track and the minimal collateral across all short positions for that asset, with the system designed in a way that attempts to minimize the probability of ever having insufficient collateral.</p>
  
   <p>Note that it is the *speed* of the price change, and not the magnitude, that leads to undercollateralization. Historically, BTS has seen falls of over 4x against the dollar, while maintaining a collateral ratio of above 200% for bitUSD. This is because as the price falls, bitUSD is bought back and destroyed while new shorts enter with fresh collateral.</p>
  <hr>
  <a  class="button tiny awesome close-risks right">I understand the risks!</a>
</div></center>

<hr>
</div>
<div class="row">

  <div class="large-12 medium-12 small-12 columns ">
  <img class=""  style="height: 64px;margin: 24px 0 24px 0;" src="../assets/images/icons/console.svg">
  
  <p>BitShares software is public domain, meaning BitShares has no owner. <br>
  Once you have downloaded BitShares, installed the software, and registered your account on the blockchain, you will become part of the BitShares community. 
  Upon joining the BitShares community, you should take pride in knowing that BitShares is open-source and can be audited by anyone so that everyone using the system can have confidence in the integrity of the network. <br>
  The BitShares source code is also available via the GitHub.</p>
  <center><a target="_blank" href="https://github.com/BitShares"><i class=" size-36 fi-social-github"></i></a></center>
  </div>

  
</div>
<div class="row">
<hr>
</div>
</div>
</center>
</section>
</div>


</script>
<!--// End Content Section  -->  
<?php
include("../inc/footer.php");
?>
