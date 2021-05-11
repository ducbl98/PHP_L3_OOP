<?php
include_once "QuadraticEquation.php";
if($_SERVER['REQUEST_METHOD']=='GET'){
    $a=(int)$_GET['a'];
    $b=(int)$_GET['b'];
    $c=(int)$_GET['c'];
    $equation=new QuadraticEquation($a,$b,$c);
    try {
        if($equation->getDiscriminant()<0){
            echo "The equation has no real roots ";
        }elseif ($equation->getDiscriminant()==0){
            echo "The equation has double root is ".$equation->getDoubleRoot();
        }else{
            echo "The Equation has two roots are ".$equation->getRoot1()." and ".$equation->getRoot2();
        }
    }catch (Exception $e){
        echo "Error : ".$e->getMessage();
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quadratic Equation</title>
</head>
<body>
<h2>Quadratic Equation </h2>
<form method="get">
    <input type="number" name="a" size="5" placeholder="Input a">
    <input type="number" name="b" size="5" placeholder="Input b">
    <input type="number" name="c" size="5" placeholder="Input c"><br>
    <input type="submit" value="Calculate">
</form>
</body>
</html>
