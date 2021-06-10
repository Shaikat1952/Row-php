<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetPost</title>
</head>
<body>
<form action="" method="post">
Name: <input type="text" name="Name"><br><br>
Age: <input type="text" name="Age"><br><br>
<input type="submit" name="save">
</form>
<?php
if(isset($_POST['save'])){
    echo $_POST("Name");
}
?>
</body>
</html>