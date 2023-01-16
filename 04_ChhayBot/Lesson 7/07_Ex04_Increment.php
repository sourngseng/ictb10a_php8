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
    echo ++$x; // Outputs: 11
    echo"<br>";
    echo $x; // Outputs: 11
    $x = 10;
    echo"<br>";

    echo $x++; // Outputs: 10
    echo"<br>";
    // $x=$x+1;
    echo $x; // Outputs: 11
    echo"<br>";

    $x = 10;
    echo --$x; // Outputs: 9
    echo"<br>";

    echo $x; // Outputs: 9
    echo"<br>";

    $x = 10;
    echo $x--; // Outputs: 10
    echo"<br>";

    echo $x; // Outputs: 9
?>
</body>
</html>