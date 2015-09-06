<?php

require_once("vars.php");

connect();

$label = mysql_real_escape_string($_POST['label']);

$hide = mysql_real_escape_string($_POST['hide']);
$sort = mysql_real_escape_string($_POST['sort']);

$link = mysql_real_escape_string(($_FILES['file']['name']));

    // upload file
    $target = "../uploads/files/";
    $link = $_FILES['file']['name'];
    $filename = stripslashes($link);

    $target = $target . basename($_FILES['file']['name']);
    //Writes the photo to the server 
    if (($_FILES["file"]["type"] == "application/pdf") && ($_FILES["file"]["size"] < 10000000)) {
        copy($_FILES["file"]["tmp_name"], $target);
    }; 
    // end upload file

if (isset($_POST['insert'])) {



    $query = "INSERT INTO  `downtoz0_cms`.`forms` (
                    `id` ,
                    `link`,
                    `label`,
                    `hide`,
                    `sort`
                      )
                  VALUES (
                  NULL ,  '$link', '$label', '$hide', '$sort'
                  );";
} else if (isset($_POST['update'])) {
    // update an existing row 

    $id = $_POST['id'];

    $query = "UPDATE  `downtoz0_cms`.`forms` 
                      SET  
                        `label`         =  '$label',
                        `link`          =  '$link',
                        `hide`          =  '$hide',
                        `sort`          =  '$sort'
                        ";


    $query .= "WHERE  `forms`.`id` = $id";
} else if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    $query = "DELETE FROM `forms` WHERE `id` = $id";
} else if (isset($_POST['hide'])) {
    $id = $_POST['id'];


    $query = "UPDATE `forms` 
                        SET  
                        `hide` = 1
                        WHERE `id` = $id";
} else if (isset($_POST['show'])) {
    $id = $_POST['id'];


    $query = "UPDATE `forms` 
                        SET  
                        `hide` = 0
                        WHERE `id` = $id";
}

//echo "\n" . $query;

mysql_query($query) or die("Error:" . mysql_error());

header('Location: redirect-form.php');



disconnect();


