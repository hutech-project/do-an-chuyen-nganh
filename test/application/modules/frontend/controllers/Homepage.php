<?php


/**
 * Class Homepage
 * @author yourname
 */
class Homepage extends FrontendController
{
  /**
   * @param mixed
   */
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Room_Model');
    $this->_data['roomTypeList'] = $this->Room_Model->getAllRoomType();
  }

  /**
   * Index
   *
   * @return void
   */
  public function Index()
  {
    $this->_data['titlePage'] = "Homepage";
    $this->_data['loadPage'] = "frontend/Main";
    $this->load->view($this->_data['path'],$this->_data);
  }
  public function loadSTANDARDRoom(){
    $this->_data['titlePage'] = "Standard Room";
    $this->_data['loadPage'] = "frontend/Main_Standard";
    $this->load->view($this->_data['path'],$this->_data);
  }
  public function loadSUPERIORRoom(){
    $this->_data['titlePage'] = "Superior Room";
    $this->_data['loadPage'] = "frontend/Main_Superior";
    $this->load->view($this->_data['path'],$this->_data);
  }
  public function loadVIPRoom(){
    $this->_data['titlePage'] = "Vip Room";
    $this->_data['loadPage'] = "frontend/Main_Vip";
    $this->load->view($this->_data['path'],$this->_data);
  }
  public function loadDELUXERoom(){
    $this->_data['titlePage'] = "Deluxe Room";
    $this->_data['loadPage'] = "frontend/Main_Deluxe";
    $this->load->view($this->_data['path'],$this->_data);
  }
  public function Service(){
    $this->_data['titlePage'] = "Dịch Vụ";
    $this->_data['loadPage'] = "frontend/Main_Service";
    $this->load->view($this->_data['path'],$this->_data);
  }

  public function Booking() {
    $this->load->helper('form');
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->form_validation->CI =& $this;

    $this->form_validation->set_rules('roomType','roomType','required');
    $this->form_validation->set_rules('checkin','checkin','required');
    $this->form_validation->set_rules('checkout','checkout','required');
    $this->form_validation->set_rules('numberOfRoom','NumberOfRoom','required');
    $this->form_validation->set_rules('numberOfCustomer','numberOfCustomer','required');

    $this->_data['titlePage'] = "Thông Tin Khách Hàng";
    $this->_data['loadPage'] = "frontend/Info_Customer";
    $this->load->view($this->_data['path'],$this->_data);

    if ($this->form_validation->run() == true) {
        $today = date("Y-m-d");
        $roomType = $this->input->post('roomType');
        $checkin = $this->input->post('checkin');
        $checkout = $this->input->post('checkout');
        $numberOfRoom = $this->input->post('numberOfRoom');
        $numberOfCustomer = $this->input->post('numberOfCustomer');
        if(strtotime($checkin) > strtotime($checkout) || strtotime($checkin) < strtotime($today) || strtotime($checkout) < strtotime($today)) {
            $this->load->view('frontend/Error');
        } else {
            $data = ['roomType' => $roomType,
                'checkin' => $checkin,
                'checkout' => $checkout,
                'numberOfRoom' => $numberOfRoom,
                'numberOfCustomer' => $numberOfCustomer];
            $this->session->item = $data;
        }
    }
  }
  public function Customer() {
      $this->load->helper('form');
      $this->load->library('form_validation');
      $this->load->library('session');
      $this->load->model('Booking_Model');
      $this->form_validation->CI =& $this;

      $room = $this->session->userdata('item'); //lay thong tin ben form dang ky

      $this->form_validation->set_rules('yourname','yourname','required');
      $this->form_validation->set_rules('phone','phone','required');
      $this->form_validation->set_rules('address','address','required');


      if ($this->form_validation->run() == true) {
          $name=$this->input->post('yourname');
          $phone=$this->input->post('phone');
          $address=$this->input->post('address');
          $session = $this->session->userdata('item');
          $data = [
              'customer_name' => $name,
              'phone_number' => $phone,
              'address' => $address
          ];
          $booking = $data + $session;
          $this->Booking_Model->insert($booking);
          //$this->load->view('frontend/Message');
          //$this->load->view('frontend/Homepage');
          redirect(base_url().'frontend/Homepage');
      } else {
          $this->load->view($this->_data['path'] ,$this->_data);
      }

  }
}

?>
