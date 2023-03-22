<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกข้อมูลพนักงาน</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container my-3">
        <h2 class="text-center">แบบฟอร์มบันทึกข้อมูล</h2>
        <form action="insertData.php" method="POST">
            <div class="form-group">
                <label for="firstname">ชื่อ</label>
                <input type="text" name="fname" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="lastname">นามสกุล</label>
                <input type="text" name="lname" id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="gender">เพศ</label>
                <input type="radio" name="gender" value="male">ชาย
                <input type="radio" name="gender" value="female">หญิง
                <input type="radio" name="gender" value="other">อื่นๆ
            </div>
            <div class="form-group">
                <label for="">ทักษะ</label>
                <input type="checkbox" name="skills[]" value="JAVA">JAVA
                <input type="checkbox" name="skills[]" value="PHP">PHP
                <input type="checkbox" name="skills[]" value="PYTHON">PYTHON
                <input type="checkbox" name="skills[]" value="HTML">HTML
            </div>
            <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
            <input type="reset" value="ล้างข้อมูล" class="btn btn-danger">
            <a href="index.php" class="btn btn-primary">กลับหน้าแรก</a>
        </form>
    </div>

</body>

</html>