<?php


/**
 * Class Homepage
 * @author yourname
 */
class Homepage extends FrontendController
{
  /**
   * @param mixed 
   */
  public function __construct()
  {
    parent::__construct();
  }

  /**
   * Index
   *
   * @return void
   */
  public function Index()
  {
    $this->_data['titlePage'] = "Homepage";
    $this->_data['loadPage'] = "frontend/Main";
    $this->load->model('Room_Model');
    $this->_data['roomTypeList'] = $this->Room_Model->getAllRoomType();
    $this->load->view($this->_data['path'],$this->_data); 
  }
  
}

?>
