<?php
$pagetitle = "Downtown Bordentown Association Mission";

require_once 'vars.php';
require_once 'header.php';
?>


<div class="wrapper">
<div class="container">
    <div class="breadcrumb">
                            <img src="images/hand.png" alt="pointer" /><a href="/"title="home">HOME</a><a href="who-we-are.php" title="About">ABOUT</a><span>MISSION</span>

    </div>
    <div id="leftCol">
        <div class="borderBox">
            <span class="title">OUR SPONSORS</span>
        <hr/>
        <img src="images/ocean-spray-logo.jpg" alt="Ocean Spray"/><br/>
        <p class="small">
            Bordentown is home to the largest facility in the Ocean Spray Cranberries family.</p>
        <br/>
        <hr/>
        <br/>
        <p class="advertise">Advertise With Us</p>
        <p class="small">
            To find out about sponsorship opportunities and to advertise on our website, please visit our <a href="advertising.php">Advertising Information Page.</a>
        </p>
        
        </div>
    </div>
    <div id="centerCol">
       <div class="borderBox">
           <span class="title">
               Bordentown Downtown Association<br/>
            <span class="serif largest">OUR MISSION</span>
           </span>
           <img src="images/tower.jpg" alt="City Hall"/>
           </div>
           <h2>Bordentown Downtown Association is a Non-Profit Organization</h2>
<p class="center serif larger"><em>The D.B.A.'s mission is to promote Bordentown City as a great place to live, work , dine, shop and have fun&mdash;all within a peaceful, historic setting.</em></p>
         
       <p>&nbsp;</p>
              <p class="center">
                  <img src="images/swash-long.png" alt=""/>
              </p>
    </div>
    <div id="rightCol">
        <div class="borderBox center" style="position:relative; height:268px; overflow:hidden;">
               
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
                   <a href="http://www.facebook.com/DowntownBordentownNJ" title="Visit Our Facebook Page">Visit Our Facebook Page</a>
                <hr/> 
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