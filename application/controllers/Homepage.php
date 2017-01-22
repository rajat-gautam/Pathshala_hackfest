<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller{
	public function index(){
		$this->load->model('dailyevents');
		$this->load->model('events');
		$events = $this->dailyevents->getevents();
		$this->load->view('template/header1');
		$this->load->view('template/navigation_bar1');
		$this->load->view('template/slider1');
		$this->load->view('event/dailyevent',['events'=>$events]);
		$this->load->view('notice',['articles'=>$article]);
		$this->load->view('quick_links1');
		$this->load->view('template/footer1');
	}
}
?>