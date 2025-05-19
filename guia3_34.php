<?php

    $height=100; 
    $whith=150;  
    $x1=10;
    $x2=140;  
    $y1=30;
    $y2=70; 
    $boton=imagecreate($whith,$height); 
    $color_ap=imagecolorallocate($boton,78, 84, 81); 
    $color_texto=imagecolorallocate($boton,218, 218, 218);
    ImageFill($boton,0,0,$color_ap);
    imagefilledrectangle($boton,$x1,$y1,$x2,$y2,$color_ap);
    imagestring($boton,3,25,5,"envio",$color_texto); 

    header("Content-type: image/jpeg"); 
    imageJpeg($boton); 
    imagedestroy($boton);
?>