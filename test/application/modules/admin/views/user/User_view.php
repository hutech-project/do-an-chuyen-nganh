    <div class="main container">
        <div class="container">
          <nav class="nav nav-tabs"  role="tablist">
            <a class="nav-item nav-link active" id="nav-list-tab" data-toggle="tab" href="#nav-list" role="tab" aria-controls="nav-list" aria-selected="true">List</a>
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
              <a roll="button" class="btn btn-secondary add float-right"  >+ Add</a>
              <table class="table table-hover">
                <thead class='thead-dark'>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tài Khoản</th>
                    <th scope="col">Mật Khẩu</th>
                    <th scope="col">Quyền</th>
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
                      echo "<td>$item[username]</td>";                   
                      echo "<td>$item[email]</td>";  
                      if ($item['level'] == 2) {
                        echo "<td style='color:red'>Administrator</td>";
                      } else {
                        echo "<td>Member</td>";
                      }
                      echo "<td><a href='".base_url()."$module/User/Edit/$item[id]'>Edit</a></td>";
                      echo "<td><a href='".base_url()."$module/User/Delete/$item[id]'>Del</a></td>";
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
