<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{ 
 	
	public function index(){
		$this->load->model('dailyevents');
		$this->load->model('events');
		$events = $this->dailyevents->getevents();
		$articles = $this->events->admin_list();
		$this->load->view('template/header1');
		$this->load->view('template/navigation_bar1');
		$this->load->view('template/slider1');
		$this->load->view('event/dailyevent',['events'=>$events]);
		$this->load->view('notice',['articles'=>$articles]);
		$this->load->view('quick_links1');
		$this->load->view('template/footer1');
	}
	/*public function index()
	{  
		$this->load->helper('form');
    	$this->load->model('events');
    	$this->load->model('dailyevents');
    	$events = $this->dailyevents->getevents();
		$articles = $this->events->admin_list();
	    $this->load->view('myview',['articles'=>$article]);
	    
	}*/
	public function dep(){
		$this->load->view('dep');
	}
	public function faculty(){
		$this->load->helper('form');
		$this->load->model('peoplemodel');
		$art = $this->peoplemodel->people_list();
	$this->load->view('people',['art'=>$art]);	
	}

    public function test80()
   {
     	$this->load->view('navbartest');
   }
    public function test81()
   {
     	$this->load->view('template/qwer');
   }
	public function applied_chemistry(){
		$this->load->view('departments/chemistry/chemistry');
	}
	public function applied_geology(){
		$this->load->view('departments/geology/geology');
	}
	public function applied_geophysics(){
		$this->load->view('departments/geophysics/geophysics');
	}
	public function applied_mathematics(){
		$this->load->view('departments/mathematics/mathematics');
	}
	public function applied_physics(){
		$this->load->view('departments/physics/physics');
	}
	public function chemical_engineering(){
		$this->load->view('departments/chemical/chemical');
	}
	public function civil_engineering(){
		$this->load->view('departments/civil/civil');
	}
	public function electrical_engineering(){
		$this->load->view('departments/electrical/electrical');
	}
	public function electronics_engineering(){
		$this->load->view('departments/ece/ece');
	}
	public function environmental_science_engineering(){
		$this->load->view('departments/enviro/enviro');
	}
	public function fuel_mineral_engineering(){
		$this->load->view('departments/mineral/mineral');
	}
	public function humanities_and_social_science(){
		$this->load->view('departments/humanities/humanities');
	}
	public function management_studies(){
		$this->load->view('departments/management/management');
	}
	public function mechanical_engineering(){
		$this->load->view('departments/mech/mech');
	}
	public function mining_Machinery_engineering(){
		$this->load->view('departments/minmech/minmech');
	}
	public function mining_engineering(){
		$this->load->view('departments/mining/mining');
	}
    public function petroleum_engineering(){
		$this->load->view('departments/petro/petro');
	}	
    

}
