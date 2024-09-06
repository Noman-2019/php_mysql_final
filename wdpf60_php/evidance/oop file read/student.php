<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <select name="stid">
        <option>Select one</option>
        <option value="1">saif</option>
        <option value="2">zamil</option>
        <option value="3">Tanim</option>
    </select>
    <input type="submit" name="submit" value="Show Result">
    </form>
    <?php
    if(isset($_REQUEST["submit"])){
        $stid = $_REQUEST['stid'];
        echo show_result($stid);
        }
        function show_result($stid){
            $datas=file('result.txt');
        // echo "<pre>";
        // print_r($data);
        foreach($datas as $data){
            $line=explode("|",$data);
            list($id,$name,$score,$result)=$line;
            if($id==$stid){
                return "ID : ".$id."<br>" .
                "Name: ".$name ."<br>" . 
                "Score: ".$score ."<br>" .
                "Result : ".$result;
                break;

            }

        }
        }

    
    ?>
</form>
</body>
</html>