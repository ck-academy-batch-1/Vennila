<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date & Time</title>
    <style>
        h1{
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>Date and Time</h1>

    <h3>Day</h3>
    <?php
    echo "Today is ". date("l");
    ?>
    <h3>Date</h3>
    <?php
    echo "Today is " . date("Y/m/d") . "<br><br>";
    echo "Today is " . date("m.d.Y") . "<br><br>";
    echo "Today is " . date("d-m-Y") . "<br><br>";
    
    ?>
  <hr>
 <h3>Time zone</h3>
    <?php
    date_default_timezone_set("Asia/kolkata");
    echo "The Time is ".date("h:i:sa") . "<br><br>";
    echo "The Time is ".date("H:i:sa");
    ?>

  <hr>

  <h3>mk Time</h3>
    &copy; 2020-<?php echo date("Y");?>
    <?php
    $t=mktime(12,30,20,06,26,2023);
    echo "created date is". date("Y/m/d h:i:sa",$t);
    ?>
  <hr>

  <h3>strtotime</h3>
   <?php
   $d=strtotime("10:30am January 15 2023");
   echo "Created date is " . date("Y-m-d h:i:sa", $d);
   ?>
</body>
</html>