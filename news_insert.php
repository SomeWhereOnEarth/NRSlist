<?php 

session_start();
require_once "config/connect.php";

if (isset($_POST['submit'])) {
    $headline = $_POST['headline'];
    $detail = $_POST['detail'];
    $name = $_SESSION['name'];
    

                if ($name) {
                    $sql = $conn->prepare("INSERT INTO news(headline, detail, editor) VALUES(:headline, :detail, :editor)");
                    $sql->bindParam(":headline", $headline);
                    $sql->bindParam(":detail", $detail);
                    $sql->bindParam(":editor", $name);
                    $sql->execute();

                    if ($sql) {
                        $_SESSION['success'] = "ข้อมูลถูกเพิ่มเรียบร้อยแล้ว";
                        header("location: news.php");
                    } else {
                        $_SESSION['error'] = "ข้อมูลไม่ได้ถูกเพิ่มครับ";
                        header("location: news.php");
                    }
                }else {
                    $_SESSION['error'] = "อย่ากดเล่นครับ";
                    header("location: news.php");
                }

}


?>