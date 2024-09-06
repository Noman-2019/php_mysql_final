<?php
class Employee
{
 public $name;
 public function __set($propName, $propValue)
 {
 $this->$propName = $propValue;
 }
}
$emp1=new Employee;
echo $emp1->name= "Abdullah Al Noman"."<br>";
echo $emp1->phone ="01320587814"
?>