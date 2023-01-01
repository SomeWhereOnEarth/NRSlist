<?php include 'assets_header.php'; ?>

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold">นักเรียนจ่าทั้งหมด</p>
        </div>
        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">ยอดเดิม</p>
              <span class="material-icons-outlined text-blue">inventory_2</span>
            </div>
            <span class="text-primary font-weight-bold">
            <?php
                $stmt = $conn->query("SELECT COUNT(id) FROM student_data");
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                echo $data['COUNT(id)'];
            ?>
            </span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">จำหน่าย</p>
              <span class="material-icons-outlined text-orange">add_shopping_cart</span>
            </div>
            <span class="text-primary font-weight-bold">
            <?php
                $stmt = $conn->query("SELECT COUNT(id) FROM student_data WHERE activate != 'ปกติ' ");
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                echo $data['COUNT(id)'];
            ?>
            </span>
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary">คง</p>
              <span class="material-icons-outlined text-green">shopping_cart</span>
            </div>
            <span class="text-primary font-weight-bold">
            <?php
                $stmt = $conn->query("SELECT COUNT(id) FROM student_data WHERE activate = 'ปกติ' ");
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                echo $data['COUNT(id)'];
            ?>
            </span>
          </div>

        </div>

        <div class="charts">
          <?php include 'assets_company1.php'; ?>
          <?php include 'assets_company2.php'; ?>
          <?php include 'assets_company3.php'; ?>
          <?php include 'assets_company4.php'; ?>
          <?php include 'assets_company5.php'; ?>
          <?php include 'assets_company6.php'; ?>
        </div>
      </main>
      <!-- End Main -->

<?php include 'assets_script.php'; ?>