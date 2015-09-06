<?php
$pagetitle = "Downtown Bordentown Association";
$limit = 12;
require_once 'vars.php';
require_once 'header.php';

?>
<script> 
// var hash = window.location.hash;
// if(hash != ""){
//   $.post( "includes/gb_get.php", { hash: hash } );
// }


</script>

<div class="scroller">
    <div class="tour">
        <span class="visit">Visit <br/>
        Bordentown City</span>
        <span class="burgGrey">
            Take The Self Guided Tour
        </span><br/>
        <img src="images/tour-arrow.png" alt="take the tour"/>
    </div>
    <div class="scrImgs">
       <div class="scrImg1" style="background: url(images/scroller/townhall.jpg) center center no-repeat;"></div>
       <!-- the rest of the images are generated with the javascript slideshow -->
 </div>
</div>
<div class="wrapper">
<div class="container">
    <div class="breadcrumb"></div>
    <div id="leftCol">
        <div class="borderBox">
            <span class="title">OUR SPONSORS</span>
            <hr/>
           
            <a href="http://soldier58.com"><img src="images/soldier58.png" alt="Soldier 58" style="max-width: 100%;"/></a>
            <hr/>  
            <img src="images/cranberry-sold-out.png" alt="Cranberry Festival" style="max-width: 100%;"/>
            <hr/> 
            <p class="advertise">Advertise With Us</p>
            <p class="small">
                To find out about sponsorship opportunities and to advertise on our website, please visit our <a href="advertising.php">Advertising Information Page.</a>
            </p>
        </div>
    </div>
    <div id="centerCol">
       <div class="borderBox">
           <span class="title">
               Latest<br/>
           <span class="serif largest">NEWS &amp; EVENTS</span>
           </span>
           <!-- display from db -->
           <?php 
           require_once 'feature-incl.php';
           ?>
          
           </div>
           <p>&nbsp;<a  class="fltrt" href="events.php" title="View all events">View All Events <img src="images/calIcon.png" alt="Month View" align="middle"/></a></p>
       
             <?php 
           require_once 'facebook.php';
           ?>       
                   
           <span class="title">
               Downtown Bordentown City<br/>
           <span class="serif largest">Shopping, Dining, & Services</span>
           </span>
                   <div class="borderBox home-categories">
                       <div class="shops-cat">
                           <a href="shopping.php" title="Shopping">
                           <img src="images/home-shopping.jpg" alt="Shopping" title="Shopping"/>
                           <p><strong>Downtown Bordentown City</strong> offers a wide variety of specialty shops, each featuring it's own line of gifts, antiques, collectibles, artwork, whimsey and d&eacute;cor. Consignments in vintage clothes and children's toys and apparel also abound. Local artists and musicians contribute to the mix, making Bordentown a must for personal gifts or complementing home furnishings.<span class="large"> &raquo; </span></p>
                           </a>
                           <a href="shopping.php" class="button">SHOPPING</a>
                       </div>
                       <div class="dining-cat">
                           <a href="dining.php" title="Dining">
                           <img src="images/home-dining.jpg" alt="Dining" title="Dining"/>
                           <p><strong>Whatever your taste in food</strong>, you are sure to find it in one of Bordentown's Fine Restaurants or Eateries.  Full course meals to quick lunches, snacks and treats, all are served up with small town charm and grace.  Italian, Latin, Cosmopolitan, South American, Old World, elegant and casual: its all here and most with either “Spirits Served or BYOB”. <span class="large"> &raquo; </span></p>
                           </a>
                           <a href="dining.php" class="button">DINING</a>
                       </div>
                       <div class="services-cat">
                           <a href="services.php" title="Services"> 
                           <img src="images/home-services.jpg" alt="Services" title="Services"/>
                           <p><strong>From Grooming to Wellness,</strong> to Finances and Law, Healing to Final Rest, Banking to Photography, Dentistry to Office Supplies, Martial Arts to Repair Services:  
If you are in need of professional services, chances are, you can find what you need here in the “Little City With A Lot of Charm”. <span class="large"> &raquo; </span></p>
                           </a>
                           <a href="services.php" class="button">SERVICES</a>
                       </div>
                       
                   </div>
                   
                       
    </div>
    
    <div id="rightCol">
        <div class="borderBox center">
            <p class="title">Keep it local</p>
            <hr/>
            <img src="images/keepitlocal-logo.jpg" alt="Keep It Local"/>
            
            <hr/>
            <br/>
           
            <strong>Help promote <br/>
            BORDENTOWN CITY<br/>
            Share this page</strong>
            <br/>
            <br/>
                <!-- AddThis Button BEGIN -->
                <div style="position:relative; height:35px;">
                <div style="position:absolute; top: 0; left:6px; width:155px;">
                <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                <a class="addthis_button_facebook"></a>
                <a class="addthis_button_twitter"></a>
                <a class="addthis_button_email"></a>

                <a class="addthis_button_compact"></a>
                <!--<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>-->

                </div>
                <script type="text/javascript" src="https://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4f3e7d8d3c701092"></script></div>
                <!-- AddThis Button END -->
        </div>
                <br/>    <a href="http://www.facebook.com/DowntownBordentownNJ" title="Visit Our Facebook Page">Visit Our Facebook Page</a>

        </div>
        <div class="borderBox center" style="position:relative;">
           <div id="ajaxresults"></div>
           <strong>SUBSCRIBE<br/>
            To our e-Newsletter</strong><br/>
<form name="ccoptin" action="http://visitor.r20.constantcontact.com/d.jsp" target="_blank" method="post" id="subscribe"> 
    <input type="text" name="ea" placeholder="enter e-mail address" class="placeholder email ea"/><br/>
<!--            <span class="fltlft"><input type="checkbox" id="openAddy" name="offline"/></span><span class="fltlft left small" style="width:130px; margin:5px 0 0 3px;"> I would like to receive printed materials in the mail.</span><br/>-->
                <a href="http://www.constantcontact.com/jmml/email-marketing.jsp"><img src="https://imgssl.constantcontact.com/ui/images1/safe_subscribe_logo.gif" width="155" alt="Safe Subscribe"/></a><br/>
        
            <input type="hidden" name="llr" value="e9mn6aeab">
            <input type="hidden" name="m" value="1103837442884">
            <input type="hidden" name="p" value="oi">
            <input type="submit" name="go" value="submit"/>
            </form>
        </div>
        <div class='miniCalendar'></div>
        <div class="fltrt"><a href="calendar.php" title="View Larger"><span class="small">View Larger</span><img src="images/mag.png" alt="View Larger" align="middle"/></a></div>

    </div>
</div>
</div><!-- .wrapper -->

<?php

require_once 'footer.php';
?>