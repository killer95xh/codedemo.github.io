<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Pagination_model extends CI_Model{
	
	/* Gán tên bảng cần xử lý*/
	private $_name = 'bnc_product';
	
	function __construct(){
        parent::__construct();
    } 

    function a_fGetBooks( $perpage, $offset ){
    	$a_User	= $this->db->select()
    					->limit($perpage, $offset)
    					->order_by('name', 'ASC')
					->get($this->_name)
				        ->result();
    	return $a_User;
    }
    
    public function i_fGetTotalBooks()
    {
    	return $this->db->select()->get($this->_name)->num_rows();
    }
  
}