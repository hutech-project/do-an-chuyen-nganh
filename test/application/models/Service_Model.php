<?php


/**
 * Class User_Model
 * @author yourname
 */
class Service_Model extends CI_Model
{
  protected $_table='service';
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
  public function listAllService($numberOfRecords,$startOfIndexPage)
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
  public function checkServiceName($serviceName,$id='')
  {
    if ($id != '') {
      $this->db->where('service_id != ',$id);
    }
    $this->db->where('service_name',$serviceName);
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
  public function addService($data)
  {
    return $this->db->insert($this->_table,$data);
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function deleteService($id)
  {
    $this->db->where('service_id',$id);
    $this->db->delete($this->_table);
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function getServiceById($id)
  {
    $this->db->where('service_id',$id);
    return $this->db->get($this->_table)->row_array();
  }
  public function updateService($data,$id)
  {
    $this->db->where('service_id' , $id);
    $this->db->update($this->_table,$data);  
  }  
  
  
  
  
  
}
?>  
