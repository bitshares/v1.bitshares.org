<?php

$section_title = "BitShares - The Decentralized Exchange";
$section_meta_description = "BitShares is The World's First Decentralized Exchange for crypto-currency. ";
$section_meta_keywords = "";
include 'inc/header.php';

?>
  <script src="dist/assets/js/main.min.js"></script>

<body ng-app="app" ng-controller="tickerCtrl"> 
    
   <!-- Start Content Section -->
  <section class="frontpage-head" >
      <header>
        <div class="row">
          <div class="large-4 medium-4 small-6 columns ">
          <a href="../"><img class="logo" src="../assets/images/bts-logo.svg" /></a>
          </div>    
         <div class="large-4 medium-4 small-12 columns show-for-medium-up text-center ">
          <center>
          <div id="ticker" ng-show="price.USD" class="tiny button round awesome secondary ticker">
            <center>
            <span id="USD">{{ price.USD }}</span> | <span class="" id="CNY">{{ price.CNY }}</span><br>
            <span id="BTC">{{ price.BTC }}</span> | <span id="GOLD">{{ price.GOLD }}</span></center></div>
            </center>
          </div>
          <div class="large-4 medium-4 small-6 columns">
            <ul class="button-group round right ">
             <li><a href="/how-it-works.php" class="tiny awesome button split secondary">EXPLORE<span  data-dropdown="drop"></span></a>
                <ul id="drop" class="f-dropdown" data-dropdown-content>
                 <li><a href="/how-it-works">How It Works</a></li>
                 <li><a href="/get-started">Get started!</a></li> 
                  <li><a href="https://bitsharestalk.org/index.php?board=45.0" target="_blank">Helpdesk / Forum</a></li> 
                </ul>
              </li>
              </ul>
          </div>   
       </div>
        <div class="row headline">
          <div class="large-12 medium-12 small-12 columns">
          <center>
          <h1>BitShares - The Decentralized Exchange</h1>
          <h4 class="subheader">Trade Dollars, Gold, Bitcoin, and more without counterparty risk.</h4>
          <a class="round button awesome green" href="../get-started.php"><i class="openacc"></i>OPEN YOUR ACCOUNT</a><br>
       
          </center>
          </div> 

        </div>
          <ul class="markets-list market-sparks">
            <li ng-repeat="m in featured_markets track by $index" class="large-4 col-small-6" style="margin-right:0;">
              <market-thumbnail name="m"></market-thumbnail>
            </li>
          </ul> 
          </div>
    <div class="top-featured">
      <div class="row">
       <div class="large-12 columns">
           <div class="row">
               <div class="large-4 medium-4 columns">
               <p class="text-center"><a class="large radius button outline expand" href="../how-it-works" target="_self">How it works</a></p>
               </div> 
               <div class="large-4 medium-4 columns">
               <p class="text-center"><a class="large radius button outline expand" href="../deposit" target="_self">Deposit</a></p>
               </div> 
               <div class="large-4 medium-4 columns">
               <p class="text-center"><a class="large radius button outline expand" href="../get-started" target="_self">Get started</a></p>
               </div> 
              
           </div>
         </div>
         </div>
    </div>
      </header>
</section>
    
      <!--// End Header Section  -->

 

    
    <section id="front-chart">


<div class="row ">
    <a href="http://docs.bitshares.org" target="_blank">
 <div class="large-12 columns bitasset-wp">
        <div class="large-5 medium-5 small-12 columns">
        <h4 class="text-right small-only-text-center" style="margin-top: 2px;">BitAssets Whitepaper<br><span class=" radius awesome label">Technical information about Market Pegged Assets</span></h4>
       </div>
       <div class="text-left small-only-text-center large-7 medium-7 small-12 columns">
       <img style="max-width: 480px;width: 94%;height: auto;" src="../assets/images/home/btn-bitassets.svg">
       </div>
     
 </div> 
   </a>         
</div>


<!--<div class="row ">
     <center>
         
         
        
         <div class="large-12 columns">
         <ul class="small-block-grid-5">
         <li><span class="label awesome" id="USD"></span></li>
         <li><span class="label awesome" id="BTC"></span></li>  
         <li><span class="label awesome" id="CNY"></span></li>
         <li><span class="label awesome" id="GOLD"></span></li>
         <li><span class="label awesome" id="EUR"></span></li>
         </ul>
        
         
         <div class="large-12 columns">
           <h4 class="label awesome">USD Price history</h4>
         <div id="container" style="height: auto; width: 96%;margin: 0px 0 24px 0;"></div>
         </div>
         </center>   
         </div>
        
   -->

</section>


<section id="front-content">
   
             <div class="row" data-equalizer>
          <div class="large-4 medium-4 small-12 columns " data-equalizer-watch>
            <div class="large-1 medium-1 small-1 columns">
            <i class="fi-shield size-36 icon-c"></i>
            </div>
            <div class="large-10 medium-10 small-10 columns">
            <h4>Fast</h4>
              <p>Trades execute in 10 seconds or less.
              All markets operate 24/7 on a global network.
              BitShares uses a unique order-matching 
              algorithm which eliminates front-running, 
              so there are no middlemen.
              </p>
            </div>
          </div>
          <div class="large-4 medium-4 small-12 columns " data-equalizer-watch>
            <div class="large-2 medium-2 small-2 columns">
              <i class="fi-lock size-36 icon-c"></i>
              </div>
            <div class="large-10 medium-10 small-10 columns">
            <h4>Private & Secure</h4>
              <p>You hold primary control of the access keys to your funds,
              so they can never be stolen, confiscated, or moved by 
              anyone without your permission. No personal details are required
              to open an account, and you can trade from the privacy 
              of your home or office. </p>
            </div>
          </div>
          <div class="large-4 medium-4 small-12 columns " data-equalizer-watch>
            <div class="large-2 medium-2 small-2 columns">
              <i class="fi-graph-trend size-36 icon-c"></i>
              </div>
            <div class="large-10 medium-10 small-10 columns">
            <h4>No Counterparty Risk</h4>
              <p>The BitShares Exchange operates entirely on the 
              blockchain, so unlike central exchanges it can never be 
              shut down, breached, or run away with users funds. All balances 
              are secured by a minimum of 200% collateral, which 
              is held in escrow by the blockchain in a transparent
              and verifiable manner.
              </p>
            </div>
          </div>
       </div>
           <!--<div class="row ">
             <a href="http://docs.bitshares.org" target="_blank">
          <div class="large-12 columns bitasset-wp">
                 <div class="large-5 medium-5 small-12 columns">
                 <h4 class="text-right small-only-text-center" style="margin-top: 2px;">BitAssets Whitepaper<br><span class="primary radius awesome label">Technical information about Market Pegged Assets</span></h4>
                </div>
                <div class="large-7 medium-7 small-12 columns">
                <img style="max-width: 480px;width: 94%;height: auto;" src="../assets/images/home/btn-bitassets.svg">
                </div></a>
          </div>          
         </a></div>-->
         
                  <div class="row" style="margin-top: 32px;">
               <div class="large-4 medium-4 small-12 columns">
             <div class="large-2 medium-2 small-2 columns">
               <i class="fi-check size-36 icon-c"></i>
               </div>
             <div class="large-10 medium-10 small-10 columns">
                 <h4>Boundless Trading</h4>
                   <p>Trade in Gold, Silver, Dollars, Oil, Euro, Yuan, Bitcoin &amp; more! 
                   Regardless of geographic location, anyone with a smartphone 
                   or an internet connection can trade on the BitShares network. 
                   </p>
                 </div>
               </div>
               <div class="large-4 medium-4 small-12 columns">
             <div class="large-2 medium-2 small-2 columns">
               <i class="fi-thumbnails size-36 icon-c"></i>
               </div>
             <div class="large-10 medium-10 small-10 columns">
                 <h4>Lowest Trading Fees</h4>
                   <p>BitShares only charges a small fixed fee 
                   per deposit, withdrawal, or trade. 
                   At present, the fee is <i><strong>less than 3 cents</strong></i>.
                   The network does <i>not</i> charge a spread 
                   per transaction and there are <i>never</i> limits 
                   on deposits or withdrawals.
                   </p>
                 </div>
               </div>
               
               <div class="large-4 medium-4 small-12 columns">
             <div class="large-2 medium-2 small-2 columns">
               <i class="fi-clock size-36 icon-c"></i>
                 </div>
             <div class="large-10 medium-10 small-10 columns">
                 <h4>Earn Interest on BitAssets</h4>
                   <p>All BitAssets earn a variable yield derived from
                   transaction fees, interest paid by short sellers, and
                   other sources.
                   See the <a href="http://docs.bitshares.org" target="_blank">BitAsset whitepaper</a> for details.
                   </p>
                 </div>
              </div>
             
          
   </div>         
</section>
  

<?php
include("inc/footer.php");
?>
