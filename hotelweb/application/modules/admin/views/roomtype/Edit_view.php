<div class='formPanel medium'>
<?php
$roomType =  ['name' => 'roomType',
              'size' => '25',
              'value' => $info['room_type']  
              ];
$price =  ['name' => 'price',
           'size' => '25',
           'value'=> $info['price'] ];
$submit = ['name' => 'submit',
           'value' => 'Submit',
           'class'=> 'button' ];
echo validation_errors("<li>","</li>");
echo form_fieldset('Edit Room Type');
echo form_open(base_url().'admin/RoomType/Edit/'.$info['type_id']);
echo form_label('Room Type').form_input($roomType).'<br>';
echo form_label('Price').form_input($price).'<br>';
echo form_label('&nbsp;').form_submit($submit);
echo form_close();
echo form_fieldset_close();

?>
</div>
