<?php 

    session_start();

    require_once "config/connect.php";

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name_officer = $_POST['name_officer'];
        $phone_officer = $_POST['phone_officer'];

        $sql = $conn->prepare("UPDATE duty_officer SET name_officer = :name_officer, phone_officer = :phone_officer WHERE id = :id");
        $sql->bindParam(":id", $id);
        $sql->bindParam(":name_officer", $name_officer);
        $sql->bindParam(":phone_officer", $phone_officer);
        $sql->execute();

        if ($sql) {
            //$_SESSION['success'] = "ข้อมูลได้รับการแก้ไขเรียบร้อย";
            header("location: duty.php");
        } else {
            //$_SESSION['error'] = "ข้อมูลยังไม่ได้รับการแก้ไข";
            header("location: duty.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขข้อมูลผู้เข้าหน้าที่</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .container {
            max-width: 550px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>แก้ไขข้อมูลผู้เข้าหน้าที่</h1>
        <hr>
        <form action="news_edit.php" method="post" enctype="multipart/form-data">
            <?php
                if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT * FROM duty_officer WHERE id = $id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                }
            ?>
                <div class="mb-3">
                    <label for="id" class="col-form-label">รหัส :</label>
                    <input type="text" readonly value="<?php echo $data['id']; ?>" required class="form-control" name="id" >
                    <label for="headline" class="col-form-label">รายชื่อ :</label>
                    <input type="text" value="<?php echo $data['name_officer']; ?>" required class="form-control" name="name_officer" >
                </div>
                <div class="mb-3">
                    <label for="detail" class="col-form-label">เบอร์โทร :</label>
                    <input type="text" value="<?php echo $data['phone_officer']; ?>" required class="form-control" name="phone_officer">
                </div>
                <hr>
                <a href="duty.php" class="btn btn-secondary">ย้อนกลับ</a>
                <button type="submit" name="update" class="btn btn-primary">แก้ไข</button>
            </form>
    </div>

</body>
</html>