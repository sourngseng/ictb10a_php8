<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Object </title>
</head>
<body>
    <?php 
    
    // Class definition 
    class greeting {
        // Properties 
        public $str = " Hello World! ";

        // Methods 
        function show_greeting(){
            return $this->str;
        }
    }

    // Create Object form class 
    $message = New greeting;
    var_dump($message);
    
    ?>
</body>
</html>