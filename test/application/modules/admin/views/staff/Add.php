<?php
$formAttribute = ['class' => 'form form-row justify-content-center'];
$staffName =  ['name' => 'staffName',
             'size' => '25'];
$function =  ['name' => 'function',
             'size' => '25'];
$staffLabel = ['class' => 'col-sm-4 col-form-label' ];
$functionLabel = ['class' => 'col-sm-4 col-form-label'];
$submitLabel = ['class' => 'col-sm-4 col-form-label'];
$submit = ['name' => 'submit',
           'value' => 'Submit',
           'class'=> 'button' ];
echo validation_errors("<li>","</li>");
echo form_open(base_url().'admin/Staff/Add',$formAttribute);
echo form_fieldset('Thêm nhân viên');
echo "<div class='form-group row'>";
echo form_label('Nhân viên','inputstaff',$staffLabel)."<div class='col-sm-8'>".form_input($staffName)."</div>".'<br>';
echo "</div>";
echo "<div class='form-group row'>";
echo form_label('Chức vụ','inputFunction',$functionLabel)."<div class='col-sm-8'>".form_input($function)."</div>".'<br>';
echo "</div>";
echo "<div class='form-group row'>";
echo form_label('&nbsp;','submit',$submitLabel)."<div class='col-sm-8'>".form_submit($submit)."</div>";
echo "</div>";
echo form_fieldset_close();
echo form_close();
?>
