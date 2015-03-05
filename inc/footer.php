
    
  
    <footer id="footer">
    <div class="row" data-equalizer>
     
     
     
   <div class="large-12 columns">
     
         <div class="large-2 medium-4 small-6 columns l-border">
         <ul class="no-bullet"  data-equalizer-watch>
            <h5>Resources</h5>
           <li><a href="../deposit-withdraw">Deposit / Withdraw</a></li>
            <li><a href="../resources/distribution">Distribution</a></li>
            <li><a href="../resources/downloads">Download</a></li>
            <li><a href="../resources/gateways">Gateways</a></li>
            <li><a href="../get-started">Get started!</a></li>
            <li><a href="../how-it-works">How it works</a></li>
            <li><a href="../resources/vision">Vision</a></li>  
         </ul>
         </div> 
         
                 
         
      
         
         
                          
             <div class="large-2 medium-4 small-4 columns l-border">
             <ul class="no-bullet"  data-equalizer-watch>
             <h5>Documentation</h5>
             
             <li><a href="https://github.com/BitShares/bitshares" target="_blank">Documentation</a></li>
             <li><a href="javascript: void(0)">API - <span class="label awesome radius">TBA</span></a></li>
             <li><a href="http://docs.bitshares.org/" target="_blank">Whitepapers</a></li>
             <li><a href="http://wiki.bitshares.org/" target="_blank">Wiki</a></li>
             </ul>
             
             </div>
             
             <div class="large-2 medium-4 small-6 columns l-border left">
             <ul class="no-bullet  " data-equalizer-watch>
              <h5>Community</h5>
              <li><a href="../blog/" >Blog</a></li>
              <li><a href="https://bitsharestalk.org/" target="_blank">Forum</a></li>
<!--              <li><a href="#" target="_blank">Newsletter</a></li>-->
                <li><a href="http://www.aboutbts.com/" target="_blank">BitShares News</a></li>
                <li><a href="http://bitshares.tv/" target="_blank">BitSharesTV</a></li>
                <li><a href="../partners" >Partners</a></li>  
             </ul>
             </div> 
             
             
             
             
             <div class="large-2 medium-4 small-6 columns l-border">
             <ul class="no-bullet"  data-equalizer-watch>  
             <h5 >Press & Media</h5>
             <li><a href="../press">In the Press</a></li> 
              <li><a href="../mediakit">Mediakit</a></li>
              <li class="divider"></li>
               <h5 style="margin-top: 12px;">Legal</h5>
               <li><a href="../privacy">Privacy Policy</a></li>
             
          
             </ul>
             </div> 
              
             <div class="large-2 medium-4 small-6 columns l-border">
                <ul class="no-bullet"  data-equalizer-watch>
                <h5>Blockchain</h5>
                
                <li><a href="http://www.bitsharesblocks.com" target="_blank">Block Explorer</a></li>
                <li><a href="../delegates">Delegates</a></li>
                <li><a href="javascript: void(0)">Jobs - <span class="label awesome radius">TBA</span></a></li>
             
                </ul>
                </div>   
               
               
              
                                                
                  
             <div class="large-1 medium-4 small-6 columns l-border ">
             
             <ul class="no-bullet " data-equalizer-watch>
             <h5>Social</h5>
             <li><a href="http://www.reddit.com/r/BitShares" target="_blank">Reddit</a></li>
             <li><a href="https://twitter.com/_bitshares" target="_blank">Twitter</a></li>
             <li><a href="https://www.facebook.com/officialbitshares" target="_blank">Facebook</a></li>
             <li><a href="https://plus.google.com/+BitsharesOrg" target="_blank">Google</a></li>
             <li><a href="http://triberr.com/pages/tribe-overview.php?tid=59654" target="_blank">Tribe</a></div>
         </div>
         
       </div>
       </footer>
  
      
    <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 957730560;
    var google_conversion_label = "pJH-CLSr8FgQgJ7XyAM";
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
    </script>
    <div style="display:none">
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
    </div>
    <noscript>
    <div style="display:none;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/957730560/?value=1.00&amp;currency_code=USD&amp;label=pJH-CLSr8FgQgJ7XyAM&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>
    <!-- Google Analytics - Custom JQuery Tracking Code To Track Downloads and External Links In Google Analytics As Events -->
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type='text/javascript'>
    if (typeof jQuery != 'undefined') {
    var filetypes = /\.(zip|exe|dmg|pdf|doc.*|xls.*|ppt.*|mp3|txt|rar|wma|mov|avi|wmv|flv|wav)$/i;
    var baseHref = '';
    if (jQuery('base').attr('href') != undefined) baseHref = jQuery('base').attr('href');
    var hrefRedirect = '';
    
    jQuery('body').on('click', 'a', function(event) {
    var el = jQuery(this);
    var track = true;
    var href = (typeof(el.attr('href')) != 'undefined' ) ? el.attr('href') : '';
    var isThisDomain = href.match(document.domain.split('.').reverse()[1] + '.' + document.domain.split('.').reverse()[0]);
    if (!href.match(/^javascript:/i)) {
    var elEv = []; elEv.value=0, elEv.non_i=false;
    if (href.match(/^mailto\:/i)) {
    elEv.category = 'email';
    elEv.action = 'click';
    elEv.label = href.replace(/^mailto\:/i, '');
    elEv.loc = href;
    }
    else if (href.match(filetypes)) {
    var extension = (/[.]/.exec(href)) ? /[^.]+$/.exec(href) : undefined;
    elEv.category = 'download';
    elEv.action = 'click-' + extension[0];
    elEv.label = href.replace(/ /g,'-');
    elEv.loc = baseHref + href;
    }
    else if (href.match(/^https?\:/i) && !isThisDomain) {
    elEv.category = 'external';
    elEv.action = 'click';
    elEv.label = href.replace(/^https?\:\/\//i, '');
    elEv.non_i = true;
    elEv.loc = href;
    }
    else if (href.match(/^tel\:/i)) {
    elEv.category = 'telephone';
    elEv.action = 'click';
    elEv.label = href.replace(/^tel\:/i, '');
    elEv.loc = href;
    }
    else track = false;
    
    if (track) {
    var ret = true;
    
    if((elEv.category == 'external' || elEv.category == 'download') && (el.attr('target') == undefined || el.attr('target').toLowerCase() != '_blank') ) {
    hrefRedirect = elEv.loc;
    
    ga('send','event', elEv.category.toLowerCase(),elEv.action.toLowerCase(),elEv.label.toLowerCase(),elEv.value,{
    'nonInteraction': elEv.non_i ,
    'hitCallback':gaHitCallbackHandler
    });
    
    ret = false;
    }
    else {
    ga('send','event', elEv.category.toLowerCase(),elEv.action.toLowerCase(),elEv.label.toLowerCase(),elEv.value,{
    'nonInteraction': elEv.non_i
    });
    }
    
    return ret;
    }
    }
    });
    
    gaHitCallbackHandler = function() {
    window.location.href = hrefRedirect;
    }
    }
    </script>    
    
    <!--//  Google Analytics - Custom JQuery Tracking Code To Track Downloads and External Links In Google Analytics As Events -->
  </body>
</html>
