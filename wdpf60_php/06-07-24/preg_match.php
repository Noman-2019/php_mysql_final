<?php
$line = "vimbar is the greatest word processor ever created! Oh vima, how I 
love thee!";
 if (preg_match("/Vim/i", $line, $match))
  print "Match found!";
 
    print_r($match);
?>