<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Destructor</h3>
    <?php
    class Product{
        public $name;
        public $type;
        
        function __construct($name,$type){
            $this->name=$name;
            $this->type=$type;
        }
        function __destruct(){
            echo "Product Name {$this->name} and Type {$this->type}";
        }
    }
    $pro = new Product("Laptop","HP");
    ?>
</body>
</html>