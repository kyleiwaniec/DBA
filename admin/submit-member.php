<?php

require_once("vars.php");
//require_once("HTMLPurifier.standalone.php");

//$purifier = new HTMLPurifier();
//$clean_html = $purifier->purify($dirty_html);

 $allowedTags='<a><p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
 $allowedTags.='<li><ol><ul><span><div><br><ins><del>';
  $allowedTags.='<iframe>'; 
// Should use some proper HTML filtering here.
  connect();
 
  $details = mysql_real_escape_string(strip_tags(stripslashes($_POST['details']),$allowedTags));
    $title = mysql_real_escape_string($_POST['title']);
    $image = mysql_real_escape_string($_POST['image']);
    $short_desc = mysql_real_escape_string(strip_tags(stripslashes($_POST['short_desc']),$allowedTags));
    $typeofm = mysql_real_escape_string($_POST['typeofm']);
    $owner = mysql_real_escape_string($_POST['owner']);
    $weblink = mysql_real_escape_string($_POST['weblink']);
    $phone = mysql_real_escape_string($_POST['phone']);
    $fax = mysql_real_escape_string($_POST['fax']);
    $email = mysql_real_escape_string($_POST['email']);
    $location = mysql_real_escape_string($_POST['location']);
    
    
  
  if (isset($_POST['insert'])) {
    
    $id = $_POST['maxid'];
    $id++;
    
    $query = "INSERT INTO  `downtoz0_cms`.`members` (
                    `id` ,
                    `details`,
                    `title`,
                    `image`,
                    `short_desc`,
                    `location`,
                    `typeofm`,
                    `owner`,
                    `weblink`,
                    `phone`,
                    `fax`,
                    `email`
                      )
                  VALUES (
                  NULL ,  '$details', '$title', '$image', '$short_desc', '$location', '$typeofm', '$owner', '$weblink', '$phone', '$fax', '$email'
                  );";
                } else if (isset($_POST['update'])){
                    // update an existing row 

                    $id = $_POST['id'];

                    $query = "UPDATE  `downtoz0_cms`.`members` 
                      SET  
                        `details`       =  '$details',
                        `title`         =  '$title',
                        `image`         =  '$image',
                        `short_desc`    =  '$short_desc',
                        `location`      =  '$location',
                        `typeofm`       =  '$typeofm',
                        `owner`         =  '$owner',
                        `weblink`       =  '$weblink',
                        `phone`         =  '$phone',
                        `fax`           =  '$fax',
                        `email`         =  '$email'
                        ";


                    $query .= "WHERE  `members`.`id` = $id";
                }else if (isset($_POST['delete'])){
                     $id = $_POST['id'];

                    $query = "DELETE FROM `members` WHERE `id` = $id";
                }else if (isset($_POST['hide'])){
                     $id = $_POST['id'];
                     
                     
                        $query = "UPDATE `members` 
                        SET  
                        `hide` = 1
                        WHERE `id` = $id";
                        
                }else if (isset($_POST['show'])){
                     $id = $_POST['id'];
                     
                     
                        $query = "UPDATE `members` 
                        SET  
                        `hide` = 0
                        WHERE `id` = $id";
                }
                
               //echo "\n" . $query;
                
                mysql_query($query) or die("Error:" . mysql_error());
                
                header('Location: redirect-member.php?eid='.$id);
                
                
            
            disconnect();
    
    
    
?>