<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
       
    }
    function create_page($page, $data = array(), $meta = array())
    {
        $meta['message'] = isset($data['message']) ? $data['message'] : $this->session->flashdata('message');
        $meta['error'] = isset($data['error']) ? $data['error'] : $this->session->flashdata('error');
        $meta['warning'] = isset($data['warning']) ? $data['warning'] : $this->session->flashdata('warning');
       
        $this->load->view( 'include/header');
        $this->load->view( 'include/navbar', $meta);
        $this->load->view( $page, $data);
        $this->load->view( 'include/footer');
    }
    

}
