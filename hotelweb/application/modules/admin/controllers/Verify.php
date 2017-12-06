<?php


/**
 * Class Verify
 * @author yourname
 */
class Verify extends AdminController
{
  /**
   * @param none 
   */
  public function __construct()
  {
    parent::__construct();
  }
  /**
   * Login Function
   *
   * @return void
   */
  public function Login()
  {
    $this->_data["titlePage"]="Login";
    $this->_data['loadPage']="verify/Login_view"; 
    $this->load->model("User_Model");
    $this->load->library('form_validation');
    $this->form_validation->CI =& $this;
  
    $this->form_validation->set_rules('username','Username' , 'required');
    $this->form_validation->set_rules('password','Password' , 'required');

    if($this->form_validation->run() == true){
      if($this->input->post('submit')){
        $username  = $this->input->post('username');
        $password = $this->input->post('password');
        if($this->User_Model->checkMatchAccount($username,$password) == true){
          $account_session = ['username' => $this->input->post('username'), 
                              'password' => $this->input->post('password'),
                              'email' => $this->input->post('email'),
                              'level' => $this->input->post('level')];
          $this->session->set_userdata($account_session);
          $this->session->set_flashdata('flash_mess' ,'Login Success');
          redirect(base_url().'/admin/User');
        }else{
          $this->_data['error_mess'] = 'username or password invalid, please try again';
          $this->load->view($this->_data['path'],$this->_data);
        }
      }
    }else{
    $this->load->view($this->_data['path'],$this->_data);
    }
  }
  
  /**
   * undocumented function
   *
   * @return void
   */
  public function Logout()
  {
    $this->session->sess_destroy();
    redirect(base_url().'admin/Verify/Login');
    exit();
  }
  
      
}

?>
