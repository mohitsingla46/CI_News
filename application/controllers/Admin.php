<?php

class Admin extends MY_Controller{
	public function dashboard(){
		$this->load->view('admin/dashboard');
	}
}