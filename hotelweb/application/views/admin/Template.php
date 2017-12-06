<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="<?php echo base_url();?>public/<?php echo $module;?>/css/style2.css" rel="stylesheet" type="text/css"/>
  <title><?php echo $titlePage;?></title> 
</head>
<body>
  <?php 
    $this->load->view("$module/Top"); 
    if (isset($this->session->username)) { 
      $data['username'] = $this->session->username;
      $this->load->view("$module/Menu",$data);
    }
?>
  <div id="main">
    <div id="info">
        <?php
          if (!$this->session->username) {
            $loadPage = 'verify/Login_view';
          }
            $this->load->view($loadPage);
        ?>
    </div>
  </div>
  <?php
    $this->load->view("$module/Bottom");
  ?>
</body>
</html>
