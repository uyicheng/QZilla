<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Controller
 *
 * @author lenovo
 */
class SIS_Controller extends CI_Controller {

    //put your code here

    protected $device;

    function __construct() {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('html');
        $this->load->helper('cookie');		
		$this->load->library('user_agent');
		
		if ($this->agent->is_mobile()) {
			$this->device = "m/";
		} else {
			$this->device = "p/";
		}
    }

}

?>
