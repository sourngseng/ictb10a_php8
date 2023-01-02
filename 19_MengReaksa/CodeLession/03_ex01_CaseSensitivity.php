<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Simple PHP File </title>
</head>
<body>
    
    <h1>

        <?php
    
            // Assign value to variable

            $color = " blue ";

            // Try to print variable value

            echo " The color of the sky is " .$color . " <br> ";
            // echo " The color of the sky is " .$Color . " <br> ";
            // echo " The color of the sky is " .$COLOR . " <br> ";

            // The code in the lines 22 and 23 can't run beacuse the syntax was error

            echo gettype($color) . " <br> ";
            echo GETTYPE($color) . " <br> ";

            // The code in lines 27 and 28 show the word (sting)

        ?>

    </h1>

</body>
</html>