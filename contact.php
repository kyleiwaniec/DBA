<?php
$pagetitle = "Downtown Bordentown Association Mission";

require_once 'vars.php';
require_once 'header.php';
?>


<div class="wrapper">
<div class="container">
    <div class="breadcrumb">
                                    <img src="images/hand.png" alt="pointer" /><a href="/"title="home">HOME</a><span>CONTACT &amp; DIRECTIONS</span>

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
            <span class="serif largest">CONTACT</span>
           </span>
           <iframe width="560" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=bordentown+nj&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=57.684464,78.310547&amp;ie=UTF8&amp;hq=&amp;hnear=Bordentown+Township,+Burlington,+New+Jersey+08505&amp;t=m&amp;ll=40.143846,-74.70819&amp;spn=0.011482,0.024033&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
           <br /><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=bordentown+nj&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=57.684464,78.310547&amp;ie=UTF8&amp;hq=&amp;hnear=Bordentown+Township,+Burlington,+New+Jersey+08505&amp;t=m&amp;ll=40.143846,-74.70819&amp;spn=0.011482,0.024033&amp;z=15&amp;iwloc=A" class="small fltrt" target="_blank">View Larger Map &amp; Get Directions</a>
       <br />  <br /> 
       
           Bordentown City is conveniently located right off the NJ Turnpike Exit 7, Routes 295, Route 130 and 206. It is also on the New Jersey Transit River Line <a href="http://www.RiverLine.com">www.RiverLine.com</a> with direct connection to Trenton and the Delaware River towns.
       
       </div>
        <p>
            <strong>For questions and information about the Thomas Paine Society:</strong><br/>
        
            Doug Palmieri, President (609) 324-9909 <br/>
            oldbookshop1@hotmail.com<br/>
                    </p>
                    <p>
            <strong>For questions and information about the Bordentown Historical Society:</strong><br/>
            Patti DeSantis, President (609) 298-9181
            </p>
                    <p>
            <strong>For questions and information about the City of Bordentown:</strong><br/>
            City Hall (609) 298-0604
                    </p>
        <div id="form">
                        <form id="contact">    
                            <div><h2>
                                    To send us a message please fill in this form:
                                </h2>
                            </div>
                            <div class="row">
                                <div class="col">
                            <span class="hidden"><label for="FirstName" >First Name:</label><br /></span>
                            <input type="text" name="FirstName" id="FirstName" placeholder="First Name" class="required"/>
                                </div>
                                <div class="col">
                            <span class="hidden"><label for="LastName" >Last Name:</label><br /></span>
                            <input type="text" name="LastName" id="LastName" placeholder="Last Name"  class="required"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                            <span class="hidden"><label for="email" >Email:</label><br /></span>
                            <input type="text" id="email" name="email" placeholder="Email"  class="required email"/>
                            </div>
                                <div class="col">
                            <span class="hidden"><label for="phone" >Phone No. (Incl. Area Code):</label><br /></span>
                            <input type="text" name="phone" id="phone" placeholder="Phone No. (Incl. Area Code)"  class="required"/>
                                </div>
                            </div>

                            <span class="hidden"><label for="notes" >Message:</label><br /> </span>
                            <textarea name="notes" placeholder="Message" class="notesArea required" id="notes"></textarea><br /> <br />

                            <input type="submit" value="send" />
                        </form>
         </div><!-- end form -->
                    <div id="thanks">
                         <h2>
                        Thank You <span style="text-transform:capitalize;" id="yourname"></span>
                        </h2>

                        <p>Your form was successfully submitted.<br />
                        We will get back to you as soon as possible. </p>
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