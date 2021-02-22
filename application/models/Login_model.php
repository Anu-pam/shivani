<?php
defined('BASEPATH') OR exit('No direct script access allowed');
         
class Login_model extends MY_Model {
    public $_table_name = '';
    public $_primary_key = '';
    function __construct()
	{
		parent::__construct();
    }   

    public function index($data)
    {
       $user_Data=$this->db->get_where('mfd_users',$data)->result();
       foreach($user_Data as $row)
       {
           $userdata=array(
           'user_id'=>$row->user_id,
           'user_name'=>$row->user_name,
           'user_email'=>$row->user_email,
           'user_address'=>$row->user_address,
           'user_type'=>$row->user_type,
           'user_mobile'=>$row->user_mobile,
           'user_status'=>$row->user_status,
           'logged_in'=>TRUE
           );
       }  
       if(isset($userdata))
       {
        $this->session->set_userdata($userdata);
        $cookie = array(
            'name'   => 'remember_me',
            'value'  => 'test',                            
            'expire' => '300',                                                                                   
            'secure' => TRUE
            );
       set_cookie($cookie);   
        return TRUE;
       }
       else
       {
           return FALSE;
       }

    }


      
    
}       
                 