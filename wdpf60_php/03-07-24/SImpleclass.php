<?php
class SimpleClass
{
    public $var = 'a default value<br>'; // public property declaration
    public const a="America<br>"; // private constant Declaration
 
    // public method declaration
    public function displayVar() {
        echo $this->var."<br>";
    }
    public static function displayConst() {
        echo self::a;
    }
}
$obj1 = new SimpleClass;
echo $obj1->var;
echo $obj1::a; //scope resolution
$obj1->displayVar();
$obj1->displayConst();
?>