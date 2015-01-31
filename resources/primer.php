<?php

$section_title = "Primer";
$section_meta_description = "";
$section_meta_keywords = "";
include '../inc/header.php';

?><body>
<?php include("../inc/nav.php");?>


  <!-- Start Content Section -->
<section class="generic-content">
<div class="row">
<div class="large-12 medium-12 small-12 columns">
<h2>About / Primer</h2>
<h2 class="subheader">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes </h2>
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
  
   <div class="top"></div>
  <div class="large-12 medium-12 small-12 columns">
  
  <div class="top"></div><div class="top"></div>
<div class="row ">
<div class="large-12 columns">

    
     <h3>Primer</h3>
     <h4 class="subheader">BitShares is the world's first Decentralized Autonomous Company whose primary service is a decentralized exchange for price-tracking derivatives called bitAssets (Market-Pegged Assets) like bitUSD, bitGOLD, bitBTC, etc).</h4>
     
      <p>BitUSD and other bitAssets are the first price-tracking crypto-asset which don't require third-party trust. The market engine creates an incentive for traders to maintain a tight peg around the true price using a mechanism similar to a contract for a difference. Read the whitepaper to see how this is achieved without counterparty risk.</p>
     
      <p>Aside from MPAs, BitShares also offers the ability to create User-Issued Assets (UIAs) which let anyone issue their own token onto the bitshares blockchain. These can be traded against all other user-issued and market-pegged assets. BitShares gives asset issuers a variety of tools which allow for the creation of legally compliant gateways which can issue IOUs onto the bitshares blockchain. This means the entire BTS ecosystem could exist on the BTS blockchain, with centralization and counterparty risk contained to the gateways that serve as on- and off-ramps.</p>
     
     <p> BitShares is secured by the Delegated Proof of Stake consensus protocol. The design of this protocol seeks to maximize speed and efficiency while keeping "shareholders" (BTS token holders) in control of the block producers. DPOS as implemented in BitShares allows for 10 second blocks with an extremely low orphan block rate, and can potentially scale to thousands of transactions per second.</p>
     
     
     
     
  </div>
  <div class="large-12 columns">
  
      
      <h4>Why are bitshares (BTS) valuable?</h4>
      
      <p>BTS token value is tied to the profitability of the network because excess fees (collected in exchange for the network's services) are destroyed, reducing the total supply. This is equivalent to a continuous stock buyback - all else held equal, if you assume constant demand for the DAC's services, then the price of BTS must rise as it collects fees.</p>
      
    
       
       
       
    </div>
    <div class="large-12 columns">
    
        
        <h4>What are the risks?</h4>
        
        <p>BitAsset undercollateralization:  If the price of BTS falls too fast for traders to adjust their positions (2x loss within minutes), a bitAsset market could become undercollateralized, meaning there would not be enough systemic demand to support the price. Note that a fall in price is not sufficient to cause undercollateralization. For example, BTS has had a downturn from $0.04 to $0.012 while maintaining a collateral ratio of over 200%. The key is that the market engine has time to force cover bitAsset short positions well before the collateral becomes insufficient.</p>
        
        <p><span class="label awesome alert">Implementation bugs: </span> The BitShares software is young and complex. It is possible that a bug could lead to stolen funds or network outage.</p>
        
      
         
         
         
      </div>

  
  </div>
  <a name="Gateway-vs-Exchange"></a>
  <div class="top"></div><div class="top"></div>
  <div class="row ">
<div class="large-12 columns">
  <h3> Gateway vs Exchange</h3>
    
     <h4  class="subheader">Most people who have been around the crypto-currency space for a while are familiar with exchanges.</h4>
     <p>Exchanges facilitate trade by accepting deposits in two asset classes and maintaining an order book to facilitate trade among the assets using the deposited funds. A deposit at an exchange is just an IOU that is tracked on an private database maintained by the exchange.</p>
    
     <p>A gateway performs only 1 out of the 3 functions performed by an exchange: accept deposits and issue an IOU. Gateways do not need to maintain an internal database tracking account balances nor do they need to maintain an order book. This greatly simplifies the job of a gateway and minimizes risks to all parties involved.</p>
    
     <p>Today when you want to trade bitcoin for US Dollars you must deposit both your dollars and your bitcoin with a trusted third party. If that third party happened to be Mt.Gox then you know what can happen to your bitcoins held on deposit: they can be stolen, lost, embezzled, or seized. If Mt. Gox were simply a US Dollar gateway then only the dollar deposits would have been at risk because all orders and bitshares would have remained on the block chain under the control of the user’s keys.</p>
    
     <p>As you can see from the Mt. Gox example, a gateway has less than 50% the liability of an Exchange and users benefit from a global order book with no bitshare withdraw limits.</p>
  
  </div>
  </div>
 
  

 <div class="top"></div><div class="top"></div>
</section>
<!--// End Content Section  -->  
<?php
include("../inc/footer.php");
?>