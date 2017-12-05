<div class='formPanel medium'>
<?php echo validation_errors('<li>','</li>');
      if(isset($error_mess) && $error_mess != ''){
        echo "<div class='mess_error'><ul><li>".$error_mess."</li></ul></div>";
      }
?>
<fieldset>
<legend>Login</legend>
<form action=<?php echo base_url().'admin/Verify/Login';?> method='post'>
 <label for="">Username</label><input type="text" name='username' size='25'><br>
 <label for="">Password</label><input type='password' name='password' size='25'><br>
<label for="">&nbsp;</label><input type='submit' name='submit' value='login'>  
</form>
</fieldset>
</div>
