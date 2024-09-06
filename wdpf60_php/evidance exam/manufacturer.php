<?php  
$db=new mysqli("localhost","root","","evi_exam");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    $sql="SELECT* FROM manufacturer";
    $result=$db->query($sql);
    
    
    ?>
    <form action="" method="post">
        <select name="mid" id="">
            <option value="">choose one</option>
            <?php  while ($row=$result->fetch_assoc()) { ?>
            <option value="<?php echo $row['id']?>"><?php echo $row['id']?><?php echo $row['name']?></option>    
            <?php }  ?>
            

        </select>
        <input type="submit" value="DELETE" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $st=$_POST['mid'];
        $sql2="DELETE FROM manufacturer WHERE id='$st'";
        $DELETE=$db->query($sql2);
        if ($DELETE) {
            echo "deleted";
            header("location:prodtable.php");
        }else {
            echo "failed";
        }
    }
    
    
    ?>
</body>
</html>