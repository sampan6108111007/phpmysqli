<?php
require('dbconnect.php');

$sql = "SELECT * FROM employees";
$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result,MYSQLI_BOTH);

echo "รหัสพนักงาน = ".$row[0]."<br>";
echo "ชื่อ = ".$row["fname"]."<br>";
echo "นามสกุล = ".$row[2]."<br>";
echo "เพศ = ".$row["gender"]."<br>";
echo "ทักษะ = ".$row["skills"]."<br>";
echo "<hr>";

echo "รหัสพนักงาน = ".$row[0]."<br>";
echo "ชื่อ = ".$row["fname"]."<br>";
echo "นามสกุล = ".$row[2]."<br>";
echo "เพศ = ".$row["gender"]."<br>";
echo "ทักษะ = ".$row["skills"]."<br>";
echo "<hr>";

echo "รหัสพนักงาน = ".$row[0]."<br>";
echo "ชื่อ = ".$row["fname"]."<br>";
echo "นามสกุล = ".$row[2]."<br>";
echo "เพศ = ".$row["gender"]."<br>";
echo "ทักษะ = ".$row["skills"]."<br>";
echo "<hr>";

?>