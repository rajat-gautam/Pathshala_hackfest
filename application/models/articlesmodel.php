<?php

class Articlesmodel extends CI_Model {

	public function articles_list()
	{	
		$user_id = $this->session->userdata('user_id');
		$query = $this->db
							 ->select('*')
							 ->from('article')
							 ->where('user_id',$user_id)
							 ->get();
		return $query->result();
	}

	public function add_article($array)
	{
		//if($this->db->count_all_results($this->db->where('user_id',$this->session->userdata('user_id'))))
		$qu=$this->db->where('user_id',$this->session->userdata('user_id'));
		//	if($this->db->count_all_results($this->db->get_where('article',array('user_id'=>$this->session->userdata('user_id')))))
		if(!empty($qu))
		{
		//	$data=array(''=>,);

			$this->db->replace('article',$array);
			//$this->db->set('',);
			//$this->db->insert('article');
		}
		else
		$affected_rows = $this->db->insert('article',$array);
		return $affected_rows;
	}
	public function add_lecture($array)
	{	
		$path=$array['lecture_path'];
		$user_id = $this->session->userdata('user_id');
		$affected_rows = "UPDATE `lecture` SET lecture_path='$path' WHERE user_id=$user_id";
		$this->db->query($affected_rows);
		return $affected_rows;
	}
	public function add_timetable($array)
	{
		$path=$array['timetable_path'];
		$user_id = $this->session->userdata('user_id');
		$affected_rows = "UPDATE `timetable` SET timetable_path='$path' WHERE user_id=$user_id";
		$this->db->query($affected_rows);
		return $affected_rows;
	}

	public function delete_article($article_id)
	{
		return $this->db->delete('article',['id'=>$article_id]);
	}
}