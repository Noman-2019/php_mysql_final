<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">    
<select name="category">
    <option >select one</option>
    <option value="news" >news</option>
    <option value="weather">weather</option>
    <option value="sports" >sports</option>
    </select>
<input type="submit" value="Submit">
</form>
<?php
$category = $_POST['category'];
// if(isset($_POST["submit"])== "$category"){
switch($category) {
case "news":
echo "What's happening around the world";
break;
case "weather":
echo "Your weekly forecast";
break;
case "sports":
echo "Latest sports highlights";
echo "From your favorite teams";
break;
default:
echo "Welcome to my web site";
}
?>

</body>
</html>


