<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Import_model extends CI_Model {

    public function importdata($data) {

        $res = $this->db->insert_batch('bnc_product',$data);
        if($res){
            return TRUE;
        }else{
            return FALSE;
        }

    }
 
}
 
?>