<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class add_Model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
					
	}
	public function addShoe($Image,$name,$category,$price,$size)
	{
		$data = array(
			'image' => $Image, 
			'name' => $name, 
			'category' => $category, 
			'price' => $price, 
			'size' => $size
		);
		return $this->db->insert('products', $data);
	}
	public function addWatch($Image,$name,$category,$price,$size)
	{
		$data = array(
			'image' => $Image, 
			'name' => $name, 
			'category' => $category, 
			'price' => $price, 
			'size' => $size
		);
		return $this->db->insert('products', $data);
	}
	public function addAccessory($Image,$name,$category,$price,$size)
	{
		$data = array(
			'image' => $Image, 
			'name' => $name, 
			'category' => $category, 
			'price' => $price, 
			'size' => $size
		);
		return $this->db->insert('products', $data);
	}

}

/* End of file add_Model.php */
/* Location: ./application/models/add_Model.php */