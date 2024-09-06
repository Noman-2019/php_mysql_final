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
<style>
    th,td{
        border: 1px solid;
        text-align: center;
    }
    table{
        border-collapse: collapse;
    }
</style>
<body>
    
<?php  
    $sql="SELECT* FROM price_above_5000";
    $result=$db->query($sql);
    
    
    ?>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>price</th>
            <th>manufacturer_id</th>
        </tr>
        <?php while ($row=$result->fetch_assoc()) { ?>
            
        
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['price'] ?></td>
            <td><?php echo $row['manufacturer_id'] ?></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>