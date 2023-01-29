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
        function customfont($font, $size=5){
            echo " <p style=\"font-family: $font; font-size: {$size}em;\"> hello cambodia </p> ";

        }
        function customfont1($font, $size=3){
            echo "<p style=\"font-family: $font; font-size: {$size}em\">my nametola</p>";
        }
        function customcolor($col , $bg=red){
            echo "<p style=\"color: $col; background-color: $bg \">l live in cambodia</p>";
        }

        customfont("arial");
        customfont1("courier",2);
        customcolor("red","blue");

    ?>
   
</body>
</html>