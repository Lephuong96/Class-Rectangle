<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Class Rectangle</title>
    <style type="text/css">
        .content {
            width: 100%;
            color: blue;
            font-size: 30px;
        }
    </style>
</head>
<body>
<div class="content">
<?php
include "Rectangle.php";
$width  = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);

echo "Width Rectangle:" .$rectangle->width. "<br>";
echo "Height Rectangle:" .$rectangle->height;
echo "<br>Perimeter:".$rectangle->getPerimeter();
echo "<br>Area:".$rectangle->getArea();
echo ("<br>Your Rectangle:". $rectangle->display());
?>
</div>
</body>
</html>
