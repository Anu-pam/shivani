<?php
defined('BASEPATH') OR exit('No direct script access allowed');
         
class Welcome extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}
	public function index()
	{       
		$this->load->view('welcome_message');
		// $this->create_page('welcome_message');	
	}      
	public function login()
	{
	$data=array(
		'user_mobile'=>$this->input->post('mobile_number'),
		'user_password'=>$this->input->post('password'),
		'user_status'=>1
	);
    
		$res=$this->Login_model->index($data); 
		if($res!=TRUE)
		{
			$this->session->set_flashdata('error', '<span style="color:red;">Mobile / Password combination does not exist</span>');
			redirect('Welcome', 'refresh');
		}
		else
		{
			$this->create_page('home_page/dashboard');
		}     
	}
}       
                 