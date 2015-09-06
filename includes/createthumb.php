<?php

function createThumbnail($name, $width, $height, $path){

    $source_img = imagecreatefromjpeg($_FILES[$name]["tmp_name"]);
    if (!$source_img) {
    echo "could not create image from jpg";
    }
          $new_w = $width;
          $new_h = $height;

          $orig_w = imagesx($source_img);
          $orig_h = imagesy($source_img);


          $w_ratio = ($new_w / $orig_w);
          $h_ratio = ($new_h / $orig_h);

          if ($orig_w > $orig_h ) {//landscape
            $crop_w = round($orig_w * $h_ratio); 
            $crop_h = $new_h;
          } else if ($orig_w < $orig_h ) {//portrait
            $crop_h = round($orig_h * $w_ratio);
            $crop_w = $new_w;
          } else {//square
            $crop_w = $new_w;
            $crop_h = $new_h;
          }
  $dest_img = imagecreatetruecolor($new_w,$new_h);
  // this is where the magic happens
  imagecopyresampled($dest_img, $source_img, 0 , 0 , 0, 0, $crop_w, $crop_h, $orig_w, $orig_h);
  
  //$target = "../images/";
  
  if(imagejpeg($dest_img, $path . $_FILES[$name]["name"], 80)) {
    imagedestroy($dest_img);
    imagedestroy($source_img);
  } else {
    echo "could not make thumbnail image";
  }
}

?>