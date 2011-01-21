<?php
class Home extends Dashboard_Controller
{
    function __construct()
    {
        parent::__construct();

		$this->load->library('foursquare');
		   
		$this->data['page_title'] 	= 'Foursquare';
		$this->check_connection 	= $this->connections_model->check_connection_user($this->session->userdata('user_id'), 'twitter');
	}	
	
	function index()
	{

		$this->render();
		
	}
	
 		
}