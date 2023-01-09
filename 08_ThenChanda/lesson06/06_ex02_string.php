<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String</title>
</head>
<body>
    <?php
        $a = 'Hello World';
        echo $a;
        echo "<br>";

        $b = "Hello World";
        echo $b;
        echo "<br>";

        $c = 'Stay here, I\'ll be back.';
        echo $c;

        $my_str = 'World'; 
        echo "Hello, $my_str!<br>"; // Display: Hello,World!
        echo 'Hello, $my_str!<br>'; // Display: Hello, $my_str!

        echo '<pre>Hello\tWorld.!!</pre>'; // Display: Hello\t<tWorld.!!
        echo "<pre>Hello\tWorld..!</pre>"; // Display: Hello    World..!
        echo 'I\'ll be back'; // Display: I'll be back
    ?>
</body>
</html>