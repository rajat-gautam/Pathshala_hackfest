<?php
Class SearchResult Extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('searchKeyword');
    }

    function search_keyword()
    {
        $keyword    =   $this->input->post('keyword');
        $data['results']    =   $this->searchKeyword->search($keyword);
        //print_r($data);die();
        $this->load->view('admin/search_bar');
        $this->load->view('show_res',$data);
    }

}
?>