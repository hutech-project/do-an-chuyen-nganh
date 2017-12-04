<div class='formPanel medium'>
<?php
$username =  ['name' => 'username',
             'size' => '25'];
$password =  ['name' => 'password',
             'size' => '25'];
$repassword = ['name' => 'repassword',
             'size' => '25'];
$email = ['name' => 'email',
          'size' => '25'];
$level = ['1' => "Member",
          '2' => 'Administrator'];
$submit = ['name' => 'submit',
           'value' => 'Submit',
           'class'=> 'button' ];
echo validation_errors("<li>","</li>");
echo form_fieldset('Add User');
echo form_open(base_url().'admin/user/Add');
echo form_label('Level').form_dropdown('level',$level,1).'<br>';
echo form_label('Username').form_input($username).'<br>';
echo form_label('Password').form_password($password).'<br>';
echo form_label('Re-Password').form_password($repassword).'<br>';
echo form_label('Email').form_input($email).'<br>';
echo form_label('&nbsp;').form_submit($submit);
echo form_close();
echo form_fieldset_close();

?>
</div>
