<?php

use function PHPSTORM_META\type;

$conn=mysqli_connect("localhost","root","","labfinal");
$sql="SELECT * FROM `courses`";
$result=mysqli_query($conn,$sql);
if($result){
    echo'<table>';
    echo '<th>ID</th>';
    echo'<th>Course name</th>';
    echo'<th>Couse code</th>';
    echo'</table>';
    
    while($x=mysqli_fetch_array($result)){
        echo "<td>".$x['id']."</td>";
        echo "<td>".$x['course_name']."</td>";
        echo "<td>".$x['course_code']."</td>";
        echo "<br>";
    }
}
?>