<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Login_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		
		//$this->load->model('login_database');
	}

	public function index()
	{
		$this->load->view('Login_View');
	}
}

/* End of file Login_controller.php */
/* Location: ./application/controllers/Login_controller.php */