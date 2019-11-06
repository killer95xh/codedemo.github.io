<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct() {
        parent::__construct();
        // load model
		$this->load->helper('url');
		$this->load->model('home_model');
		$this->load->library('cart');
    }   
	public function index() {
		$a_Data['spview'] = $this->home_model->show4sp();
		$a_Data['spvi'] = $this->home_model->showsp();
		$a_Data['list'] = $this->cart->contents();
		$this->load->view('home', $a_Data);
	}
	public function thanhtoan(){
		$this->load->model('Shop_model');
		$magg = $this->input->post('magg');
		$where = array('sale_id'=>$magg);
		$sos = $this->Shop_model->sosanhma($where);
		if($sos == false) {
			$data['kq'] = $this->cart->total();
			$data['magg'] = $magg;
			$data['list'] = $this->cart->contents();
			$this->load->view('thanhtoan', $data);
		}else {
			$gg = (($this->cart->total()/100));
			$data['kq'] = ($this->cart->total() - ($gg*10));
			$data['magg'] = $magg;
			$data['list'] = $this->cart->contents();
			$this->load->view('thanhtoan', $data);
		}
	}
	public function adddonhang() {
		$a = $this->cart->contents();
		foreach ($a as $p) {
			$s=$p['name'];
		}
		$data = array(
			'name_user' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'name' => $s,
			'qty' =>  $this->cart->total_items(),
			'price' => $this->cart->total(),
			'gg' => $this->input->post('magg'),
			'pricegg' => $this->input->post('kq'),
			'status' => '1'
		);
		$this->db->insert('donhang', $data);
		$this->cart->destroy();
		$a_Data['spview'] = $this->home_model->show4sp();
		$a_Data['spvi'] = $this->home_model->showsp();
		$a_Data['list'] = $this->cart->contents();
		$this->load->view('home',$a_Data);
	}
	public function removedon(){
		$id = $this->uri->segment('2');
		$this->db->delete('donhang', array('id' => $id));
		redirect('http://webdemo.com/donhang');
	}
}