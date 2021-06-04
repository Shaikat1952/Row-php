<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class students{
    public $name,$age;
    function __construct($x,$y){
        $this->name=$x;
        $this->age=$y;
    }
    function show(){
        echo "My name is:",$this->name,"\n","Age:",$this->age;
    }
}
$id1=new students("Shaikat",'20');
$id1->show();
    ?>
</body>
</html>