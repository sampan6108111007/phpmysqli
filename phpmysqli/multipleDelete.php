<?php
require('dbconnect.php');

$id_arr=$_POST["idcheckbox"];

$multiple_id=implode(",",$id_arr);

$sql ="DELETE FROM employees WHERE id IN ($multiple_id)";

$result=mysqli_query($con,$sql);

if($result){
    header("location:index.php");
    exit(0);
}else{
    echo "เกิดข้อผิดพลาด";
}

?>