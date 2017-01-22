<?php

	Class SearchKeyword Extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function search($keyword)
    {
        $this->db->like('sc',$keyword);
        $query  =   $this->db->get('article');
        return $query->result_array();
    }
}  


?>