<?php
  connect();
  
  // FEATURE
  $feature = mysql_query("SELECT * FROM `downtoz0_cms`.`events` WHERE `feature` = 'on'  && `hide` = FALSE ORDER BY `date` ASC LIMIT 1");
  
  if (mysql_num_rows($feature) > 0){
      
      $data = mysql_fetch_assoc($feature);
      
      $details = $data['details'];
      $title = $data['title'];
      $image = $data['image'];
      $short_desc = $data['short_desc'];
      $date = $data['date'];
      $time = $data['time'];
      $event_type = $data['event_type'];
      $location = $data['location'];
      $feature = $data['feature'];
      $id = $data['id'];
      
      echo "<div class='feature' style='background:url(uploads/images/{$image}) no-repeat;'>
      
            <div class='featureContent'>{$short_desc}</div>";
      if (!empty($details)){
           echo "<br/><a href='event-details.php?eid={$id}' class='moreinfo'>&raquo; Details</a>";
           }
      echo "</div>
            <p>&nbsp;</p>
            ";
  
  
  }

  // EVENTS 
  $events = mysql_query("SELECT * FROM `downtoz0_cms`.`events` WHERE `feature` = '' && `hide` = FALSE ORDER BY `date` ASC");
  
  $rows = mysql_num_rows($events);
  
  
  if($rows > 0){
    // show data
    while($data = mysql_fetch_assoc($events)){
      
      $details = $data['details'];
      $title = $data['title'];
      $image = $data['image'];
      $short_desc = $data['short_desc'];
      $date = $data['date'];
      $time = $data['time'];
      $event_type = $data['event_type'];
      $location = $data['location'];
      $feature = $data['feature'];
      $id = $data['id'];
      
      // parse the date
      $month_arr = array("", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

      $pattern = "/(\d)(\d)(\d)(\d)(-)([0-9]+)(-)([0-9]+)/";
      $month = "$6";
      $day = "$8";
      $year = "$3$4";
      
      //$monthString = $month_arr[preg_replace($pattern, $month, $date)];
      $month = preg_replace($pattern, $month, $date);
      $day = preg_replace($pattern, $day, $date);
      
      $monthString = $month_arr[(int)$month];
      
      echo "
           <div class='newsitem'>
           <div class='dateBox'>
                <div class='dateTop'></div>
                <div class='month-and-day'>{$monthString}<br/>{$day}</div>
           </div>
           <div class='text'>";
           
           if (!empty($image)){
     echo "<img src='uploads/images/.thumbs/{$image}' class='eventicon'/>";
           }
     echo "
           <span class='event-title'>{$title}</span><br/>
           {$short_desc}";
           
           if (!empty($details)){
           echo "<br/><a href='event-details.php?eid={$id}' class='moreinfo'>&raquo; Details</a>";
           }
           
     echo "</div>
           </div>
           <hr/>
           ";
    }
  }else{
    echo "There are no events scheduled at this time";
  }
  
  disconnect();
  ?>