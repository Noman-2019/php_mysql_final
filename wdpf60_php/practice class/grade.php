<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="grade" id=""><br>
        <input type="submit" name="submit" value="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $grade=$_POST['grade'];
        $grad=strtoupper($grade);
        switch($grad){
            case "A":
                echo "excellent";
                break;
                case "B":
                    echo "Good";
                    break;
                    default:
                    echo "fail";
                    break;
        }

    }
    ?>
</body>
</html>