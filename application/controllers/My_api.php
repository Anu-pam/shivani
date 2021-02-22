<?php
defined('BASEPATH') OR exit('No direct script access allowed');
         
class My_api extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
	} 
            
	
    
}