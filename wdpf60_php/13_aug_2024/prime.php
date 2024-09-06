<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime</title>
    
</head>
<body>
    <form method="post">
        <input type="number" name="num" id="">
        <input type="submit" name="submit" value="show result">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $num=$_POST['num'];
        echo primecheck($num);
    }
    function primecheck($num){
        if($num==0){
            return $num. " and Blank is not allowed";
        }
        else if($num==1){
            return $num. " is not a prime number";
        }
        else if($num==2){
            return $num. " is a prime number";
        }
        else{
            for($i=2;$i<$num;$i++){
                if($num%$i==0){
                    return $num. " is not a prime number";
                } 
            }
            return $num. " is a prime number";
        }
    }
    ?>
</body>
</html>