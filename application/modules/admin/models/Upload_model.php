<?php
class Upload_model extends CI_Model{

	function save_upload($title,$image){
		$data = array(
	        	'title' 	=> $title,
	        	'file_name' => $image
	       	);  
	    $result= $this->db->insert('bnc_product',$data);
	    return $result;
	}
}