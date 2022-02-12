<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('Product_View');
	}
	public function showCategoryProduct($category)
	{
		if ($category == 'shoe') {
			# code...
		}
	}

}

/* End of file Product_Controller.php */
/* Location: ./application/controllers/Product_Controller.php */