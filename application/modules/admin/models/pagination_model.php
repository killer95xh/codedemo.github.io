<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pagination_model extends CI_Model{
	
	/* Gán tên bảng cần xử lý*/
	private $_name = 'users';
	private $_product = 'bnc_product';
	
	function __construct(){
        parent::__construct();
    } 

    function a_fGetBooks( $perpage, $offset ){
    	$a_User	= $this->db->select()
    					->limit($perpage, $offset)
    					->order_by('user_id', 'DESC')
						->get($this->_name)
				        ->result();
    	return $a_User;
    }
    
    public function i_fGetTotalBooks()
    {
    	return $this->db->select()->get($this->_name)->num_rows();
	}
	
	function a_getProducts ($productpage, $off) {
		$a_Product = $this->db->select()
								->limit($productpage, $off)
								->order_by('pr_id', 'DESC')
								->get($this->_product)
								->result();
		return $a_Product;
	}
	public function i_Products() {
		return $this->db->select()->get($this->_product)->num_rows();
	}
  
}