<?php
$fruits=array("apple","orange","banana");
echo "<pre>";
print_r ($fruits);
echo "<br>";
echo "Next:" .next($fruits);
echo "<br>";
echo "prev:".prev($fruits);
echo "<br>";
echo "End :".end($fruits);
echo "<br>";
echo "reset :".reset($fruits);
echo "<br>";
echo "current :".current($fruits);

?>