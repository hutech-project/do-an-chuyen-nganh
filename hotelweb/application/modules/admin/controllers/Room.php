<?php
/**
 * Class user
 * @author yourname
 */

class Room extends AdminController{
  public function __construct(){
    parent::__construct();
  }    
  public function index(){
    $this->_data["titlePage"]="List All Room";
    $this->_data['loadPage']="room/Index_view";
    $this->load->model("Room_Model");
    // Pagination Confifure
    $this->load->library('pagination');
    $config['base_url'] = base_url().'admin/Room/index/';
    $config['total_rows'] = $this->Room_Model->countAllRoom();
    $config['per_page'] = 10;
    $config['uri_segment'] =4; 
      ;
    $this->pagination->initialize($config);
    $startOfIndexPage = $this->uri->segment(4);
    $this->_data['page'] = $this->pagination->create_links();
    //
    $this->_data['info'] = $this->Room_Model->listAllRoomInfo($config['per_page'],$startOfIndexPage);
    $this->_data['mess']= $this->session->flashdata('flash_mess');
    $this->load->view($this->_data['path'],$this->_data);
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function Add()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->CI =& $this;
    $this->load->model('Room_Model');
    $this->_data["titlePage"]="Add A Room";
    $this->_data['loadPage']="room/Add";

    $this->_data['roomTypeList'] = $this->Room_Model->getAllRoomType();
    $a = array();
    foreach ($this->_data['roomTypeList'] as $key ) {
      array_push($a , $key['room_type']);
    }
    $list = implode("," , $a);
    $this->form_validation->set_rules('roomName' , 'Room Name' , 'required|callback_checkRoomNameUnique');
    $this->form_validation->set_rules('capacity' , 'Capacity' , 'required');
    $this->form_validation->set_rules('roomType' , 'Room Type' , "required|in_list[$list]");

    if ($this->form_validation->run() == true) {
     $typeId = $this->Room_Model->getTypeIdByRoomType($this->input->post('roomType')); 
     $insert_dataRoom = [ 
                          'room_name' => $this->input->post('roomName'),
                          'number_people' => $this->input->post('capacity'),
                          'type_id' => $typeId['type_id']];
     $this->Room_Model->addRoom($insert_dataRoom);
     $this->session->set_flashdata('flash_mess','Added');
     redirect(base_url().'admin/Room/index');
   }else{
    $this->load->view($this->_data['path'] ,$this->_data);
   }
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function Delete()
  {
    $id=$this->uri->segment(4);
    $this->load->model("Room_Model");
    $this->Room_Model->deleteRoom($id);
    $this->session->set_flashdata('flash_mess' , 'Deleted');
    redirect(base_url().'admin/Room/index');
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function Edit()
  {
    $id=$this->uri->segment(4);
    $this->load->model('Room_Model');
    $this->_data['info']=$this->Room_Model->getRoomInfoById($id);
    
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->CI =& $this;
    $this->_data["titlePage"]="Edit Room";
    $this->_data['loadPage']="room/Edit_view";

    $this->_data['roomTypeList'] = $this->Room_Model->getAllRoomType();
    $a = array();
    foreach ($this->_data['roomTypeList'] as $key ) {
      array_push($a , $key['room_type']);
    }
    $list = implode("," , $a);
    $this->form_validation->set_rules('roomName' , 'Room Name' , 'required|callback_checkRoomNameUnique');
    $this->form_validation->set_rules('status' , 'Status' , 'required');
    $this->form_validation->set_rules('capacity' , 'Capacity' , 'required');
    $this->form_validation->set_rules('roomType' , 'Room Type' , "required|in_list[$list]");

    if ($this->form_validation->run() == true) {
      $typeId = $this->Room_Model->getTypeIdByRoomType($this->input->post('roomType'));
      $update_data = ['room_name' => $this->input->post('roomName'),
                      'status' => (int)$this->input->post('status'),
                      'number_people' => $this->input->post('capacity'),
                      'type_id' => $typeId['type_id']
                      ];
      $this->Room_Model->updateRoom($update_data,$id);
      $this->session->set_flashdata('flash_mess','Updated');
      redirect(base_url().'/admin/Room/index');
    }else{  
    $this->load->view($this->_data['path'],$this->_data);
    }
  }
  
  
  /**
   * undocumented function
   *
   * @return void
   */
  public function  checkRoomNameUnique($roomName,$id)
  {
    $id=$this->uri->segment(4);
    $this->load->model('Room_Model');
    if ($this->Room_Model->checkRoomName($roomName,$id) == false) {
      $this->form_validation->set_message("checkRoomNameUnique" , "Room Name existed, please try again");
      return false;
    }
    else{
      return true;
    }
  }
  
  
}
?>
