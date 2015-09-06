<?php

$id = htmlspecialchars($_GET["id"]);

$photos = file_get_contents("https://picasaweb.google.com/data/feed/api/user/112022186898629807162/albumid/".$id."?kind=photo");

$photosxml = <<<EOT
$photos
EOT;

$sxe = new SimpleXMLElement($photosxml);

$sxe->registerXPathNamespace('media', 'http://search.yahoo.com/mrss');
$result = $sxe->xpath('//media:content');

$description = $sxe->xpath('//media:description');

//foreach ($result as $content) {
    
$num = count($result);

for($i=0; $i<$num; $i++){
   
   $pattern = "/(.*)(\/.*[.jpg || .JPG || .png || .PNG])$/";
   
   $replacement = "$1/s900$2";  // make the image 600px in whatever direction is larger
   
  
   $link = preg_replace($pattern, $replacement, $result[$i]['url']);
   
   
   echo "<img src='{$link}'/><br/>{$description[$i]}<br/><br/>";
   
}
