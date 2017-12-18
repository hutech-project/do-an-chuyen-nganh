
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
              <td colspan="6"><strong><a href='<?php echo base_url()."$module/Service/Add";?>'><font color="#99CC33">Add Service</font></a></strong></td>
                </tr>
              <tr>
                  <td class="title">STT</td>
                    <td class="title">Service Name</td>
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
                      echo "<td>$item[service_name]</td>";                   
                      echo "<td>$item[price]</td>";  
                      echo "<td><a href='".base_url()."$module/Service/Edit/$item[service_id]'>Edit</a></td>";
                      echo "<td><a href='".base_url()."$module/Service/Delete/$item[service_id]'>Del</a></td>";
                      echo "</tr>";
                    }

                  ?>
               
            </table>
            <?php
              echo $page;
            ?>
            </div>
