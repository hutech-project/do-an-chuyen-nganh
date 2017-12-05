<?php


/**
 * Class User_Model
 * @author yourname
 */
class User_Model extends CI_Model
{
  protected $_table='user';
  /**
   * @param mixed $dependencies
   */
  public function __construct()
  {
    parent::__construct();
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function listAllUser($numberOfRecords,$startOfIndexPage)
  {
    $this->db->limit( $numberOfRecords,$startOfIndexPage);
    return $this->db->get($this->_table)->result_array();
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function countAll()
  {
    return $this->db->count_all($this->_table);
  }
  public function checkUsername($username,$id='')
  {
    if ($id != '') {
      $this->db->where('id != ',$id);
    }
    $this->db->where('username',$username);
    $query = $this->db->get($this->_table);
    if($query->num_rows()>0){
      return false;
    }
    else{
      return true;
    }
  }
  /**
   * undocumented function
   *
   * @return list of email
   */
  public function checkEmail($email,$id='')
  {
    if ($id != '') {
      $this->db->where('id !=' , $id);
    }
    $this->db->where('email',$email);
    $query = $this->db->get($this->_table);
    if($query->num_rows()>0){
      return false;
    }
    else{
      return true;
    }
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function addUser($data)
  {
    return $this->db->insert($this->_table,$data);
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function deleteUser($id)
  {
    $this->db->where('id',$id);
    $this->db->delete($this->_table);
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function getUserById($id)
  {
    $this->db->where('id',$id);
    return $this->db->get($this->_table)->row_array();
  }
  public function updateUser($data,$id)
  {
    $this->db->where('id' , $id);
    $this->db->update($this->_table,$data);  
  }  
  /**
   * Verify Account
   *
   * @return boolean
   */
  public function checkMatchAccount($username,$password)
  {
    $this->db->where('username' , $username);
    $this->db->where('password' , $password);
    if($this->db->get($this->_table)->num_rows() > 0){
      return true;
    }else{
      return false;
    }
  }
  
  
  
  
  
}
?>  
