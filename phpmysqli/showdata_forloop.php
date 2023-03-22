<?php
require('dbconnect.php');

$sql = "SELECT * FROM employees";
$result = mysqli_query($con,$sql);


$count = mysqli_num_rows($result); //จำนวนแถวที่ดึงมาจากฐานข้อมูล

for($i=0;$i<$count;$i++){
    $row = mysqli_fetch_array($result,MYSQLI_BOTH);
    echo "รหัสพนักงาน = ".$row[0]."<br>";
    echo "ชื่อ = ".$row[1]."<br>";
    echo "นามสกุล = ".$row[2]."<br>";
    echo "เพศ = ".$row[3]."<br>";
    echo "ทักษะ = ".$row[4]."<br>";
    echo "<hr>";
    
}

?>