<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replacing String in PHP</title>
</head>
<body>
   <?php
        $my_str = 'If the facts do not fit the theory, change the facts.';

        // Display replaced string
        echo str_replac("facts", "truth", $my_str);

        // Perform string replacement
        str_replace("facts", "truth", $my_str, $count);

        // Display number of replacements performed
        echo "The text was replaced $count times.";
   ?> 
</body>
</html>