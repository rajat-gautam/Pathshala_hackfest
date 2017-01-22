<?php
class Admin extends MY_Controller {
	
	public function home()
	
	{
		$this->load->helper('form');
		$this->load->view('admin/home');
		$this->load->view('admin/search_bar');
	}
	public function dashboard()

	{	$this->load->helper('form');
		$this->load->model('articlesmodel');
		$articles = $this->articlesmodel->articles_list();
		$this->load->view('admin/dashboard',['articles'=>$articles]);
	}
	public function add_article()
	{	

		$this->load->helper('form');
		$this->load->view('admin/add_article');
		
	}
	public function add_lectureplan()
	{
		$this->load->helper('form');
		$this->load->view('admin/add_lectureplan');
	} 
	public function add_timetable()
	{
		$this->load->helper('form');
		$this->load->view('admin/add_timetable');
	}

	public function store_article()
	{	
		$config = [
			'upload_path' => 'file:///C://xampp/htdocs/ci/uploads',
			'allowed_types' => 'jpg|gif|png|jpeg|pdf',
		];
		$this->load->library('upload',$config);
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
		if( $this->upload->do_upload()  )
		 {  
			$post =$this->input->post();
			unset($post['submit']);
			$data = $this->upload->data();
			$image_path = base_url("/uploads/".$data['raw_name'].$data['file_ext']);
			$post['image_path']=$image_path;
			$this->load->model('articlesmodel');
			if($this->articlesmodel->add_article($post)){
				//flassh message sussc
				$this->session->set_flashdata('feedback','Article added Succesfully.');
			}
			else{
				$this->session->set_flashdata('feedback','Article failed to Add,Please Try Again.');
		
			}
			return redirect('admin/dashboard');
		}
		else {
				
				$upload_error = $this->upload->display_errors();
			return redirect('admin/add_article',compact('upload_error'));
		}
	

	}

	public function delete_article()
	{
		$article_id=$this->input->post('article_id');
		$this->load->model('articlesmodel');
		if($this->articlesmodel->delete_article($article_id)){
				//flassh message sussc
				$this->session->set_flashdata('feedback','Article Deleted Succesfully.');
			}
			else{
				$this->session->set_flashdata('feedback','Article failed to Add,Please Try Again.');
		
			}
			return redirect('admin/dashboard');
	

	}
	public function store_lecture()
	{

		$config = [
			'upload_path' => 'file:///C://xampp/htdocs/ci/uploads/',
			'allowed_types' => 'jpg|gif|png|jpeg|pdf',
		];
		$this->load->library('upload',$config);
		if( $this->upload->do_upload()  )
		 {  
			$post =$this->input->post();
			unset($post['submit']);
			$data = $this->upload->data();
			$lecture_path = base_url("/uploads/".$data['raw_name'].$data['file_ext']);
			$post['lecture_path']=$lecture_path;
			$this->load->model('articlesmodel');
			if($this->articlesmodel->add_lecture($post)){
				//flassh message sussc
				$this->session->set_flashdata('feedback','Lecture Plan added Succesfully.');
			}
			else{
				$this->session->set_flashdata('feedback','Lecture Plan failed to Add,Please Try Again.');
		
			}
			return redirect('admin/dashboard');
		}
		else {
				
				$upload_error = $this->upload->display_errors();
			return redirect('admin/add_lectureplan',compact('upload_error'));
		}
	}
	public function store_timetable()
	{
		$config = [
			'upload_path' => 'file:///C://xampp/htdocs/ci/uploads/',
			'allowed_types' => 'jpg|gif|png|jpeg|pdf',
		];
		$this->load->library('upload',$config);
		if( $this->upload->do_upload()  )
		 {  
			$post =$this->input->post();
			unset($post['submit']);
			$data = $this->upload->data();
			$timetable_path = base_url("/uploads/".$data['raw_name'].$data['file_ext']);
			$post['timetable_path']=$timetable_path;
			$this->load->model('articlesmodel');
			if($this->articlesmodel->add_timetable($post)){
				//flassh message sussc
				$this->session->set_flashdata('feedback','Time Table added Succesfully.');
			}
			else{
				$this->session->set_flashdata('feedback','Time Table failed to Add,Please Try Again.');
		
			}
			return redirect('admin/dashboard');
		}
		else {
				
				$upload_error = $this->upload->display_errors();
			return redirect('admin/add_timetable',compact('upload_error'));
		}
	}
	public function ___construct()
	{	
		parents:: __construct();
		if( !$this->session->userdata('user_id') )
			return redirect('login');
	}




}
