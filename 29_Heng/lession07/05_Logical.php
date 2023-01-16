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
     $year = 2014;
     // leap years are divisible by 400 or by 4 but not 100
     if (($year % 400 == 0) || (( $year % 100 != 0) && ($year % 4 == 0))){
        echo "$year is a leap year .";
     }else{
        echo "$year is not a leap year.";
     }
    ?>
</body>
</html>