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
   // Comparing Integers
   echo 1 <=> 1;
   echo 1 <=> 2;
   echo 2 <=> 1;

   // Comparing Floats
   echo 1.5 <=> 1.5;
   echo 1.5 <=> 2.5;
   echo 2.5 <=> 1.5;

   // Comparing Strings
   echo "x" <=> "x";
   echo "x" <=> "y";
   echo "y" <=> "x";
   ?> 
</body>
</html>