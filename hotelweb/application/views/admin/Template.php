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
    $this->load->view("$module/Menu");
  ?>
  <div id="main">
    <div id="info">
      <div align="center">
        <?php 
          $this->load->view($loadPage);
        ?>
      </div>
    </div>
  </div>
  <?php
    $this->load->view("$module/Bottom");
  ?>
</body>
</html>
