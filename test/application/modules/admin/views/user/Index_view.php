 
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
              <td colspan="6"><strong><a href='<?php echo base_url()."$module/User/Add";?>'><font color="#99CC33">Add A User</font></a></strong></td>
                </tr>
              <tr>
                  <td class="title">STT</td>
                    <td class="title">Username</td>
                    <td class="title">Email</td>
                    <td class="title">Level</td>
                    <td class="title">Edit</td>
                    <td class="title">Del</td>
                </tr>
                
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
               
            </table>
            <?php
              echo $page;
            ?>
            </div>
