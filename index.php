<?php
include "Rectangle.php";
$width  = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);

//echo $rectangle->width; //  10
//echo $rectangle->height; //  20

$rectangle->height = 40;
$rectangle->width = 20;

//echo $rectangle->height; //  30
//echo $rectangle->width; //  20

echo ( "<br>Perimeter:".$rectangle->getPerimeter()); //  100
echo ( "<br>Area:".$rectangle->getArea()); //  600

echo ( "<br>Your Rectangle". $rectangle->display());
