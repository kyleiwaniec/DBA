<?php require_once("vars.php"); ?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 ie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 ie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 ie" lang="en"> <![endif]-->
<!--[if IE 9 ]>   <html class="no-js ie9 " lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<!--    <html class="no-js" lang="en">-->
        <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
            <meta charset="UTF-8">

            <!-- Use the .htaccess and remove these lines to avoid edge case issues.
                 More info: h5bp.com/b/378 -->
            <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

            <title><?php echo $pagetitle; ?></title>
            
            <meta property="fb:app_id"      content="410673045631919" /> 
            <meta property="og:type"        content="website" /> 
            <meta property="og:url"         content="http://downtownbordentown.com" /> 
            <meta property="og:title"       content="Downtown Bordentown Association" />
            <meta property="og:image"       content="http://ogp.me/logo.png" /> 
            <meta property="og:description" content="" /> 
            
            

            
            <meta name="description" content="">
            <meta name="author" content="">

            
            <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/bigCal.css">
            <link rel="stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/miniCal.css">
            <link rel="stylesheet" type="text/css" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/styles.css">
            <link rel="stylesheet" type="text/css" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/css/colorbox.css">
            
            

            <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
            <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/jquery.placeholder-enhanced.js"></script>
            <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/jquery.validate.min.js"></script>
            <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/jquery.form.js"></script>
            <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/jquery.cycle.all.js"></script>
            <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/jquery.colorbox.js"></script>
            <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/scripts.js"></script>
            <script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/js/miniCal.js"></script>

            
        </head>

        <body>
            <?php require_once("analyticstracking.php") ?>
            <div id="header">
                <div id="masthead">
                    <a href="/" title="Home"><img src="images/dba-logo.png" alt="Downtown Bordentown Association" class="logo"/></a>
                    <div class="contact-join"><a href="contact.php">Contact</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="how-to-join.php">Join</a></div>
                    <div class="navigation">
                        <?php require_once 'mainMenu2.php'; ?>
                    </div>
                </div>
            </div>
