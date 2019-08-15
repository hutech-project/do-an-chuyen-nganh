<?php
/**
 * Class user
 * @author yourname
 */

class Booking extends AdminController{
  public function __construct(){
    parent::__construct();
  }
  public function index(){
      $this->_data['loadPage']="booking/Index_view";
      $this->load->model("Booking_Model");

      $this->load->library('pagination');
      $config['base_url'] = base_url().'admin/Booking/index/';
      $config['total_rows'] = $this->Booking_Model->countAll();
      $config['per_page'] = 5;
      $config['uri_segment'] = 4;

      
      $this->pagination->initialize($config);
      $startOfIndexPage = $this->uri->segment(4);
      $this->_data['page'] = $this->pagination->create_links();



      $this->_data['info'] = $this->Booking_Model->listAllUser($config['per_page'],$startOfIndexPage);
      $this->_data['mess']= $this->session->flashdata('flash_mess');
      $this->load->view($this->_data['path'],$this->_data);
  }



}
?>
