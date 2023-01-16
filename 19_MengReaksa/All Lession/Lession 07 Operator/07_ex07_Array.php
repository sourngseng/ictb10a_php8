<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Array </title>
</head>
<body>
    <?php
    
        $x = array("a" => "Red", "b" => "Green", "c" => "Blue");
        $y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");

        // Union of $x and $y 
        $z = $x + $y;
        var_dump($z);
        print " <br> ";

        var_dump($x == $y);
        print " <br> ";

        var_dump($x === $y);
        print " <br> ";

        var_dump($x != $y);
        print " <br> ";

        var_dump($x <> $y);
        print " <br> ";

        var_dump($x !== $y);
    
    ?>
</body>
</html>