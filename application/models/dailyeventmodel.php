<?php

class Dailyeventmodel extends CI_Model {

	public function event_list()
	{	
		$query = $this->db
							 ->select('*')
							 ->from('dailyevents')
							 ->get();
		return $query->result();
		echo "string";
	}
}