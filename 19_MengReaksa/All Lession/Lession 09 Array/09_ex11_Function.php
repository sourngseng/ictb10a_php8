<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Arry Merge Function </title>
</head>
<body>
    <?php

        // Sample1
        $array1 = array("red", "green", "blue", "black");
        $array2 = array("apple", "banana", "cat", "dog");

        // Merging the two indexed arrays 
        $result = array_merge($array1, $array2);
        print_r($result);

        // Sample2
        // $array3 = array("a" => "Apple", "b" => "Banana", "c" => "Cat");
        // $array4 = array("x" => "Xylophone", "y" => "Yacht", "z" => "Zebra");
        
        // // Merging the two saaociative arrays
        // $result1 = array_merge($array3, $array4);
        // print_r($result1);

        // // Sample3
        // $array5 = array(4, 6, 8, 10, 12);
        // $array6 = array("a" => "Apple", "b" => "Banana", "c" => "Cat", "d" => "Dog", "e" => "Egg");

        // // Merging two indexed arrays 
        // $result2 = array_merge($array5, $array6);
        // print_r($result2);
    
    ?>
</body>
</html>