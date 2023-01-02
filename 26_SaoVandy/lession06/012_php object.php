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
          // Class definition
          class greeting{
            public $str = "Hello World!";
            // methode
           function show_greeting (){
                              return $this->str;
                          }
           }
           //  Create object from class 
           $message = new greeting ;
           var_dump($message);
       ?>            
</body>
</html>