<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    
<body>
    <style>
        span{
            color :red;
        }
    </style>
<?php
    $x = "Hello";
    $y = "  Hi World!";
    $z = "My World is Mine Except for you";
    echo $x . $y; // លទ្ធផលបាន: Hello World!
    echo"<br>";
    $x .= $y;
    echo $x;
    echo $y; 
    echo "<br>";// លទ្ធផលបាន: Hello World!
    echo $x.=$y;
    echo"<br>";
    // <span> echo $z</span>
   
  

   
?>
</body>
</html>
