<?php
/**
 * Class user
 * @author yourname
 */

class User extends AdminController{
  public function __construct(){
    parent::__construct();
  }    
  public function index(){
    $this->_data["titlePage"]="List All User";
    $this->_data['loadPage']="user/Index_view";
    $this->load->view($this->_data['path'],$this->_data);
  }

}
?>
