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
    $title = mysql_real_escape_string($_POST['title']);
    $image = mysql_real_escape_string($_POST['image']);
    $short_desc = mysql_real_escape_string(stripslashes($_POST['short_desc']));
    
    $year = mysql_real_escape_string($_POST["year"]);
    $month = mysql_real_escape_string($_POST["month"]);
    $day = mysql_real_escape_string($_POST["day"]);
    
    $date = $year."-".$month."-".$day;
    
    $hour = mysql_real_escape_string($_POST["hour"]);
    
    $minute = mysql_real_escape_string($_POST["minute"]);
    
    $time = $hour.":".$minute.":00";
    
    $location = mysql_real_escape_string($_POST['location']);
    
    $event_type = mysql_real_escape_string($_POST['event_type']);
    
    $feature = mysql_real_escape_string($_POST['feature']);
  
  if (isset($_POST['insert'])) {
    
    
    
    $query = "INSERT INTO  `downtoz0_cms`.`events` (
                    `id` ,
                    `details`,
                    `title`,
                    `image`,
                    `short_desc`,
                    `location`,
                    `time`,
                    `date`,
                    `event_type`,
                    `feature`
                      )
                  VALUES (
                  NULL ,  '$details', '$title', '$image', '$short_desc', '$location', '$time', '$date', '$event_type', '$feature'
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
                        `date`          =  '$date',
                        `event_type`    =  '$event_type',
                        `feature`       =  '$feature'
                        ";


                    $query .= "WHERE  `events`.`id` = $id";
                }
                
               //echo "\n" . $query;
                
                mysql_query($query) or die("Error:" . mysql_error());
                
                header('Location: redirect.php?eid='.$id);
                
                
            
            disconnect();
    
    
    
?>