<?php
$pagetitle = "Downtown Bordentown Association Members";

require_once 'vars.php';
require_once 'header.php';
?>


<div class="wrapper">
<div class="container">
    <div class="breadcrumb">
                            <img src="images/hand.png" alt="pointer" /><a href="/"title="home">HOME</a><a href="members.php" title="Members">MEMBERS</a><span>DETAILS</span>

    </div>
    <?php
        require_once 'member-categories.php';
        ?>
    <div id="leftCol">
        <div class="borderBox">
            <span class="title">OUR SPONSORS</span>
        <hr/>
        <p class="advertise">Advertise With Us</a>
        <p>
            To find out about sponsorship opportunities and to advertise on our website, please visit our <a href="advertising.php">Advertising Information Page.</a>
        </p>
        
        </div>
    </div>
    <div id="centerCol">
       <?php
       connect();
        if( isset($_GET["eid"]) ){ $eid =  $_GET["eid"]; };
           
          $query = mysql_query("SELECT * FROM `downtoz0_cms`.`members` WHERE `id` = $eid");
  
            $rows = mysql_num_rows($query);


            if($rows > 0){
                // show data
                while($data = mysql_fetch_assoc($query)){

                $details = $data['details'];
                $title = $data['title'];
                $image = $data['image'];
                $short_desc = $data['short_desc'];
                
                $location = $data['location'];
                $phone = $data['phone'];
                $fax = $data['fax'];
                $email = $data['email'];
                $owner = $data['owner'];
                $weblink = $data['weblink'];
                $hide = $data['hide'];
                $id = $data['id'];
                
               
                
                echo "<div class='borderBox'>
                
                    <h2>{$title}</h2>
                    
                    
                    
                    ";
                    
                    
                if(!empty($location)){
                        echo "{$location}";
                }
                if (!empty($owner)){
                        echo "<br/><span class='member-owner'><em>{$owner}</em></span><br/>";
                }
                if (!empty($phone)){
                        echo "<br/>Phone: <span class='member-phone'>{$phone}</span>";
                } 
                if (!empty($fax)){
                        echo "<br/>Fax: <span class='member-fax'>{$fax}</span>";
                }
                if (!empty($email)){
                        echo "<br/>Email: <span class='member-email'><a href='mailto:{$email}'>{$email}</a></span>";
                }
                if (!empty($weblink)){
                        echo "<br/>Website: <span class='member-weblink'><a href='http://{$weblink}' title='{$title}' target='_blank'>{$weblink}</a></span>";
                }
                    
                echo "<br/><br/><div class='title'>SUMMARY:</div>{$short_desc}";
                
                
                if(!empty($details)){
                        echo "<br/><br/><div class='title'>DETAILS:</div><hr/>{$details}";
                }
                echo "</div>";
                }
          }
       
       disconnect();
       ?>
      
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
                <br/> <br/> 
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