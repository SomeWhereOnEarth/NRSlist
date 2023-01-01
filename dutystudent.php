<?php include 'assets_header.php'; ?>

      <!-- Main -->
      <main class="main-container">
        <div class="main-title-1">
          <p class="font-weight-bold">จ่าเวรนักเรียน</p>
        </div>

        <div class="charts">

            <div class="charts-card">
              <p class="chart-title-1">จ่าเวรนักเรียนปกครองกราบขวา</p>
              <center>
              <?php
                $stmt = $conn->query("SELECT * FROM student_data WHERE urole = '7' ");
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                echo $data['name'];
              ?><br><hr>
              <?php
                echo $data['phone'];
              ?>
              </center>
            </div>
            <div class="charts-card">
              <p class="chart-title-1">จ่าเวรนักเรียนปกครองกราบซ้าย</p>
              <center>
              <?php
                $stmt = $conn->query("SELECT * FROM student_data WHERE urole = '8' ");
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                echo $data['name'];
              ?><br><hr>
              <?php
                echo $data['phone'];
              ?>
              </center>
            </div>
    
          </div>

          <div class="main-title-1">
            <p class="font-weight-bold">จ่าเวรนักเรียนประจำภาค</p>
          </div>

        <div class="charts">

          <div class="charts-card">
            <p class="chart-title-1">จ่าเวรนักเรียนประจำภาค 1</p>
            <center>
              <?php
                $stmt = $conn->query("SELECT * FROM student_data WHERE urole = '1' ");
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                echo $data['name'];
              ?><br><hr>
              <?php
                echo $data['phone'];
              ?>
              </center>
          </div>
          <div class="charts-card">
            <p class="chart-title-1">จ่าเวรนักเรียนประจำภาค 2</p>
            <center>
              <?php
                $stmt = $conn->query("SELECT * FROM student_data WHERE urole = '2' ");
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                echo $data['name'];
              ?><br><hr>
              <?php
                echo $data['phone'];
              ?>
              </center>
          </div>
          <div class="charts-card">
            <p class="chart-title-1">จ่าเวรนักเรียนประจำภาค 3</p>
            <center>
              <?php
                $stmt = $conn->query("SELECT * FROM student_data WHERE urole = '3' ");
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                echo $data['name'];
              ?><br><hr>
              <?php
                echo $data['phone'];
              ?>
              </center>
          </div>
          <div class="charts-card">
            <p class="chart-title-1">จ่าเวรนักเรียนประจำภาค 4</p>
            <center>
              <?php
                $stmt = $conn->query("SELECT * FROM student_data WHERE urole = '4' ");
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                echo $data['name'];
              ?><br><hr>
              <?php
                echo $data['phone'];
              ?>
              </center>
          </div>
          <div class="charts-card">
            <p class="chart-title-1">จ่าเวรนักเรียนประจำภาค 5</p>
            <center>
              <?php
                $stmt = $conn->query("SELECT * FROM student_data WHERE urole = '5' ");
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                echo $data['name'];
              ?><br><hr>
              <?php
                echo $data['phone'];
              ?>
              </center>
          </div>
          <div class="charts-card">
            <p class="chart-title-1">จ่าเวรนักเรียนประจำภาค 6</p>
            <center>
              <?php
                $stmt = $conn->query("SELECT * FROM student_data WHERE urole = '6' ");
                $stmt->execute();
                $data = $stmt->fetch(PDO::FETCH_ASSOC);
                echo $data['name'];
              ?><br><hr>
              <?php
                echo $data['phone'];
              ?>
              </center>
          </div>

        </div>

      </main>
      <!-- End Main -->

<?php include 'assets_script.php'; ?>