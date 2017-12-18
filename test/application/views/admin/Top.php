    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="">Dashboard</a>          
           <div class="navbar justify-content-end">
          <span class="navbar-text"><?php echo $username;?></span>
          <?php
          if($username != ''){  
            echo "<a class='nav-link' href='".base_url()."admin/Verify/Logout'>Logout</a>";
          }
          ?>
        </div>
    </nav>
