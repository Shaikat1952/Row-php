<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showing Session</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['User_Name'])){
echo"User name is : ",$_SESSION["User_Name"];
}
else{
    echo "User log out";
}
?>
    
</body>
</html>