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
    
        $alphabets = array("a" => "appple", "b" => "bananas", "c" => "cat", "d" => "dog");

        // Split alphabets array into chunks 
        print_r (array_chunk($alphabets, 2, true));
    
    ?>
</body>
</html>