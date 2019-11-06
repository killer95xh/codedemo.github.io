<?php
    class Shop_model extends CI_Model{

        public function getList($id){
            $query = $this->db->get_Where('bnc_product', array('pr_id' => $id) );
            $row = $query->row();
            $data=array(
                "id" => $row->pr_id,
                "name" => $row->pr_title,
                "qty" => "1",
                "img" => $row->pr_img,
                "price" => $row->pr_price,
            );
            return $data;
        }

        public function maGG() {
            $query = $this->db->get_Where('sale', array('id' => 1));
            $row = $query->row();
        }

        public function base64url_encode($data) { 
            return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
        } 
        public function base64url_decode($data) { 
            return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
        }   
        public function sosanhma($where = array()) {
            $this->db->where($where);
            $query = $this->db->get('sale');
			if($query->num_rows() > 0) {
                return TRUE;
			}else {
                return FALSE;
			}
		}
    }
    ?>