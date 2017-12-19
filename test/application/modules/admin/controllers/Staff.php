<?php
/**
 * Class user
 * @author yourname
 */

class Staff extends AdminController{
  public function __construct(){
    parent::__construct();
  }    
  public function index(){
    $this->_data["titlePage"]="List All Staff";
    $this->_data['loadPage']="staff/Staff_view";
    $this->load->model("Staff_Model");
    // Pagination Confifure
    $this->load->library('pagination');
    $config['base_url'] = base_url().'admin/Staff/index/';
    $config['total_rows'] = $this->Staff_Model->countAll();
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
    $this->_data['info'] = $this->Staff_Model->listAllStaff($config['per_page'],$startOfIndexPage);
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
    $this->load->model('Staff_Model');
    $this->_data["titlePage"]="Add A Staff";
    $this->_data['loadPage']="staff/Add";
    $this->form_validation->set_rules('staffName' , 'Staff Name' , 'required');
    $this->form_validation->set_rules('function','Function' , 'required');

   if ($this->form_validation->run() == true) {
     $insert_data = ['employee_name' => $this->input->post('staffName'),
                     'function' => $this->input->post('function') 
                      ];
     $this->Staff_Model->addStaff($insert_data);
     $this->session->set_flashdata('flash_mess','Added');
     redirect(base_url().'admin/Staff/index');
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
    $this->load->model("Staff_Model");
    $this->Staff_Model->deleteStaff($id);
    $this->session->set_flashdata('flash_mess' , 'Deleted');
    redirect(base_url().'admin/Service/index');
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function Edit()
  {
    $id=$this->uri->segment(4);
    $this->load->model('Staff_Model');
    $this->_data['info']=$this->Staff_Model->getStaffById($id);
    
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->CI =& $this;
    $this->_data["titlePage"]="Edit Staff";
    $this->_data['loadPage']="staff/Edit_view";

    $this->form_validation->set_rules('staffName' , 'Staff Name' , 'required');
    
    $this->form_validation->set_rules('function' , 'Function' , 'required' );

    if ($this->form_validation->run() == true) {
      $update_data = ['employee_name' => $this->input->post('staffName'),
                      'function' => $this->input->post('function') 
                      ];
      $this->Staff_Model->updateStaff($update_data,$id);
      $this->session->set_flashdata('flash_mess','Updated');
      redirect(base_url().'/admin/Staff/index');
    }else{  
    $this->load->view($this->_data['path'],$this->_data);
    }
  }
  
  
  
}
?>
