<?php

header('Content-type: image/jpeg');

session_start();
$captcha_num = rand(1000, 9999);
$_SESSION['code'] = $captcha_num;

$font_size = 21;
$img_width = 116;
$img_height = 50;

$image = imagecreate($img_width, $img_height); // create background image with dimensions
imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0); // set captcha text color
imagettftext($image, $font_size, rand(-8,8), 10, 40, $text_color, './captcha.ttf', $captcha_num);

imagejpeg($image);
imagedestroy($image);

/*print_r($_POST);
if(isset($_POST) & !empty($_POST)){
    if($_POST['captcha'] == $_SESSION['code']){
        echo "correct captcha";
    }else{
        echo "Invalid captcha";
    }
}*/