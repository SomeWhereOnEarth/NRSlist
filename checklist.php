<?php include 'assets_header.php'; ?>

      <!-- Main -->
      <main class="main-container">
        <div class="main-title-1">
          <p class="font-weight-bold">เช็คยอดนักเรียนจ่า</p>
        </div>

        <div class="charts">
            <?php 
                if($status == 'ผู้ใช้ทั่วไป') { 
                    echo "<center><h1><b><u><i>แกมันไม่มีสิทธิ์!!!</i></u></b></h1></center>";
                }else {
            ?>
            <div class="charts-card">
                <p class="chart-title"><a href="checklist_1.php">เช็คภาค 1</a></p>
            </div>
            <div class="charts-card">
                <p class="chart-title"><a href="checklist_2.php">เช็คภาค 2</a></p>
            </div>
            <div class="charts-card">
                <p class="chart-title"><a href="checklist_3.php">เช็คภาค 3</a></p>
            </div>
            <div class="charts-card">
                <p class="chart-title"><a href="checklist_4.php">เช็คภาค 4</a></p>
            </div>
            <div class="charts-card">
                <p class="chart-title"><a href="checklist_5.php">เช็คภาค 5</a></p>
            </div>
            <div class="charts-card">
                <p class="chart-title"><a href="checklist_6.php">เช็คภาค 6</a></p>
            </div>
            <?php } ?>
        </div>

        
      </main>
      <!-- End Main -->

<?php include 'assets_script.php'; ?>