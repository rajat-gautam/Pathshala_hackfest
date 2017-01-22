<?php
class Registermodel extends  CI_Model {

	 
	public function login_valid($username,$email,$password)
	{	


				$array1 = array('uname' => $username,'pword'=>$password,'email'=>$email );
		        //$this->uname    = $username; // please read the below note
               // $this->pword  = $password;
             //   $this->email     = $email;

                $this->db->insert('user', $array1);

		
	
		

	}



}