<?php
require_once 'quickmysql.php';
connect();
// Display the calendar
//$getm = date("m"); // month 01 to 12
//$getyear = date("Y");  // Returns the year xxxx

$getmonth = $_POST[getmonth];
$getyear  = $_POST[getyear];

calendar($getmonth, $getyear);


function calendar($m, $year) {
    /*
     * h = day of the week 0:Saturday, 1:Sunday... 6:Friday q = day of the
     * month m = month 3: march - 12:Dec, 13: Jan, 14: Feb j = is the
     * century k is the year of the century
     */
    echo "<div class='calendar'>";

    $h;
    $q;
    $m;
    $realMonth = $m; // 1-12
    $j;
    $k;

    


    if ($m < 3) {
        $m+=12;
        $year--;
    }


    $q = 1; // the first day of the month

    $j = $year / 100;
    $k = $year % 100;

    $j = floor($j);

    $h = ($q + floor((26 * ($m + 1) / 10)) + $k + floor($k / 4) + floor($j / 4) + 5 * $j) % 7; // day

    $h = floor($h);


    $displayMonth = array("", "", "", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December", "January", "February");

    $daysInMonth = array(0, 0, 0, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31,
        31, 28);

    //echo "<div class='month' data-month='$realMonth'>" . $displayMonth[$m] . "</div>";

    $week_num = 0;

    $dayofweek = array("SUNDAY", "MONDAY", "TUESDAY", "WEDNESDAY", "THURSDAY", "FRIDAY", "SATURDAY");

    echo "<div class='dayOfWeek'>";

    for ($i = 0; $i < 7; $i++) {
        echo "<span class='day_of_week'>" . $dayofweek[$i] . "</span>";
    }
    echo "</div>";

    echo "<div class='days'>";
    echo "<div class='week_num_".$week_num++."'>";

    $day = 1;
    
    if ($m >= 13) {
        $year++;
    };
   
    for ($i = 0; $i < 7; $i++) {

        if ($h == 0) { // compensate for shifting the Saturday to the left
            $h += 7;
        };
        if ($i < $h - 1) { // shift the Saturday
            echo "<span class='day_" . $i . "'></span>";
        } else {
            
            $today = $year ."-".$realMonth."-".$day; 
            echo "<span class='day_" . $i . "'><div class='num " . ($day) . "'>" . ($day++) . "</div>";

                                    // echo $today;
                                    // Display the Events
                                    $query = "SELECT * FROM `downtoz0_cms`.`events` WHERE date='$today' && `hide` = FALSE";
                                    
                                    $result = mysql_query($query) or die(mysql_error());

                                    $rows = mysql_num_rows($result);



                                    if ($rows > 0) {
                                        // show data
                                        while ($data = mysql_fetch_assoc($result)) {
                                            $id = $data['id'];
                                            $title = $data['title'];
                                            $date = $data['date'];
                                            $type = $data['event_type'];
                                            
                                            if($type == "dba"){
                                                $color = "dba";
                                            }else if($type == "member"){
                                                $color = "member";
                                            }else{
                                                $color = "other";
                                            }
                                            
                                            echo "<p class='eventTitle {$color}' data-date='{$date}'><a href='event-details.php?eid={$id}'>{$title}</a></p>";
                                            
                                        }
                                    }
            echo "</span>";
            
        };
    };

    //echo "<br class='clear'/>";
    echo "</div><div class='week_num_".$week_num++."'>";

    

    for ($i = 0; $i < 6; $i++) {

        for ($p = 0; $p < 7; $p++) {
            $today = $year ."-".$realMonth."-".$day; 
            echo "<span class='day_" . $p . "'><div class='num " . ($day) . "'>" . ($day++) . "</div>";
            

                                    // echo $today;
                                    // Display the Events
                                    $query = "SELECT * FROM `downtoz0_cms`.`events` WHERE date='$today' && `hide` = FALSE";
                                    
                                    $result = mysql_query($query) or die(mysql_error());

                                    $rows = mysql_num_rows($result);



                                    if ($rows > 0) {
                                        // show data
                                        while ($data = mysql_fetch_assoc($result)) {
                                            $id = $data['id'];
                                            $title = $data['title'];
                                            $date = $data['date'];
                                            $type = $data['event_type'];
                                            
                                            if($type == "dba"){
                                                $color = "dba";
                                            }else if($type == "member"){
                                                $color = "member";
                                            }else{
                                                $color = "other";
                                            }
                                            
                                            echo "<p class='eventTitle {$color}' data-date='{$date}'><a href='event-details.php?eid={$id}'>{$title}</a></p>";
                                            
                                        }
                                    }
            echo "</span>";


            if (($year % 4 == 0) && (($year % 100 != 0) || ($year % 400 == 0)) && ($m == 14)) {

                if ($day > $daysInMonth[$m] + 1) {
                    for ($i = 0; $i < 6 - $p; $i++) {

                        echo "<span class='day_" . ($p + $i + 1) . "'></span>";
                        
                    };

                    //echo "<br class='clear'/>";
                    echo "</div><div class='week_num_".$week_num++."'>";

                    break 2;
                };
            } else if ($day > $daysInMonth[$m]) {
                for ($i = 0; $i < 6 - $p; $i++) {
                    echo "<span class='day_" . ($p + $i + 1) . "'> </span>";
                };

                //echo "<br class='clear'/>";
                echo "</div><div class='week_num_".$week_num++."'>";

                break 2;
            };
        };




        //echo "<br class='clear'/>";
        echo "</div><div class='week_num_".$week_num++."'>";
    };

    echo "</div>"; // .week_num
    echo "</div>"; // .days
    echo "</div>"; // .calendar
}; // end calendar function	






// End calendar



disconnect();
