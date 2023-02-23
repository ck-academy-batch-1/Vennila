<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>prime number</h1>
    
    <?php
    for($n=2;$n<=100;$n++){
        for($m=2;$m<$n;$m++){
            if($n % $m ==0){
                break;
            }
        }
        if($m==$n){
            echo $n;
        }
    }
    ?>
</body>
</html>