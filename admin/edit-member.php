<?php
require_once('config.php');
// ACCESS TO THIS PAGE IS CONTROLLED
$uid = access_control();
$pagetitle = "Downtown Bordentown Association CMS";
require_once 'cms-header.php';
?>

<div class="wrapper">
    <div class="container">
        <div class="breadcrumb"></div>
    <div id="leftCol">
        <div class="borderBox">
    
    <p class="serif largest">MEMBERS</p>
    <hr/>
    <?php require_once 'cms-members-menu.php' ?>
        </div>
    </div>
        <div id="centerCol">
           <p class="serif largest title"> Edit Member</p>
           <hr/>
           <br/>
           Fields with a red <span class="pink">*</span> are required.<br/><br/>
           
           <?php 
           
           connect();
           
           if( isset($_GET["eid"]) ){ $eid =  $_GET["eid"]; };
           
           $query = mysql_query("SELECT * FROM `downtoz0_cms`.`members` WHERE `id` = $eid");
  
            $rows = mysql_num_rows($query);


            if($rows > 0){
                // show data
                while($data = mysql_fetch_assoc($query)){

                $details = $data['details'];
                $title = $data['title'];
                $image = $data['image'];
                $short_desc = $data['short_desc'];
                
                $location = $data['location'];
                $typeofm = $data['typeofm'];
                $hide = $data['hide'];
                $id = $data['id'];
                $owner = $data['owner'];
                $weblink = $data['weblink'];
                $phone = $data['phone'];
                $fax = $data['fax'];
                $email = $data['email'];
                
               
                
                echo "<script>
                      \$(function(){
                      
                       ";
                
                if($typeofm == "shop"){
                    echo "\$('input[value=\"shop\"]').attr('checked', true);";
                   
                }else if($typeofm == "dine"){
                    echo "\$('input[value=\"dine\"]').attr('checked', true);";
                }else if($typeofm == "service"){
                    echo "\$('input[value=\"service\"]').attr('checked', true);";
                }
          
                if(!empty($image)){
                    // show the image, hide the iframe image (lessen height of iframe to 20px;)
                    echo " \$('.uploadImgWrapper').append('<div class=\"uploadedImg\" style=\"position:relative;\"><img id=\"theImg\" src=\"../uploads/images/.thumbs/{$image}\" style=\"display:block;\" /><div id=\"deleteImg\">x</div></div>');
                           \$('#upload_image_frame').css({\"height\": 20});
                           \$('#deleteImg').live('click', function(){
                                    
                                    \$('#theImg').detach();
                                    \$(this).detach();
                    
                                    \$('#image').val();    
                                    });
                            ";
                }
          
                
                
                echo "});
                    </script>"; // javascript 
                
          echo "
               
                <form id='cmsForm' method='post' action='submit-member.php'>
               <span class='pink'>*</span><label for='title'>Title:</label><br/>
               <input type='text' name='title' value='{$title}'/><br/><br/>
               
               
               <label for='location'>Location:</label> (to insert a line break type: &lt;br /&gt;)<br/>
               <textarea name='location' id='location' >{$location}</textarea><br/><br/>
               
               <label for='phone'>Phone Number:</label><br/>
               <input type='text' name='phone' id='phone' value='{$phone}'/><br/><br/>
               
               <label for='fax'>Fax Number:</label><br/>
               <input type='text' name='fax' id='fax' value='{$fax}'/><br/><br/>
               
               <label for='email'>Email:</label><br/>
               <input type='text' name='email' id='email' value='{$email}'/><br/><br/>
               
               <label for='weblink'>Website URL:</label><br/>
               <input type='text' name='weblink' id='weblink' value='{$weblink}'/><br/><br/>
               
               <label for='owner'>Owner or Contact Person:</label><br/>
               <input type='text' name='owner' id='owner' value='{$owner}'/><br/><br/>
               
               
               <span class='pink'>*</span><label for='typeofm'>Member Type:</label><br/>
               <input type='radio' name='typeofm' value='shop' > Shopping&nbsp;&nbsp;&nbsp;<input type='radio' name='typeofm' value='dine'> Dining&nbsp;&nbsp;&nbsp;<input type='radio' name='typeofm' value='service'> Services&nbsp;&nbsp;&nbsp;
                 <br/><br/>
               <div class='uploadImgWrapper'>
                    <iframe src='upload_image.php' id='upload_image_frame' frameborder='0' scrolling='no' width='120' height='130'></iframe>
               </div>
               
               <input type='hidden' name='image' id='image' value='{$image}'/>
               
                    <div class='shortDescWrapper'>
                    <span class='pink'>*</span><label for='short_desc'>Short Description:</label><br/>
                    <textarea name='short_desc'id='short_desc' class='short_desc' maxlength='325' >{$short_desc}</textarea><br/>
                    <p>
                    You have <span id='countdown' class='pink'>325</span> characters left.
                    </p>
                    </div>
                    
               <br clear='both'/>
               <!-- <div id='but' class='button largest' >[ refresh img ]</div> -->
               <br/><br/>
               <hr/>
               <br/>
               <label for='details'>Member Details Page</label><br/>
               <textarea name='details' class='details' id='details' style='min-height:500px;'>
               {$details}
               </textarea>
               
               <a href='edit-member.php?eid={$id}' class='button'>Undo All Changes</a> <a href='members-list.php' class='button'>Cancel &amp; Return To Members List</a><input type='submit' name='update' value='save changes' class='fltrt'/>
               <br/>
               <br/>
               <input type='hidden' name='id' id='id' value='{$id}'/>
                </form>";
            
           
           }
           }
           disconnect();
           ?>
           
           <br/>
               <br/>
        </div>
    </div>
</div>


<?php require_once 'cms-footer.php'; ?>
