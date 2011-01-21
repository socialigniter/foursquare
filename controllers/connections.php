<?php
class Connections extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
		   
		if (config_item('foursquare_enabled') != 'TRUE') redirect(base_url());
	
		$this->load->library('foursquare');
	}

	function index()
	{	
		// Do Not Logged In Signup

	}
	
	function add()
	{
		// Do Logged In Connect Add
		
	}
}