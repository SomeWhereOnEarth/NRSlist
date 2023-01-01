<?php include 'assets_header.php'; ?>

      <!-- Main -->
      <main class="main-container">
        <div class="main-title-1">
          <p class="font-weight-bold">รายชื่อผู้เข้าหน้าที่</p>
        </div>

        <div class="charts-1">
            <div class="charts-card">
                <p class="chart-title-1">น.เวรปกครอง</p>
                <?php 
                    $stmt = $conn->query("SELECT * FROM duty_officer WHERE id = 1");
                    $stmt->execute();
                    $data = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <center><?php echo $data['name_officer']; ?><br><hr>
                <?php echo $data['phone_officer']; ?><br><hr>
                <?php 
                    if($status == "ผู้ดูแล") {
                ?>
                <a href="duty_edit.php?id=1" class="btn btn-warning">แก้ไข</a></center>
                <?php } ?>
            </div>
        </div>

        <div class="charts">

          <div class="charts-card">
              <p class="chart-title-1">ผช.น.เวรปกครองกราบขวา</p>
              <?php 
                    $stmt = $conn->query("SELECT * FROM duty_officer WHERE id = 2");
                    $stmt->execute();
                    $data = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <center><?php echo $data['name_officer']; ?><br><hr>
                <?php echo $data['phone_officer']; ?><br><hr>
                <?php 
                    if($status == "ผู้ดูแล") {
                ?>
                <a href="duty_edit.php?id=2" class="btn btn-warning">แก้ไข</a></center>
                <?php } ?>
          </div>
          <div class="charts-card">
              <p class="chart-title-1">ผช.น.เวรปกครองกราบซ้าย</p>
              <?php 
                    $stmt = $conn->query("SELECT * FROM duty_officer WHERE id = 3");
                    $stmt->execute();
                    $data = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <center><?php echo $data['name_officer']; ?><br><hr>
                <?php echo $data['phone_officer']; ?><br><hr>
                <?php 
                    if($status == "ผู้ดูแล") {
                ?>
                <a href="duty_edit.php?id=3" class="btn btn-warning">แก้ไข</a></center>
                <?php } ?>
          </div>

        </div>

        <div class="main-title-1">
          <p class="font-weight-bold">พันจ่าเวรภาค</p>
        </div>

        <div class="charts">

            <div class="charts-card">
                <p class="chart-title-1">พันจ่าเวรภาคภาค 1</p>
                <?php 
                    $stmt = $conn->query("SELECT * FROM duty_officer WHERE id = 4");
                    $stmt->execute();
                    $data = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <center><?php echo $data['name_officer']; ?><br><hr>
                <?php echo $data['phone_officer']; ?><br><hr>
                <?php 
                    if($status == "ผู้ดูแล") {
                ?>
                <a href="duty_edit.php?id=4" class="btn btn-warning">แก้ไข</a></center>
                <?php } ?>
            </div>
            <div class="charts-card">
                <p class="chart-title-1">พันจ่าเวรภาคภาค 2</p>
                <?php 
                    $stmt = $conn->query("SELECT * FROM duty_officer WHERE id = 5");
                    $stmt->execute();
                    $data = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <center><?php echo $data['name_officer']; ?><br><hr>
                <?php echo $data['phone_officer']; ?><br><hr>
                <?php 
                    if($status == "ผู้ดูแล") {
                ?>
                <a href="duty_edit.php?id=5" class="btn btn-warning">แก้ไข</a></center>
                <?php } ?>
            </div>
            <div class="charts-card">
                <p class="chart-title-1">พันจ่าเวรภาคภาค 3</p>
                <?php 
                    $stmt = $conn->query("SELECT * FROM duty_officer WHERE id = 6");
                    $stmt->execute();
                    $data = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <center><?php echo $data['name_officer']; ?><br><hr>
                <?php echo $data['phone_officer']; ?><br><hr>
                <?php 
                    if($status == "ผู้ดูแล") {
                ?>
                <a href="duty_edit.php?id=6" class="btn btn-warning">แก้ไข</a></center>
                <?php } ?>
            </div>
            <div class="charts-card">
                <p class="chart-title-1">พันจ่าเวรภาคภาค 4</p>
                <?php 
                    $stmt = $conn->query("SELECT * FROM duty_officer WHERE id = 7");
                    $stmt->execute();
                    $data = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <center><?php echo $data['name_officer']; ?><br><hr>
                <?php echo $data['phone_officer']; ?><br><hr>
                <?php 
                    if($status == "ผู้ดูแล") {
                ?>
                <a href="duty_edit.php?id=7" class="btn btn-warning">แก้ไข</a></center>
                <?php } ?>
            </div>
            <div class="charts-card">
                <p class="chart-title-1">พันจ่าเวรภาคภาค 5</p>
                <?php 
                    $stmt = $conn->query("SELECT * FROM duty_officer WHERE id = 8");
                    $stmt->execute();
                    $data = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <center><?php echo $data['name_officer']; ?><br><hr>
                <?php echo $data['phone_officer']; ?><br><hr>
                <?php 
                    if($status == "ผู้ดูแล") {
                ?>
                <a href="duty_edit.php?id=8" class="btn btn-warning">แก้ไข</a></center>
                <?php } ?>
            </div>
            <div class="charts-card">
                <p class="chart-title-1">พันจ่าเวรภาคภาค 6</p>
                <?php 
                    $stmt = $conn->query("SELECT * FROM duty_officer WHERE id = 9");
                    $stmt->execute();
                    $data = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <center><?php echo $data['name_officer']; ?><br><hr>
                <?php echo $data['phone_officer']; ?><br><hr>
                <?php 
                    if($status == "ผู้ดูแล") {
                ?>
                <a href="duty_edit.php?id=9" class="btn btn-warning">แก้ไข</a></center>
                <?php } ?>
            </div>
  
        </div>

        
      </main>
      <!-- End Main -->

<?php include 'assets_script.php'; ?>