<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h3>Class and method using get & set methods</h3>
    <?php
    class Employee{
        public $name;
        public $email;
        
        function set_name($name){
            $this->name=$name;
        }
        function get_name(){
            return $this->name;
        }
        function set_email($email){
            $this->email=$email;
        }
        function get_email(){
            return $this->email;
        }
    }
    $emp = new Employee();
    $emp->set_name('yashu');
    $emp->set_email('abc@gmail.com');
    echo "Employee Name: " . $emp->get_name();
    echo "<br>";
    echo "Email: " . $emp->get_email();
    ?>
</body>
</html>