<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Thanhvien_model');
        $this->load->library("session");
    }
    public function index() {
		$this->load->view('login');
    }
    
    function check_login() {
        $taikhoan = $this->input->post('user');
        $matkhau = $this->input->post('pass');
        $where = array('user_email'=>$taikhoan,'user_pass'=>$matkhau);
        if($this->Thanhvien_model->check_exists($where))
        {
            $sql = $this->db->select()->where('user_email',$taikhoan)->get('users');
            $row = $sql->row();
            $user_level = $row->user_level;
            $tk = $row->user_fullname;
            $newdata=array(
                "taikhoan" => $taikhoan,
                "matkhau" => $matkhau,
                "user_level" => $user_level
            );
            $this->session->set_userdata('taikhoan',$newdata);
            $this->session->set_userdata('user_level',$user_level);
            $this->session->set_userdata('user',$tk);
            redirect('http://webdemo.com/dasboard');
        }
        else
        {
            // tao 1 message thong bao dang nhap ko thanh cong
            // $this->form_validation->set_message(__FUNCTION__,'Không đăng nhập thành công');
            $this->load->view('login');
        }
    }
    
    
}