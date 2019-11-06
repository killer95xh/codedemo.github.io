<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library("session");
	}
	public function base64url_encode($data) { 
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
    }
	function index() {
		if(null!==($this->session->userdata("taikhoan"))) {
			$data['user_level'] = $this->session->userdata("user_level");
			$data['name'] = $this->session->userdata("user");
			$data['content_view'] = 'admin/home';
			$this->template->sample_template($data);
		}
		else {
			$this->load->view('login');
		}
	}
	function edit_product() {
		if (null!==($this->session->userdata("taikhoan"))) {
			$data['name'] = $this->session->userdata("user");
			$data['content_view'] = 'admin/edit_product';
			$this->template->sample_template($data);
		}
		else {
			$this->load->view('login');
		}
	}
	function edit_user() {
		if(null!==($this->session->userdata("taikhoan"))) {
			$data['name'] = $this->session->userdata("user");
			$data['content_view'] = 'admin/edit_user';
			$this->template->sample_template($data);
		}
		else {
			$this->load->view('login');
		}
	}
	function logout() {
		$this->session->sess_destroy();
		$this->load->view('login');
	}

	function resetpass() {
        $this->load->view('resetpass');
	}
	
	function resetpass2() {
		$this->load->view('resetpass2');
	}

	function addsale() {
		$this->load->model('sale_model');
		$data['listsale'] = $this->sale_model->showsale();
		$data['name'] = $this->session->userdata("user");
		$data['content_view'] = 'admin/addsale';
		$this->template->sample_template($data);
	}
	function adds() {
		$this->load->model('sale_model');
		$token = $this->sale_model->insertToken();                        
		$qstring = $this->base64url_encode($token); 
		$data['listsale'] = $this->sale_model->showsale();
		$data['name'] = $this->session->userdata("user");
		$data['content_view'] = 'admin/addsale';
		$this->template->sample_template($data);
	}
	function donhang() {
		$this->load->model('sale_model');
		$data['donhang'] = $this->sale_model->donhang();
		$data['name'] = $this->session->userdata("user");
		$data['content_view'] = 'admin/donhang';
		$this->template->sample_template($data);
	}

	function dangky() {
		$this->load->view('dangky');
	}
}