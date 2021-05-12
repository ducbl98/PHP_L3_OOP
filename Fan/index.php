<?php
include_once "Fan.php";
$fan1 = new Fan();
$fan2 = new Fan();
$fan1->setSpeed(Fan::FAST);
$fan1->setOn(true);
$fan1->setRadius(10);
$fan1->setColor('yellow');
$fan2->setSpeed(Fan::MEDIUM);
echo $fan1->toString();
echo "<br>".$fan2->toString();