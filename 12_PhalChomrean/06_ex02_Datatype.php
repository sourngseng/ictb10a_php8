<?php   
    echo"<h2 style='color:blue'>III.Function to Count the Word in String Variable</h2>";
    echo"The Function for count the word in Php is <p style='color:red;'>\" str_word_count();\"</p>";
    $txt='echo str_word_count($name of variable);';
    echo"<p style='color:red;'>Example: $txt</p>";
    echo"<p>Now I am going to show how this function work.</p>";
    echo"<p>This sentence below is the string variable and I am going to count the word by using the function above.</p>";
    $txt1="<b>This is Mr Priestley, the techer. He teaches English and He knows English French and German,
     and he speaks and reads and writes these languages very well.</b>";
    echo $txt1;
    echo "<p>All of these are the words in the string variable.You can cout it if you not sure.</p>";
    echo str_word_count($txt1); 
    echo "<h2 style='color:blue;'>IV.Function for Replace the word.</h2>"; 
    echo "The Fuction for Replace the word in string Variable is: <p style='color:red;'>\" str_replace(); \"";
    $txt3='echo str_replace("word for replace","New word",$name of variable);';
    echo "<p style='color:red;'>Example: $txt3</p>";
    echo"<p>This sentence below is the string variable and I am going to change some of the words</p>";
    $txt4="<b>She is the most <mark>beautiful</mark> woman that <mark>I</mark> never seen in <mark>my</mark> life.</b>";
    echo $txt4;
    echo "<p>Now I am going to change the word \"beautiful\", \"I\" and \"my\" to \"Ugly\", \"He\" and \"his\".</p>";
    $txt4=str_replace("beautiful","Ugly",$txt4,);
    $txt4=str_replace("I","He",$txt4);
    $txt4=str_replace("my","his",$txt4);
    echo $txt4;
    echo "<h2 style='color:blue'>V.The Function for reverse</h2>";
    $txt5='echo strrev($name of variable);';
    echo "The Reverse Function is use for change all the words like it in the mirro. The Function is<p style='color:red;'> \"strrerv();\"</p>";
    echo"<p style='color:red;'>Example: $txt5";
    echo"<p>This sentence below is the string variable and I am going to reverse it</p>";
    $txt6="I never ever forget her.";
    echo $txt6;
    echo "<p>Now see it all Reverse</p>";
    echo strrev($txt6);
    echo "<br>";
    echo"<a href='05_ex01_Variable.php'>link to 05_ex01_Variable.php</a>"; echo "<br>";
    echo "<a href='06_ex01_Datatype.php'>link to 06_ex01_Datatype.php</a>"; echo "<br>";
    echo "<a href='06_ex02_Datatype.php'>link to 06_ex02_Datatype.php</a>"; echo "<br>";
?>