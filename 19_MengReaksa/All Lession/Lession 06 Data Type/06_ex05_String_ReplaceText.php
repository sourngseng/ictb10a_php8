<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP String </title>
</head>
<body>

    <?php 
        
        // Replacing text with strings 
        $my_str = ' If the facts do not fit the theory, change the facts. ';

        // Perform string replacment 
        str_replace(" facts ", " truth ", $my_str, $count);

        // Display number of replacments performed 
        echo " The text was replaced $count times. ";
        echo " <br> ";

    ?>

</body>
</html>