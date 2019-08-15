<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link href="<?php echo base_url()."public/$module/css/style.css"?>" rel="stylesheet" type='text/css' >
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<title><?php echo $titlePage;?></title>
<script>
$( function() {
  $( "#checkin" ).datepicker({ dateFormat: 'yy-mm-dd'});
  $("#checkout").datepicker({ dateFormat: 'yy-mm-dd'});
} );
</script>

</head>
<body>
    <div id="container">
      <?php
        $this->load->view("$module/Banner",$roomTypeList);
        $this->load->view("$module/Slideshow");
        $this->load->view("$module/Menu");
      ?>
      <div id='main'>
      <?php
        $this->load->view("$loadPage");
      ?>
      </div>
      <?php
         $this->load->view("$module/Bottom");
      ?>
    </div>





</body>
</html>
