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
    
        $array1 = array("red", "green", "blue", "black");
        $array2 = array("apple", "banana", "cat", "dog");

        // Merging the two indexed arrays 
        $result = array_merge($array1, $array2);
        print_r($result);
    
    ?>
</body>
</html>