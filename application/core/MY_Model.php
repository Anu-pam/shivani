<?php
defined('BASEPATH') OR exit('No direct script access allowed');
         
class MY_Model extends CI_Model {
    protected $_table_name='';
    protected $_primary_key='';
    protected $_order_by='';
    function __construct(){
		parent::__construct();
    }   

    public function save($data,$id=NULL)
    {
        // insert
      if($id===NULL){
      !isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
      $this->db->set($data);
      $this->db->insert($this->_table_name);
      $id=$this->db->insert_id();
      }
    //   update
      else{
        $this->db->set($data);
        $this->db->where($this->_primary_key,$id);
        $this->db->update($this->_table_name);
      }
      return $id;
        
    }

    public function delete($id)
    {
    if(!$id)
    {
        return FALSE;
    }
    $this->db->where($this->_primary_key,$id);
    $this->db->limit(1);
    $this->db->delete($this->_table_name);

    }

    public function get_all_data_bulk($condition=NULL)
    {
    if($condition!=NULL)
    {
        $this->db->where($condition);
        $query=$this->db->get($this->_table_name);
       return $query->result();
    }
    else
    {
        $query=$this->db->get($this->_table_name);
        return $query->result();
    }
    }
}       
                 