<?php
    $x = array("a" => "Red", "b"=>"Green" ,"c" =>"Blue");
    $y = array("u"=>"yellow","v"=>"Orange","w" =>"Pink");
    $z =$x +$y; // Union of $x and $y
    var_dump( $z); // outputs : boolean true
    var_dump($x== $y); // outputs : boolean false
    var_dump($x=== $y); // outputs : boolean false
    var_dump($x!= $y); // outputs : boolean true
    var_dump($x<> $y); // outputs : boolean true
    var_dump($x!== $y); // outputs : boolean true
?>         