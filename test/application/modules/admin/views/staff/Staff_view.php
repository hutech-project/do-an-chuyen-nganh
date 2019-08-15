    <div class="main container">
        <div class="container">
          <nav class="nav nav-tabs"  role="tablist">
                <a class="nav-item nav-link active" id="nav-list-tab" data-toggle="tab" href="#nav-list" role="tab" aria-controls="nav-list" aria-selected="true">Danh Sách Nhân Viên</a>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
<?php
  if(isset($mess) && $mess !=''){
    echo "<div class='alert alert-success'>";
    echo "<ul>";
    echo "<li>$mess</li>";
    echo "</ul>";
    echo "</div>";
  }
?>
              <a roll="button" class="btn btn-secondary add float-right" href='<?php echo base_url()."$module/Staff/Add";?>'>+ Thêm</a>
              <table class="table table-hover">
                <thead class='thead-dark'>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên Nhân Viên</th>
                    <th scope="col">Chức Vụ</th>
                    <th scope="col">Chỉnh Sửa</th>
                    <th scope="col">Xóa</th>
                  </tr>
                </thead>
                  <?php
                    $stt= 0 ;
                    foreach ($info as $item) {
                      $stt++;
                      echo "<tr>";
                      echo "<th scope='row'>$stt</td>";
                      echo "<td>$item[employee_name]</td>";                   
                      echo "<td>$item[function]</td>";  
                      echo "<td><a href='".base_url()."$module/Staff/Edit/$item[employee_id]'>Sửa</a></td>";
                      echo "<td><a href='".base_url()."$module/Staff/Delete/$item[employee_id]'>Xóa</a></td>";
                      echo "</tr>";
                    }

                  ?>
                <tbody>
                </tbody>
              </table>
            <?php
              echo $page;
            ?>

            </div>
          </div>
        </div>
    </div>
