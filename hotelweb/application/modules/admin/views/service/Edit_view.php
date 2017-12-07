<div class='formPanel medium'>
<?php
$serviceName =  ['name' => 'serviceName',
              'size' => '25',
              'value' => $info['service_name']  
              ];
$price =  ['name' => 'price',
           'size' => '25',
           'value'=> $info['price'] ];
$submit = ['name' => 'submit',
           'value' => 'Submit',
           'class'=> 'button' ];
echo validation_errors("<li>","</li>");
echo form_fieldset('Edit User');
echo form_open(base_url().'admin/service/Edit/'.$info['service_id']);
echo form_label('Service Name').form_input($serviceName).'<br>';
echo form_label('Price').form_input($price).'<br>';
echo form_label('&nbsp;').form_submit($submit);
echo form_close();
echo form_fieldset_close();

?>
</div>
