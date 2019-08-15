<div class='formPanel medium'>
<?php
$roomType =  ['name' => 'roomType',
             'size' => '25'];
$price =  ['name' => 'price',
             'size' => '25'];
$submit = ['name' => 'submit',
           'value' => 'Submit',
           'class'=> 'button' ];
echo validation_errors("<li>","</li>");
echo form_fieldset('Add Room Type');
echo form_open(base_url().'admin/RoomType/Add');
echo form_label('Room Type').form_input($roomType).'<br>';
echo form_label('Price').form_input($price).'<br>';
echo form_label('&nbsp;').form_submit($submit);
echo form_close();
echo form_fieldset_close();

?>
</div>
