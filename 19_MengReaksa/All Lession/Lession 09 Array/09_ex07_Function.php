<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Array Chunk Function </title>
</head>
<body>
    <?php
    
        $colors = array("red", "green", "blue", "orange", "yellow", "black");

        // Split colors array into chunks 
        print_r(array_chunk($colors, 2));
    
    ?>
</body>
</html>