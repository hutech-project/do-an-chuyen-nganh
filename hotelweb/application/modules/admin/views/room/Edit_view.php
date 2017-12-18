<div class='formPanel medium'>
<?php
$roomName =  ['name' => 'roomName',
              'size' => '25',
              'value' => $info['room_name']  
              ];
$status =  ['name' => 'status' ];
$statusOptions = ['0' => 'Phòng trống',
                  '1' => 'Phòng đầy'];
$capacity =  ['name' => 'capacity',
           'size' => '25',
           'value'=> $info['number_people'] ];
$roomType =  ['name' => 'roomType'];
$submit = ['name' => 'submit',
           'value' => 'Submit',
           'class'=> 'button' ];
echo validation_errors("<li>","</li>");
echo form_fieldset('Edit Room');
echo form_open(base_url().'admin/room/Edit/'.$info['room_id']);
echo form_label('Room Name').form_input($roomName).'<br>';
echo form_label('Status').form_dropdown($status,$statusOptions,$info['status']).'<br>';
echo form_label('Capacity').form_input($capacity).'<br>';
foreach ($roomTypeList as $value) {
  $roomTypeOptions[$value['room_type']] = $value['room_type'];
}
echo form_label('Room Type').form_dropdown($roomType, $roomTypeOptions , $info['room_type']).'<br>';
echo form_label('&nbsp;').form_submit($submit);
echo form_close();
echo form_fieldset_close();

?>
</div>
