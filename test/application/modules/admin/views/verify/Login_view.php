<?php 
      echo validation_errors('<li>','</li>');
      if(isset($error_mess) && $error_mess != ''){
        echo "<div class='mess_error'><ul><li>".$error_mess."</li></ul></div>";
      }
?>
<form action=<?php echo base_url().'admin/Verify/Login';?> method='post' class='form-row justify-content-center'>
<fieldset>
<legend class="col-form-legend">Login</legend>
<div class='form-group row'>
  <label for="" class='col-sm-4 col-form-label'>Username</label>
  <div class='col-sm-8'>
    <input type="text" name='username' size='25'>
  </div>
</div>
<div class='form-group row'>
  <label for="" class='col-sm-4 col-form-label'>Password</label>
  <div class='col-sm-8'>
    <input type='password' name='password' size='25'>
  </div>
</div>
<div class='form-group row'>
  <label for="" class='col-sm-4 col-form-label'>&nbsp;</label>
  <div class='col-sm-8'>
    <input type='submit' name='submit' value='login'>  
  </div>
</div>
</fieldset>
</form>
