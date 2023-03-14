<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chess Board</title>
</head>

<body>
    <h1>Chess Board</h1>
    <table width="300px" cellspacing="0px" cellpadding="0px" border="1px">
    <?php
    for($row=1;$row<=8;$row++)
    {
        echo "<tr>";
        for($col=1;$col<=8;$col++)
        {
        $add = $row + $col;
        if($add % 2 == 0)
        {
        echo "<td height=40px width=40px bgcolor=white></td>";
        }
        else
        {
        echo "<td height=40px width=40px bgcolor=black></td>";
        }
        }
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>