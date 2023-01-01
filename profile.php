<?php include 'assets_header.php'; ?>

<!-- Main -->
<main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">ข้อมูลส่วนตัว</p>
        </div>
        <div class="main-cards">

        <div class="charts-1">
            <div class="charts-card">
                <p class="chart-title-1"><b><u>ชื่อ - นามสกุล</u></b></p>
                <center><?php echo $_SESSION['name']; ?><br><hr>
                <p class="chart-title-1"><b><u>สถานะ</u></b></p>
                <?php echo $status; ?><br><hr>
            </div>
        </div>

        </div>
</main>
<!-- End Main -->

<?php include 'assets_script.php'; ?>