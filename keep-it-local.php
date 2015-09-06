<?php
$pagetitle = "Downtown Bordentown Association - Keep It Local";

require_once 'vars.php';
require_once 'header.php';
?>


<div class="wrapper">
    <div class="container">
        <div class="breadcrumb">
            <img src="images/hand.png" alt="pointer" /><a href="/"title="home">HOME</a><span>KEEP IT LOCAL</span>

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

            <span class="title">
                Bordentown Downtown Association</span>
            <h2 class="serif largest">KEEP IT LOCAL</h2>
            <div class="bodyCopy">
                <p>
                    <span class="dropcap">D</span>id you know that up to 85 cents out of every dollar spent in local small businesses stay
                    in the local community while only about 14 cents spent in big chain stores and malls does?
                
                    Support your local business owners and professional service providers and "Keep It Local"
                    by shopping and dining where you see this logo.
                    Participating businesses offer special discounts, promotions, etc. when you show your "Keep It Local"
                    card!
                </p><p>
                    For details and to get your card, <a href="contact.php" title="Contact the DBA">contact the DBA!</a> 
                </p>
                                <p class="center"><img src="images/keepitlocal-logo.jpg" alt="Keep It Local"/>
</p>
            </div>
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