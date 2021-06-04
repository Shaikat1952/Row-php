<?php
$x=10;$y=2;
function summation(){
    global $x,$y;
    $x=$x+$y;
    echo "Sum inside functon:x+y= $x <br>";

}
summation();
echo "Sum outside function x+y= $x<br>";
?>