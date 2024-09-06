<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student result sheet</title>
</head>
<body>
<?php
    $result=[
        "saif"=>50,"nazrul"=>42,"rummana"=>49,"Tanim"=>41
    ];
     


?>
<table border="1" style="border-collapse: collapse;">
    <tr>
        <th>student name</th>
        <th>obtained score</th>
    </tr>

<?php
foreach ($result as $name => $score) {?>
     <tr>
     <td><?php echo $name?></td>
     <td><?php echo $score?></td>
     </tr>
<?php }
?>
<tr><td><b>Maximum score</b></td>
<td colspan="2">
    <?php $maxscore =max($result);
    $student=array_search($maxscore,$result);
    echo "<b>Maximum score $maxscore obtained by $student</b>";

?>
</td>
</tr>
</table> 
</body>
</html>