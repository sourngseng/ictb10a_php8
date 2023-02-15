<?php
    // Creating Associative Array
    $ages=array(
        "Dara"=>12,
        "Nettra"=>20,
        "Bopha" =>23
    );

    foreach($ages as $key=>$age){
        echo "<h2>Now Key:$key and Value:$age</h2>";
    }

    $ages['Sourng']=30;
    $ages['Kanika']=7;

    echo "<br>";
    foreach($ages as $key=>$age){
        echo "<h2>Now Key:$key and Value:$age</h2>";
    }
?>