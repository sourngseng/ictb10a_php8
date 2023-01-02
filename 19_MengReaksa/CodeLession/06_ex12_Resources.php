<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Resources </title>
</head>
<body>
    <?php 
    
        // Open a file for reading 
        $handle = fopen("note.txt", "r");
        var_dump($handle);
        echo " <br> ";

        // Connect to MySQL database server with default setting 
        // $link = mysqli_connect("localhost", "root", " ");
        // var_dump($link);
    
    ?>
</body>
</html>