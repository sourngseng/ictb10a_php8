<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Comparison </title>
</head>
<body>
    <?php

        $x = 25;
        $y = 35;
        $z = " 25 ";
        var_dump($x == $z);
        print " <br> ";

        var_dump($x === $z);
        print " <br> ";
        
        var_dump($x != $y);
        print " <br> ";

        var_dump($x !== $z);
        print " <br> ";

        var_dump($x < $y);
        print " <br> ";

        var_dump($x < $y);
        print " <br> ";

        var_dump($x <= $y);
        print " <br> ";

        var_dump($x >= $y);

    ?>
</body>
</html>