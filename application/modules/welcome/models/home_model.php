<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class home_model extends CI_Model{
	
    /* Gán tên bảng cần xử lý*/
    
    private $_name = 'bnc_product';
	
	function __construct(){
        parent::__construct();
    } 

    function show4sp(){
    	$a_User	= $this->db->select()
    					->limit(4, 0)
    					->order_by('pr_id', 'DESC')
						->get($this->_name)
				        ->result();
    	return $a_User;
    }

    function showsp(){
    	$a_User	= $this->db->select()
    					->limit(4, 4)
    					->order_by('pr_id', 'DESC')
						->get($this->_name)
				        ->result();
    	return $a_User;
    }

    function addcart($pr_id) {
        $addCart = $this->db->select()->where('pr_id',$pr_id)->get('bnc_product')->result();
        return $addCart;
    }
    
    public function i_fGetTotalBooks()
    {
    	return $this->db->select()->get($this->_name)->num_rows();
    }
  
}