<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>
<body>
    <h3>Inheritance</h3>
    <?php
    class Grocery{
        public $name;
        public $price;

        function __construct($name,$price){
            $this->name=$name;
            $this->price=$price;
        }
    }
    class Items extends Grocery{
        public $item = 12;
    }
    $groc = new Grocery("Vegitable","150");
    echo "Grocery name: " .$groc->name . "<br>";
    echo "Price:". $groc->price;
    ?>
</body>
</html>