
          <div align="center">
<?php
  if(isset($mess) && $mess !=''){
    echo "<div class='mess_succ'>";
    echo "<ul>";
    echo "<li>$mess</li>";
    echo "</ul>";
    echo "</div>";
  }
?>
      <table align="center" width="450">
              <tr>
              <td colspan="8"><strong><a href='<?php echo base_url()."$module/Room/Add";?>'><font color="#99CC33">Add Room</font></a></strong></td>
                </tr>
              <tr>
                  <td class="title">STT</td>
                    <td class="title">Room Name</td>
                    <td class="title">Status</td>
                    <td class="title">Capacity</td>
                    <td class="title">Room Type</td>
                    <td class="title">Price</td>
                    <td class="title">Edit</td>
                    <td class="title">Del</td>
                </tr>
                
                  <?php
                    $stt= 0 ;
                    foreach ($info as $item) {
                      $stt++;
                      echo "<tr>";
                      echo "<td>$stt</td>";
                      echo "<td>$item[room_name]</td>";
                      if ($item['status'] == 1) {
                        echo "<td>Full</td>";
                      } else {
                        echo "<td>Empty</td>";
                      }                   
                      echo "<td>$item[number_people]</td>"; 
                      echo "<td>$item[room_type]</td>";
                      echo "<td>$item[price]</td>"; 
                      echo "<td><a href='".base_url()."$module/Room/Edit/$item[room_id]'>Edit</a></td>";
                      echo "<td><a href='".base_url()."$module/Room/Delete/$item[room_id]'>Del</a></td>";
                      echo "</tr>";
                    }

                  ?>
               
            </table>
            <?php
              echo $page;
            ?>
            </div>
