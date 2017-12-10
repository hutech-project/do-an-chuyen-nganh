<div class='formPanel medium'>
<?php
$roomName =  ['name' => 'roomName',
             'size' => '25'];
$status =  ['name' => 'status',
             'size' => '25'];
$capacity =  ['name' => 'capacity',
             'size' => '25'];
$roomType=  ['name' => 'roomType',
             'size' => '25'];
$submit = ['name' => 'submit',
           'value' => 'Submit',
           'class'=> 'button' ];
echo validation_errors("<li>","</li>");
echo form_fieldset('Add Room');
echo form_open(base_url().'admin/room/Add');
echo form_label('Room Name').form_input($roomName).'<br>';
echo form_label('Status').form_input($status).'<br>';
echo form_label('Capacity').form_input($capacity).'<br>';
echo form_label('Room Type').form_input($roomType).'<br>';
echo form_label('&nbsp;').form_submit($submit);
echo form_close();
echo form_fieldset_close();

?>
</div>
