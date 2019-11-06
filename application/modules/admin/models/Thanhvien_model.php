<?php 
	class Thanhvien_model extends CI_Model
	{
		public function check_exists($where = array()) {
			$this->db->where($where);
			$query = $this->db->get('users');
			if($query->num_rows() > 0) {
				return TRUE;
			}else {
				return FALSE;
			}
		}
	}
?>