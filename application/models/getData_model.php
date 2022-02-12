<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class getData_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
				
	}
	public function getProduct()
	{
		$this->db->select('*');
		$query = $this->db->get('products');
		$query = $query->result_array();
		return $query;
	}
	public function getShoes()
	{
		$this->db->select('*');
		$this->db->where('category', 'shoe');
		$query = $this->db->get('products');
		$query = $query->result_array();
		return $query;
	}
	public function getWatchs()
	{
		$this->db->select('*');
		$this->db->where('category', 'watch');
		$query = $this->db->get('products');
		$query = $query->result_array();
		return $query;
	}
	public function getAccessories()
	{
		$this->db->select('*');
		$this->db->where('category', 'accessory');
		$query = $this->db->get('products');
		$query = $query->result_array();
		return $query;
	}
	public function getProById($idget)
	{
		$this->db->select('*');
		$this->db->where('id', $idget);
		$query = $this->db->get('products');
		$query = $query->result_array();
		return $query;
	}

}

/* End of file getDB_model.php */
/* Location: ./application/models/getDB_model.php */