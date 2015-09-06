<?php
  require_once 'quickmysql.php';
  connect();
  
 // STEP 1. create a temporary table to hold date ranges nd recurring events
    
    $createTbl = "create temporary table allDates (	
                    sd DATE not null,
                    _eid INT,
                    _title TEXT
                    );";
    
    mysql_query($createTbl) or die(mysql_error());
    
    $query = "SELECT * FROM `downtoz0_cms`.`events` WHERE `hide` = FALSE";

                                        $result = mysql_query($query) or die(mysql_error());

                                        $rows = mysql_num_rows($result);



                                        if ($rows > 0) {
                                            // show data
                                            while ($data = mysql_fetch_assoc($result)) {
                                                $id = $data['id'];
                                                $title = $data['title'];
                                                $recur = $data['recur'];
                                                $date = $data['date'];
                                                $end_date = $data['end_date'];
                                                
                                                if($recur == 0){
                                                //if($date != $end_date && $recur == 0){
                                                    $sql = "call InsertDatesInRange(\"$date\", \"$end_date\", $id, \"$title\")";
                                                    mysql_query($sql) or die(mysql_error());
                                                }else if($recur == 1){
                                                    // daily - same as range
                                                }else if($recur == 2){
                                                    $sql = "call InsertDatesWeekly(\"$date\", \"$end_date\", $id, \"$title\")";
                                                    mysql_query($sql) or die(mysql_error());
                                                }else{
                                                    $sql = "call InsertDatesMonthly(\"$date\", \"$end_date\", $id, \"$title\")";
                                                    mysql_query($sql) or die(mysql_error());
                                                }
                                                
                                            }

                                        }
    // end of temporary table
    // 
    // 
    // Step 2. get data
    // 
    $jointbls = "SELECT events.title, events.id, events.date, events.event_type, allDates._eid, allDates._title, allDates.sd
                        FROM events
                        LEFT JOIN allDates
                        ON events.id=allDates._eid
                        WHERE `hide` = FALSE;";
            $joined =  mysql_query($jointbls) or die(mysql_error());
            $joined_rows = mysql_num_rows($joined);

            if ($joined_rows > 0) {
                                            // show data
                                            while ($data = mysql_fetch_assoc($joined)) {
                                                $details = $data['details'];
                                                $image = $data['image'];
                                                $short_desc = $data['short_desc'];
                                                $time = $data['time'];
                                                $event_type = $data['event_type'];
                                                $location = $data['location'];
                                                $feature = $data['feature'];
                                                $id = $data['id'];
                                                $eid = $data['_eid'];
                                                $title = $data['title'];
                                                $sd = $data['sd'];
                                                $date = $data['date'];
                                                
                                                
                                                if($sd){
                                                    $display_date = $sd;
                                                }else{
                                                    $display_date = $date;
                                                }
    // 

      
      // parse the date
      $month_arr = array("", "Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");

      $pattern = "/(\d)(\d)(\d)(\d)(-)([0-9]+)(-)([0-9]+)/";
      $month = "$6";
      $day = "$8";
      $year = "$3$4";
      
      //$monthString = $month_arr[preg_replace($pattern, $month, $date)];
      $month = preg_replace($pattern, $month, $display_date);
      $day = preg_replace($pattern, $day, $display_date);
      
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