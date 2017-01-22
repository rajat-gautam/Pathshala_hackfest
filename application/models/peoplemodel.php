<?php

class Peoplemodel extends CI_Model {

	public function people_list()
	{	
		$affected_rows = "SELECT 
faculty_details.research_interest, user_details.id,user_details.salutation,user_details.first_name,user_details.middle_name,user_details.last_name,user_details.dept_id,user_details.email,user_details.photopath,user_details.sex,emp_basic_details.designation,emp_basic_details.office_no,user_other_details.mobile_no,user_other_details.nationality FROM user_details INNER JOIN emp_basic_details on emp_basic_details.emp_no = user_details.id INNER JOIN user_other_details on emp_basic_details.emp_no = user_other_details.id 
INNER JOIN faculty_details on user_details.id = faculty_details.emp_no
 WHERE emp_basic_details.designation = 'astprof' OR emp_basic_details.designation = 'prof' OR emp_basic_details.designation = 'ascprof' OR emp_basic_details.designation = 'chrprof' ORDER BY user_details.first_name ASC , user_details.middle_name ASC , user_details.last_name ASC";
		$que=$this->db->query($affected_rows);
		$qu = $que->result_array();
		return $qu;


	$query = $this->db->query('SELECT id, date, text FROM news');
$result = $query->result_array();
return $result;

	}
}