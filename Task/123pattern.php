<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern</title>
</head>
<body>
    <h3>Pattern</h3>
    <?php
    $x=1;
for($i=1;$i<=5;$i++){
    for($j=1;$j<=$i;$j++){
        echo $x++;
    }
    echo "<br>";
}

    ?>
</body>
</html>