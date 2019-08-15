<?php


/**
 * Class User_Model
 * @author yourname
 */
class Staff_Model extends CI_Model
{
  protected $_table='employee';
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
  public function listAllStaff($numberOfRecords,$startOfIndexPage)
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
  public function checkStaffName($staffName,$id='')
  {
    if ($id != '') {
      $this->db->where('employee_id != ',$id);
    }
    $this->db->where('employee_name',$staffName);
    $query = $this->db->get($this->_table);
    if($query->num_rows()>0){
      return false;
    }
    else{
      return true;
    }
  }
  /**
  /**
   * undocumented function
   *
   * @return void
   */
  public function addStaff($data)
  {
    return $this->db->insert($this->_table,$data);
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function deleteStaff($id)
  {
    $this->db->where('employee_id',$id);
    $this->db->delete($this->_table);
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function getStaffById($id)
  {
    $this->db->where('employee_id',$id);
    return $this->db->get($this->_table)->row_array();
  }
  public function updateStaff($data,$id)
  {
    $this->db->where('employee_id' , $id);
    $this->db->update($this->_table,$data);  
  }  
  
  
  
  
  
}
?>  
