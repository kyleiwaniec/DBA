<?php
$pagetitle = "Downtown Bordentown Association Members";
require_once 'vars.php';
require_once 'header.php';
?>


<div class="wrapper">
    <div class="container">
        <div class="breadcrumb">
            <img src="images/hand.png" alt="pointer" /><a href="/"title="home">HOME</a><span>MEMBERS</span>

        </div>
        <?php
        require_once 'member-categories.php';
        ?>
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
                    Downtown Bordentown<br/>
                    <span class="serif largest">BUSINESS SPOTLIGHT</span>
                    
                </span>
                <!-- members content -->
                <div class="member-spotlight">
                    <img src="images/Damian.jpg" title="A New Hope Hypnosis" alt="A New Hope Hypnosis" width="145" class="inline-img lft"/>
                    <h2 class="largest">
                        A New Hope Hypnosis
                    </h2>
                    
                    <p>
                        Bordentown City has all kinds of great resources!  How are you doing with your New Year's resolutions?   If you've been successful, congratulations! If not, why not try hypnosis? Hypnosis is an effective, natural, scientifically proven tool to help you reach your goals.
                    </p>
                    <p>&nbsp;</p><p>&nbsp;</p>
                    <div class="spotlight-links">
                        <span>Cor. Railroad Ave & 165 3rd St. </span> <span>Phone: 609-920-3094</span>  <span><a href="http://www.anewhopehypnosis.com" title="A New Hope Hypnosis" >Website</a> </span>
                    </div>
                    <a href="http://visitbordentown.com/member-details.php?eid=32" class="moreinfo button">Details</a>
                </div>
            </div>
            <h2>The benefits of membership</h2>
            <div class="bodyCopy">
                <p>
                    The Downtown Bordentown Association is made up of over 70 businesses located within the geographic
                    boundaries of Bordentown City, New Jersey.
                </p><p>
                    <strong>Our members enjoy the benefits of: </strong>                   
                <ul class="list">
                    <li>Collective marketing efforts both via print and electronic media</li>
                    <li>Inclusion in the annual “Historic Bordentown City” information brochure, some 25,000 of which are distributed not only locally but statewide</li>
                    <li>Inclusion on the Association’s website with the ability to link to individual businesses sites</li>
                    <li>Cooperative cross-promotion with other businesses</li>
                    <li>Inclusion in special promotions and events</li>
                    <li>Ability to participate in print media advertising at reduced rates</li>
                    <li>A sense of community with other small business owners</li>
                </ul>
                </p>
                <p>&nbsp;</p>
                <h2>How to join</h2>
                <p>
                    Membership in the  Downtown Bordentown Association is open to all businesses and professional services that are located within the geographic borders of Bordentown City and Farnsworth Avenue.
                </p><p>Member businesses must operate from commercial properties or recognized professional service buildings and must have a current State of New Jersey Certificate of Authority. Home-based businesses are not currently eligible for membership.                
                </p>

                <p><a href="http://www.downtownbordentown.com/downloads/DBA-Application-2012.pdf" title="Download Member Application">Download a Membership Application</a></p>

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
    <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
</div><!-- .wrapper -->

<?php
require_once 'footer.php';
?>