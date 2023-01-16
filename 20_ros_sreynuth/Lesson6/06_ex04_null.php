<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Null Value in PHP8</title>
</head>
<body>
    <h2>Using NULL Value in PHP8</h2>

    <?php
        $a=NULL;
        var_dump($a);
        echo "<br>";

        $b="Hello World";
        $b=NULL;
        var_dump($b);
    ?>


<h2>Using Resource in PHP8</h2>
    <?php
        // Open a file for reading
        $handle = fopen("note.txt", "r");
        var_dump($handle);
        echo "<br>";
        // Connect to MySQL database server with default setting
        $link = mysqli_connect("localhost", "root", "");
        var_dump($link);
    ?>

</body>
</html