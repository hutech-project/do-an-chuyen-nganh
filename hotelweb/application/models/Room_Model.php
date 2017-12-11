<?php


/**
 * Class User_Model
 * @author yourname
 */
class Room_Model extends CI_Model
{
  protected $_tableRoom='room';
  protected $_tableRoomType='room_type';
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
  public function listAllRoom($numberOfRecords,$startOfIndexPage)
  {
    $this->db->limit( $numberOfRecords,$startOfIndexPage);
    return $this->db->get($this->_tableRoom)->result_array();
  }
  public function listAllRoomType($numberOfRecords,$startOfIndexPage)
  {
    $this->db->limit( $numberOfRecords,$startOfIndexPage);
    return $this->db->get($this->_tableRoomType)->result_array();
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function countAllRoom()
  {
    return $this->db->count_all($this->_tableRoom);
  }
  public function countAllRoomType()
  {
    return $this->db->count_all($this->_tableRoomType);
  }
  public function checkRoomName($roomName,$id='')
  {
    if ($id != '') {
      $this->db->where('room_id != ',$id);
    }
    $this->db->where('room_name',$roomName);
    $query = $this->db->get($this->_tableRoom);
    if($query->num_rows()>0){
      return false;
    }
    else{
      return true;
    }
  }
  public function checkRoomType($roomType,$id='')
  {
    if ($id != '') {
      $this->db->where('type_id != ',$id);
    }
    $this->db->where('room_type',$roomType);
    $query = $this->db->get($this->_tableRoomType);
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
  public function addRoom($data)
  {
    return $this->db->insert($this->_tableRoom,$data);
  }
  public function addRoomType($data)
  {
    return $this->db->insert($this->_tableRoomType,$data);
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function deleteRoom($id)
  {
    $this->db->where('room_id',$id);
    $this->db->delete($this->_tableRoom);
  }
  public function deleteRoomType($id)
  {
    $this->db->where('type_id',$id);
    $this->db->delete($this->_tableRoomType);
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function getRoomById($id)
  {
    $this->db->where('room_id',$id);
    return $this->db->get($this->_tableRoom)->row_array();
  }
  public function getRoomTypeById($id)
  {
    $this->db->where('type_id',$id);
    return $this->db->get($this->_tableRoomType)->row_array();
  }
  public function updateRoom($data,$id)
  {
    $this->db->where('room_id' , $id);
    $this->db->update($this->_tableRoom,$data);  
  }  
  public function updateRoomType($data,$id)
  {
    $this->db->where('type_id' , $id);
    $this->db->update($this->_tableRoomType,$data);  
  }  
  public function getTypeIdByRoomType($data){
    $this->db->where('room_type' , $data);
    return $this->db->get($this->_tableRoomType)->row_array();    
  } 
  public function listAllRoomInfo($numberOfRecords,$startOfIndexPage){
    $this->db->from($this->_tableRoom);
    $this->db->join($this->_tableRoomType , 'room.type_id = room_type.type_id');
    $this->db->limit($numberOfRecords,$startOfIndexPage);
    return $this->db->get()->result_array();
  } 
  /**
   * get all room information
   *
   * @return room
   */
  public function getRoomInfoById($id)
  {
    $this->db->from($this->_tableRoom);
    $this->db->join($this->_tableRoomType,'room.type_id = room_type.type_id');
    $this->db->where('room_id' , $id);
    return $this->db->get()->row_array();
  }
 /**
  * undocumented function
  *
  * @return void
  */
 public function getAllRoomType()
 {
   $this->db->select('room_type');
   return $this->db->get($this->_tableRoomType)->result_array();
 }
  
  
  
}
?>  
