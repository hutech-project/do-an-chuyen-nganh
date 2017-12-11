<div id="banner">
         <!-- img src="logo-hutech.jpg" alt=""-->
         <nav class="navbar navbar-inverse">
            <div class="container-fluid">
              <ul class="nav navbar-nav">
              <li><a href="<?php echo base_url()."$module/Homepage"?>">Trang Chủ</a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown"  href="#">Phòng
                  </a>
                  <ul class="dropdown-menu">
                    <?php
                      foreach ($roomTypeList as $roomType) {
                        echo "<li><a href='".base_url()."$module/Homepage'>$roomType[room_type]</a></li>";
                      }
                    ?>
                  </ul>
                </li>
                <li><a href="<?php echo base_url()."$module/"?>">Dịch Vụ</a></li>
                <li><a href="#">Bản Đồ</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Đăng Nhập</a></li>
              </ul>
            </div>
         </nav> 
      </div>
