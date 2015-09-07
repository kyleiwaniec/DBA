<?php // RAY_EE_config.php
// tutorial:
// http://www.experts-exchange.com/Web_Development/Web_Languages-Standards/PHP/A_2391-PHP-login-logout-and-easy-access-control.html
// WHEN WE ARE DEBUGGING OUR CODE, WE WANT TO SEE ALL THE ERRORS!
error_reporting(E_ALL);

// REQUIRED FOR PHP 5.1+
date_default_timezone_set('America/Chicago');

// THE LIFE OF THE "REMEMBER ME" COOKIE
define('REMEMBER', 60*60*24*7); // ONE WEEK IN SECONDS

// WE WANT TO START THE SESSION ON EVERY PAGE
session_start();

// CONNECTION AND SELECTION VARIABLES FOR THE DATABASE
$db_host = "127.0.0.1"; // PROBABLY THIS IS OK
$db_name = "downtoz0_cms";        // GET THESE FROM YOUR HOSTING COMPANY
$db_user = "iq4user";
$db_word = "iq4pass";

// OPEN A CONNECTION TO THE DATA BASE SERVER
// MAN PAGE: http://us2.php.net/manual/en/function.mysql-connect.php
if (!$db_connection = mysql_connect("$db_host", "$db_user", "$db_word"))
{
    $errmsg = mysql_errno() . ' ' . mysql_error();
    echo "<br/>NO DB CONNECTION: ";
    echo "<br/> $errmsg <br/>";
}

// SELECT THE MYSQL DATA BASE
// MAN PAGE: http://us2.php.net/manual/en/function.mysql-select-db.php
if (!$db_sel = mysql_select_db($db_name, $db_connection))
{
    $errmsg = mysql_errno() . ' ' . mysql_error();
    echo "<br/>NO DB SELECTION: ";
    echo "<br/> $errmsg <br/>";
    die("NO DATA BASE $db_name");
}

// DEFINE THE ACCESS CONTROL FUNCTION
function access_control($test=FALSE)
{
    // REMEMBER HOW WE GOT HERE
    $_SESSION["entry_uri"] = $_SERVER["REQUEST_URI"];

    // IF THE UID IS SET, WE ARE LOGGED IN
    if (isset($_SESSION["uid"])) return $_SESSION["uid"];

    // IF WE ARE NOT LOGGED IN - RESPOND TO THE TEST REQUEST
    if ($test) return FALSE;

    // IF THIS IS NOT A TEST, REDIRECT TO CALL FOR A LOGIN
    header("Location: login.php");
    exit;
}

// DEFINE THE "REMEMBER ME" COOKIE FUNCTION
function remember_me($uuk)
{
    // CONSTRUCT A "REMEMBER ME" COOKIE WITH THE UNIQUE USER KEY
    $cookie_name    = 'uuk';
    $cookie_value   = $uuk;
    $cookie_expires = time() + date('Z') + REMEMBER;
    $cookie_path    = '/';
    $cookie_domain  = NULL;
    $cookie_secure  = FALSE;
    $cookie_http    = TRUE; // HIDE COOKIE FROM JAVASCRIPT (PHP 5.2+)

    // SEE http://us3.php.net/manual/en/function.setcookie.php
    setcookie
    ( $cookie_name
    , $cookie_value
    , $cookie_expires
    , $cookie_path
    , $cookie_domain
    , $cookie_secure
    , $cookie_http
    )
    ;
}



// DETERMINE IF THE CLIENT IS ALREADY LOGGED IN BECAUSE OF THE SESSION ARRAY
if (!isset($_SESSION["uid"]))
{

    // DETERMINE IF THE CLIENT IS ALREADY LOGGED IN BECAUSE OF "REMEMBER ME" FEATURE
    if (isset($_COOKIE["uuk"]))
    {
        $uuk = mysql_real_escape_string($_COOKIE["uuk"]);
        $sql = "SELECT uid FROM admins WHERE uuk = '$uuk' LIMIT 1";
        $res = mysql_query($sql);

        // IF THE QUERY SUCCEEDED
        if ($res)
        {
            // THERE SHOULD BE ONE ROW
            $num = mysql_num_rows($res);
            if ($num)
            {
                // RETRIEVE THE ROW FROM THE QUERY RESULTS SET
                $row = mysql_fetch_assoc($res);

                // STORE THE USER-ID IN THE SESSION ARRAY
                $_SESSION["uid"] = $row["uid"];

                // EXTEND THE "REMEMBER ME" COOKIE
                remember_me($uuk);
            }
        }
    }
}
                                    