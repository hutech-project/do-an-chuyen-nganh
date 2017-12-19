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
    $this->_data['loadPage']="user/User_view";
    $this->load->model("User_Model");
    // Pagination Confifure
    $this->load->library('pagination');
    $config['base_url'] = base_url().'admin/User/index/';
    $config['total_rows'] = $this->User_Model->countAll();
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
    $this->_data['info'] = $this->User_Model->listAllUser($config['per_page'],$startOfIndexPage);
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
    $this->load->model('User_Model');
    $this->_data["titlePage"]="Add A User";
    $this->_data['loadPage']="user/Add";
    $this->form_validation->set_rules('username' , 'Username' , 'required|min_length[4]|callback_checkUsernameUnique');
    $this->form_validation->set_rules('password' , 'Password' , 'required');
    $this->form_validation->set_rules('repassword' , 'Repassword' , 'required|matches[password]');
    $this->form_validation->set_rules('email', 'Email' , 'required|valid_email|callback_checkEmailUnique');

   if ($this->form_validation->run() == true) {
     $insert_data = ['username' => $this->input->post('username'),
                     'password' => $this->input->post('password') ,
                     'level' => $this->input->post('level') ,
                     'email' => $this->input->post('email') ];
     $this->User_Model->addUser($insert_data);
     $this->session->set_flashdata('flash_mess','Added');
     redirect(base_url().'admin/User/index');
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
    $this->load->model("User_Model");
    $this->User_Model->deleteUser($id);
    $this->session->set_flashdata('flash_mess' , 'Deleted');
    redirect(base_url().'admin/User/index');
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function Edit()
  {
    $id=$this->uri->segment(4);
    $this->load->model('User_Model');
    $this->_data['info']=$this->User_Model->getUserById($id);
    
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->form_validation->CI =& $this;
    $this->_data["titlePage"]="Edit User";
    $this->_data['loadPage']="user/Edit_view";

    $this->form_validation->set_rules('username' , 'Username' , 'required|min_length[4]|callback_checkUsernameUnique');
    
     $this->form_validation->set_rules('password' , 'Password' , 'trim' );
     $this->form_validation->set_rules('repassword' , 'Repassword' , 'trim|matches[password]');
    
    $this->form_validation->set_rules('email', 'Email' , 'required|valid_email|callback_checkEmailUnique');

    if ($this->form_validation->run() == true) {
      $update_data = ['username' => $this->input->post('username'),
                      'email' => $this->input->post('email'), 
                      'level' => $this->input->post('level')];
      if($this->input->post('password')){
        $update_data['password'] = $this->input->post('password');
      }
      $this->User_Model->updateUser($update_data,$id);
      $this->session->set_flashdata('flash_mess','Updated');
      redirect(base_url().'/admin/User/index');
    }else{  
    $this->load->view($this->_data['path'],$this->_data);
    }
  }
  
  
  /**
   * undocumented function
   *
   * @return void
   */
  public function  checkUsernameUnique($username,$id)
  {
    $id=$this->uri->segment(4);
    $this->load->model('User_Model');
    if ($this->User_Model->checkUsername($username,$id) == false) {
      $this->form_validation->set_message("checkUsernameUnique" , "Your username existed, please try again");
      return false;
    }
    else{
      return true;
    }
  }
  public function  checkEmailUnique($email,$id)
  {
    $id=$this->uri->segment(4);
    $this->load->model('User_Model');
    if ($this->User_Model->checkEmail($email,$id) == false) {
      $this->form_validation->set_message("checkEmailUnique" , "Your email existed, please try again");
      return false;
    }
    else{
      return true;
    }
  }
  
  
}
?>
