<?php
$formAttribute = ['class' => 'form form-row justify-content-center'];
$usernameLabel = ['class' => 'col-sm-3 col-form-label' ];
$username =  ['name' => 'username',
  'size' => '25'];
$passwordLabel = ['class' => 'col-sm-3 col-form-label'];
$password =  ['name' => 'password',
  'size' => '25'];
$repasswordLabel = ['class' => 'col-sm-3 col-form-label'];
$repassword = ['name' => 'repassword',
               'size' => '25'];
$emailLabel = ['class' => 'col-sm-3 col-form-label'];
$email = ['name' => 'email',
          'size' => '25'];
$levelLabel = ['class' => 'col-sm-3 col-form-label'];
$level = ['1' => "Member",
          '2' => 'Administrator'];
$submitLabel = ['class' => 'col-sm-3 col-form-label'];
$submit = ['name' => 'submit',
           'value' => 'Submit',
           'class'=> 'button' ];
echo validation_errors("<li>","</li>");
echo form_open(base_url().'admin/user/Add',$formAttribute);
echo form_fieldset('Thêm tài khoản');
echo "<div class='form-group row'>";
echo form_label('Quyền','dropdownLevel',$levelLabel)."<div class='col-sm-8'>".form_dropdown('level',$level,1)."</div>".'<br>';
echo "</div>";
echo "<div class='form-group row'>";
echo form_label('Tài khoản','inputUsername',$usernameLabel)."<div class='col-sm-8'>".form_input($username)."</div>".'<br>';
echo "</div>";
echo "<div class='form-group row'>";
echo form_label('Mật khẩu','inputPassword',$passwordLabel)."<div class='col-sm-8'>".form_password($password)."</div>".'<br>';
echo "</div>";
echo "<div class='form-group row'>";
echo form_label('Xác nhận mật khẩu','inputRePassword',$repasswordLabel)."<div class='col-sm-8'>".form_password($repassword)."</div>".'<br>';
echo "</div>";
echo "<div class='form-group row'>";
echo form_label('Email', 'inputEmail',$emailLabel)."<div class='col-sm-8'>".form_input($email)."</div>".'<br>';
echo "</div>";
echo "<div class='form-group row'>";
echo form_label('&nbsp;','submit',$submitLabel)."<div class='col-sm-8'>".form_submit($submit)."</div>";
echo "</div>";
echo form_fieldset_close();
echo form_close();
?>
