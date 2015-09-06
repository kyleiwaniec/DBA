<?php
$pagetitle = "Downtown Bordentown Association";

require_once 'vars.php';
require_once 'header.php';
?>


<div class="wrapper">
<div class="container">
    <div class="breadcrumb">
                                    <img src="images/hand.png" alt="pointer" /><a href="/"title="home">HOME</a><a href="events.php" title="Events">EVENTS</a><span>DETAILS</span>

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
        <p class="advertise">Advertise With Us</a>
        <p class="small">
            To find out about sponsorship opportunities and to advertise on our website, please visit our <a href="advertising.php">Advertising Information Page.</a>
        </p>
        
        </div>
    </div>
    <div id="centerCol">
       <?php
       connect();
        if( isset($_GET["eid"]) ){ $eid =  $_GET["eid"]; };
           
           $events = mysql_query("SELECT * FROM `downtoz0_cms`.`events` WHERE `id` = $eid");
  
            $rows = mysql_num_rows($events);


            if($rows > 0){
                // show data
                while($data = mysql_fetch_assoc($events)){

                $details = $data['details'];
                $title = stripslashes($data['title']);
                $image = $data['image'];
                $short_desc = $data['short_desc'];
                $date = $data['date'];
                $end_date = $data['end_date'];
                $time = $data['time'];
                $end_time = $data['end_time'];
                $event_type = $data['event_type'];
                $location = $data['location'];
                $feature = $data['feature'];
                $hide = $data['hide'];
                $id = $data['id'];
                
                // parse the date
                $month_arr = array("", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

                
                $date_pattern = "/(\d)(\d)(\d)(\d)(-)([0-9]+)(-)([0-9]+)/";
                $month = "$6";
                $day = "$8";
                $year = "$1$2$3$4";

                // end date
                $end_month = preg_replace($date_pattern, $month, $end_date);
                $end_day = preg_replace($date_pattern, $day, $end_date);
                $end_year = preg_replace($date_pattern, $year, $end_date);
                
                
                // start date
                $start_month = preg_replace($date_pattern, $month, $date);
                $start_day = preg_replace($date_pattern, $day, $date);
                $start_year = preg_replace($date_pattern, $year, $date);
                
                $time_pattern = "/([0-9]+)(:)([0-9]+)(:)([0-9]+)/";
                $hour = "$1";
                $minute = "$3";

                $start_hour = preg_replace($time_pattern, $hour, $time);
                $start_minute = preg_replace($time_pattern, $minute, $time);
                
                
                
                $end_hour = preg_replace($time_pattern, $hour, $end_time);
                $end_minute = preg_replace($time_pattern, $minute, $end_time);
                
                $sampm = "";
                $eampm = "";
                
                if($start_hour > 12){
                    $start_hour -= 12;
                    $sampm = "pm";
                }else if($start_hour == 12){
                    $sampm = " noon";
                }else{
                    $sampm = "am";
                }
                
                if($end_hour > 12){
                    $end_hour -= 12;
                    $eampm = "pm";
                }else if($end_hour == 12){
                    $sampm = " noon";
                }else{
                    $eampm = "am";
                }

                $startMonthString = $month_arr[(int)$start_month];
                $endMonthString = $month_arr[(int)$end_month];
                
                echo "<div class='borderBox'>
                
                    <h2>{$title}</h2>
                    
                    <div class='title'>WHEN:</div>
                    
                    
                    ";
                    
                    if($end_date > $date){
                        echo "<span class=''>{$startMonthString} {$start_day}, {$start_year} - {$endMonthString} {$end_day}, {$end_year}</span>";  
                    }else{
                        echo "<span class=''>{$startMonthString} {$start_day}, {$start_year}</span>";
                    }
                
                    if($time != 0){
                        echo " | {$start_hour}:{$start_minute}{$sampm}";
                    }
                    if($end_time != 0){
                        echo " to {$end_hour}:{$end_minute}{$eampm}";
                    }
                    if(!empty($location)){
                        echo "<br/><br/><div class='title'>WHERE:</div>{$location}";
                    }
                if($feature == ""){    
                    echo "<br/><br/><div class='title'>SUMMARY:</div>{$short_desc}";
                }
                echo "<br/><br/><div class='title'>DETAILS:</div><hr/>{$details}";
                
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