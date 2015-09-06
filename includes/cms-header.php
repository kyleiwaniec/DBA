<?php 
require_once("vars.php");
?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 ie cms" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 ie cms" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 ie cms" lang="en"> <![endif]-->
<!--[if IE 9 ]>   <html class="no-js ie9 cms" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js cms" lang="en"> <!--<![endif]-->
        <head>
            <meta charset="UTF-8">

            <!-- Use the .htaccess and remove these lines to avoid edge case issues.
                 More info: h5bp.com/b/378 -->
            <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

            <title><?php echo $pagetitle; ?></title>
            <meta name="description" content="">
            <meta name="author" content="">
           
            
            <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/bigCal.css">
            <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/miniCal.css">
            <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/styles.css">
            
            <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
            <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/jquery.validate.min.js"></script>
            <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/jquery.form.js"></script>
            <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/jquery.placeholder-enhanced.js"></script>
            <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/jquery.cycle.all.js"></script>
            <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/jquery.colorbox.js"></script>
            <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
            <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/tinyMCE-dba.js"></script>
            <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/scripts.js"></script>
            
        </head>

        <body>
            <div id="header">
                <div id="masthead">
                    <a href="/" target="_blank"><img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/images/dba-logo.png" alt="Downtown Bordentown Association" class="logo"/></a>
                    <div class="navigation">
<!--                       <p class="title larger">Content Management System | <a href="logout.php">Log Out</a></p>
                      </p>-->
                      <p><a href="events-list.php" class="button">EVENTS</a> | 
<!--                          <a href="add-new-news.php" class="button">NEWS</a> | -->
                          <a href="members-list.php" class="button">MEMBERS</a> | 
<!--                          <a href="add-new-form.php" class="button">FORMS/DOWNLOADS</a> | -->
                          <a href="logout.php">Log Out</a></p>

                    </div>
                </div>
            </div>
            
     