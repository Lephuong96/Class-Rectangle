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
            width: 30%;
            background-color: lavender;
            color: blue;
            font-size: 30px;
            margin: 0 auto;
            padding: 20px;

        }
        .value {
            padding: 10px;
            border: blue 8px;
        }
        .value h2{
            color: red;
        }
        .value input {
            height: 30px;
            padding: 2px;
        }

    </style>
</head>
<body>
<div class="content">
    <form method="post">
        <div class="value">
           <h2>Input Value</h2>
            Input width rectangle : <br>
            <input type="text" name="valueWidth" placeholder="width"/>
            <br>
            Input height rectangle : <br>
            <input type="text" name="valueHeight" placeholder="height"/>
            <br>
            <input type="submit" value="OK"/>
        </div>
    </form>
<?php
include "Rectangle.php";
$height = $_POST["valueHeight"];
$width = $_POST["valueWidth"];
$rectangle = new Rectangle($width, $height);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    echo "<br>Perimeter:" . $rectangle->getPerimeter();
    echo "<br>Area:" . $rectangle->getArea();
    echo("<br>Your Rectangle:" . $rectangle->display());
}
?>
</div>
</body>
</html>

