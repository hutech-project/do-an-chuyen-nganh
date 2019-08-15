<?php
$formAttribute = ['class' => 'form form-row justify-content-center'];
$serviceName =  ['name' => 'serviceName',
  'size' => '25',
  'value' => $info['service_name'] ];
$price =  ['name' => 'price',
  'size' => '25',
   'value'=>$info['price']];
$serviceLabel = ['class' => 'col-sm-4 col-form-label' ];
$priceLabel = ['class' => 'col-sm-4 col-form-label'];
$submitLabel = ['class' => 'col-sm-4 col-form-label'];
$submit = ['name' => 'submit',
           'value' => 'Submit',
           'class'=> 'button' ];
echo validation_errors("<li>","</li>");
echo form_open(base_url().'admin/Service/Edit/'.$info['service_id'],$formAttribute);
echo form_fieldset('Sửa dịch vụ');
echo "<div class='form-group row'>";
echo form_label('Dịch vụ','inputservice',$serviceLabel)."<div class='col-sm-8'>".form_input($serviceName)."</div>".'<br>';
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
