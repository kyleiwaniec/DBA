

<?php
  require_once 'quickmysql.php';
  require_once 'header.php';
  echo "<div class='wrapper' style='overflow:visible'>
        <div class='container' style='overflow:visible'>";
  
  connect();
  
  // recur = 0 not recurring, recur = 1 daily, recur = 2 weekly, recur = 3 monthly, 
  
  $numPerPage = 10;

        if (isset($_GET["s"]) && is_numeric($_GET["s"])) {
            $start = $_GET["s"];
        } else {
            $start = 0;
        }

        //$countquery = "SELECT id, COUNT(id) FROM `downtoz0_cms`.`events` WHERE `feature` = '' && `hide` = FALSE && `end_date` >= CURDATE()"; // (we're 5 hours behind utc)
        $countquery = "SELECT id, COUNT(id) FROM `downtoz0_cms`.`events` WHERE `feature` = ''"; // (we're 5 hours behind utc)

        $numrows = mysql_query($countquery) or die(mysql_error());
        $rower = mysql_fetch_array($numrows);


        $rowser = $rower['COUNT(id)'];


        $numberOfPages = CEIL($rowser / $numPerPage);

        if (isset($_GET["p"]) && is_numeric($_GET["p"])) {

            $pages = $_GET["p"];
        } else {

            if ($rowser > $numPerPage) {
                $pages = $numberOfPages;
            } else {

                $pages = 1;
            }
        } // end p if

  // EVENTS 
  $events = mysql_query("SELECT *, DATE_FORMAT(date, '%a') as day, DATE_FORMAT(date, '%b') as month FROM `downtoz0_cms`.`events` WHERE `feature` = '' && `hide` = FALSE && `end_date` >= CURDATE() ORDER BY `date` ASC LIMIT $start, $numPerPage");
  
  $rows = mysql_num_rows($events);
  
  
  if($rows > 0){
    // show data
    while($data = mysql_fetch_assoc($events)){
      
      $details = $data['details'];
      $title = $data['title'];
      $image = $data['image'];
      $short_desc = $data['short_desc'];
      $date = $data['date'];
      $end_date = $data['end_date'];
      $time = $data['time'];
      $end_time = $data['end_time'];
      $event_type = $data['event_type'];
      $location = $data['location'];
      $feature = $data['feature'];
      $id = $data['id'];
      $recur = $data['recur'];
      $day_of_week = $data['day'];
      $abbmonth = $data['month'];
     
      // parse the date
      $month_arr = array("", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
      $days_arr = array("", "Sat", "Sun", "Mon", "Tue", "Wed", "Thur", "Fri" );
      
      $pattern = "/(\d)(\d)(\d)(\d)(-)([0-9]+)(-)([0-9]+)/";
      $month = "$6";
      $day = "$8";
      $year = "$3$4";
      
      //$monthString = $month_arr[preg_replace($pattern, $month, $date)];
      $month = preg_replace($pattern, $month, $date);
      $start_day = preg_replace($pattern, $day, $date);
      
      $end_day = preg_replace($pattern, $day, $end_date);
      
      
      
       if($end_date > $date){
          $to_day = " - ".$end_day;
      }else{
          $to_day = "";
      }
      
      $monthString = $month_arr[(int)$month];
      
      
      if($event_type == "dba"){
          $color = "dba";
      }else if($event_type == "member"){
           $color = "member";
      }else{
           $color = "other";
      }
      
      if($recur == 1){
          $frequency = "daily";
      }else if($recur == 2){
          $frequency = $day_of_week;
      }if($recur == 3){
          $frequency = $abbmonth;
      }
      
      
       echo "
           <div class='newsitem'>
           <div class='jWrap'>
           <div class='dateBox'>
                <div class='dateTop {$color}'></div>
                <div class='month-and-day'>";
                if($recur == 0){
                
                    echo "<span class='jMonth'>{$monthString}</span><br/><span class='jDay'>{$start_day}{$to_day}</span>";
                }else{
                    echo "<span class='jMonth'>every<br/>{$frequency}</span>";
                };
       echo  "</div>
              </div>
              <div class='text'>";
           
           if (!empty($image)){
     echo "<img src='uploads/images/.thumbs/{$image}' class='eventicon'/>";
           }
     echo "
           <span class='event-title'>{$title}</span><br/>
           {$short_desc}";
           
           if (!empty($details)){
           echo "<br/><a href='event-details.php?eid={$id}' class='fltrt'>&raquo; Details</a>";
           }
           
     echo "</div>
           </div></div>
           
           <hr/>
           ";
    }
  }else{
    echo "There are no events scheduled at this time";
  }
 
  
  // pagination is now in separate file
//  if ($pages > 1) {
//            $curr_page = ($start / $numPerPage) + 1;
//        }
//
//
//        if ($curr_page != 1) {
//            echo "<a href='?s=" . ($start - $numPerPage) . "&p=" . $pages . "&page=" . ((($start + $numPerPage) / $numPerPage) - 1) . "' class='prev button'>&laquo; prev</a>";
//        }
//
//        for ($i = 1; $i <= $pages; $i++) {
//            echo "<a href='?s=" . (($numPerPage * ($i - 1))) . "&p=" . $pages . "&page=" . (((($numPerPage * ($i - 1))) / $numPerPage) + 1) . "'>" . $i . "</a> ";
//        }
//
//        if ($curr_page != $pages) {
//            echo "<a href='?s=" . ($start + $numPerPage) . "&p=" . $pages . "&page=" . ((($start + $numPerPage) / $numPerPage) + 1) . "' class='next button'>next &raquo;</a>";
//        }
  
  
  disconnect();
  
  
  
//    $date = "2012-06-06";
//    
//    print_r(date_parse($date));
//    $datearr = date_parse($date);
//    
//    echo $datearr[year];

    

  echo "</div></div>";
  require_once 'footer.php';
  ?>