<?php 

class dailyevents extends CI_Model{
		
		public function __construct(){
			$this->load->database();
		}

		public function getevents(){
			$query = $this->db->select('*')->from('dailyevents')->get();
			return $query->result();
		}
	
}

?>