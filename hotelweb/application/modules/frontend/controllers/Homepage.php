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
  public function loadSTANDARDRoom(){
    $this->_data['titlePage'] = "Standard Room";
    $this->_data['loadPage'] = "frontend/Main_Standard";
    $this->load->model('Room_Model');
    $this->_data['roomTypeList'] = $this->Room_Model->getAllRoomType();
    $this->load->view($this->_data['path'],$this->_data);
  }
  public function loadSUPERIORRoom(){
    $this->_data['titlePage'] = "Superior Room";
    $this->_data['loadPage'] = "frontend/Main_Superior";
    $this->load->model('Room_Model');
    $this->_data['roomTypeList'] = $this->Room_Model->getAllRoomType();
    $this->load->view($this->_data['path'],$this->_data);
  }
  public function loadVIPRoom(){
    $this->_data['titlePage'] = "Vip Room";
    $this->_data['loadPage'] = "frontend/Main_Vip";
    $this->load->model('Room_Model');
    $this->_data['roomTypeList'] = $this->Room_Model->getAllRoomType();
    $this->load->view($this->_data['path'],$this->_data);
  }
  public function loadDELUXERoom(){
    $this->_data['titlePage'] = "Deluxe Room";
    $this->_data['loadPage'] = "frontend/Main_Deluxe";
    $this->load->model('Room_Model');
    $this->_data['roomTypeList'] = $this->Room_Model->getAllRoomType();
    $this->load->view($this->_data['path'],$this->_data);
  }
}

?>
