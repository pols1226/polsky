<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends MX_Controller{
	
	public function __construct(){
		parent::__construct();
		
		$this->load->library('ion_auth');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->template->set_theme('admin'); // APPPATH.'themes/user'
		$this->template->set_layout('login'); // get the file index.php from the folder APPPATH.'themes/user'
		
	}
	
	
}
