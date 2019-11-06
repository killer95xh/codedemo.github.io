<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
    class Export_model extends CI_Model {

        private $_product = 'bnc_product';
 
        public function __construct()
        {
            $this->load->database();
        }
        
        public function exportList() {
            $this->db->select(array('user_id', 'user_fullname', 'user_email', 'user_level'));
            $this->db->from('users');
            $this->db->order_by('user_id','DESC');
            $query = $this->db->get();
            return $query->result();
        }
        
        public function exproduct() {
            $this->db->select(array('pr_id', 'pr_title', 'pr_description', 'pr_price'));
            $this->db->from('bnc_product');
            $this->db->order_by('pr_id','DESC');
            $query = $this->db->get();
            return $query->result();
        }

        public function phantrangex($productpage, $off) {
            $a_phantrang = $this->db->select()
    					->limit($productpage, $off)
    					->order_by('pr_id', 'DESC')
						->get($this->_product)
				        ->result();
    	    return $a_phantrang;
        }

        public function tong() {
            return $this->db->select()->get($this->_product)->num_rows();
        }
    }
?>