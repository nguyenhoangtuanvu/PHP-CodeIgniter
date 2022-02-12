<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('Home_View');
	}
	

}

/* End of file Home_Controller.php */
/* Location: ./application/controllers/Home_Controller.php */