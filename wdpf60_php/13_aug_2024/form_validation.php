<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validation</title>
    <style>
.green{
    color: green;
}
.red{
    color: red;
}
    </style>
</head>
<body>
    <?php
    if (isset($_REQUEST["submit"])) {
        $msg=form_validation();
        if($msg){
            echo "<ul>";
            foreach ($msg as $m) {
                echo "<li>$m</li>";
            }
            echo "</ul>";
        }else{
            echo "<h1 class=green>Registration Successfull</h1>";
        }
    }
    function form_validation(){
        $errors=[];
        $fullname=$_REQUEST['fullname'];
        
        
        $District=$_REQUEST['dis'];

       
        $Adres=$_REQUEST['address'];
        if($fullname==""){
            $errors[]="<h1 class=red>you must enter fullname</h1>";
            //gender
        // }if (isset($_REQUEST['gender'])) {
        //     $Gender=$_REQUEST['gender'];    
        // else {
        //     if (empty($Gender)) {
        //         $error[]="you must select GENDER";
        //     }
            
        // }
        }if($District==""){
            $errors[]="<h1 class=red>please select District</h1>";
        }
        
        
        
        
        if($Adres==""){
            $errors[]="<h1 class=red>please enter Address</h1>";
        }
        $hobbies=$_REQUEST['hobbies'];
        if(empty($hobbies)){
            $errors[]="<h1 class=red>please select at least one hobby</h1>";
        }
        return $errors;
    }
    
    ?>
    <h1>Registration form </h1>
    
    <form action="" method="post" style="width: fit-content;">
    <fieldset>
            <legend><b>Enter Information to Register</b></legend>
            Name <br>
            <input type="text" name="fullname" placeholder="Enter your name"><br>
            Gender <br>
            <input type="radio" name="gender" value="male" checked>Male
            <input type="radio" name="gender" value="female">Female <br>
            District <br>
            <select name="dis" id="">
                <option value="">select one</option>
                <option value="Dhaka">Dhaka</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Khulna">Khulna</option>
                <option value="Pabna">Pabna</option>
                <option value="Golapalganj">Gopalganj</option>
            </select><br>
            Hobbies <br>
            <input type="checkbox" name="hobbies[]" value="Cricket" checked>Cricket
            <input type="checkbox" name="hobbies[]" value="Football">Football
            <input type="checkbox" name="hobbies[]" value="Hockey">Hockey
            <input type="checkbox" name="hobbies[]" value="Tennis">Tennis<br>
            Address <br>
            <textarea name="address" placeholder="Enter Address"></textarea><br>
            <input type="submit" name="submit" value="REGISTER">
        </fieldset>
    </form>
</body>
</html>