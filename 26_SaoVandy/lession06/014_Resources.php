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
         //
         open a file for reading 
         $handle = fopen("note.txt","r");
         var_dump($handle);
         echo "<br>";
         // Connect to mySQL database server with default setting 
         var_dump($link);
         ?>                     
</body>
</html>