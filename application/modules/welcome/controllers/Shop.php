<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Shop extends MY_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->library("cart");
            // $this->load->model('home_model');
            $this->load->helper('url');
            $this->load->model('home_model');
            
        }

        public function base64url_encode($data) { 
            return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
        }  

        public function index()
        {
            $this->load->model('Shop_model');
            $ma = $this->Shop_model->maGG();
            $data['list'] = $this->cart->contents();
            $data['mag'] = $this->base64url_encode($ma); 
            $this->load->view('list_cart', $data);
        }

        public function insert()
        {
            $id = $this->input->post('id');
            $this->load->model('Shop_model');
            $list = $this->Shop_model->getList($id);
            $ma = $this->Shop_model->maGG();
            if ($this->cart->insert($list)) {
                $data['spview'] = $this->home_model->show4sp();
		        $data['spvi'] = $this->home_model->showsp();
                $data['mag'] = $this->base64url_encode($ma); 
                $data['list'] = $this->cart->contents();
                $this->load->view('home', $data);
            } else{
                echo "Thêm sản phẩm thất bại";
            }
        }

        public function remove() {
            $id = $this->uri->segment('2');
            // var_dump($id);die();
            if ($id===NULL)
                {
                    $this->cart->destroy();
                }
            else
                {
                    $data = array(
                        'rowid' => $id,
                        'qty' => 0
                    );
                $this->cart->update($data);
                }
            redirect('http://webdemo.com/cart');
        }
    }
?>