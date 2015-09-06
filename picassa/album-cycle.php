<?php

$id = htmlspecialchars($_GET["id"]);

$photos = file_get_contents("https://picasaweb.google.com/data/feed/api/user/112022186898629807162/albumid/".$id."?kind=photo");

$photosxml = <<<EOT
$photos
EOT;

$sxe = new SimpleXMLElement($photosxml);

$sxe->registerXPathNamespace("media", "http://search.yahoo.com/mrss");
$result = $sxe->xpath("//media:content");

$description = $sxe->xpath("//media:description");

//foreach ($result as $content) {
    
$num = count($result);

echo "<!DOCTYPE html>
        <html lang='en'>
        <head>
            <meta charset='UTF-8'>
            <link rel='stylesheet' href='../css/gallery-cycle.css'>
            <script src='http://code.jquery.com/jquery-1.7.2.min.js'></script>
            <script src='/js/jquery.cycle.all.js'></script>
            <script>
                $(function(){

                $('#slideshow').cycle({
                        fx:      'scrollHorz',
                        timeout:  0,
                        prev:    '#prev',
                        next:    '#next, .move',
                        pager:   '#nav',
                        animOut: {  
                            opacity: 0  
                            }
                        });
                    });
            </script>
        </head>

        <body>";
            
        require_once("analyticstracking.php"); // html header
        echo "<div class='arrows'>
                <a href='#'><div id='prev'></div></a> 
                <a href='#' class='nx'><div id='next'></div></a>

              </div>";
        echo "<div id='slideshow'>";

for($i=0; $i<$num; $i++){
   
   $pattern = "/(.*)(\/.*[.jpg || .JPG || .png || .PNG])$/";
   
   $replacement = "$1/s900$2";  // make the image 900px in whatever direction is larger
   
  
   $link = preg_replace($pattern, $replacement, $result[$i]['url']);
   
   
   echo "<div><img class='move' src='{$link}'/><br/>{$description[$i]}<br/><br/></div>";
   
}

echo "</div></body></html>"; // html footer