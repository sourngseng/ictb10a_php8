<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Association Array</title>
</head>
<body>
    <?php
    $ages = array(
    "Bot"=>22,
    "Heng"=>23,
    "Jork"=>24);    
 

      $ages ['BroBot']=56;
      $ages ['BroBut']=57;
      $ages ['BroBit']=58;
      foreach($ages as $x => $age) {
        echo "$x : $age <br>";
      }
?>

</form>
</body>
</html>