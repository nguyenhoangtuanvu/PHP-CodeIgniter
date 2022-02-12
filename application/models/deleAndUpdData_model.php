<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class deleAndUpdData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
					
	}
	public function deleShoe($iddele)
	{
		$this->db->where('id', $iddele);
		return $this->db->delete('products');
	}
	public function updateData($id ,$image, $name, $price, $size)
	{
		$data = array(
			'image' => $image , 
			'name' => $name , 
			'price' => $price, 
			'size' => $size 
		);
		$this->db->where('id', $id);
		return $this->db->update('products', $data);
	}

}

/* End of file deleteData_model.php */
/* Location: ./application/models/deleteData_model.php */