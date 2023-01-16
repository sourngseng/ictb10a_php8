<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <?php 
    $x = 25;
    $y = 35;
    $z = "25";
     var_dump ($x == $z);
     var_dump($x ===$z);
     var_dump($x != $y);
     var_dump($x !==$z);
     var_dump($x < $y);
     var_dump($x > $y);
     var_dump($x <=$y);
     var_dump($x >=$y);
    ?>
    </body>
</html>