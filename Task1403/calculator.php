<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        Enter first no:<input name="num1">
        Enter Second no:<input name="num2"><br><br>
        <input type="submit" name="cal" value="add">
        <input type="submit" name="cal" value="subtract">
        <input type="submit" name="cal" value="multiply">
        <input type="submit" name="cal" value="divide">
    </form>
    
    
    <?php
    if(isset($_POST['cal'])){
        $n1=$_POST['num1'];
        $n2=$_POST['num2'];
        $operator=$_POST['cal'];
        if($operator == "add"){
            $res = $n1 + $n2;
        }elseif($operator == "subtract"){
            $res = $n1 - $n2;
            
        }elseif($operator == "multiply"){
            $res = $n1 * $n2;
            
        }elseif($operator == "divide"){
            $res = $n1 / $n2;
            
        }else{
            $res="Invalide";
            
            }
            echo "Result: $res";
        }
    ?>
</body>
</html>