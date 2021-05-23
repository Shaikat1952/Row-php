<?php
class Cars{
    public $CarsName;
    public $CarsColor;

    function SetCarsName($x){
        $this->CarsName=$x;
    }
    function SetCarsColor($y){
        $this->CarsColor=$y;
    }
    function GetCarsName(){
        return $this->CarsName;
    }
    function GetCarsColor(){
        return $this->CarsColor;

    }

}
$CarsOne=new Cars();
$CarsOne->SetCarsName("BMW");
$CarsOne->SetCarsColor("Black");
$CarsTwo=new Cars();
$CarsTwo->SetCarsName("SUZUKI");
$CarsTwo->SetCarsColor("RED");
echo"Cars one's Name=",$CarsOne->GetCarsName()," ";
echo"Color=",$CarsOne->GetCarsColor(),"\n";
echo"Cars two's name=",$CarsTwo->GetCarsName()," ";
echo"Color=",$CarsTwo->GetCarsColor();

?>