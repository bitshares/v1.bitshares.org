<?php
$page = basename($_SERVER['SCRIPT_NAME']);

?>
<!doctype html>
<html class="no-js flexbox" lang="en">
  <head>
  
  <!-- Meta -->
    <!-- ****** Google Webmaster Tools Verification ****** -->
    <meta name="google-site-verification" content="x15mu50Hulvw0P-AVXjLsLOvHYyvuhxdAUCprDi8JuA" />
    <script src="//cdn.optimizely.com/js/2331670385.js"></script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php if( $section_meta_description != "" ) { ?>
    <meta name="description" content="<?php echo ${section_meta_description} ?>" />
    <?php } else { ?>
    <meta name="description" content="Bitshares Decentralized Exchange - Trade USD, Gold, Bitcoin, and other derivative assets without counterparty risk" />
    <?php } ?>
    <?php if( $section_meta_keywords != "" ) { ?>
    <meta name="keyords" content="<?php echo ${section_meta_keywords} ?>" />
    <?php } else { ?>
    <meta name="keywords" content="Bitshares Decentralized Exchange, BitAssets, Market Peg, BitUSD, BitCNY, BitGOLD, BitBTC" />
    <?php } ?>
    <?php if( $section_title != "" ) { ?>
    <title>BitShares - <?php echo ${section_title} ?></title>
    <?php } else { ?>
    <title>BitShares - Decentralized Exchange</title>
    <?php } ?>
    <title>BitShares Distributed Exchange</title>
    
    <!-- ****** Meta Facebok Open Graph ****** -->
    <meta property="og:title" content="BitShares – Decentralized Exchange"/>
    <meta property="og:image" content="../media/social/fb/fb_og_image.png"/>
    <meta property="og:site_name" content="BitShares.org"/>
    <meta property="og:description" content="Trade Dollars, Gold, Bitcoin, and other derivative assets without counterparty risk."/>
    	
     <!--//  Meta -->
    
    
    
    
    <!-- ******Favicons ****** -->
    	<link rel="shortcut icon" href="../assets/images/favicon/favicon.ico">
    	<link rel="icon" sizes="64x64" href="../assets/images/favicon/favicon.ico">
    	<link rel="icon" type="image/png" sizes="196x196" href="../assets/images/favicon/favicon-192.png">
    	<link rel="icon" type="image/png" sizes="160x160" href="../assets/images/favicon/favicon-160.png">
    	<link rel="icon" type="image/png" sizes="96x96" href="../assets/images/favicon/favicon-96.png">
    	<link rel="icon" type="image/png" sizes="64x64" href="../assets/images/favicon/favicon-64.png">
    	<link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon-32.png">
    	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon-16.png">
    	<link rel="apple-touch-icon" href="../assets/images/favicon/favicon-57.png">
    	<link rel="apple-touch-icon" sizes="114x114" href="../assets/images/favicon/favicon-114.png">
    	<link rel="apple-touch-icon" sizes="72x72" href="../assets/images/favicon/favicon-72.png">
    	<link rel="apple-touch-icon" sizes="144x144" href="../assets/images/favicon/favicon-144.png">
    	<link rel="apple-touch-icon" sizes="60x60" href="../assets/images/favicon/favicon-60.png">
    	<link rel="apple-touch-icon" sizes="120x120" href="../assets/images/favicon/favicon-120.png">
    	<link rel="apple-touch-icon" sizes="76x76" href="../assets/images/favicon/favicon-76.png">
    	<link rel="apple-touch-icon" sizes="152x152" href="../assets/images/favicon/favicon-152.png">
    	<link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/favicon-180.png">
    	<meta name="msapplication-TileColor" content="#FFFFFF">
    	<meta name="msapplication-TileImage" content="../assets/images/favicon/favicon-144.png">
    	<meta name="msapplication-config" content="../assets/images/favicon/browserconfig.xml">
    	<!-- ****** Favicons ****** -->
    
    
    
    <link rel="stylesheet" href="../assets/css/app.css" />
    <link rel="stylesheet" href="../assets/css/lab.css" />
    <link rel="stylesheet" href="../assets/css/foundation-icons.css" />
    <link rel="stylesheet" href="../assets/css/animate.css" />
    <script src="../bower_components/modernizr/modernizr.js"></script>
<!--
/**
 * @license
 * MyFonts Webfont Build ID 2954270, 2015-01-15T16:03:55-0500
 * 
 * The fonts listed in this notice are subject to the End User License
 * Agreement(s) entered into by the website owner. All other parties are 
 * explicitly restricted from using the Licensed Webfonts(s).
 * 
 * You may obtain a valid license at the URLs below.
 * 
 * Webfont: ProximaNovaSoft-Medium by Mark Simonson
 * URL: http://www.myfonts.com/fonts/marksimonson/proxima-nova-soft/medium/
 * 
 * Webfont: ProximaNovaSoft-Bold by Mark Simonson
 * URL: http://www.myfonts.com/fonts/marksimonson/proxima-nova-soft/bold/
 * 
 * Webfont: ProximaNovaSoft-Regular by Mark Simonson
 * URL: http://www.myfonts.com/fonts/marksimonson/proxima-nova-soft/regular/
 * 
 * 
 * License: http://www.myfonts.com/viewlicense?type=web&buildid=2954270
 * Licensed pageviews: 1,000,000
 * Webfonts copyright: Copyright (c) Mark Simonson, 2010. All rights reserved.
 * 
 * © 2015 MyFonts Inc
*/-->

<?php include("ga-scripts.php");?>


<!--//  load the webfonts -->
<script type="text/javascript">
// change this to false if you're having trouble with WOFFs
var woffEnabled = true;
// uncomment this and set it to the path where your webfont directory is
var customPath = "../assets/css/";
</script>
<script type="text/javascript" src="../assets/js/bitshares.js"></script>


</head>

