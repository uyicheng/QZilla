<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Top extends SIS_Controller {

	 function __construct()
    {
       parent::__construct();
    }

	
	public function index()
	{ 
	
		$this->load->view($this->device . 'header_v');
		$this->load->view($this->device . 'nav_v');
		$this->load->view($this->device . 'top_v');
		$this->load->view($this->device . 'footer_v');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */