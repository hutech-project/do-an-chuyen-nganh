<div class="main container">
    <div class="container">
      <nav class="nav nav-tabs"  role="tablist">
            <a class="nav-item nav-link active" id="nav-list-tab" data-toggle="tab" href="#nav-list" role="tab" aria-controls="nav-list" aria-selected="true">Danh Sách Yêu Cầu Đặt Phòng</a>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
          <table class="table table-hover" border="1px solid black">
            <thead class='thead-dark'>
              <tr>
                <th scope="col">Tên Khách Hàng</th>
                <th scope="col">Số Điện Thoại</th>
                <th scope="col">Địa Chỉ</th>
                <th scope="col">Loại Phòng</th>
                <th scope="col">Ngày Nhận Phòng</th>
                <th scope="col">Ngày Trả Phòng</th>
                <th scope="col">Số Lượng Phòng</th>
                <th scope="col">Số Lượng Người</th>
                <th scope="col">Thời Gian Đăng Ký</th>
              </tr>
            </thead>
            <?php
              foreach ($info as $item) {
                echo "<tr>";
                echo "<td>$item[customer_name]</td>";
                echo "<td>$item[phone_number]</td>";
                echo "<td>$item[address]</td>";
                echo "<td>$item[roomType]</td>";
                echo "<td>$item[checkin]</td>";
                echo "<td>$item[checkout]</td>";
                echo "<td>$item[numberOfRoom]</td>";
                echo "<td>$item[numberOfCustomer]</td>";
                echo "<td>$item[ctime]</td>";
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
