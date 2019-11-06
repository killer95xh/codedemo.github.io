<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdduserController extends MX_Controller {

   function __construct() {
      parent::__construct();
      $this->load->helper('url');
      $this->load->model('upload_model');
  }

   public function ajaxRequestPost(){
       $data = array(
            'user_fullname' => $this->input->post('user_fullname'),
            'user_pass' => $this->input->post('user_pass'),
            'user_email' => $this->input->post('user_email'),
            'user_level' => $this->input->post('user_level')
         );
      $this->db->insert('users', $data);
      $query = $this->db->get('users');
      $row = $query->last_row();
      echo json_encode($row);
   }

   public function ajaxProduct() {
      //upload file
      $config['upload_path'] = 'frontadmin/images/';
      $config['allowed_types'] = '*';
      $config['max_filename'] = '255';
      $config['encrypt_name'] = TRUE;
      $config['max_size'] = '1024'; //1 MB
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      $this->upload->do_upload("file");
      $filename  = 	$this->upload->data();
      $data = array(
         'pr_title' => $this->input->post('pr_title'),
         'pr_img' => $filename['file_name'],
         'pr_description' => $this->input->post('pr_description'),
         'pr_price' => $this->input->post('pr_price'),
      );
      $this->db->insert('bnc_product', $data);
      $query = $this->db->get('bnc_product');
      $row = $query->last_row();
      echo json_encode($row);
    }

   public function delProduct() {
      $this->uri->segment('n');
      $pr_id = $this->uri->segment('2');
      $this->db->delete('bnc_product', array('pr_id' => $pr_id));
      redirect('http://webdemo.com/product');
   }

   public function delUser() {
      $this->uri->segment('n');
      $user_id = $this->uri->segment('2');
      $this->db->delete('users', array('user_id' => $user_id));
      redirect('http://webdemo.com/about');
   }

   public function editProduct() {
      
      if($_FILES !== NULL) {
         $config['upload_path'] = 'frontadmin/images/';
         $config['allowed_types'] = '*';
         $config['max_filename'] = '255';
         $config['encrypt_name'] = TRUE;
         $config['max_size'] = '1024'; //1 MB
         $this->load->library('upload', $config);
         $this->upload->initialize($config);
         $this->upload->do_upload("file");
         $filename  = 	$this->upload->data();
         $data = array (
            'pr_id' => $this->input->post('pr_id'),
            'pr_title' => $this->input->post('pr_title'),
            'pr_description' => $this->input->post('pr_description'),
            'pr_price' => $this->input->post('pr_price'),
            'pr_img' => $filename['file_name']
         );
         $this->db->replace('bnc_product', $data);
      }else {
         $data = array (
            'pr_id' => $this->input->post('pr_id'),
            'pr_title' => $this->input->post('pr_title'),
            'pr_description' => $this->input->post('pr_description'),
            'pr_price' => $this->input->post('pr_price'),
            'pr_img' => $this->input->post('pr_img')
         );
         $this->db->update('bnc_product', $data);
      }
   }

   public function edituser() {
      $data = array (
         'user_id' => $this->input->post('user_id'),
         'user_fullname' => $this->input->post('user_fullname'),
         'user_email' => $this->input->post('user_email'),
         'user_pass' => $this->input->post('user_pass'),
         'user_level' => $this->input->post('user_level'),
      );
      $this->db->replace('users', $data);
   }

}