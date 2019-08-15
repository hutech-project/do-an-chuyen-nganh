<?php
class Calendar extends CI_Controller {
  public function __construct(){  
    parent::__construct();
    $this->load->helper("url");
  } 
  public function index(){
    $config=array("show_next_prev" => true,"next_prev_url"=>base_url().'index.php/Calendar/index');
    $this->load->library("calendar",$config);
    $y=$this->uri->segment(3);
    $m=$this->uri->segment(4);
    $event=array((int)"05"=>base_url()."index.php/Calendar/show/1",
                 "15"=>base_url()."index.php/Calendar/show/2",
                 "25"=>base_url()."index.php/Calendar/show/3");
    
    echo $this->calendar->generate($y,$m,$event);
  }
  /**
   * undocumented function
   *
   * @return void
   */
  public function show()
  {
    $id=$this->uri->segment(3);
    if ($id == 1) {
      echo "PHP Day";   
    }else if ($id == 2) {
      echo "Java Day"; 
    }else{
      echo "Ext JS day";
    }
    return null;
  }
} 
  
?>
