<?php
include_once "Rectangle.php";

$width  = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
echo $rectangle->getWidth(); // 0utput: 10
echo $rectangle->getHeight(); // 0utput: 20

$rectangle->setHeight(30);
$rectangle->setWidth(20);

echo $rectangle->getHeight(); // 0utput: 30
echo $rectangle->getWidth(); // 0utput: 20
echo $rectangle->getPerimeter(); // 0utput: 100
echo $rectangle->getArea(); // Output: 600
echo ("Your Rectangle". $rectangle->display());