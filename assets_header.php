<?php

session_start();
require_once 'config/connect.php';

if (isset($_SESSION['user_login'])) {
	$status = 'ผู้ใช้ทั่วไป';
}else if (isset($_SESSION['admin_login'])) {
	$status = 'ผู้ดูแล';
}else if (isset($_SESSION['company1_login'])) {
	$status = 'จ่าเวรนักเรียนประจำภาค 1';
}else if (isset($_SESSION['company2_login'])) {
	$status = 'จ่าเวรนักเรียนประจำภาค 2';
}else if (isset($_SESSION['company3_login'])) {
	$status = 'จ่าเวรนักเรียนประจำภาค 3';
}else if (isset($_SESSION['company4_login'])) {
	$status = 'จ่าเวรนักเรียนประจำภาค 4';
}else if (isset($_SESSION['company5_login'])) {
	$status = 'จ่าเวรนักเรียนประจำภาค 5';
}else if (isset($_SESSION['company6_login'])) {
	$status = 'จ่าเวรนักเรียนประจำภาค 6';
}else if (isset($_SESSION['company7_login'])) {
	$status = 'จ่าเวรนักเรียนปกครองกราบขวา';
}else if (isset($_SESSION['company8_login'])) {
	$status = 'จ่าเวรนักเรียนปกครองกราบซ้าย';
}else {
  header('Location: login.php');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>ระบบเช็คยอด</title>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
          <p><b>สวัสดี</b> <u><?php echo $_SESSION['name']; ?></u> <b>คุณคือ</b> <u><?php echo $status; ?></u></p>
        </div>
        <div class="header-right">
          <span class="material-icons-outlined">account_circle</span>
        </div>
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <span class="material-icons-outlined">inventory</span> NRS checklist
          </div>
          <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <a href="index.php"><li class="sidebar-list-item">
            <span class="material-icons-outlined">dashboard</span> ภาพรวม
          </li></a>
          <a href="checklist.php"><li class="sidebar-list-item">
            <span class="material-icons-outlined">account_circle</span> เช็คยอดล่าสุด
          </li></a>
            <?php 
                if($status == 'ผู้ดูแล') {  
            ?>
          <a href="checkurole.php"><li class="sidebar-list-item">
            <span class="material-icons-outlined">account_circle</span> ตรวจสอบเวร นรจ.
          </li></a>
            <?php 
                }
            ?>
          <a href="news.php"><li class="sidebar-list-item">
            <span class="material-icons-outlined">inventory_2</span> ข่าวสาร
          </li></a>
          <a href="duty.php"><li class="sidebar-list-item">
            <span class="material-icons-outlined">fact_check</span> ผู้เข้าหน้าที่
          </li></a>
          <a href="dutystudent.php"><li class="sidebar-list-item"> 
            <span class="material-icons-outlined">add_shopping_cart</span> จ่าเวรนักเรียน
          </li></a>
          <a href="studentlist.php"><li class="sidebar-list-item">
            <span class="material-icons-outlined">shopping_cart</span> รายชื่อนักเรียน
          </li></a>
          <a href="logout.php"><li class="sidebar-list-item">
            <span class="material-icons-outlined">settings</span> ออกจากระบบ
          </li></a>
          <a href="profile.php"><li class="sidebar-list-item">
            <span class="material-icons-outlined">account_circle</span> ข้อมูลส่วนตัว
          </li></a>
        </ul>
      </aside>
      <!-- End Sidebar -->