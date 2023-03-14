<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape</title>
</head>
<body>
    <h3>Rectangle</h3>
    <?php
    class Rectangle{
    private $length;
    private $width;
    function __construct($length,$width){
        $this->length=$length;
        $this->width=$width;
    }
        function get_area(){
            return $this->length * $this->width;
            }
        }
        $rect = new Rectangle(4,3);
       echo "Area of Rectangle: ". $rect->get_area();
    ?>
   
   <h3>Triangle</h3>
   <?php
    class Triangle{
    private $base;
    private $height;
    function __construct($base,$height){
        $this->base=$base;
        $this->height=$height;
    }
        function get_area(){
            return 0.5 * $this->base * $this->height;
            }
        }
        $trian = new triangle(10,3);
       echo "Area of Triangle: ". $trian->get_area();
    ?>

   
<h3>Square</h3>
   <?php
   class Square{
    private $side;
    function __construct($side){
        $this->side=$side;
        }
        function get_area(){
            return $this->side * $this->side;
            }
        }
        $sqr = new Square(4,4);
       echo "Area of Square: ". $sqr->get_area();
    ?>
   

<h3>Circle</h3>
   <?php
   function circle($diameter,$pi){
    $area = $diameter * $pi;
    echo "Area of circle: " . $diameter ." ". "and"." ". $pi ." ". "is" ." ". $area;
   }
   circle(4.0,3.14);
   ?>
</body>
</html>