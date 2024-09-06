<?php
$Divisions=[
    "Dhaka"=>array(
        "population"=>"10k",
        "Spot"=>"Buriganga",
        "Food"=>"kacchi"
    ),
    "Rajshahi"=>array(
        "population"=>"8k",
    "Spot"=>"mangofield",
    "Food"=>"mango"
),
    "Khulna"=>array(
        "population"=>"6k",
        "Spot"=>"sundarban",
        "Food"=>"Honey"
        )
    ];
    echo $Divisions["Khulna"]["Spot"];
    echo "<br>";
    echo $Divisions["Dhaka"]["Spot"];
    echo "<pre>";
    print_r($Divisions);

?>