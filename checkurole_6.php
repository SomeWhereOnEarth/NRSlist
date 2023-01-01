<?php 

include 'assets_header.php'; 

if($status == 'ผู้ใช้ทั่วไป') { 
  session_destroy();
  // Redirect to the login page:
  header('Location: login.php');
	exit;
}

if (isset($_POST['submit'])) {
  // Counting Number of skills
  $count = count($_POST['skill']);
  $skills = $_POST['skill'];
  $countid = count($_POST['skill']);
  $ids = $_POST['id'];

  if ($count > 1) {
      for ($i = 0; $i < $count; $i++) {
          if (trim($_POST['skill'][$i]) != '') {
              $sql = $conn->prepare("UPDATE student_data SET urole = :urole WHERE id = :id");
              $sql->bindParam(":urole", $skills[$i]);
              $sql->bindParam(":id", $ids[$i]);
              $sql->execute();
          }
      }
      echo "<script>alert('แก้ไขข้อมูลสำเร็จ...กรุณาตรวจสอบที่หน้าจ่าเวรนักเรียน!')</script>";
  } else {
      echo "<script>alert('เกิดข้อผิดพลาด!')</script>";
  }
}
?>

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <p class="font-weight-bold"><u>จ่าเวรนักเรียนภาค 6</u></p>
        </div>
        <p class="font-weight-bold text-danger h2"><u>กรุณาใส่เลข 6 แทน no</u></p>

        <div class="charts-1">
            <div class="charts-card">
            <form action="checkurole_6.php" name="add_name" id="add_name" method="post">
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
                        <th scope="col">เวร</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                      $stmt = $conn->query("SELECT * FROM student_data WHERE company = '6' AND position = 'second' ");
                      $stmt->execute();
                      $users = $stmt->fetchAll();

                      if (!$users) {
                        echo "<p><td colspan='8' class='text-center'>No data available</td></p>";
                      } else {
                      foreach($users as $user)  {  
                    ?>
                    <tr>
                        <th scope="row">
                          <input type="text" style='width:45px' name="id[]" value="<?php echo $user['id']; ?>" readonly>
                          <?php //echo $user['id']; ?>
                        </th>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['class']; ?></td>
                        <td><?php echo $user['company']; ?></td>
                        <td><?php echo $user['section']; ?></td>
                        <td><?php echo $user['position']; ?></td>
                        <td><?php echo $user['phone']; ?></td>
                        <td><?php echo $user['activate']; ?></td>
                        <td>
                          <input type="text" style='width:100px' name="skill[]" value="<?php echo $user['urole']; ?>" required>
                          <?php //echo $user['activate']; ?>
                        </td>
                    </tr>
                    <?php }  } ?>
                    </tbody>
                </table>
                <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit">
            </form>
            </div>
          </div>
      </main>
      <!-- End Main -->

<?php include 'assets_script.php'; ?>