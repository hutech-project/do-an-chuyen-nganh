<div class='formPanel medium'>
<?php
$staffName =  ['name' => 'staffName',
             'size' => '25'];
$function =  ['name' => 'function',
             'size' => '25'];
$submit = ['name' => 'submit',
           'value' => 'Submit',
           'class'=> 'button' ];
echo validation_errors("<li>","</li>");
echo form_fieldset('Add Staff');
echo form_open(base_url().'admin/staff/Add');
echo form_label('Staff Name').form_input($staffName).'<br>';
echo form_label('Function').form_input($function).'<br>';
echo form_label('&nbsp;').form_submit($submit);
echo form_close();
echo form_fieldset_close();

?>
</div>
