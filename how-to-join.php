<?php
$pagetitle = "Downtown Bordentown Association Mission";

require_once 'vars.php';
require_once 'header.php';
?>


<div class="wrapper">
    <div class="container">
        <div class="breadcrumb">
            <img src="images/hand.png" alt="pointer" /><a href="/"title="home">HOME</a><a href="members.php" title="Members">MEMBERS</a><span>HOW TO JOIN</span>

        </div>
        <div id="leftCol">
            <div class="borderBox">
                <span class="title">OUR SPONSORS</span>
                <hr/>
                <p class="advertise">Advertise With Us</p>
                <p class="small">
                    To find out about sponsorship opportunities and to advertise on our website, please visit our <a href="advertising.php">Advertising Information Page.</a>
                </p>

            </div>
        </div>
        <div id="centerCol">

            <span class="title">
                Bordentown Downtown Association</span>
            <h2 class="serif largest">HOW TO JOIN</h2>



            <div class="bodyCopy">      
                <p>
                    The Downtown Bordentown Association invites the Jeweler, Artisan & Artist, Entrepreneur, Chef, and Antique Dealer to consider a location in Bordentown City as an alternative to already highly priced areas.
                </p><p>
                    If you have an interest in being a part of the expanding business district in Historic Bordentown City, please use the contacts below. Let us assist you with information regarding available spaces, landowner contacts, and upcoming business opportunities. 
                </p><p>
                    <strong>Join the evergrowing business community in the one square mile river town of Bordentown City.</strong>
                </p>

                <p>Membership in the  Downtown Bordentown Association is open to all businesses and professional services that are located within the geographic borders of Bordentown City and Farnsworth Avenue.
                </p>
                <p>Member businesses must operate from commercial properties or recognized professional service buildings and must have a current State of New Jersey Certificate of Authority. Home-based businesses are not currently eligible for membership.                
                </p>
                <ul>
                    <li>
                    <strong>Thomas Moyer</strong>, <em>President - D.B.A.</em> (609) 298-1424
                    </li><li>
                    <strong>Rebecca Moslowski</strong>, <em>Membership</em> (609) 298-9422
                    <!-- <strong>Bryce Thompson Jr.</strong>, <em>- Thompson Land</em> (609) 921-0808 -->
                    </li>
                </ul>
                <p><a href="forms.php" title="Downloads">Visit our Forms and Downloads page to download a Membership Application</a></p>
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
            <!--        <div class="miniCalInfo"></div>-->



        </div>
    </div>
</div><!-- .wrapper -->

<?php
require_once 'footer.php';
?>