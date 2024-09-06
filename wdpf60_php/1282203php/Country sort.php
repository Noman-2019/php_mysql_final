<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Country and capital where country wise sorting</h1>
    <?php
    $countries=[
       "Bnagladesh" =>"Dhaka",
       "SriLanka" =>"Colombo",
       "Uganda" =>"Kampala",
       "China" =>"Beijing",
        "Hungery"=>"Budapest",
        "Japan"=>"Tokyo"
    ];
    foreach($countries as $country=>$capital){
        echo "$country->$capital <br>";
    }
    ksort($countries);
    echo "<hr>";
    foreach($countries as $country=>$capital){
        echo "$country->$capital <br>";
    }
    ?>
</body>
</html>