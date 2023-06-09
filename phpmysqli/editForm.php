
<?php
require('dbconnect.php');
$id=$_GET["id"];

$sql="SELECT * FROM employees WHERE id= $id";
$result=mysqli_query($con,$sql);

$row = mysqli_fetch_assoc($result);
$skill_arr=array("JAVA","PHP","PYTHON","HTML"); //เตรียมตัวเลือกในแบบฟอร์ม

//echo $row["skills"]; // string => array
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลพนักงาน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container my-3">
        <h2 class="text-center">แบบฟอร์มแก้ไขข้อมูล</h2>
        <form action="updateData.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <div class="form-group">
                <label for="firstname">ชื่อ</label>
                <input type="text" name="fname" id="" class="form-control" value="<?php echo $row["fname"]; ?>">
            </div>
            <div class="form-group">
                <label for="lastname">นามสกุล</label>
                <input type="text" name="lname" id="" class="form-control" value="<?php echo $row["lname"]; ?>">
            </div>
            <div class="form-group">
                <label for="gender">เพศ</label>
                <?php 
                if($row["gender"] == "male"){
                    echo  "<input type='radio' name='gender' value='male' checked>ชาย";
                    echo  "<input type='radio' name='gender' value='female'>หญิง";
                    echo  "<input type='radio' name='gender' value='other'>อื่นๆ";
                }else if($row["gender"] == "female"){
                    echo  "<input type='radio' name='gender' value='male'>ชาย";
                    echo  "<input type='radio' name='gender' value='female' checked>หญิง";
                    echo  "<input type='radio' name='gender' value='other'>อื่นๆ";
                }else{
                    echo  "<input type='radio' name='gender' value='male'>ชาย";
                    echo  "<input type='radio' name='gender' value='female'>หญิง";
                    echo  "<input type='radio' name='gender' value='other'checked>อื่นๆ";
                }
                ?>
            </div>
            <div class="form-group">
                <label for="">ทักษะ</label>
                <?php 
                $skill = explode(",",$row["skills"]); //array ทักษะของพนักงาน

                foreach($skill_arr as $value){
                    if(in_array($value,$skill)){
                        echo "<input type='checkbox' name='skills[]' value='$value' checked>$value";
                    }else{
                        echo "<input type='checkbox' name='skills[]' value='$value'>$value";

                    }
                }
                ?>
            </div>
            <input type="submit" value="อัปเดตข้อมูล" class="btn btn-success">
            <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
            <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
        </form>
    </div>

</body>

</html>