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
        $subject=["php","html","css","javascrip"];
            
             array_pop($subject);
            // var_dump($subject);
            //print_r($subject);
            echo "subject is:";
            for( $i=0; $i<=2; $i++){
                echo $subject[$i];
                echo "  ";
            }
            


    ?>
</body>
</html>