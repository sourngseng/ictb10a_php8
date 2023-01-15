<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Arry Combine Function </title>
</head>
<body>
    <?php
    
        $array1 = array("a", "b", "c", "d");
        $array2 = array("apple", "banana", "cat", "dog");

        // Combining both arrays 
        print_r(array_combine($array1, $array2));
    
    ?>
</body>
</html>