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
        &nbsp;
    </div>
        <div id="centerCol">
           <p class="serif largest title"> + Add New Form</p>
           <hr/>
           <br/>
           Fields with a red <span class="pink">*</span> are required.<br/><br/>
           <form id="cmsForm" method="post" action="submit-form.php" enctype="multipart/form-data">
               <span class="pink">*</span><label for="label">Label:</label><br/>
               <input type="text" name="label"/><br/><br/>
               
               <span class="pink">*</span><label for="file">Upload PDF File:</label><br/>
                <input type="file" name="file" id="file" />
               
               <br/><br/>
               <input type="hidden" name="sort" value="<?php 
               
                connect();
                $result = mysql_query("SELECT max(sort) FROM `forms`");
                $rows = mysql_num_rows($result);


                $data = mysql_fetch_assoc($result);

                $maxSort = $data['max(sort)'];
                echo $maxSort+1;


                //disconnect();
               
               ?>"/>
               <input type="reset" name="insert" value="Clear Form"/> <input type="submit" name="insert" value="submit" class="fltrt"/>
               <br/>
               <br/>
           </form>
            
           <hr/>
           <p class="serif largest title"> Edit Forms</p>
           
           <br/>
           <?php
            //connect();
            
            
            
           
            $result = mysql_query("SELECT * FROM `downtoz0_cms`.`forms` ORDER BY sort DESC");
  
            $rows = mysql_num_rows($result);



            if($rows > 0){
                // show data
                while($data = mysql_fetch_assoc($result)){

                $label = mysql_real_escape_string($data['label']);
                $link = mysql_real_escape_string($data['link']);
                $hide = mysql_real_escape_string($data['hide']);
                $id = mysql_real_escape_string($data['id']);
                $sort = mysql_real_escape_string($data['sort']);
                
                

                $greyBg = '';
                if($hide == 0){
                    $hide = "hide";
                    $greyBg = '';
                }else{
                    $hide = "show";
                    $greyBg = 'greyBg';
                }

                echo "
                    <div class='listitem {$greyBg}'>
                        <div class='form-label'>$label</div><br/>
                        <div class='form-link'><a href='../uploads/files/$link'>$link</a></div>
                        <div class='utilities'>
                            <div class='sort'><a href='#' class='button'>^</a></div>
                            <div class='edit'>
                                
                            </div>
                            <div class=''>
                                <form id='hide' method='post' action='submit-form.php'>
                                <input type='hidden' name='id' value='{$id}' />
                                <input type='submit' name='{$hide}' value='{$hide}'>
                                </form>
                            </div>
                            <div>
                                <form id='delete' method='post' action='submit-form.php'>
                                <input type='hidden' name='id' value='{$id}' />
                                <input type='submit' name='delete' value='delete'>
                                </form>
                            </div>
                        </div>
                
                    </div>
                    <hr/>
                   
                    ";
                }
            }else{
                echo "There are no forms available for download at this time.";
            }
            //disconnect();
           ?>
           
           
        </div>
    </div>
</div>


<?php require_once 'cms-footer.php'; ?>
