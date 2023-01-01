<div class="charts-card">
    <p class="chart-title">ภาค 2</p>
        <div>
        <table class="wp-table">
                    <tr>
                      <th>คงสังกัด</th>
                      <th>จำหน่าย</th>
                      <th>คง</th>
                    </tr>
                    <tr>
                      <td>
                      <?php
                        $stmt = $conn->query("SELECT COUNT(id) FROM student_data WHERE company = '2' ");
                        $stmt->execute();
                        $data = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo $data['COUNT(id)'];
                      ?>
                      </td>
                      <td>
                      <?php
                        $stmt = $conn->query("SELECT COUNT(id) FROM student_data WHERE company = '2' AND activate != 'ปกติ' ");
                        $stmt->execute();
                        $data = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo $data['COUNT(id)'];
                      ?>
                      </td>
                      <td>
                      <?php
                        $stmt = $conn->query("SELECT COUNT(id) FROM student_data WHERE company = '2' AND activate = 'ปกติ' ");
                        $stmt->execute();
                        $data = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo $data['COUNT(id)'];
                      ?>
                      </td>
                    </tr>
            </table>
                <hr>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ชั้น</th>
                      <th scope="col">คงสังกัด</th>
                      <th scope="col">จำหน่าย</th>
                      <th scope="col">คง</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>
                      <?php
                        $stmt = $conn->query("SELECT COUNT(id) FROM student_data WHERE company = '2' AND class = '1' ");
                        $stmt->execute();
                        $data = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo $data['COUNT(id)'];
                      ?>
                      </td>
                      <td>
                      <?php
                        $stmt = $conn->query("SELECT COUNT(id) FROM student_data WHERE company = '2' AND class = '1' AND activate != 'ปกติ' ");
                        $stmt->execute();
                        $data = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo $data['COUNT(id)'];
                      ?>
                      </td>
                      <td>
                      <?php
                        $stmt = $conn->query("SELECT COUNT(id) FROM student_data WHERE company = '2' AND class = '1' AND activate = 'ปกติ' ");
                        $stmt->execute();
                        $data = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo $data['COUNT(id)'];
                      ?>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>
                      <?php
                        $stmt = $conn->query("SELECT COUNT(id) FROM student_data WHERE company = '2' AND class = '2' ");
                        $stmt->execute();
                        $data = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo $data['COUNT(id)'];
                      ?>
                      </td>
                      <td>
                      <?php
                        $stmt = $conn->query("SELECT COUNT(id) FROM student_data WHERE company = '2' AND class = '2' AND activate != 'ปกติ' ");
                        $stmt->execute();
                        $data = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo $data['COUNT(id)'];
                      ?>
                      </td>
                      <td>
                      <?php
                        $stmt = $conn->query("SELECT COUNT(id) FROM student_data WHERE company = '2' AND class = '2' AND activate = 'ปกติ' ");
                        $stmt->execute();
                        $data = $stmt->fetch(PDO::FETCH_ASSOC);
                        echo $data['COUNT(id)'];
                      ?>
                      </td>
                    </tr>
                  </tbody>
            </table>

            <a href="activate_2.php" class="btn btn-success">ยอดจำหน่ายภาค 2</a>

        </div>
</div>