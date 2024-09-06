<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="grade" id="">
    <input type="submit" value="check" name="submit">

    </form>
    <?php
    if (isset($_POST['submit'])) {
        $grade=$_POST['grade'];
        $grad=strtoupper($grade);
        if($grad=="A"){
            echo "ex";
        }
        else if ($grad=="B") {
            echo "good";
        }
        else if($grad=="C"){
            echo "fair";
        }else if($grad=="D"){
                echo "poor";
            }
        else if($grad=="F"){
                echo "failed";
            }
        }
    
    
    ?>
</body>
</html>