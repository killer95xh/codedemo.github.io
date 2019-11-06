<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class viewUser extends MY_Controller{
	
	public function __construct(){
		parent::__construct();
		ob_start();
		$this->load->helper(array('form', 'url'));
		$this->load->model('pagination_model');
		// $this->load->library('upload');
		// $this->load->library(array('session'));
		$this->load->library("session");
	}
	public function index(){
		if(null!== $this->session->userdata("taikhoan")) {
			if(($this->session->userdata("user_level"))==1) {
				$total_books =  $this->pagination_model->i_fGetTotalBooks();
				$perpage	=  5; /* Số books hiển thị trên một page*/
				# Tải bộ thư viện Pagination Class của CodeIgniter
				$this->load->library('pagination');
				$config['total_rows']  =  $total_books;
				$config['per_page']  =  $perpage;
				$config['next_link'] =  '<button class="btn btn-default">NEXT</button>';
				$config['prev_link'] =  '<button class="btn btn-default">PREV</button>';
				$config['page_query_string'] = TRUE;
				$config['num_tag_open'] =  '<button class="btn btn-default">';
				$config['num_tag_close'] =  '</button>';
				$config['num_links']	=  3;
				$config['cur_tag_open'] =  '<button class="btn btn-success">';
				$config['cur_tag_close'] =  '</button>';
				$config['base_url'] =  '/about';
				$config['uri_segment']	 =  2;
				# Khởi tạo phân trang
				$this->pagination->initialize($config); 
				# Tạo link phân trang
				$pagination =  $this->pagination->create_links();
				# Lấy offset
				$offset = $this->input->get('per_page');
				# Đẩy dữ liệu ra view
				$a_Data['bookList'] =  $this->pagination_model->a_fGetBooks($perpage, $offset);
				$a_Data['pagination'] = $pagination;
				$a_Data['content_view'] = 'admin/about';
				$a_Data['name'] = $this->session->userdata("user");
				$this->template->sample_template($a_Data);
			}
			else {
				echo 'Bạn không thể vào trang này<br>';
				echo '<a href="dasboard">Quay lại trang chủ</a>';
			}
		}else {
			$this->load->view('login');
		}			
	}	
	public function product(){
		if(null!== $this->session->userdata("taikhoan")) {
			$total_books =  $this->pagination_model->i_Products();
			$productpage	=  5; /* Số books hiển thị trên một page*/
			# Tải bộ thư viện Pagination Class của CodeIgniter
			$this->load->library('pagination');
			$config['total_rows']  =  $total_books;
			$config['per_page']  =  $productpage;
			$config['next_link'] =  '<button class="btn btn-default">NEXT</button>';
			$config['prev_link'] =  '<button class="btn btn-default">PREV</button>';
			$config['page_query_string'] = TRUE;
			$config['num_tag_open'] =  '<button class="btn btn-default">';
			$config['num_tag_close'] =  '</button>';
			$config['num_links']	=  3;
			$config['cur_tag_open'] =  '<button class="btn btn-success">';
			$config['cur_tag_close'] =  '</button>';
			$config['last_link'] = '<button class="btn btn-default">LAST</button>';
			$config['first_link'] = '<button class="btn btn-default">FIRST</button>';
			$config['base_url'] =  '/product';
			$config['uri_segment']	 =  2;
			# Khởi tạo phân trang
			$this->pagination->initialize($config); 
			# Tạo link phân trang
			$pagination =  $this->pagination->create_links();
			# Lấy offset
			$off = $this->input->get('per_page');
			# Đẩy dữ liệu ra view
			$a_Data['productList'] =  $this->pagination_model->a_getProducts($productpage, $off);
			$a_Data['pagination'] = $pagination;
			$a_Data['content_view'] = 'admin/product';
			$a_Data['name'] = $this->session->userdata("user");
			$this->template->sample_template($a_Data);
		}else {
			$this->load->view('login');
		}
	}	
}