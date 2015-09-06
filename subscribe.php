<?php

require_once ("quickmysql.php");

connect();

$formvalues = mysql_real_escape_string($_POST['formvalues']);
$email = mysql_real_escape_string($_POST['email']);
//echo $formvalues;
$a = explode('&', $formvalues);


$sql_locate_email = mysql_query("SELECT email FROM `downtoz0_cms`.`subscribers` WHERE email = '$email' LIMIT 1");

$email_existing = mysql_fetch_row($sql_locate_email);
// If an existing record was located
if (!empty($email_existing)) {
    // that email address already exists
    // update an existing row 
    $query = "UPDATE  `downtoz0_cms`.`subscribers` SET ";


    //loop through formvalues
    $i = 0;
    while ($i < count($a)) {
        $b = split('=', $a[$i]);
        $query .= "`" . htmlspecialchars(urldecode($b[0])) . "` = '" . htmlspecialchars(urldecode($b[1])) . "'";
        $i++;
        if ($i < count($a)) {
            $query .= ", ";
        }
    }


    $query .= " WHERE  `subscribers`.`email` = '$email'";
    
    echo "That email address is already on file. We have updated your information";

    
} else {
    // Insert a new record 
    $i = 0;
    $query = "INSERT INTO  `downtoz0_cms`.`subscribers` (
                    `id` ";


    while ($i < count($a)) {
        $b = split('=', $a[$i]);
        $query .= ", `" . htmlspecialchars(urldecode($b[0])) . "`";
        $i++;
    }
    $query .= ")
                    VALUES (
                    NULL";


    $i = 0;
    while ($i < count($a)) {
        $b = split('=', $a[$i]);
        $query .= " , '" . htmlspecialchars(urldecode($b[1])) . "'";
        $i++;
    }

    $query .= ")";
}




mysql_query($query) or die("<b>A MySQL error occured</b>.\n<br />formvalues:" . $formvalues . "\n<br />Query: " . $query . "<br />\nError: (" . mysql_errno() . ") " . mysql_error());

disconnect();

$to = $email;
//$to = 'kyleih@optonline.net';
$subject = 'Downtown Bordentown Association Subscriptions';
$message = 'Thank You for Subscribing to DBA';
$headers = 'From: info@downtownbordentown.com' . "\r\n" .
        'Reply-To: info@downtownbordentown.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers) or die("Error sending email");


