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

$query = mysql_query("SELECT max(id) FROM `events`");
$rows = mysql_num_rows($query);


            if($rows > 0){
                // show data
                while($data = mysql_fetch_assoc($query)){

                $maxid = $data['id'];
                }
            }
}else{
    //echo "not set";
}
disconnect();
?>

<div class="wrapper">
    <div class="container">
        <div class="breadcrumb"></div>
    <div id="leftCol">
        <div class="borderBox">
    
    <p class="serif largest">EVENTS</p>
    <hr/>
    <?php require_once 'cms-events-menu.php' ?>
        </div>
    </div>
        <div id="centerCol">
           <p class="serif largest title"> + Add Event</p>
           <hr/>
           <br/>
           Fields with a red <span class="pink">*</span> are required.<br/><br/>
           <form id="cmsForm" method="post" action="submit-event.php">
               <span class="pink">*</span><label for="title">Title:</label><br/>
               <input type="text" name="title"/><br/><br/>
               
               <div class="row">   
                   <div class="col">
               <span class="pink">*</span><label for="event_date">Start Date:</label><br/>
                   
               <select name='year' class='startYear'>
                            
                      <?php      
                     for ($i = 2014; $i<=2020; $i++){
                                                  echo "<option value='".$i."'>".$i."</option>";
                                   }
            
                     echo "</select>
                            <select name='month'>
                              <option value='01'>Jan</option>
                              <option value='02'>Feb</option>
                              <option value='03'>Mar</option>
                              <option value='04'>Apr</option>
                              <option value='05'>May</option>
                              <option value='06'>Jun</option>
                              <option value='07'>Jul</option>
                              <option value='08'>Aug</option>
                              <option value='09'>Sep</option>
                              <option value='10'>Oct</option>
                              <option value='11'>Nov</option>
                              <option value='12'>Dec</option>
                            </select>
                            <select name='day'>";
            
                   for ($i= 1; $i<=31; $i++){
                       $zero = "";
                           if($i < 10) {
                               $zero = 0;
                           }
                           echo "<option value='". $zero . $i."'>".$i."</option>";
                   } 
                   ?></select>
               <br/>
               <br/>
               
               <span class="pink">*</span><label for="event_date">End Date:</label><br/>
                   
               <select name='end_year' class='endYear'>
                            
                      <?php      
                     for ($i= 2014; $i<=2020; $i++){
                                                  echo "<option value='".$i."'>".$i."</option>";
                                   }
            
                     echo "</select>
                            <select name='end_month'>
                              <option value='01'>Jan</option>
                              <option value='02'>Feb</option>
                              <option value='03'>Mar</option>
                              <option value='04'>Apr</option>
                              <option value='05'>May</option>
                              <option value='06'>Jun</option>
                              <option value='07'>Jul</option>
                              <option value='08'>Aug</option>
                              <option value='09'>Sep</option>
                              <option value='10'>Oct</option>
                              <option value='11'>Nov</option>
                              <option value='12'>Dec</option>
                            </select>
                            <select name='end_day'>";
            
                   for ($i= 1; $i<=31; $i++){
                       $zero = "";
                           if($i < 10) {
                               $zero = 0;
                           }
                           echo "<option value='". $zero . $i."'>".$i."</option>";
                   } 
                   ?></select>
               
               
               </div>
                   <div class="col" style="padding-right:30px;">&nbsp;</div>
                   <div class="col">
                    <label for="event_time">From:</label><br/>

                    <select name="hour">
                        <option value="0">Hour</option>
                       <?php
                       for ($i = 8; $i <= 24; $i++) {
                           $zero = "";
                           
                           if($i < 10) {
                               $zero = 0;
                              
                           }
                           if($i == 12){
                              echo "<option value='" .$i . "'>" . $i . " (Noon)</option>"; 
                           }else if($i == 24){
                              echo "<option value='" .$i . "'>" . $i . " (Midnight)</option>"; 
                           }else{
                           echo "<option value='" . $zero . $i . "'>" . $i . "</option>";
                           }
                       }
                       for ($i = 1; $i < 8; $i++) {
                           $zero = "";
                           
                           if($i < 10) {
                               $zero = 0;
                              
                           }
                          
                           echo "<option value='" . $zero . $i . "'>" . $i . "</option>";
                       
                       }
                       ?>
                   </select>
                   <select name='minute'>
                       <option value="0">Minute</option>
                       <?php
                       for ($i = 0; $i <= 59; $i+=5) {
                           $zero = "";
                           if($i < 10) {
                               $zero = 0;
                           }
                           echo "<option value='" . $zero . $i . "'>" . $i . "</option>";
                       }
                       ?>
                   </select>
                    <br/>
                    <br/>
                    <!-- to-time -->
                    <label for="end_time">To:</label><br/>

                    <select name="end_hour">
                        <option value="0">Hour</option>
                       <?php
                       for ($i = 8; $i <= 24; $i++) {
                           $zero = "";
                           
                           if($i < 10) {
                               $zero = 0;
                              
                           }
                           if($i == 12){
                              echo "<option value='" .$i . "'>" . $i . " (Noon)</option>"; 
                           }else if($i == 24){
                              echo "<option value='" .$i . "'>" . $i . " (Midnight)</option>"; 
                           }else{
                           echo "<option value='" . $zero . $i . "'>" . $i . "</option>";
                           }
                       }
                       for ($i = 1; $i < 8; $i++) {
                           $zero = "";
                           
                           if($i < 10) {
                               $zero = 0;
                              
                           }
                          
                           echo "<option value='" . $zero . $i . "'>" . $i . "</option>";
                       
                       }
                       ?>
                   </select>
                   <select name='end_minute'>
                       <option value="0">Minute</option>
                       <?php
                       for ($i = 0; $i <= 59; $i+=5) {
                           $zero = "";
                           if($i < 10) {
                               $zero = 0;
                           }
                           echo "<option value='" . $zero . $i . "'>" . $i . "</option>";
                       }
                       ?>
                   </select>
                   </div>
                   <div class='col' style='padding-right:30px;'>&nbsp;</div>
                   <div class="col">
                       <label for="recur">Recurring:</label><br/>
                       <input type="radio" name="recur" value="0" checked> None<br/>
                       <input type="radio" name="recur" value="2" > Weekly<br/>
                       <input type="radio" name="recur" value="3" > Monthly<br/>
                   </div>
               </div>
               <br/>
               <label for="location">Location:</label> (to insert a line break type: &lt;br /&gt;)<br/>
               <textarea name="location" id="location" ></textarea><br/><br/>
               
               <span class="pink">*</span><label for="event_type">Event Type:</label><br/>
               <input type="radio" name="event_type" value="member" checked> Member&nbsp;&nbsp;&nbsp;<input type="radio" name="event_type" value="dba"> DBA&nbsp;&nbsp;&nbsp;<input type="radio" name="event_type" value="other" checked> Other<br/>
               <input type="checkbox" name="feature" > Feature<br/><br/>
               <div id="feature-img">
<!--                   <input type="checkbox" name="bg" disabled>-->
               <iframe src="upload_bg_image.php" frameborder="0" scrolling="no" width="170" height="20"></iframe>
               
               </div>
               <div class="uploadImgWrapper">
                   <iframe src="upload_image.php" frameborder="0" scrolling="no" width="120" height="130"></iframe>
               </div>
               <input type="hidden" name="image" id="image"/>
               
<!--               <span class="clickit">Click for value</span>-->
               <div class="shortDescWrapper">
               <span class="pink">*</span><label for="short_desc">Short Description:</label><br/>
               <textarea name="short_desc" id="short_desc" class="short_desc" ></textarea><br/>
               <p>
               You have <span id="countdown" class="pink">325</span> characters left.
               </p>
               </div>
               <br clear="both"/>
               <br/><br/>
               <hr/>
               <br/>
               <label for="details">Event Details Page</label><br/>
               <textarea name="details" class="details" id="details" style="min-height:500px;">



               </textarea>
               <?php
                    connect();
                    $query = mysql_query("SELECT max(id) FROM `events`");
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
               <input type="reset" name="insert" value="Clear Form"/> <a href="events-list.php" class='button'>Cancel &amp; Return To Events List</a> 
               <span class="fltrt"><input type="checkbox" checked="checked" name='hide' value="1"/> Hide <input type="submit" name="insert" value="submit"/></span>
               <br/>
               <br/>
           </form>
            
           <br/>
               <br/>
        </div>
    </div>
</div>



<?php require_once 'cms-footer.php'; ?>
