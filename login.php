<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>เข้าสู่ระบบ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<section class="side">
    <img src="./images/img.svg" alt="">
</section>

<section class="main">
    <div class="login-container">
        <p class="title">เข้าสู่ระบบ</p>
        <div class="separator"></div>
        <p class="welcome-message">กรุณาใส่รหัสผ่าน</p>

        <form class="login-form" action="signin.php" method="post">
        <?php if(isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </div>
        <?php } ?>
            <div class="form-control">
                <input type="text" name="username" placeholder="Username" id="username" required>
                <i class="fas fa-user"></i>
            </div>
            <div class="form-control">
                <input type="password" name="password" placeholder="Password" id="password" required>
                <i class="fas fa-lock"></i>
            </div>
            <button class="submit" type="submit" name="signin" value="Login">Login</button>
        </form>
    </div>
</section>
    
</body>
</html>