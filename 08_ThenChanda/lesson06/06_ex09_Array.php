<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array in PHP</title>
</head>
<body>
    <?php
        $colors = array("Red", "Green", "Blue", "Black", "Pink");
        var_dump($colors);
        echo "<br>";

        $color_codes = array(
            "Red" => "#ff0000",
            "Green" => "#00ff00",
            "Blue" => "#0000ff"
        );
        var_dump ($color_codes);
    ?>
</body>
</html>