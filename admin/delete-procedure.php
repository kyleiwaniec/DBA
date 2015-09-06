<?php
require_once("connect-downtoz0.php");

  connect();
 
   $query = "DELETE FROM `information_schema`.`ROUTINES` WHERE `SPECIFIC_NAME` = GetAllEvents";
                
   echo mysql_query($query) or die("Error:" . mysql_error());
                
                
                
            
 disconnect();
    
    
    
?>