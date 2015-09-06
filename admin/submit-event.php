<?php

require_once("vars.php");
//require_once("HTMLPurifier.standalone.php");

//$purifier = new HTMLPurifier();
//$clean_html = $purifier->purify($dirty_html);

 $allowedTags='<a><p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
 $allowedTags.='<li><ol><ul><span><div><br><ins><del>';  
// Should use some proper HTML filtering here.
  connect();
 
    $details = mysql_real_escape_string(strip_tags(stripslashes($_POST['details']),$allowedTags));
    $title = mysql_real_escape_string(htmlentities($_POST['title'], ENT_QUOTES));
    $image = mysql_real_escape_string($_POST['image']);
    $short_desc = mysql_real_escape_string(strip_tags(stripslashes($_POST['short_desc']),$allowedTags));
    
    $year = mysql_real_escape_string($_POST["year"]);
    $month = mysql_real_escape_string($_POST["month"]);
    $day = mysql_real_escape_string($_POST["day"]);
    
    $date = $year."-".$month."-".$day;
    
    
    // end date
    $end_year = mysql_real_escape_string($_POST["end_year"]);
    $end_month = mysql_real_escape_string($_POST["end_month"]);
    $end_day = mysql_real_escape_string($_POST["end_day"]);
    
    $end_date = $end_year."-".$end_month."-".$end_day;
    
    
    // From:
    $hour = mysql_real_escape_string($_POST["hour"]);
    $minute = mysql_real_escape_string($_POST["minute"]);
    
    $time = $hour.":".$minute.":00";
    
    // To:
    $end_hour = mysql_real_escape_string($_POST["end_hour"]);
    $end_minute = mysql_real_escape_string($_POST["end_minute"]);
    
    $end_time = $end_hour.":".$end_minute.":00";
    
    $location = mysql_real_escape_string($_POST['location']);
    
    $event_type = mysql_real_escape_string($_POST['event_type']);
    
    $feature = mysql_real_escape_string($_POST['feature']);
    
    $hide = mysql_real_escape_string($_POST['hide']);
    
    $recur = mysql_real_escape_string($_POST['recur']);
  
  if (isset($_POST['insert'])) {
    
    $id = $_POST['maxid'];
    $id++;
    
    $query = "INSERT INTO  `downtoz0_cms`.`events` (
                    `id` ,
                    `details`,
                    `title`,
                    `image`,
                    `short_desc`,
                    `location`,
                    `time`,
                    `end_time`,
                    `date`,
                    `end_date`,
                    `event_type`,
                    `feature`,
                    `hide`,
                    `recur`
                      )
                  VALUES (
                  NULL ,  '$details', '$title', '$image', '$short_desc', '$location', '$time', '$end_time', '$date', '$end_date', '$event_type', '$feature', '$hide', '$recur'
                  );";
                } else if (isset($_POST['update'])){
                    // update an existing row 

                    $id = $_POST['id'];

                    $query = "UPDATE  `downtoz0_cms`.`events` 
                      SET  
                        `details`       =  '$details',
                        `title`         =  '$title',
                        `image`         =  '$image',
                        `short_desc`    =  '$short_desc',
                        `location`      =  '$location',
                        `time`          =  '$time',
                        `end_time`      =  '$end_time',
                        `date`          =  '$date',
                        `end_date`      =  '$end_date',
                        `event_type`    =  '$event_type',
                        `feature`       =  '$feature',
                        `hide`          =  '$hide',
                        `recur`         =  '$recur'
                        ";


                    $query .= "WHERE  `events`.`id` = $id";
                }else if (isset($_POST['delete'])){
                     $id = $_POST['id'];

                    $query = "DELETE FROM `events` WHERE `id` = $id";
                }else if (isset($_POST['hide'])){
                     $id = $_POST['id'];
                     
                     
                        $query = "UPDATE `events` 
                        SET  
                        `hide` = 1
                        WHERE `id` = $id";
                        
                }else if (isset($_POST['show'])){
                     $id = $_POST['id'];
                     
                     
                        $query = "UPDATE `events` 
                        SET  
                        `hide` = 0
                        WHERE `id` = $id";
                }
                
               //echo "\n" . $query;
                
                mysql_query($query) or die("Error:" . mysql_error());
                
                header('Location: redirect.php?eid='.$id);
                
                
            
            disconnect();
    
    
    
?>