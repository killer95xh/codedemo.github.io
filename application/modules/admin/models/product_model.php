<?php 
	class Product_model extends MX_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->table = 'bnc_product';
		}
		function check_exitts($where = array()) {
			$this->db->where($where);
			$query = $this->db->get($this->table);
		}
	}
?>