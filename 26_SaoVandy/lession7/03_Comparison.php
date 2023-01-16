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
           $x = 25;
           $y = 35;
           $z = "25";
           var_dump($x== $z); // outputs : boolean true
           var_dump($x=== $z); // outputs : boolean false
           var_dump($x!= $z); // outputs : boolean true
           var_dump($x!== $z); // outputs : boolean true
           var_dump($x< $y); // outputs : boolean true
           var_dump($x> $y); // outputs : boolean false
           var_dump($x<= $y); // outputs : boolean true
           var_dump($x>= $y); // outputs : boolean false
           ?>                   
</body>
</html>