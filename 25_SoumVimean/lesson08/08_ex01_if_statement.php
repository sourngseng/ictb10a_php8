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
        $d = "Fri";
    if($d=="Fri"){
    echo "Have a nice Weekend!"  ;
    }
        echo "<br>";
        $t = date("H");
    if($t<20){
    echo "Have a good day!";
}
?>

</body>
</html>