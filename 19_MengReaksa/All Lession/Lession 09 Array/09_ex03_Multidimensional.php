<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Multidimensional </title>
</head>
<body>
    <?php
    
        // Define a Multidimensional array 
        $contacts = array(
            array(
                "name" => "Peter Parker",
                "email" => "peterparker@gamil.com"
            ),
            array(
                "name" => "Thoni Stark",
                "email" => "thonistark@gamil.com"
            ),
            array(
                "name" => "Doctor Strange",
                "email" => "doctorstrange@gamil.com"
            )
        );
        // Access nested value 
        echo "Thoni Stark's Email-id is: " .$contacts[1]["email"];
    
    ?>
</body>
</html>