<?php
   $tex ="hello world";
   $num="123456789";
   $color = array("red", "green", "blue");

  //dislay 
  echo "<h1 style='color:red ; bg-color:red'>$tex</h1>";
  echo "<br>";
  echo str_replace("hello","hi", $tex);
  echo "<br>";
  echo str_word_count($tex);
  echo "<br>";
  echo strlen($tex);
  echo "<br>";
  echo ($num);
  echo "<br>";
  echo strtoupper($color[1]);
?>