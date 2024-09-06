<?php
 $foods = array("pasta", "steak", "fish", "potatoes","pizza","kebab","laddu");
 $food = preg_grep("/^p/", $foods);
 print_r($food);
//  first word check ("^","the letter" and end check "the word" and "$")
?>