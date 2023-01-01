<?php 

    session_start();
    require_once 'config/connect.php';

    if (isset($_POST['signin'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
      
        if ($username != $password) {
            $_SESSION['error'] = 'มั่วแล้ว';
            header("location: login.php");
        } else {
            try {

                $check_data = $conn->prepare("SELECT * FROM student_data WHERE phone = :phone");
                $check_data->bindParam(":phone", $username);
                $check_data->execute();
                $row = $check_data->fetch(PDO::FETCH_ASSOC);

                if ($check_data->rowCount() > 0) {

                    if ($username == $row['phone']) {
                        if ($password == $row['phone']) {
                            if ($row['urole'] == 'all') {
                                $_SESSION['admin_login'] = $row['id'];
                                $_SESSION['name'] = $row['name'];
                                header("location: index.php");
                            } else if ($row['urole'] == '1') {
                                $_SESSION['company1_login'] = $row['id'];
                                $_SESSION['name'] = $row['name'];
                                header("location: index.php");
                            }else if ($row['urole'] == '2') {
                                $_SESSION['company2_login'] = $row['id'];
                                $_SESSION['name'] = $row['name'];
                                header("location: index.php");
                            }else if ($row['urole'] == '3') {
                                $_SESSION['company3_login'] = $row['id'];
                                $_SESSION['name'] = $row['name'];
                                header("location: index.php");
                            }else if ($row['urole'] == '4') {
                                $_SESSION['company4_login'] = $row['id'];
                                $_SESSION['name'] = $row['name'];
                                header("location: index.php");
                            }else if ($row['urole'] == '5') {
                                $_SESSION['company5_login'] = $row['id'];
                                $_SESSION['name'] = $row['name'];
                                header("location: index.php");
                            }else if ($row['urole'] == '6') {
                                $_SESSION['company6_login'] = $row['id'];
                                $_SESSION['name'] = $row['name'];
                                header("location: index.php");
                            } else if ($row['urole'] == '7') {
                                $_SESSION['company7_login'] = $row['id'];
                                $_SESSION['name'] = $row['name'];
                                header("location: index.php");
                            } else if ($row['urole'] == '8') {
                                $_SESSION['company8_login'] = $row['id'];
                                $_SESSION['name'] = $row['name'];
                                header("location: index.php");
                            }else if ($row['urole'] == 'no') {
                                $_SESSION['user_login'] = $row['id'];
                                $_SESSION['name'] = $row['name'];
                                header("location: index.php");
                            }
                            else {
                                $_SESSION['error'] = 'ทำไมกันวะ';
                                header("location: login.php");
                            }
                        } else {
                            $_SESSION['error'] = 'รหัสผ่านผิด';
                            header("location: login.php");
                        }
                    } else {
                        $_SESSION['error'] = 'ชื่อผู้ใช้ผิด';
                        header("location: login.php");
                    }
                } else {
                    $_SESSION['error'] = "ไม่มีข้อมูลในระบบ";
                    header("location: login.php");
                }

            } catch(PDOException $e) {
                echo $e->getMessage();
            }
        }
    }


?>