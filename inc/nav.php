



<!-- Start Header Section -->
      
<div class="contain-to-grid  bts-top-nav fixed">
<nav class="top-bar" data-topbar role="navigation">
<ul class="title-area">
<li class="name"><h1><a href="../"><img class="logo" src="../assets/images/bts-icon.svg" /></a></h1></li>

<li class="toggle-topbar menu-icon">
<a href="#"><span></span></a></li>
</ul>
<section class="top-bar-section">
<!-- Right Nav Section -->
<ul class="right main">
<li><a  href="../">Home</a></li>
<li <?php if ($page == 'how-it-works.php') { ?>class="active"<?php } ?>><a href="../how-it-works">How It Works</a></li>
<li <?php if ($page == 'gateways.php') { ?>class="active"<?php } ?>><a href="../resources/gateways">Gateways</a></li>

<?php if ($page == 'get-started.php') { ?>
<li > <a class="button awesome radius" href="../resources/downloads">Download</a></li>
<?php } else { ?>
<li > <a class="button awesome success radius" href="../get-started">Get Started!</a></li>

<?php } ?>

</ul>
</section>

</nav>
</div>


<!--// End Header Section  -->
