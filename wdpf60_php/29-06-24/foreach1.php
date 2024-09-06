<?php
$customers = array();
$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
$customers[] = array("Jesse James", "jesse@example.net", "818-999-9999");
$customers[] = array("Donald Duck", "donald@example.org", "212-999-9999");


foreach($customers as $customer) {

foreach($customer as $item) {
    echo $item." ";
 
}
echo "<br>";
}
?>

<?php

$customers = array();
$customers[] = array("Jason Gilmore", "jason@example.com", "614-999-9999");
$customers[] = array("Jesse James", "jesse@example.net", "818-999-9999");
$customers[] = array("Donald Duck", "donald@example.org", "212-999-9999");

foreach($customers as $customer) {
list($name,$email,$phone)= $customer;
echo "<hr>";
echo "name:$name email : $email phone: $phone";
echo "<hr>";
}
?>