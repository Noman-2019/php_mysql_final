<?php
$str="Today is saturday";
echo $upper= strtoupper($str);
echo "uppercase :". $upper;  
echo"<hr>";
echo $lower= strtolower($str);
echo "uppercase :". $upper;
echo"<hr>";
echo $upercasef= ucfirst($str);
echo "uppercasefirst :". $upper;
echo"<hr>";
echo $uppercasew=ucwords($str);
echo "uppercaseword :". $upper;
echo"<hr>";
echo $lowercase=lcfirst($str);
echo "lcfirst :". $upper;

?>