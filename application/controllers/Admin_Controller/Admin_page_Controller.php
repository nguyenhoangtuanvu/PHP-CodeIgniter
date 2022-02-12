<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_page_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('getData_model');
		$product = $this->getData_model->getProduct();
		$product = array('metadata' => $product );

		$this->load->view('view_admin/Admin_page_index', $product, FALSE);

	}
}

/* End of file Admin_page_Controller.php */
/* Location: ./application/controllers/Admin_page_Controller.php */