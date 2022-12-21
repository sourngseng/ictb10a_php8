<?php
    
    $txt = "Hello my name is Chha";
    $num = 123456;
    $colors = array ("Red","Green","Blue");
    echo "<h2 style='color: Blue'> Hello my name is Chha </h2>";


    echo $txt;
    echo "<br> $num";
    echo "<br>";
    echo $colors[1];
    echo "<br>";
    echo str_replace ("Chha","Chhay",$txt);
    echo "<br>";
    echo str_word_count ($txt);
    


?>
