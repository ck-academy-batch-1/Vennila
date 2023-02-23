<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap year</title>
</head>
<body>
    <h1>Leap Year</h1>
    <?php
    
    
    for($year=2023;$year<2040;$year++){
        if($year%4==0){
            echo "$year:Leap year<br>";
        }
        else{
            echo "$year:Not leap year<br>";
        
        }
    }
    ?>
<br><br><br>

    <?php
    /*
    $yr=2024;
    if((0==$yr % 4)&(0!=$yr % 100)|(0==$yr % 400)){
        echo "$yr is a leap year";
    }
    else{
        echo "$yr not a leap year";
    }
    */
    ?>
</body>
</html>