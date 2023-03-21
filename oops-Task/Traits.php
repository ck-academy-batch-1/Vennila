<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traits</title>
</head>
<body>
    <h3>Traits</h3>
    <?php
    trait Academy{
        public function msg1(){
            echo "Please";
        }
    }
    trait Details{
        public function msg2(){
            echo "Welcome to learn";
        }
    }
    class wel{
        use Academy,Details;
    }
    $ob = new Wel();
    $ob->msg1();
    $ob->msg2();
    ?>
</body>
</html>