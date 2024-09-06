<?php
require_once "dbconfig.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALl products</title>
</head>
<body>
    <h3>product list</h3>
    <?php
    $sql="SELECT * FROM  product";

    $data = $db->query($sql);?>
    <table border="1" style="border-collapse:collapse; width: 100px;">
    <tr>
        <th>ID</th>
        <th>product Name</th>
        <th>product details</th>
        <th>product price</th>
        <th>product quantity</th>
        <th>Action</th>
    </tr>
    
<?php
    // echo "<pre>";
    // print_r($row);
    while ($row = $data->fetch_assoc()) {?>
        
            <tr>
                <td><?php echo $row['id']?></td>
                <td><?php echo $row['product_name']?></td>
                <td><?php echo $row['product_details']?></td>
                <td><?php echo $row['product_price']?></td>
                <td><?php echo $row['product_quantity']?></td>
                <td><a onclick="return confirm('Are you sure to delete')" href="product_delete.php?id=<?php echo $row['id']?>"><img src="Recycle.png" width="20"></a></td>
            </tr>
  
  
  
  <?php
    }
    
    ?>
    </table>
    <br>
    <a href="product_entry.php">New product</a>
</body>
</html>