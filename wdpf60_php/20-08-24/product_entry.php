<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product entry</title>
</head>
<body>
    <h3>Product Entry</h3>
    <?php 
    if (isset($_POST['submit'])) {
        extract($_POST);
        $sql="INSERT INTO product (id,product_name,product_details,product_price,product_quantity) VALUES (NULL,'$pn','$pd','$price','$quan')";

        require_once"dbconfig.php";
        $result=$db->query($sql);
        // echo $db->affected_rows;
        if($db->affected_rows){
                echo "successfully added";
        }else{
            echo "failed";
        }


    }
    
    ?>
    <form action="" method="post" style="width: fit-content;">
        <fieldset>
            <legend>product Entry</legend>
     Product Name: <br><br>  <input type="text" name="pn" id="" placeholder="Enter Product Name"><br><br>
    Product Details:    <br><br><textarea name="pd" id="" placeholder="Enter Product Details"></textarea><br><br>
   Product Price: <br><br><input type="text" name="price" id="" placeholder="Enter Product Price"><br><br>
    Product Quantity: <br><br><input type="text" name="quan" id="" placeholder="Enter product Quantity"><br><br>
    <input type="submit" value="submit" name="submit">

    </fieldset>

    </form>

    <a href="allproduct.php">product list</a>

</body>
</html>