<?php
  require_once 'quickmysql.php';
  connect();
  
  $numPerPage = 10;

        if (isset($_GET["s"]) && is_numeric($_GET["s"])) {
            $start = $_GET["s"];
        } else {
            $start = 0;
        }

        $countquery = "SELECT id, COUNT(id) FROM `downtoz0_cms`.`members` WHERE `hide` = FALSE && `typeofm`='$type'"; // (we're 5 hours behind utc)

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
        //echo "pages: ".$pages;
  // EVENTS 
  $query = mysql_query("SELECT * FROM `downtoz0_cms`.`members` WHERE `hide` = FALSE && `typeofm`='$type' ORDER BY `title` ASC LIMIT $start, $numPerPage");
  
  $rows = mysql_num_rows($query);
  
  
  if($rows > 0){
    // show data
    while($data = mysql_fetch_assoc($query)){
      
      $details = $data['details'];
      $title = $data['title'];
      $image = $data['image'];
      $short_desc = $data['short_desc'];
      
      $location = $data['location'];
      $phone = $data['phone'];
      $fax = $data['fax'];
      $email = $data['email'];
      $owner = $data['owner'];
      $weblink = $data['weblink'];
      
      $id = $data['id'];
      
       
       echo "
           <div class='memberitem'>
           
           
           <div class='text row'>
           
            ";
           
           if (!empty($image)){
                echo "<div class='col' style='width:125px;'>
                      <img src='uploads/images/.thumbs/{$image}' class='inline-img lft'/>
                      </div>
                      <div class='col' style='width:445px;'>";
           }else{
               echo "<div class='col' style='width:100%;'>";
           }
                
           
           echo "<span class='member-title'>{$title}</span> <br/> <span>{$location}</span><br/>";
           
           if (!empty($owner)){
                echo "<span class='member-owner'><em>{$owner}</em></span><br/><br/>";
           }
                echo "{$short_desc}";
           
           if (!empty($weblink)){
                echo "<br/><span class='member-weblink'><a href='http://{$weblink}' title='{$title}' target='_blank'>{$weblink}</a></span>";
           }
           if (!empty($phone)){
                echo "<br/>Phone: <span class='member-phone'><strong>{$phone}</strong></span>";
           }
           //if (!empty($details)){
                echo "<a href='member-details.php?eid={$id}' class='moreinfo'>&raquo; Details</a>";
           //}
           
     echo "</div>
           </div>
           </div>
           
           <hr/>
           ";
    }
  }else{
    echo "There are no shops at this time";
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
  ?>