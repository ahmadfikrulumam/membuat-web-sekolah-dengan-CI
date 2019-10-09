<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function _construct(){
		parent::_construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('v_home.php');
	}
}
