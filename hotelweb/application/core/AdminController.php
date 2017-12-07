<?php
class AdminController extends MY_Controller{
  protected $_data;
  public function __construct(){
    parent::__construct();
    $module=$this->uri->segment(1);
    $this->_data['module']=$module;
    $this->_data['path']="$module/Template";
    if($this->session->level != 2 && $this->uri->segment(2) != 'Verify'){
      redirect(base_url().'admin/Verify/Login');
    }
  }
}

?>
