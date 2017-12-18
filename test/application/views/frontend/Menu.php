<div id="menu"><h2>ĐẶT PHÒNG KHÁCH SẠN</h2>
      <hr>
        <form action="post" href="">
          <div id="menu-wrapper">
            <div>
              <select id="roomType" class="menu-items" name="roomType">
                <option value="0">Chọn loại phòng</option>
                    <?php
                      foreach ($roomTypeList as $roomType) {
                        echo "<option value='".$roomType['room_type']."'>$roomType[room_type]</option>";
                      }
                    ?>
              </select>  
            </div>
           <div class="input-group">
             <input type="text" id="checkin" class="menu-items"  value="Ngày nhận phòng">
           </div>
           <div class="input-group">
             <input type="text" id="checkout" class="menu-items" value="Ngày trả phòng">
           </div>
          <div>
            <select id="numberOfRoom" class="menu-items" name="numberOfRoom">
              <option value="0">Số lượng phòng</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
          <div>
            <select id="numberOfCustomer" class="menu-items" name="numberOfCustomer">
              <option value="0">Số lượng khách</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
          </div>
          <div>
            <input type="submit" name="submit" id="submit" class="menu-items" value="Đặt Phòng">
          </div>
          </div>
        </form>
      </div>
