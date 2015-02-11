<?php

$section_title = "BitShares - Our Vision";
$section_meta_description = "Our philosophy and vision is to build decentralized free-market solutions for securing the life, liberty, and property of all. ";
$section_meta_keywords = "";
include '../inc/header.php';

?>

<body >
<div class="wrapper">
<?php include("../inc/nav.php");?>


  <!-- Start Content Section -->
<section class="generic-content ">
<div class="row ">
<div class="large-12 medium-12 small-12 columns">
<h2>Our Philosophy</h2>
<h2 class="subheader">To build decentralized free-market solutions for<br> securing the life, liberty, and property of all</h2>
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
  
<div class="row ">
<div class="large-12 medium-12 small-12 columns">
<!--<img class="show-for-medium-up" style="width: 100%; height: auto; opacity: 0.6;"src="../assets/images/bg-trianlge-mesh-sm.svg">-->

<div id="particles-vision"></div>
   <script src="../assets/js/particles.js"></script>

</div>
    
<div class="large-6 columns">
<p>BitShares holders have a wide variety of philosophies and goals, dreams, inspirations, ambitions, wants and needs. It is difficult to say exactly why many of us joined this project, but the idea of enabling the everyday man or woman to achieve financial freedom has often made its way to the top of the conversation. We have perhaps all discovered a part of ourselves that longs for something more, to be part of a group that also empowers us as individuals, and to find solutions to the world's problems by leveraging our collective will to unite with a common purpose.</p>

<p>Satoshi Nakamoto, the mysterious founder of bitcoin, is rumored to have once said “to be a sovereign people, we must have a sovereign currency.” There is little doubt that most of the world seems to have reached a crisis point, but if we wish to chart a path to freedom we must now turn our minds in the spirit of cooperation towards the light of our own creativity. As we discover new and exciting ways to flex our creative muscles in the BitShares community, we are also building an advanced economic engine to support our growth and evolution as sovereign people.</p>
</div>
<div class="large-6 columns">
<p>BitShares is now helping many of us to dream once again of a future where the possibility of economic security, social equality, and religious and political liberty will be available to everyone. We have taken the first critical steps, and by supporting the development of the BitShares toolkit we have given ourselves some promising tools for regaining control of our collective destiny. By trading BitShares and sharing it with others, we are extending this vision and purpose to our friends, families, communities and nations.</p>

<p>The BitShares peer-to-peer network is 30,000 accounts strong and growing, made up of people with many living philosophies, but united together with the goal of securing the life, liberty, and property of all. </p>


<a href="../get-started" class="button awesome ">Will you join us?</a>




  </div>
 
  </div>
</section>
</div>
<!--// End Content Section  -->  


<script  type="text/javascript">
// Particles Background

/* DESKTOP */


function pJS_desktop(){

particlesJS('particles-vision', {
    particles: {
      color: '#00587c',
      shape: 'circle',
      opacity: 0.3,
      size: 2.5,
      size_random: true,
      nb: 100,
      line_linked: {
        enable_auto: true,
        distance: 250,
        color: '#00a9e0',
        opacity: 0.5,
        width: 1,
        condensed_mode: {
          enable: false,
          rotateX: 600,
          rotateY: 600
        }
      },
      anim: {
        enable: true,
        speed: 1.5
      }
    },
    interactivity: {
      enable: false,
      mouse: {
        distance: 250
      },
      detect_on: 'canvas',
      mode: 'grab',
      line_linked: {
        opacity: 0.5
      },
      events: {
        onclick: {
          push_particles: {
            enable: true,
            nb: 4
          }
        }
      }
    },
    retina_detect: true
});
}

/* MOBILE / TABLET */

function pJS_mobile(){
  particlesJS('particles-vision', {
  particles: {
      color: '#00587c',
      shape: 'circle',
      opacity: 0.3,
      size: 2.5,
      size_random: true,
      nb: 40,
      line_linked: {
        enable_auto: true,
        distance: 250,
        color: '#00a9e0',
        opacity: 0.5,
        width: 1,
        condensed_mode: {
          enable: false,
          rotateX: 600,
          rotateY: 600
        }
      },
      anim: {
        enable: true,
        speed: 1.5
      }
    },
    interactivity: {
      enable: false,
      mouse: {
        distance: 250
      },
      detect_on: 'canvas',
      mode: 'grab',
      line_linked: {
        opacity: 0.5
      },
      events: {
        onclick: {
          push_particles: {
            enable: true,
            nb: 4
          }
        }
      }
    },
    retina_detect: true
});
}

/* LAUNCH */

if(window.innerWidth > 1100){
  pJS_desktop();
}else{
  pJS_mobile();
}

/* on resize */

window.addEventListener('resize', function() {
  checkOnResize();
}, true);

function checkOnResize(){
  if(window.innerWidth > 1100){
    if(pJS.particles.nb != 150){
      console.log('desktop mode')
      pJS.fn.vendors.destroy();
      pJS_desktop();
    }
  }else{
    if(pJS.particles.nb == 150){
      console.log('mobile mode');
      pJS.fn.vendors.destroy();
      pJS_mobile();
    }
  }
}


</script>

<?php
include("../inc/footer.php");
?>
