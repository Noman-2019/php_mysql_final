<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $students=[
        "Abdullah"=>"Cumilla",
        "Mohiuddin"=>"Madaripur",
        "Mahmudul"=>"Barisal",
        "Rakibulislam"=>"Dhaka",
        "Noman"=>"Chattogram"
    ];
       foreach ($students as $student => $dis) {
        echo "$student->$dis <br>";
       };
        ksort($students);
        echo "<hr>";
        foreach($students as $student=>$dis){
            echo "$student->$dis <br>";       }
            
?>
</body>
</html>