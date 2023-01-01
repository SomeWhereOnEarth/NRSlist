<?php include 'assets_header.php'; ?>
<?php 
if (isset($_GET['delete'])) {
  $delete_id = $_GET['delete'];
  $deletestmt = $conn->query("DELETE FROM news WHERE id = $delete_id");
  $deletestmt->execute();

  if ($deletestmt) {
      echo "<script>alert('ข้อมูลถูกลบเรียบร้อยแล้ว');</script>";
      $_SESSION['success'] = "ข้อมูลถูกลบเรียบร้อยแล้ว";
      header("refresh:1; url=news.php");
  }
  
}
?>
      <!-- Main -->
      <main class="main-container">
        
        <div class="main-title-1">
          <p class="font-weight-bold">ประกาศ/ข่าวสาร</p>
        </div>
        

        <div class="charts-1">

          <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูล</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="news_insert.php" method="post" id="news">
                        <div class="mb-3">
                            <label for="news" class="col-form-label">เลือกหัวข้อ :</label>
                            <select id="news" name="headline" form="news">
                                <option value="ข่าวสาร">ข่าวสาร</option>
                                <option value="ประกาศ">ประกาศ</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="firstname" class="col-form-label">เนื้อหา :</label>
                            <input type="text" required class="form-control" name="detail">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                            <button type="submit" name="submit" class="btn btn-success">ยืนยัน</button>
                        </div>
                    </form>
                </div>
            
            </div>
            </div>
          </div>



          <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h4>รายละเอียด</h4>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userModal" data-bs-whatever="@mdo">เพิ่มข้อมูล</button>
            </div>
        </div>
        <hr>
        <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success">
                <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']); 
                ?>
            </div>
        <?php } ?>
        <?php if (isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger">
                <?php 
                    echo $_SESSION['error'];
                    unset($_SESSION['error']); 
                ?>
            </div>
        <?php } ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">หัวข้อ</th>
                    <th scope="col">เนื้อหา</th>
                    <th scope="col">โดย</th>
                    <th scope="col">เวลา</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $stmt = $conn->query("SELECT * FROM news");
                    $stmt->execute();
                    $users = $stmt->fetchAll();

                    if (!$users) {
                        echo "<p><td colspan='4' class='text-center'>No news available</td></p>";
                    } else {
                    foreach($users as $user)  {  
                ?>
                    <tr>
                        <th scope="row"><?php echo $user['id']; ?></th>
                        <td><?php echo $user['headline']; ?></td>
                        <td><?php echo $user['detail']; ?></td>
                        <td><?php echo $user['editor']; ?></td>
                        <td><?php echo $user['created_at']; ?></td>
                        <td>
                            <?php 
                                if($_SESSION['name'] == $user['editor']) {
                            ?>
                            <a href="news_edit.php?id=<?php echo $user['id']; ?>" class="btn btn-warning">แก้ไข</a>
                            <a onclick="return confirm('Are you sure you want to delete?');" href="?delete=<?php echo $user['id']; ?>" class="btn btn-danger" class="btn btn-danger">ลบ</a>
                            <?php }else if($status == "ผู้ดูแล"){
                            ?>
                            <a href="news_edit.php?id=<?php echo $user['id']; ?>" class="btn btn-warning">แก้ไข</a>
                            <a onclick="return confirm('Are you sure you want to delete?');" href="?delete=<?php echo $user['id']; ?>" class="btn btn-danger" class="btn btn-danger">ลบ</a>
                            <?php } ?>
                        </td>
                    </tr>
                <?php }  } ?>
            </tbody>
        </table>
    </div>

        </div>

      </main>
      <!-- End Main -->

<?php include 'assets_script.php'; ?>