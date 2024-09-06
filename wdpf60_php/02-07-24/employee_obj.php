<?php
class Employee {
    
    public function setname($name){
        $this->name=$name;
    }
    public function setwage($wage){
        $this->wage=$wage;
    }
    public function info(){
        $full="";
       $full.="Name :".$this->name;
       $full.="age :".$this->age;
       $full.="address :".$this->address;
       $full="salary:".$this->wage;
       return $full;
    }//end of class
}
    class programmer extends Employee{
       public $wage=10000;
        public function bonus($percent){
           return $this->wage*$percent;
        }
    }


    $obj1 = new Employee;
    //  $obj1->name="Rahmat" ."<br>";
    $obj1->setname("Arif");
    $obj1->setwage("5000");
     $obj1->age=20;
     $obj1->address= "Mirpur";
    //  $obj1->phone= "01320587814";

     echo $obj1->info();
    echo "<br>";
     $prog1=new programmer;
    echo "bonus:".$prog1->bonus(.10);




?>