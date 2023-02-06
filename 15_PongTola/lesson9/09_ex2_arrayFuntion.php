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
        $subject=[
                    "1" =>"php",
                    "2" =>"html",
                    "3"=>"css",
                    "4"=>"javascrip"
                ];
            
            array_pop($subject);
            // var_dump($subject)
            //print_r($subject);
            echo "subject is:";
            for( $i=1; $i<=count($subject); $i++){
                echo $subject[$i];
                echo "  ";
            }
            


    ?>
</body>
</html>