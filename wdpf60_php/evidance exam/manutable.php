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
    $sql="SELECT* FROM manufacturer";
    $result=$db->query($sql);
    
    
    ?>

    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>address</th>
            <th>contact_no</th>
        </tr>
        <?php while ($row=$result->fetch_assoc()) { ?>
            
        
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><?php echo $row['contact_no'] ?></td>
        </tr>
        <?php }?>
    </table>
</body>
</html>