<?php include 'assets_header.php'; ?>

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold"><u>รายชื่อนักเรียนจ่าภาค 2 ที่จำหน่าย</u></p>
        </div>

        <div class="charts-1">
            <div class="charts-card">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">ลำดับ</th>
                        <th scope="col">ชื่อ - นามสกุล</th>
                        <th scope="col">ชั้น</th>
                        <th scope="col">ภาค</th>
                        <th scope="col">ตอน</th>
                        <th scope="col">ตำแหน่ง</th>
                        <th scope="col">หมายเลขโทรศัพท์</th>
                        <th scope="col">สถานะ</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                      $stmt = $conn->query("SELECT * FROM student_data WHERE company = '2' AND activate != 'ปกติ' ");
                      $stmt->execute();
                      $users = $stmt->fetchAll();

                      if (!$users) {
                        echo "<p><td colspan='8' class='text-center'>ไม่มียอดจำหน่าย</td></p>";
                      } else {
                      foreach($users as $user)  {  
                    ?>
                    <tr>
                        <th scope="row"><?php echo $user['id']; ?></th>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['class']; ?></td>
                        <td><?php echo $user['company']; ?></td>
                        <td><?php echo $user['section']; ?></td>
                        <td><?php echo $user['position']; ?></td>
                        <td><?php echo $user['phone']; ?></td>
                        <td><?php echo $user['activate']; ?></td>
                    </tr>
                    <?php }  } ?>
                    </tbody>
                </table>
                <a href="index.php" class="btn btn-success">กลับ</a>
            </div>
        </div>
      </main>
      <!-- End Main -->

<?php include 'assets_script.php'; ?>