<?php
class Register extends MY_Controller {
	
	public function index()
	{
	
	if($this->session->userdata('user'))
		return redirect('admin/add_article');
	$this->load->helper('url');
	
	$this->load->helper('form');
	$this->load->view('public/admin_register');		
}
	public function register_login()
	{			
		$this->load->library('form_validation');
		//	$this->form_validation->set_rules('username','User Name','required|alpha');
		//$this->form_validation->set_rules('password','Password','required');
	//	$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

		//if($this->form_validation->run('admin_register')) {
			//success

			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$this->load->model('registermodel');
			$login_id = $this->registermodel->login_valid($username,$email,$password); 
			if($login_id) {
				
				$this->session->set_userdata('user_id',$login_id);
				return redirect('login');


				//credentials valid ,login user.
			}
			else {
				$this->session->set_flashdata('login_failed','Invalid Username/Password.');
				return redirect('login');
				//authentication failed.
			}
			//echo("ValidationSuccesful");
		
		//else {
		//	$this->load->view('public/admin_register');
			//failed
			//echo validation_errors();
		
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('login');
	}
}
