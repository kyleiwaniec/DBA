<?php
require_once("quickmysql.php");  

$data = "";
connect();

if(isset($_POST['hash'])){
	$data = $_POST['hash'];
	preg_match("/=(.+)/", $data , $matches);
	echo $matches[1];
	$longToken = $matches[1];

	$facebookLink = "https://graph.facebook.com/oauth/access_token?grant_type=fb_exchange_token&client_id=".$matches[1];
	$query = "UPDATE  `downtoz0_cms`.`fb` SET  `fb_token` =  '$facebookLink' WHERE  `fb`.`id` = 1";
	

	//$query = "INSERT INTO  `downtoz0_cms`.`fb` ( `fb_token`  )VALUES ('$longToken');";

	mysql_query($query) or die("Error:" . mysql_error());

}
disconnect();	
	
	

