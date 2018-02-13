<?php

class Admin extends MY_Controller{
	public function index(){
		$this->load->view('public/login');
		$this->load->library('form_validation');
	}
	public function login(){
		$this->form_validation->set_rules('email','Email ID','trim|required|valid_email');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
		if($this->form_validation->run()){
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->load->model('loginmodel');

			$user_id = $this->loginmodel->valid_login($email,$password);
			if($user_id){
				$this->load->library('session');
				$this->session->set_userdata('user_id',$user_id);
				$this->load->view('admin/dashboard');
			}
			else{
				echo "Login Failed";
			}
		}
		else{
			$this->load->view('public/login');
		}
	}
}