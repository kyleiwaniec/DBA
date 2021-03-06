<?php
require_once('config.php');
// ACCESS TO THIS PAGE IS CONTROLLED
$uid = access_control();
?>
<!DOCTYPE HTML>
<html>
    <body>

        <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/si.files.js"></script>
        <script>
            $(function(){
                $("#upload_image").css({"visibility":"hidden"});
                // upload the file without having to click the submit button:
                $("#event_image").change(function(){
                    $(this).siblings('#upload_image').click();
                });
        
                //  $("#event_image").focus();
                // stylize the file upload button:
                SI.Files.stylizeAll();   
            });
        </script>
        <style>
            *{
                margin:0;
                padding:0;
                text-align: center;
                font-family:verdana, sans-serif;
            }

    .SI-FILES-STYLIZED label.cabinet{
        width: 128px;
        height: 20px;
        background: url(../images/upload-btn.png) 0 0 no-repeat;  /*  should change this to an empty pixel */

        display: block;
        overflow: hidden;
        cursor: pointer;
    }
    .SI-FILES-STYLIZED label.cabinet:hover{
        background: url(../images/upload-btn.png) 0 -20px no-repeat; 
    }
    .SI-FILES-STYLIZED label.cabinet input.file{
        position: relative;
        height: 100%;
        width: auto;
        opacity: 0;
        -moz-opacity: 0;
        filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);
        
        cursor: pointer;
    }
    .uploadedImg{
        border:4px dashed lightgrey;
        width:100px;
        height:100px;
        margin-top:2px;
    }
        </style>
        <?php
        require_once 'createthumb.php';
        if (isset($_POST['upload_image'])) {


            $target = "../uploads/images/";


            $image = $_FILES["file"]["name"];
            $filename = stripslashes($image);

            $target = $target . basename($_FILES["file"]["name"]);
            //Writes the photo to the server 
            if (($_FILES["file"]["type"] == "image/jpeg") && ($_FILES["file"]["size"] < 10000000)) {
                copy($_FILES["file"]["tmp_name"], $target);

                // create a thumbnail version of the image as well
                createThumbnail("file", 100, 100, "../uploads/images/.thumbs/");
            };
        
        if ($filename) {
            //echo "<img src='../uploads/images/event_imgs/{$filename}' style='display:block;'/>\n";
            echo "<script>
    
    \$(function(){
    
    
    \$('#image', parent.document).val('{$filename}');
    \$('.uploadedImg', parent.document).detach();
    \$('#deleteImg', parent.document).detach();
    \$('#upload_image_frame', parent.document).css({\"height\": 130});
    
    
    \$('#deleteImg').live('click', function(){
        \$('#image', parent.document).val('');
        \$('#theImg').detach();
        \$(this).detach();
    alert('deleted');
    });

    });
    </script>";
        }
        }
        ?>
       
        <form method='post' enctype='multipart/form-data' action='' id="upload_image_form">
            <label class="cabinet"> <input type="file" name="file" class="file" id="event_image"/>
            <input type="submit" name="upload_image" value="upload" id="upload_image"/><br/><br/>
            </label>
        </form>
        <div class="uploadedImg" id="uploadedImg">
        <?php
        if (isset($_POST['upload_image'])) {
        if ($filename) {
            echo "<div style='position:relative;'>
                    <img id='theImg' src='../uploads/images/.thumbs/".rawurlencode($filename)."' style='display:block;'/>
                    <div id='deleteImg' style='position:absolute; bottom:0; right:0; width:20px; height:20px; line-height:20px; background-color:white; color:#BD1E3F; border:1px solid lightgrey;'>x</div>
            </div>\n";
        }
        }
        ?>
        </div>
    </body>  
</html>