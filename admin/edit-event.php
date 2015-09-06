<?php
require_once('config.php');
// ACCESS TO THIS PAGE IS CONTROLLED
$uid = access_control();
$pagetitle = "Downtown Bordentown Association CMS";
require_once 'cms-header.php';
?>



<div class="wrapper">
    <div class="container">
        <div class="breadcrumb"></div>
    <div id="leftCol">
        <div class="borderBox">
    
    <p class="serif largest">EVENTS</p>
    <hr/>
    <?php require_once 'cms-events-menu.php' ?>
        </div>
    </div>
        <div id="centerCol">
           <p class="serif largest title"> Edit Event</p>
           <hr/>
           <br/>
           Fields with a red <span class="pink">*</span> are required.<br/><br/>
           
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
                $recur = $data['recur'];
                
                
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
                
                //echo $end_hour . ":" . $end_minute;
                //echo $end_time;
           
          echo "<script>
                \$(function(){
                \$('#but').hide(); 
                
                
                \$('input[name=\"recur\"]').each(function(){
                         if(\$(this).val() == $recur){
                            \$(this).attr('checked', true);
                             }
                });
                
                \$('.startYear option').each(function(){
                        if(\$(this).val() == $start_year){
                           \$(this).attr('selected', 'selected');
                        }
                });
                \$('.startMonth option').each(function(){
                        if(\$(this).val() == $start_month){
                           \$(this).attr('selected', 'selected');
                        }
                });
                \$('.startDay option').each(function(){
                        if(\$(this).val() == $start_day){
                           \$(this).attr('selected', 'selected');
                        }
                });
                
                \$('.endYear option').each(function(){
                        if(\$(this).val() == $end_year){
                           \$(this).attr('selected', 'selected');
                        }
                });
                \$('.endMonth option').each(function(){
                        if(\$(this).val() == $end_month){
                           \$(this).attr('selected', 'selected');
                        }
                });
                \$('.endDay option').each(function(){
                        if(\$(this).val() == $end_day){
                           \$(this).attr('selected', 'selected');
                        }
                });
                
                \$('.startHour option').each(function(){
                        if(\$(this).val() == $start_hour){
                           \$(this).attr('selected', 'selected');
                        }
                });
                
                \$('.startMinute option').each(function(){
                        if(\$(this).val() == $start_minute){
                           \$(this).attr('selected', 'selected');
                        }
                });
                
                \$('.endHour option').each(function(){
                        if(\$(this).val() == $end_hour){
                           \$(this).attr('selected', 'selected');
                        }
                });
                
                \$('.endMinute option').each(function(){
                        if(\$(this).val() == $end_minute){
                           \$(this).attr('selected', 'selected');
                        }
                });
                
                ";
          
                if($feature == '' && !empty($image)){
                    // show the image, hide the iframe image (lessen height of iframe to 20px;)
                    echo "  \$('.uploadImgWrapper').append('<div class=\"uploadedImg\" style=\"position:relative;\"><img id=\"theImg\" src=\"../uploads/images/.thumbs/{$image}\" style=\"display:block;\" /><div id=\"deleteImg\">x</div></div>');
                            \$('#upload_image_frame').css({\"height\": 20});
                            
                            \$('#deleteImg').live('click', function(){
                                    
                                    \$('#theImg').detach();
                                    \$(this).detach();
                    
                                    \$('#image').val();    
                                    });
                            ";
                }
          
//                if($hide == 1){
//                    echo "\$('input[name=\"hide\"]').attr('checked', true);";
//                }
                
//               echo "\$('#cmsForm').change(function(){
//                        if(\$('input[name=\"hide\"]').attr('checked') == false){
//                        \$('input[name=\"hide\"]').val('0');
//                        }
//                        if(\$('input[name=\"hide\"]').attr('checked') == true){
//                            \$('input[name=\"hide\"]').val('1');
//                        }
//                    }";
                
                

                
                
                if($event_type == 'dba'){
                
                 echo "\$('input[value=\"dba\"]').attr('checked', true);";
                 //echo "\$('input[name=\"feature\"]').removeAttr('disabled');";
                
                }else if($event_type == 'member'){
                    echo "\$('input[value*=\"member\"]').attr('checked', true);";
                }else{
                    echo "\$('input[value*=\"other\"]').attr('checked', true);";
                }
                if($feature == 'on'){
                    echo "
                            \$('#short_desc').addClass('featureHeight');
                            \$('.shortDescWrapper').css({'margin-left': 0, 'width':'100%'});
                            \$('#feature-img').show();
                            \$('#countdown').parent('p').hide();
                            \$('.uploadImgWrapper').hide();
                            \$('input[name=\"feature\"]').attr('checked', true);
                            \$('#but').show();

                            // enable tinyMCE for short_desc:
                            tinyMCE.execCommand('mceAddControl', false, 'short_desc');
                            
                    
                    // add style -after- editor has been initialized
                    
                       //     \$(document).mouseenter(function(){
                       //     \$('#short_desc_ifr').contents().find('#tinymce').css({'background': 'url(/uploads/images/{$image}) no-repeat #dcd4c7'});
                       //     });
                            
                       function addBG(){
                                     \$('#short_desc_ifr').contents().find('#tinymce').css({'background': 'url(/uploads/images/{$image}) no-repeat #dcd4c7'});
                                }
                            
                            \$('#but').live('click', function(){
                                \$('#short_desc_ifr').contents().find('#tinymce').css({'background': 'url(/uploads/images/{$image}) no-repeat #dcd4c7'});
                            });
                       
                      ";
                }else{
                   
                }
                
                echo "});
                </script>"; // javascript 
                
          echo "
               
                <form id='cmsForm' method='post' action='submit-event.php'>
               <span class='pink'>*</span><label for='title'>Title:</label><br/>
               <input type='text' name='title' value='{$title}'/><br/><br/>
               
               <div class='row'>   
                   <div class='col'>
               <span class='pink'>*</span><label for='event_date'>Start Date:</label><br/>
                   
               <select name='year' class='startYear'>";
                            
                          
               for ($i= 2012; $i<=2020; $i++){
                    echo "<option value='".$i."'>".$i."</option>";
                    }
            
          echo "</select>
                            <select name='month' class='startMonth'>
                              <option value='01'>Jan</option>
                              <option value='02'>Feb</option>
                              <option value='03'>Mar</option>
                              <option value='04'>Apr</option>
                              <option value='05'>May</option>
                              <option value='06'>Jun</option>
                              <option value='07'>Jul</option>
                              <option value='08'>Aug</option>
                              <option value='09'>Sep</option>
                              <option value='10'>Oct</option>
                              <option value='11'>Nov</option>
                              <option value='12'>Dec</option>
                            </select>
                            <select name='day' class='startDay'>";
            
                   for ($i= 1; $i<=31; $i++){
                       $zero = "";
                           if($i < 10) {
                               $zero = 0;
                           }
                           echo "<option value='". $zero . $i."'>".$i."</option>";
                   };
            echo "</select><br/><br/>
                
            



<span class='pink'>*</span><label for='event_date'>End Date:</label><br/>
<select name='end_year' class='endYear'>";
                            
                          
               for ($i= 2012; $i<=2020; $i++){
                    echo "<option value='".$i."'>".$i."</option>";
                    }
            
          echo "</select>
                            <select name='end_month' class='endMonth'>
                              <option value='01'>Jan</option>
                              <option value='02'>Feb</option>
                              <option value='03'>Mar</option>
                              <option value='04'>Apr</option>
                              <option value='05'>May</option>
                              <option value='06'>Jun</option>
                              <option value='07'>Jul</option>
                              <option value='08'>Aug</option>
                              <option value='09'>Sep</option>
                              <option value='10'>Oct</option>
                              <option value='11'>Nov</option>
                              <option value='12'>Dec</option>
                            </select>
                            <select name='end_day' class='endDay'>";
            
                   for ($i= 1; $i<=31; $i++){
                       $zero = "";
                           if($i < 10) {
                               $zero = 0;
                           }
                           echo "<option value='". $zero . $i."'>".$i."</option>";
                   };
            echo "</select>



                </div>
                   <div class='col' style='padding-right:30px;'>&nbsp;</div>
                   <div class='col'>
                    <label for='event_time'>From:</label><br/>

                    <select name='hour' class='startHour'>
                        <option value='0'>Hour</option>";
                      
                       for ($i = 8; $i <= 24; $i++) {
                           $zero = "";
                           
                           if($i < 10) {
                               $zero = 0;
                              
                           }
                           if($i == 12){
                              echo "<option value='" .$i . "'>" . $i . " (Noon)</option>"; 
                           }else if($i == 24){
                              echo "<option value='" .$i . "'>" . $i . " (Midnight)</option>"; 
                           }else{
                           echo "<option value='" . $zero . $i . "'>" . $i . "</option>";
                           }
                       }
                       for ($i = 1; $i < 8; $i++) {
                           $zero = "";
                           
                           if($i < 10) {
                               $zero = 0;
                              
                           }
                          
                           echo "<option value='" . $zero . $i . "'>" . $i . "</option>";
                       
                       };
                       echo "</select>
                             <select name='minute' class='startMinute'>
                             <option value='0'>Minute</option>";
                       
                       for ($i = 0; $i <= 59; $i+=5) {
                           $zero = "";
                           if($i < 10) {
                               $zero = 0;
                           }
                           echo "<option value='" . $zero . $i . "'>" . $i . "</option>";
                       };
               echo "</select>
                       <br/>
                       <br/>
                       <label for='end_time'>To:</label><br/>

                    <select name='end_hour' class='endHour'>
                        <option value='0'>Hour</option>";
                      
                       for ($i = 8; $i <= 24; $i++) {
                           $zero = "";
                           
                           if($i < 10) {
                               $zero = 0;
                              
                           }
                           if($i == 12){
                              echo "<option value='" .$i . "'>" . $i . " (Noon)</option>"; 
                           }else if($i == 24){
                              echo "<option value='" .$i . "'>" . $i . " (Midnight)</option>"; 
                           }else{
                           echo "<option value='" . $zero . $i . "'>" . $i . "</option>";
                           }
                       }
                       for ($i = 1; $i < 8; $i++) {
                           $zero = "";
                           
                           if($i < 10) {
                               $zero = 0;
                              
                           }
                          
                           echo "<option value='" . $zero . $i . "'>" . $i . "</option>";
                       
                       };
                       echo "</select>
                             <select name='end_minute' class='endMinute'>
                             <option value='0'>Minute</option>";
                       
                       for ($i = 0; $i <= 59; $i+=5) {
                           $zero = "";
                           if($i < 10) {
                               $zero = 0;
                           }
                           echo "<option value='" . $zero . $i . "'>" . $i . "</option>";
                       };
               echo "</select>
                     </div>
                       <div class='col' style='padding-right:30px;'>&nbsp;</div>
                       <div class='col'>
                       <label for='recur'>Recurring:</label><br/>
                       <input type='radio' name='recur' value='0' checked> None<br/>
                       <input type='radio' name='recur' value='2' > Weekly<br/>
                       <input type='radio' name='recur' value='3' > Monthly<br/>
                   </div>
               </div>
               <br/>
               <label for='location'>Location:</label> (to insert a line break type: &lt;br /&gt;)<br/>
               <textarea name='location' id='location' >{$location}</textarea><br/><br/>
               
               <span class='pink'>*</span><label for='event_type'>Event Type:</label><br/>
               <input type='radio' name='event_type' value='member' > Member&nbsp;&nbsp;&nbsp;<input type='radio' name='event_type' value='dba'> DBA&nbsp;&nbsp;&nbsp;<input type='radio' name='event_type' value='other' checked> Other<br/>
               <input type='checkbox' name='feature' > Feature <br/><br/>
               <div id='feature-img'>
                    <iframe src='upload_bg_image.php' frameborder='0' scrolling='no' width='170' height='20'></iframe>
               </div>
               
               <div class='uploadImgWrapper'>
                    <iframe src='upload_image.php' id='upload_image_frame' frameborder='0' scrolling='no' width='120' height='130'></iframe>
               </div>
               
               <input type='hidden' name='image' id='image' value='{$image}'/>
               
                    <div class='shortDescWrapper'>
                    <span class='pink'>*</span><label for='short_desc'>Short Description:</label><br/>
                    <textarea name='short_desc'id='short_desc' class='short_desc'  >{$short_desc}</textarea><br/>
                    <p>
                    You have <span id='countdown' class='pink'>325</span> characters left.
                    </p>
                    </div>
                    
               <br clear='both'/>
               <div id='but'>If you cannot see the background image click here: <span class='button' >[ refresh img ]</span></div>
               <br/><br/>
               <hr/>
               <br/>
               <label for='details'>Event Details Page</label><br/>
               <textarea name='details' class='details' id='details' style='min-height:500px;'>
               {$details}
               </textarea>
               
               <a href='edit-event.php?eid={$id}' class='button'>Undo All Changes</a> <a href='events-list.php' class='button'>Cancel &amp; Return To Events List</a> 
               <span class='fltrt'><input type='hidden' name='hide' value='$hide'/> <input type='submit' name='update' value='save changes'/></span>
               <br/>
               <br/>
               <input type='hidden' name='id' id='id' value='{$id}'/>
                </form>";
            
           
           }
           }
           disconnect();
           ?>
           
           <br/>
               <br/>
        </div>
    </div>
</div>


<?php require_once 'cms-footer.php'; ?>



