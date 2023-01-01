<?php 

    session_start();

    require_once "config/connect.php";

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $headline = $_POST['headline'];
        $detail = $_POST['detail'];

        $sql = $conn->prepare("UPDATE news SET headline = :headline, detail = :detail WHERE id = :id");
        $sql->bindParam(":id", $id);
        $sql->bindParam(":headline", $headline);
        $sql->bindParam(":detail", $detail);
        $sql->execute();

        if ($sql) {
            $_SESSION['success'] = "ข้อมูลได้รับการแก้ไขเรียบร้อย";
            header("location: news.php");
        } else {
            $_SESSION['error'] = "ข้อมูลยังไม่ได้รับการแก้ไข";
            header("location: news.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <style>
        .container {
            max-width: 550px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Data</h1>
        <hr>
        <form action="news_edit.php" method="post" enctype="multipart/form-data">
            <?php
                if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $stmt = $conn->query("SELECT * FROM news WHERE id = $id");
                        $stmt->execute();
                        $data = $stmt->fetch();
                }
            ?>
                <div class="mb-3">
                    <label for="id" class="col-form-label">ID:</label>
                    <input type="text" readonly value="<?php echo $data['id']; ?>" required class="form-control" name="id" >
                    <label for="headline" class="col-form-label">หัวข้อ :</label>
                    <input type="text" value="<?php echo $data['headline']; ?>" required class="form-control" name="headline" >
                </div>
                <div class="mb-3">
                    <label for="detail" class="col-form-label">เนื้อหา :</label>
                    <input type="text" value="<?php echo $data['detail']; ?>" required class="form-control" name="detail">
                </div>
                <hr>
                <a href="news.php" class="btn btn-secondary">ย้อนกลับ</a>
                <button type="submit" name="update" class="btn btn-primary">แก้ไข</button>
            </form>
    </div>

</body>
</html>