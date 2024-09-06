<?php 
$db= new mysqli("localhost","root","","tclk_wdpf_60");
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
    if (isset($_POST['submit'])) {
        $man=$_POST['manu'];
        $sql2="DELETE FROM manufacturer WHERE id='$man'";
       $Delete=$db->query($sql2);
      
       if($Delete){
        echo "deleted";
       }
       else{
        echo "failed";
       }
    }
    
    $sql="SELECT *FROM manufacturer";
    $my=$db->query($sql);
    ?>
    
    <form action="" method="post">
        <select name="manu" id="">
        <option value="">choose one</option>
       <?php while ($row=$my->fetch_assoc()){   ?>     
        <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
    
       <?php } ?>
    </select>
    <input type="submit" value="DELETE" name="submit">
    </form><br>
    <a href="product.php">product list</a>

</body>
</html>