<?php
class Booking_Model extends CI_Model
{
    protected $_table='booking';
    public function __construct(){
        parent::__construct();
    }
   public function insert($data){
     $this->db->insert("booking",$data);
     return true;
   }

   public function countAll()
   {
     return $this->db->count_all($this->_table);
   }

   public function listAllUser($numberOfRecords,$startOfIndexPage)
   {
     $this->db->limit( $numberOfRecords,$startOfIndexPage);
     return $this->db->get($this->_table)->result_array();
   }
}
