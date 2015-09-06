<?php

//$albums = file_get_contents("https://picasaweb.google.com/data/feed/api/user/kyleiwaniec?kind=album&access=public");

$albums = file_get_contents("https://picasaweb.google.com/data/feed/api/user/112022186898629807162?kind=album&access=public");


$albumsxml = <<<EOT
$albums
EOT;

$gphoto = new SimpleXMLElement($albumsxml);
$gphoto->registerXPathNamespace('gphoto', 'http://schemas.google.com/photos/2007');
$albumid = $gphoto->xpath('//gphoto:id');
$albumname = $gphoto->xpath('//gphoto:name');


$media = new SimpleXMLElement($albumsxml);
$media->registerXPathNamespace('media', 'http://search.yahoo.com/mrss/');
$albumimage = $media->xpath('//media:content');
$albumthumb = $media->xpath('//media:thumbnail');
$albumtitle = $media->xpath('//media:title');

$num = count($albumimage);

for($i=0; $i<$num; $i++){
    
    echo "<a href='album.php?id=".$albumid[$i]."'><img src='".$albumthumb[$i]['url'] ."'/></a><br/>".$albumtitle[$i]."<br/>".$albumid[$i]."<br/><br/>";
}



?>
