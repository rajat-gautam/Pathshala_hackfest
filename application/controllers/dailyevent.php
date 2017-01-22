<?php
class dailyevent extends MY_Controller {
	
	public function index()

	{	
		$this->load->model('Dailyeventmodel');
		$events = $this->Dailyeventmodel->event_list();


		$this->load->view('../views/template/dailyevent',['articles'=>$articles]);
	}
}
