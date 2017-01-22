<?php
class Loginmodel extends  CI_Model {

	public function login_valid($username,$password)
	{	

		$q = $this->db->where(['uname'=>$username,'pword'=>$password])
					   ->get('user');

		if( $q->num_rows()) {
		$row = $q->row();
		return $row->id;
		
	
		}
		else
		{
		return FALSE;
		}

	}



}