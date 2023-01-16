<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Null Coalescing </title>
</head>
<body>
    <?php
    
        $name = isset($_GET['name']) ? $_GET['name'] : 'anonymous';

        $name = $_GET['name']?? 'anonymous';
    
    ?>
</body>
</html>