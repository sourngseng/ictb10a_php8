<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Array Change Key CaseFunction </title>
</head>
<body>
    <?php
    
        $persons = array ("Harry" => 22, "Clark" => 32, "John" => 28);

        // Changing keys to Lowercase 
        print_r(array_change_key_case($persons));
    
    ?>
</body>
</html>