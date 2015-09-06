<?php

require_once ("quickmysql.php");

connect();



$email = mysql_real_escape_string($_REQUEST['email']);
$first_name = mysql_real_escape_string($_REQUEST['first_name']);
$last_name = mysql_real_escape_string($_REQUEST['last_name']);
$address1 = mysql_real_escape_string($_REQUEST['address1']);
$address2 = mysql_real_escape_string($_REQUEST['address2']);
$city = mysql_real_escape_string($_REQUEST['city']);
$state = mysql_real_escape_string($_REQUEST['state']);
$zip = mysql_real_escape_string($_REQUEST['zip']);
$offline = mysql_real_escape_string($_REQUEST['offline']);


$sql_locate_email = mysql_query("SELECT email FROM `downtoz0_cms`.`subscribers` WHERE email = '$email' LIMIT 1");

$email_existing = mysql_fetch_row($sql_locate_email);
// If an existing record was located
if (!empty($email_existing)) {
    // that email address already exists
    // update an existing row 
    
    if($offline == "on"){
    
    $query = "UPDATE  `downtoz0_cms`.`subscribers` SET 
        `first_name`='$first_name', 
        `last_name`='$last_name',
        `address1`='$address1',
        `address2`='$address2',
        `city`='$city',
        `state`='$state',
        `zip` = '$zip'
        ";



    $query .= " WHERE  `subscribers`.`email` = '$email'";
    mysql_query($query) or die("<b>A MySQL error occured</b>.\n<br />Query: " . $query . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());

    
    echo "Thank You. Your information has been updated";
    
    }else{
    
    echo "That email address is already on file.";
    }
    
} else {
    // Insert a new record 
    $i = 0;
    $query = "INSERT INTO  `downtoz0_cms`.`subscribers` (
                    `id`,
                    `email`,
                    `first_name`,
                    `last_name`,
                    `address1`,
                    `address2`,
                    `city`,
                    `state`,
                    `zip`,
                    `offline`
                    )
                    VALUES (
                    NULL,
                    '$email',
                    '$first_name',
                    '$last_name',
                    '$address1',
                    '$address2',
                    '$city',
                    '$state',
                    '$zip',
                    '$offline'

                    )";
    mysql_query($query) or die("<b>A MySQL error occured</b>.\n<br />Query: " . $query . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());

    echo "Thank You. Your information has been saved.";
}





disconnect();

$to = $email;
//$to = 'kyleih@optonline.net';
$subject = 'Downtown Bordentown Association Subscriptions';
$message = 'Thank You for Subscribing to DBA';
$headers = 'From: info@downtownbordentown.com' . "\r\n" .
        'Reply-To: info@downtownbordentown.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers) or die("Error sending email");


