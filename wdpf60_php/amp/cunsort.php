<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $counries=[
    "Banglasdesh"=>"Dhaka",
    "Nepal"=>"kathmadu",
    "India"=>"New_delhi",
    "USA"=>"Washington",
    "China"=>"Beijing"
];
    
    foreach ($counries as $countr => $capital) {
        echo "$countr=>$capital <br>";
    }

    ksort($counries);
    echo "<hr>";
    foreach ($counries as $countr => $capital) {
        echo "$countr=>$capital <br>";
    }

    
    
    
    ?>
</body>
</html>