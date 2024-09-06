<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php $result=[
    "jamid"=>99,"jahid"=>90,"jahid"=>91,"jasid"=>92,"jakid"=>95];
   
   ?>
   <table border="1" style="border-collapse:collapse" >
    <tr>
      <th>name</th>
    <th>score</th>
    </tr>      
    <?php
      foreach ($result as $name => $score) {?>
        <tr
        <td><?php echo $name?></td>
         <td><?php echo $score?></td>
      </tr>
      <?php } ?>
      <tr>
      <td>maximum score</td>
      <td colspan="2">
        <?php $maxscore=max($result);
        $students=array_search($maxscore,$result);
        echo "$maxscore.got by.$students"; 
        ?>
      </td>
    </tr>
   </table>
</body>
</html>