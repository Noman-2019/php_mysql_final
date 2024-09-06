<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" style="width: fit-content;" >
        <fieldset>
            <legend>primenumber</legend>
            <input type="number" name="number">
            <input type="submit" value="submit" name="submit">
        </fieldset>
    </form>
    <?php
    
    if(isset($_POST["submit"])){
        // echo $_POST['number'];
        $num=$_POST['number'];
        echo myfuction($num);
    }
        function myfuction($num){
            if($num==0){
                return $num ." and blank is not allowed";
            }
            else if($num==1){
            return $num . " is not a prime number";
        }
    else if($num==2){
        return $num . " is a prime number";
    }else{for($i=2;$i<$num;$i++){
        if($num%$i==0){
            return $num . " is not a prime number";
    }
}
    return $num . " is a prime number";

}

}


?>
</body>
</html>