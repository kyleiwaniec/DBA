<?php // RAY_EE_logout.php
require_once('config.php');

// GRAB THE UID OR A CONSTANT FOR THE GOODBYE MESSAGE
$uid = (isset($_SESSION["uid"])) ? ', ' . $_SESSION["uid"] : ' NOW';

// IF THE "REMEMBER ME" COOKIE IS SET, FORCE IT TO EXPIRE
$cookie_expires	= time() - date('Z') - REMEMBER;
if (isset($_COOKIE["uuk"]))
{
   setcookie("uuk", '', $cookie_expires, '/');
}

// CLEAR THE INFORMATION FROM THE $_SESSION ARRAY
$_SESSION = array();

// IF THE SESSION IS KEPT IN COOKIE, FORCE SESSION COOKIE TO EXPIRE
if (isset($_COOKIE[session_name()]))
{
   setcookie(session_name(), '', $cookie_expires, '/');
}

// TELL PHP TO ELIMINATE THE SESSION
session_destroy();

// SAY GOODBYE...
// echo "YOU ARE LOGGED OUT$uid.  GOODBYE.";


// OR REMOVE THE GOODBYE MESSAGE AND ACTIVATE THESE LINES TO REDIRECT TO THE HOME PAGE
 header("Location: /admin/");
// exit;