<?php
      
  $i = 0;
  
  foreach($fb_connect->data as $data){
   
      if(isset($data->message) && ($data->from->name == "DowntownBordentownAssociationNJ") && $i < 1){
       
        $itemlink= $data -> actions -> link;
        
        $thedate = $data-> created_time;
        
        // 2011-12-09T17:40:41+0000

        $theMonths = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
        //print_r(date_parse($thedate));
        
        $datearr = date_parse($thedate);
        
        $theMonth = $theMonths[$datearr["month"]-1];


        // find links in the message:
        // The Regular Expression filter
        $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";

        // The Text you want to filter for urls
        $text = $data->message;

        // Check if there is a url in the text
        if(preg_match($reg_exUrl, $text, $url)) {
           // make the urls hyper links
           $text = preg_replace($reg_exUrl, "<a href='{$url[0]}' target=_blank>{$url[0]}</a> ", $data->message);
        }
        
        echo "<div style='overflow:hidden;'>
                <span class='title'>Posted on {$theMonth} {$datearr["day"]}, {$datearr["year"]}</span>
                <hr/>
                <img src='images/quote-left.png' alt='' style='margin-left:-10px;' align='bottom'/>";
                
        if(isset($data->picture)){
          echo "<img src='$data->picture' style='float:right; margin:10px 0 10px 10px; max-width:150px'/>";
        }  
        echo "<span class='serif larger'>{$text}</span>
              <img src='images/quote-right.png' align='middle' alt=''/>
              <br/>
              <span class='fltrt' style='clear:both'><a href='news.php'>View All Posts <img src='images/post-icon.png' align='middle' alt=''/></a></span>
              <p clear='both'/>&nbsp;</p>
            </div>";
        
        $i++;
      }
  
  }
    
     
  
  
  ?>