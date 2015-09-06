<?php
  require_once 'quickmysql.php';
  connect();
  
 
  // EVENTS 
  $events = mysql_query("SELECT * FROM `downtoz0_cms`.`events` WHERE `hide` = FALSE");
  
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
           <div class='jWrap'>
           <input type='hidden' class='id' value='{$id}'/>
           <div class='dateBox'>
                <div class='dateTop'></div>
                <div class='month-and-day'><span class='jMonth'>{$monthString}</span><br/><span class='jDay'>{$day}</span></div>
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
           </div></div>
           
           <hr/>
           ";
    }
  }else{
    echo "";
  }
 
  
  
  disconnect();
  ?>