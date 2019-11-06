<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->library("cart");
        $this->load->helper('url');
        $this->load->library('session');
    }   

	public function index() {
		$a_Data['spview'] = $this->home_model->show4sp();
		$this->load->view('home', $a_Data);
	}

	public function cart() {
        session_start();
        $pr_id = $this->input->get('cart');
        var_dump($pr_id);
        die();
		$this->load->view('cart');
	}
}