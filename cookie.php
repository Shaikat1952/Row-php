<?php
$C_name="admin";
$C_value="Shaikat";
setcookie($C_name,$C_value,time()+(3600),"/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
    if(!isset($_COOKIE['$C_name'])){
    echo"Cookie not set";
    }
    else{
        echo $_COOKIE[$C_name];
    }
    ?>
</body>
</html>