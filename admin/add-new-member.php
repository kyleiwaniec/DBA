<?php
require_once('config.php');
// ACCESS TO THIS PAGE IS CONTROLLED
$uid = access_control();
$pagetitle = "Downtown Bordentown Association CMS";

require_once 'cms-header.php';
?>
<?php
connect();

if(isset($_POST['id'])) {

$query = mysql_query("SELECT max(id) FROM `members`");
$rows = mysql_num_rows($query);


            if($rows > 0){
                // show data
                while($data = mysql_fetch_assoc($query)){

                $maxid = $data['id'];
                }
            }
}
disconnect();
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
           <p class="serif largest title"> + Add Member</p>
           <hr/>
           <br/>
           Fields with a red <span class="pink">*</span> are required.<br/><br/>
           <form id="cmsForm" method="post" action="submit-member.php">
               <span class="pink">*</span><label for="title">Title:</label><br/>
               <input type="text" name="title"/><br/><br/>
               
               
               <label for="location">Location:</label> (to insert a line break type: &lt;br /&gt;)<br/>
               <textarea name="location" id="location" ></textarea><br/><br/>
               
               <label for='phone'>Phone Number:</label><br/>
               <input type='text' name='phone' id='phone' /><br/><br/>
               
               <label for='fax'>Fax Number:</label><br/>
               <input type='text' name='fax' id='fax' /><br/><br/>
               
               
               <label for='email'>Email:</label><br/>
               <input type='text' name='email' id='email'/><br/><br/>
               
               <label for='weblink'>Website URL:</label><br/>
               <input type='text' name='weblink' id='weblink' /><br/><br/>
               
               <label for='owner'>Owner or Contact Person:</label><br/>
               <input type='text' name='owner' id='owner' /><br/><br/>
               
               
               <span class="pink">*</span><label for="typeofm">Member Type:</label><br/>
               <input type="radio" name="typeofm" value="shop" checked> Shopping&nbsp;&nbsp;&nbsp;<input type="radio" name="typeofm" value="dine"> Dining&nbsp;&nbsp;&nbsp;<input type="radio" name="typeofm" value="service"> Services&nbsp;&nbsp;&nbsp;
               <br/><br/>
               

               <div class="uploadImgWrapper">
                   <iframe src="upload_image.php" frameborder="0" scrolling="no" width="120" height="130"></iframe>
               </div>
               <input type="hidden" name="image" id="image"/>
               
<!--               <span class="clickit">Click for value</span>-->
              
               <div class="shortDescWrapper">
               <span class="pink">*</span><label for="short_desc">Short Description:</label><br/>
               <textarea name="short_desc" id="short_desc" class="short_desc" maxlength="325" ></textarea><br/>
               <p>
               You have <span id="countdown" class="pink">325</span> characters left.
               </p>
               </div>
               <br clear="both"/>
               <br/><br/>
               <hr/>
               <br/>
               <label for="details">Member Details Page</label><br/>
               <textarea name="details" class="details" id="details" style="min-height:500px;">



               </textarea>
               <?php
                    connect();
                    $query = mysql_query("SELECT max(id) FROM `members`");
                    $rows = mysql_num_rows($query);


                                if($rows > 0){
                                    // show data
                                    while($data = mysql_fetch_assoc($query)){

                                    $maxid = $data['max(id)'];
                                     echo "<input type='hidden' name='maxid' value='{$maxid}'/>";
                                    }
                                }
                               
                    disconnect();
                    ?>
               <input type="reset" name="insert" value="Clear Form"/> <a href="members-list.php" class='button'>Cancel &amp; Return To Members List</a> <input type="submit" name="insert" value="submit" class="fltrt"/>
               <br/>
               <br/>
           </form>
            
           <br/>
               <br/>
        </div>
    </div>
</div>


<?php require_once 'cms-footer.php'; ?>
