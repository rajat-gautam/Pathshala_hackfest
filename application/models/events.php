<?php 

class Events extends CI_Model {
	public function admin_list()
	{
		$user_id = 1;
		$query = $this->db->query('SELECT article.user_id,article.title,article.body,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=1');					 
		return $query->result();	
	}
	public function chem_list()
	{
		$user_id = 2;
		$query = $this->db->query('SELECT article.user_id,article.title,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=2');					 
		return $query->result();
	
	}
	public function geo_list()
	{
		$user_id = 3;
		$query = $this->db->query('SELECT article.user_id,article.title,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=3');
		return $query->result();
	
	}
	public function math_list()
	{
		$user_id = 4;
		$query = $this->db->query('SELECT article.user_id,article.title,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=4');
		return $query->result();
	
	}
	public function phy_list()
	{
		$user_id = 5;
		$query = $this->db->query('SELECT article.user_id,article.title,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=5');
		return $query->result();
	
	}
	public function che_list()
	{
		$user_id = 6;
		$query = $this->db->query('SELECT article.user_id,article.title,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=6');
		return $query->result();
	
	}
	public function civ_list()
	{
		$user_id = 7;
		$query = $this->db->query('SELECT article.user_id,article.title,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=7');
		return $query->result();
	
	}
	public function cse_list()
	{
		$user_id = 8;
		$query = $this->db->query('SELECT article.user_id,article.title,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=8');
		return $query->result();
	
	}
	public function electr_list()
	{
		$user_id = 9;
		$query = $this->db->query('SELECT article.user_id,article.title,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=9');
		return $query->result();
	
	}
	public function ele_list()
	{
		$user_id = 10;
		$query = $this->db->query('SELECT article.user_id,article.title,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=10');
		return $query->result();
	
	}
	public function enviro_list()
	{
		$user_id = 11;
		$query = $this->db->query('SELECT article.user_id,article.title,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=11');
		return $query->result();
	
	}
	public function fuel_list()
	{
		$user_id = 12;
		$query = $this->db->query('SELECT article.user_id,article.title,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=12');
		return $query->result();
	
	}
	public function humanties_list()
	{
		$user_id = 13;
		$query = $this->db->query('SELECT article.user_id,article.title,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=13');
		return $query->result();
	
	}
	public function manag_list()
	{
		$user_id = 14;
		$query = $this->db->query('SELECT article.user_id,article.title,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=14');
		return $query->result();
	
	}
	public function mech_list()
	{
		$user_id = 15;
		$query = $this->db->query('SELECT article.user_id,article.title,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=15');
		return $query->result();
	
	}
	public function minmac_list()
	{
		$user_id = 16;
		$query = $this->db->query('SELECT article.user_id,article.title,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=16');
		return $query->result();
	
	}
	public function mineng_list()
	{
		$user_id = 17;
		$query = $this->db->query('SELECT article.user_id,article.title,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=17');
		return $query->result();
	
	}
	public function petro_list()
	{
		$user_id = 18;
		$query = $this->db->query('SELECT article.user_id,article.title,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=18');
		return $query->result();
	
	}
	public function geop_list()
	{
		$user_id = 19;
		$query = $this->db->query('SELECT article.user_id,article.title,article.image_path,lecture.lecture_path,timetable.timetable_path FROM article INNER JOIN
		lecture on article.user_id = lecture.user_id
		INNER JOIN timetable
		on article.user_id = timetable.user_id
		WHERE article.user_id=19');
		return $query->result();
	
	}


}