<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    $x = 10;
    $y = 4;
    
    echo("Result of $x + $y =" . $x + $y); // 0utputs: 14
    echo "<br>";
    
    echo("Result of $x - $y =" .$x - $y); // 0utputs: 6
    echo "<br>";
    
    echo("Result of $x x $y =" .$x * $y); // 0utputs: 40
    echo "<br>";
    
    echo("Result of $x / $y =" . $x / $y); // 0utputs: 2.5
    echo "<br>";
    
    echo("Result of $x % $y =" .$x % $y); // 0utputs: 2
    
    $result=2*($x+$y)/3;
    echo "<br>";
    
     echo("កន្សោមប្រមាណវិធី =" .$result); // 0utputs: 9.3333333333333
    
    ?>
</body>
</html>