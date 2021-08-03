<?php
session_start();
$score = $_SESSION['score'];

if(($score < 7) || ($score == '')) {
    header("location: test.php");
}
$name = $_SESSION['name'];
header('content-type:image/png');
$font="AGENCYR.TTF";
$image=imagecreatefrompng("certi1.png");
$color=imagecolorallocate($image,17,128,240);
$color2=imagecolorallocate($image,235,16,16);
$color3=imagecolorallocate($image,31,4,4);
imagettftext($image,60,0,995,1055,$color,$font,$name);
$date=date("d/m/Y");
$sign="Signature";
$sname="SCORE:    /10";
imagettftext($image,35,0,950,1300,$color,"AGENCYR.TTF",$date);
imagettftext($image,45,0,961,1180,$color,"AGENCYR.TTF",$score);
imagettftext($image,45,0,820,1180,$color3,"AGENCYR.TTF",$sname);
imagettftext($image,40,0,1360,1300,$color2,"AGENCYR.TTF",$sign);
imagepng($image);
imagedestroy($image);
?>