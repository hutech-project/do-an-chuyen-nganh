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
  

    if($this->input->post('submit')){
      if($this->input->post('username') ){
        $username  = $this->input->post('username');
      }else{
        $this->_data['error_mess'] = 'The Username is required.';
        //$username = '';
      }
      if ($this->input->post('password')) {
        $password = $this->input->post('password');
      } else {
        $this->_data['error_mess'] = 'The Password is required';
        //$password= '';
      } 
      $row=$this->User_Model->checkMatchAccount($username,$password);
        if($row != false){
          $account_session = ['username' => $row['username'], 
                              'password' => $row['pasword'],
                              'email' => $row['email'],
                              'level' => $row['level']];
          $this->session->set_userdata($account_session);
          $this->session->set_flashdata('flash_mess' ,'Login Success');
          redirect(base_url().'admin/User/index');
        }else{
          $this->_data['error_mess'] = 'username or password invalid, please try again';
        }
      } 
      $this->load->view($this->_data['path'],$this->_data);
    
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
