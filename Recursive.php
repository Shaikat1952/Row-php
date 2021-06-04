<?php
function fact($value){
    if($value==1){
        return 1;
    }
    else
    return $value*fact($value-1);
}
echo fact(3);
?>