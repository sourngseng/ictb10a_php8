<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
    <?php
       $my_str ='world';
       echo "Hello ,$my_str!<br>";  // Displays : Hello world
       echo "Hello ,$my_str!<br>";  // Displays : Hello,  $my_str!
       echo 'Hello t\world!</pre>'; // Displays: Hello \t world!
       echo "Hello t\world!</pre>"; // Displays : Hello,  world!
       echo 'I\`ll be back';        // Displays : I\ll be back
    ?>             
</body>
</html>