<?php 
    echo "<h1 style='color:purple;'>These are All the Datatypes in Php</h1>";
    $var = array("String","Integer","Float","Boolean","Array","Object","NULL","Resource");
    echo"<h2 style='color:blue;'>I.Datatype and How to check the Datatype</h2>";
    echo"<p style='text-indent:20px;'>Data type in Php has 8 datatypes.There are:"; 
    echo "<pre style='color:red;'><b>
    -$var[0]  -$var[1]  -$var[2]  -$var[3]
    
    -$var[4]   -$var[5]   -$var[6]   -$var[7]
    </b></pre>"; 
    echo"<p style='text-indent:20px;'>This is how we check the variable about what kind of datatype it is.</p>";
    echo"We need to use this function :<p style='color:red;'> \" var_dump ()\";</p>";
    $txt='$num=123';
    $txt1='var_dump($num);';
    echo"<p style='color:red,text-indent:20px;'>Example: $txt than we write $txt1</p>";
    echo"<p>And you will see like this on the website.</p>"; 
    $num=123;
    var_dump($num);
    echo"<h2 style='color:blue;'>II.How to calulate the character inside the string</h2>";
    echo"<p style='text-indent:20px'>In Php there is a function that you can calulate the character of Variable.The function is <p style='color:red;'>\" strlen(); \".</p>";
    $txt4='echo strlen($name of variable);';
    echo"<p style='color:red;'>Example: $txt4</p>";
    echo"<p style='text-indent:20px'>This is the sentence in the string variable. So I am going to calulate it by using the function above.</p>";
    $txt3="<b>Look at the picture on page 43 there is a picture of the farm. The farm is in the country it is not in the town.</b>";
    echo $txt3;
    echo"<br>";
    echo"<p style='text-indent:20px;'>This is all the characters of the string variable if you not sure about it you can count it by yourself.</p>";
    echo strlen($txt3);
?>