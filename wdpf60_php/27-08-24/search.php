<?php $conn= new mysqli("localhost","root","","classicmodels")   ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>search products</h3>
    <form action="" method="get">
        <input type="text" name="term" id="" placeholder="search here">
    <input type="submit" value="SEARCH" name="search">
    </form>
    <?php  
    
    // extract($_GET);
    // echo $term;
    if (isset($_GET['search'])) {
        $term=$_GET['term'];
    $sql="SELECT productCode,productName,buyPrice FROM products WHERE productName LIKE '%$term%'";
    $row=$conn->query($sql);
    $result=$row->num_rows;
    echo "<h3>From the words $term ,here found $result records</h3>";
    while($re=$row->fetch_object()){
        echo "Product code :".$re->productCode."productname:".$re->productName."buyprice:".$re->buyPrice."<hr>";
    }




        
    }
    
    ?>
</body>
</html>