<?php
$formAttribute = ['class' => 'form form-row justify-content-center'];
$roomNameLabel = ['class' => 'col-sm-4 col-form-label' ];
$roomName =  ['name' => 'roomName',
  'size' => '25'];
$capacityLabel = ['class' => 'col-sm-4 col-form-label'];
$capacity =  ['name' => 'capacity',
  'size' => '25'];
$roomTypeLabel = ['class' => 'col-sm-4 col-form-label'];
$roomType = ['name' => 'roomType'];
$submitLabel = ['class' => 'col-sm-4 col-form-label'];
$submit = ['name' => 'submit',
           'value' => 'Submit',
           'class'=> 'button' ];
echo validation_errors("<li>","</li>");
echo form_open(base_url().'admin/Room/Add',$formAttribute);
echo form_fieldset('Thêm tài khoản');
echo "<div class='form-group row'>";
echo form_label('Số phòng','inputroomName',$roomNameLabel)."<div class='col-sm-8'>".form_input($roomName)."</div>".'<br>';
echo "</div>";
echo "<div class='form-group row'>";
echo form_label('Sức chứa','inputCapacity',$capacityLabel)."<div class='col-sm-8'>".form_input($capacity)."</div>".'<br>';
echo "</div>";
$roomTypeOptions = array();
foreach($roomTypeList as $key){
 $roomTypeOptions[$key['room_type']] =  $key['room_type']; 
};
echo "<div class='form-group row'>";
echo form_label('Loại phòng','inputRoomType',$roomTypeLabel)."<div class='col-sm-8'>".form_dropdown($roomType,$roomTypeOptions)."</div>".'<br>';
echo "</div>";
echo "<div class='form-group row'>";
echo form_label('&nbsp;','submit',$submitLabel)."<div class='col-sm-8'>".form_submit($submit)."</div>";
echo "</div>";
echo form_fieldset_close();
echo form_close();
?>
