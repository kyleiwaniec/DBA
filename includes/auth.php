<?php

// we're coming from the login.php login form
if (isset($_POST["login"])){
  $_SESSION["name"] = $_POST["nickname"];
  $_SESSION["pass"] = $_POST["password"];
}
 
 $authorized = false;
 $redirect = false;

connect();
function verifyPass($data){
  // this gives us access to the global $redirect value
  global $redirect;
  
  echo $data["userdata"];
  
  $pass = sha1(sha1($_POST["password"]) . sha1($data["salt"]));
  if ($pass == $data["password"]){
    $_SESSION["authorized"] = true;
    $_SESSION["userdata"] = $data["userdata"];
    
    $authorized = true;
  }else{
    $redirect = true;
    $_SESSION["wrong_login"] = true;
  }
}

if (isset($_SESSION["authorized"])){
  $authorized = true;
}else{
  if (isset($_POST["nickname"])){
    $user = mysql_real_escape_string($_POST['nickname']);
    $rows = sql("SELECT * FROM users WHERE name = '$user';", verifyPass, "");
    if ($rows == 0){
      $redirect = true;
      $_SESSION["wrong_login"] = true;
    }
  }else{
    $redirect = true;
  }
}
disconnect();
