<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th,td{
            border: 1px solid;
        }
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <?php
    $results=["as"=>95,"mo"=>96,"ji"=>97,""=>98,"no"=>99];

    echo "<pre>";
    print_r($results);

    echo "<br>";
    echo "<table>";
    echo "<tr><th>name</th><th>score<th></tr>"; 

    foreach ($results as $name => $score) {
        echo "<tr><td>$name</td><td>$score</td></tr>";
    }
    echo"</table>";

    $maxscore=max($results);
    $stu=array_search($maxscore, $results);

    echo "$maxscore  is obtsained $stu";
    
    ?>
</body>
</html>