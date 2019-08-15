<?php
/**
 * Class user
 * @author yourname
 */

class RoomType  extends AdminController{
  public function __construct(){
    parent::__construct();
  }    
  public function index(){
    $this->_data["titlePage"]="List All Room Type";
    $this->_data['loadPage']="roomtype/Roomtype_view";
    $this->load->model("Room_Model");
    // Pagination Confifure
    $this->load->library('pagination');
    $config['base_url'] = base_url().'admin/RoomType/index/';
    $config['total_rows'] = $this->Room_Model->countAllRoomType();
    $config['per_page'] = 5;
    $config['uri_segment'] = 4;
    // Custom BootStrap Pagination
    // Custom full tag
    $config['full_tag_open'] = "<ul class='pagination justify-content-center'>";   
    $config['full_tag_close'] = "</ul>";
    //
    //Custom Current Page
    $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close'] = '</span></li>';
    // Custom Prev
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_link'] = '&lt;';
    $config['prev_tag_close'] = '</a></li>';
    //
    // Custom Number 
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</a></li>';
    //
    // Custom Next
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_link'] = '&gt;';
    $config['next_tag_close'] = '</li>';
    //Custom Pagination Link
    $config['attributes'] = array('class' => 'page-link');
    $config['attributes']['rel'] = FALSE;
    //
      
    $this->pagination->initialize($config);
    $startOfIndexPage = $this->uri->segment(4);
    $this->_data['page'] = $this->pagination->create_links();
    //
    $this->_data['info'] = $this->Room_Model->listAllRoomType($config['per_page'],$startOfIndexPage);
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
    $this->_data["titlePage"]="Add A Room Type";
    $this->_data['loadPage']="roomtype/Add";
    $this->form_validation->set_rules('roomType' , 'Room Type' , 'required|callback_checkRoomTypeUnique');
    $this->form_validation->set_rules('price' , 'Price' , 'required');

   if ($this->form_validation->run() == true) {
     $insert_data = ['room_type' => $this->input->post('roomType'),
                     'price' => $this->input->post('price') 
                      ];
     $this->Room_Model->addRoomType($insert_data);
     $this->session->set_flashdata('flash_mess','Added');
     redirect(base_url().'admin/RoomType/index');
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
    $this->Room_Model->deleteRoomType($id);
    $this->session->set_flashdata('flash_mess' , 'Deleted');
    redirect(base_url().'admin/RoomType/index');
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
    $this->_data['info']=$this->Room_Model->getRoomTypeById($id);
    
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->CI =& $this;
    $this->_data["titlePage"]="Edit Room Type";
    $this->_data['loadPage']="roomtype/Edit_view";

    $this->form_validation->set_rules('roomType' , 'Room Type' , 'required|callback_checkRoomTypeUnique');
    
    $this->form_validation->set_rules('price' , 'Price' , 'required' );

    if ($this->form_validation->run() == true) {
      $update_data = ['room_type' => $this->input->post('roomType'),
                      'price' => $this->input->post('price') 
                      ];
      $this->Room_Model->updateRoomType($update_data,$id);
      $this->session->set_flashdata('flash_mess','Updated');
      redirect(base_url().'/admin/RoomType/index');
    }else{  
    $this->load->view($this->_data['path'],$this->_data);
    }
  }
  
  
  /**
   * undocumented function
   *
   * @return void
   */
  public function  checkRoomTypeUnique($roomType,$id)
  {
    $id=$this->uri->segment(4);
    $this->load->model('Room_Model');
    if ($this->Room_Model->checkRoomType($roomType,$id) == false) {
      $this->form_validation->set_message("checkRoomTypeUnique" , "Room Type existed, please try again");
      return false;
    }
    else{
      return true;
    }
  }
  
  
}
?>
