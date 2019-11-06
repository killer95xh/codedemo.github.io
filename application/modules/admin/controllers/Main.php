<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {
	function __construct() {
		parent::__construct();
            $this->load->model('User_model', 'user_model', TRUE);
            $this->load->library('form_validation');    
            $this->load->library('session');  
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->status = $this->config->item('status'); 
            $this->roles = $this->config->item('roles');
    }

    public function base64url_encode($data) { 
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
    } 
    
    public function base64url_decode($data) { 
        return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
    }   

    public function forgot()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
        if($this->form_validation->run() == FALSE) {
            $this->load->view('resetpass');
        }else{
            $email = $this->input->post('email');  
            $clean = $this->security->xss_clean($email);
            $userInfo = $this->user_model->getUserInfoByEmail($clean);
            
            if(!$userInfo){
                $this->session->set_flashdata('flash_message', 'We cant find your email address');
                redirect('http://webdemo.com/resetpass');
            }      
            $token = $this->user_model->insertToken($userInfo->user_id);                        
            $qstring = $this->base64url_encode($token);                  
            $url =  'http://webdemo.com/resetpass/' . $qstring;
            $link = '<a href="' . $url . '">' . $url . '</a>'; 
            $message = '';                     
            $message .= '<strong>Để thiết lập lại mật khẩu vui lòng click vào link dưới đây.</strong><br>';
            $message .= '<strong>Click:</strong> ' . $link;
            echo $message;
            exit;
            
        }
        
    }

    public function reset_password()
    {
        $token = $this->base64url_decode($this->uri->segment(2));
        $cleanToken = $this->security->xss_clean($token);
        
        $user_info = $this->user_model->isTokenValid($cleanToken); //either false or array();       
        
        if(!$user_info){
            $this->session->set_flashdata('flash_message', 'Token is invalid or expired');
            // redirect('http://webdemo.com/loginforget');
            // echo 'a';
        }            
        $data = array(
            'user_fullname'=> $user_info->user_fullname, 
            'user_email'=>$user_info->user_email, 
            'user_token'=>$this->base64url_encode($token)
        );
       
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');              
        
        if ($this->form_validation->run() == FALSE) {   
            $this->load->view('resetpass2', $data);
        }else{
            $this->load->library('password');               
            $post = $this->input->post(NULL, TRUE);                
            $cleanPost = $this->security->xss_clean($post);                
            $cleanPost['user_id'] = $user_info->user_id;
            unset($cleanPost['passconf']);                
            if(!$this->user_model->updatePassword($cleanPost)){
                $this->session->set_flashdata('flash_message', 'There was a problem updating your password');
                // alert('Cập Nhật Pass Thành Công');
            }else{
                $this->session->set_flashdata('flash_message', 'Your password has been updated. You may now login');
            }
            redirect('http://webdemo.com/login');                
        }
    }

}