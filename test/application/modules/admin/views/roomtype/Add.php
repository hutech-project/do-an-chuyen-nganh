<?php
$formAttribute = ['class' => 'form form-row justify-content-center'];
$roomTypeLabel = ['class' => 'col-sm-4 col-form-label' ];
$roomType =  ['name' => 'roomType',
  'size' => '25'];
$priceLabel = ['class' => 'col-sm-4 col-form-label'];
$price =  ['name' => 'price',
  'size' => '25'];
$submitLabel = ['class' => 'col-sm-4 col-form-label'];
$submit = ['name' => 'submit',
           'value' => 'Submit',
           'class'=> 'button' ];
echo validation_errors("<li>","</li>");
echo form_open(base_url().'admin/RoomType/Add',$formAttribute);
echo form_fieldset('Thêm loại phòng');
echo "<div class='form-group row'>";
echo form_label('Loại phòng','inputroomType',$roomTypeLabel)."<div class='col-sm-8'>".form_input($roomType)."</div>".'<br>';
echo "</div>";
echo "<div class='form-group row'>";
echo form_label('Giá','inputPrice',$priceLabel)."<div class='col-sm-8'>".form_input($price)."</div>".'<br>';
echo "</div>";
echo "<div class='form-group row'>";
echo form_label('&nbsp;','submit',$submitLabel)."<div class='col-sm-8'>".form_submit($submit)."</div>";
echo "</div>";
echo form_fieldset_close();
echo form_close();
?>
