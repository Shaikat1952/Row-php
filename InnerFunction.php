<?php
function parent(){
    echo "I am parent function";
    echo"<br>";
    function child(){
        echo "I am child function";
    }
}
parent();
child();  //if we have not call parent function,then it will show a error || 
?>