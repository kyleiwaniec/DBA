<?php
$pagetitle = "Downtown Bordentown Association News";
require_once("header.php");
?>
<div class="wrapper">
    <div class="container">
        <div class="breadcrumb">
                                        <img src="images/hand.png" alt="pointer" /><a href="/"title="home">HOME</a><span>NEWS</span>

        </div>
       
        <div id="leftCol">
            <div class="borderBox">
                <span class="title">OUR SPONSORS</span>
                <hr/>
                <img src="images/ocean-spray-logo.jpg" alt="Ocean Spray"/><br/>
                <p class="small">
                    Bordentown is home to the largest facility in the Ocean Spray Cranberries family.
                </p>
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
            <div class="borderBox" >
              <span class="title">Downtown Bordentown Association</span><br/>
              <h2>NEWS POSTS</h2>
              <p>&nbsp;</p>
              <div class="loading">Loading...</div>

<?php
      

  $file = file_get_contents("https://graph.facebook.com/DowntownBordentownNJ/feed?access_token=AAAF1gUUA868BAAoullQpxZBEYYrdOM6kFSbDIpliVpmkZCdDQzLWgx3dsYs35UIbclw293wKp2huD7566qtOntCXcHsZCEZD&expires_in=0");
      
  $file = json_decode($file);
  
  foreach($file->data as $data){
     
      if(isset($data->message) && ($data->from->name == "DowntownBordentownAssociationNJ")){
       
        echo "<div class='newsitem'>";  
        
        $itemlink= $data -> actions -> link;
        
        $thedate = $data-> created_time;
        
        // 2011-12-09T17:40:41+0000

        $theMonths = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
        //print_r(date_parse($thedate));
        
        $datearr = date_parse($thedate);
        
        $theMonth = $theMonths[$datearr["month"]-1];
        
        echo "<a href='".$data -> actions[0] -> link."' target='_blank' class='fltrt' style='margin:-5px 0 15px 15px;'><img src='images/sp-bubble.png' alt='Comments' title='Comments'/></a>";
        echo "<div class='dateBox'>
                <div class='dateTop'></div>
                <div class='month-and-day'><span class='jMonth'>{$theMonth}</span><br/><span class='jDay'>{$datearr["day"]}</span></div>
              </div>";
        //echo "<span>{$theMonth} {$datearr["day"]}, {$datearr["year"]}</span><br/>";
        //echo "</div>";
        
        echo "<div class='text'>";  
        
        //echo $data->created_time . "<br/>";
        
          if(isset($data->picture)){
              $patterns = array("%3A", "%2F"); 
              $replacements = array(":", "/");

              $link = $data->picture;
              
              
              $links  = str_replace($patterns, $replacements, $link);

              echo "";
              echo "<div><img src='". $links . "' style='padding:0 15px 10px 0;' align='left'/>".$data->message. "<br/>";
              
          }else if(isset($data->type) && ($data->type == "photo")){
                $image = $data->object_id;
                echo "<div><img src='https://graph.facebook.com/". $image . "/picture' style='padding:0 15px 10px 0; width:100px;' align='left'/>".$data->message. "<br/>";
          
          
          }else{
          echo "<div>".$data->message. "<br/>";
          }
          
//        if(isset($data->link)){
//            echo "<a href='".$data->link."'>more...</a><br/>";
//        }
       
        echo "</div></div></div><hr/>"; 
        
       
        }
  
  }
    
     
  
  
  ?>

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


</div><!-- .container -->
</div><!-- .wrapper -->

<script>
$(function(){
   $(".loading").detach(); 
});
</script>

<?php
require_once("footer.php");
?>
