
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'/>
		<title>ColorBox Examples</title>
		<style>
			iframe{padding:0; margin:0; border:0;}
		</style>
		<link rel="stylesheet" href="../css/colorbox.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="../js/jquery.colorbox.js"></script>
		<script>
			$(function(){
				
                           $(".open-cb-iframe").colorbox({iframe:true, width:"960px", height:"730px", opacity:.65});
                           
			});
		</script>
	</head>
	<body>
<?php


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
    
    echo "<a class='open-cb-iframe' href='album-cycle.php?id=".$albumid[$i]."' title='".$albumtitle[$i]."'><img src='".$albumthumb[$i]['url'] ."'/></a><br/>".$albumtitle[$i]."<br/>".$albumid[$i]."<br/><br/>";
}



?>
        
        </body>
</html>