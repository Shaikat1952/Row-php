<?php
function recursion($a){
    if($a<=50){
        echo $a," ";
        recursion($a+2);
    }
}
$A=0;
recursion($A); 
?>