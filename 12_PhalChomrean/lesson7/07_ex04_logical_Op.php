<?php 
    $yar=2014;
    echo "This is what we write in the function below.";
    echo "<br>";
    $t='$year';
    $txt="if(($t%400==0) || (($t%100!=0)&&($t%4==0))){ <br>
        echo '$t is a leap year.';<br>
    }else {<br>
        echo '$t is not a leap year.';<br>
    }
";
   echo "The value of $t=400";
   echo "<br>";
   echo "<br>";
   echo $txt;
   echo "<br>";
   echo "<br>";

      
    if(($yar%400==0) || (($yar%100!=0)&&($yar%4==0))){
        echo "$yar is a leap year.";
    }else {
        echo "$yar is not a leap year.";
    }


?>