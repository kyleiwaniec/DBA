<?php 
require_once('config.php'); 
// WAS EVERYTHING WE NEED POSTED TO THIS SCRIPT?
if ( (!empty($_POST["uid"])) && (!empty($_POST["pwd"])) )
{
    // YES, WE HAVE THE POSTED DATA. ESCAPE IT FOR USE IN A QUERY
    $uid = mysql_real_escape_string($_POST["uid"]);
    $pwd = mysql_real_escape_string($_POST["pwd"]);
    $pwd = md5($pwd);

    // CONSTRUCT AND EXECUTE THE QUERY - COUNT THE NUMBER OF ROWS RETURNED
    $sql = "SELECT uid, uuk FROM admins WHERE uid = '$uid' AND pwd = '$pwd' LIMIT 1";
    $res = mysql_query($sql);

    // IF THE QUERY FAILED, GIVE UP
    if (!$res) die( mysql_error() );

    // THERE SHOULD BE ONE ROW IF THE VALIDATION WAS PROCESSED SUCCESSFULLY
    $num = mysql_num_rows($res);
    if ($num)
    {
        // RETRIEVE THE ROW FROM THE QUERY RESULTS SET
        $row = mysql_fetch_assoc($res);

        // STORE THE USER-ID IN THE SESSION ARRAY
        $_SESSION["uid"] = $row["uid"];

        // IS THE "REMEMBER ME" CHECKBOX SET?
        if (isset($_POST["rme"]))
        {
            remember_me($row["uuk"]);
        }

        // REDIRECT TO THE ENTRY PAGE OR TO THE HOME PAGE
        if (isset($_SESSION["entry_uri"]))
        {
            header("Location: {$_SESSION["entry_uri"]}");
            exit;
        }
        else
        {
            header("Location: /");
            exit;
        }
    } // END OF SUCCESSFUL VALIDATION
    else
    {
        echo "SORRY, VALIDATION FAILED \n";
    }
} // END OF FORM PROCESSING - PUT UP THE LOGIN FORM
?>
                                    
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Login</title>
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/css/styles.css"/>
    <style>body{margin:20px auto; width:350px;}input[type='submit']{text-align: right;}p{margin-top:15px;}table td{padding-right:10px;}</style>
  </head>
  <body>
<form method="post">
<p class="serif largest"><a href="/">DowntownBordentown.com</a></p>
<table>
    <thead><tr><td class="title largest">LOGIN</td></tr></thead>
    <tr><td class="title">User ID:</td><td><input name="uid" /></td></tr>
    <tr><td class="title">Password:</td><td><input name="pwd" type="password" /></td></tr>
</table>
 
<p class="title"><input type="checkbox" name="rme" /> KEEP ME LOGGED IN <br/>(Do not check this on a public computer)</p>
<input type="submit" value="LOGIN" />
</form>

  </body>
</html>



