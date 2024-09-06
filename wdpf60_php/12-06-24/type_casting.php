<?php
    $x=50;
   $output=(float)$x;
    var_dump($output);

    echo gettype($output);

    echo"<br>";

    $number = 50.45;
    $output=(int)$number;
    echo $output;

    echo"<br>";

    $name =(bool) "Rahim";
    echo $name;
    echo "<br>";
    
    $score = 1114;
    $scoreboard = (array) $score;
    echo $scoreboard[0]; // Outputs 1114    
    var_dump($scoreboard);

    echo "<br>";

    $model = "Toyota";
    $obj = (object) $model;
    print_r($obj);
    print $obj->scalar; // returns "Toyota"

?>