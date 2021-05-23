<?php
class fruit{
    public $name;
    public $color;
    function Setname($x){
        $this->name=$x;
    }
    function Getname(){
        return $this->name;
    }
    function Setcolor($y){
        $this->color=$y;
    }
    function Getcolor(){
        return $this->color;
    }
}
$apple=new Fruit();
$apple->Setname("Apple");
$apple->Setcolor("RED");
echo $apple->Getname(),"\n";
echo $apple->Getcolor();
?>
