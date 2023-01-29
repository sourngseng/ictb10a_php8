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
        function getsum($num1, $num2){
            $total=$num1+$num2;
            return $total;
        }
        function getdivisor($num1,$num2){
            $total =$num1+$num2;
            return $total;

        }
       echo getsum(20,30);
       echo "<br>";
       echo getdivisor(33,33);

    ?>
   
</body>
</html>