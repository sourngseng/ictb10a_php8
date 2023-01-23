<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Ascending Order by Value </title>
</head>
<body>
    <?php
    
        $age = array("Peter" => 20, "Elon Musk" => 51, "Harry" => 30);

        // Sorting array by value and print 
        asort($age);
        print_r($age);
    
    ?>
</body>
</html>