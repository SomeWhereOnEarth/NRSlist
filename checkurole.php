<?php include 'assets_header.php'; ?>

      <!-- Main -->
      <main class="main-container">
        <div class="main-title-1">
          <p class="font-weight-bold">เช็คเวรนักเรียนจ่า</p>
        </div>

        <div class="charts">
            <?php 
                if($status == 'ผู้ดูแล') {  
            ?>
            <div class="charts-card">
                <p class="chart-title"><a href="checkurole_right.php">เช็คจ่าเวรกราบขวา</a></p>
            </div>
            <div class="charts-card">
                <p class="chart-title"><a href="checkurole_left.php">เช็คจ่าเวรกราบซ้าย</a></p>
            </div>
            <div class="charts-card">
                <p class="chart-title"><a href="checkurole_1.php">เช็คจ่าเวรภาค 1</a></p>
            </div>
            <div class="charts-card">
                <p class="chart-title"><a href="checkurole_2.php">เช็คจ่าเวรภาค 2</a></p>
            </div>
            <div class="charts-card">
                <p class="chart-title"><a href="checkurole_3.php">เช็คจ่าเวรภาค 3</a></p>
            </div>
            <div class="charts-card">
                <p class="chart-title"><a href="checkurole_4.php">เช็คจ่าเวรภาค 4</a></p>
            </div>
            <div class="charts-card">
                <p class="chart-title"><a href="checkurole_5.php">เช็คจ่าเวรภาค 5</a></p>
            </div>
            <div class="charts-card">
                <p class="chart-title"><a href="checkurole_6.php">เช็คจ่าเวรภาค 6</a></p>
            </div>
            <?php 
                }else {
                    echo "<center><h1><b><u><i>แกมันไม่มีสิทธิ์!!!</i></u></b></h1></center>";
                } 
            ?>
        </div>

        
      </main>
      <!-- End Main -->

<?php include 'assets_script.php'; ?>