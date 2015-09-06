<?php
  connect();
  
  // FEATURE
  $feature = mysql_query("SELECT * FROM `downtoz0_cms`.`events` WHERE `feature` = 'on'  && `hide` = FALSE ORDER BY `date` DESC LIMIT 1");
  
  if (mysql_num_rows($feature) > 0){
      
      $data = mysql_fetch_assoc($feature);
      
      $details = $data['details'];
      $title = $data['title'];
      $image = $data['image'];
      $short_desc = $data['short_desc'];
      //$end_date = $data['end_date'];
      $date = $data['date'];
      $time = $data['time'];
      $event_type = $data['event_type'];
      $location = $data['location'];
      $feature = $data['feature'];
      $id = $data['id'];
      
      echo "<div class='feature' style='background:url(uploads/images/". rawurlencode($image) .")center center no-repeat;'>
      
            <div class='featureContent'>{$short_desc}</div>";
      if (!empty($details)){
           echo "<a href='event-details.php?eid={$id}' class='moreinfo button'>Details</a>";
           }
      echo "</div>
            ";
  
      echo "<script>console.log('". rawurlencode($image) ."');</script>";
  

  
  }else{
    echo "
            <div class='feature'>
            <div class='featureContent'><p>There are no featured events scheduled at this time</p></div>
            </div>";
  }
  
  disconnect();
  ?>