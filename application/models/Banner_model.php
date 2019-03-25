<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Banner_model extends CI_Model
{

    public $table = 'tb_banner';
    public $id = 'bannerID';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

  
    // get all
    function get_all()
    {
        
        $this->db->select('tb_banner.*');
         $this->db->order_by('tb_banner.bannerID', 'DESC');
         return $this->db->get($this->table)->result();
       
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
     // get data by id
    function get_by_name($id)
    {
        $this->db->where($this->id, $id);
        $this->db->from($this->table);
        $query = $this->db->get(); 
        if($query->num_rows() > 0){
          foreach ($query->result() as $row)
          {
        return $row->name;
          }  
            
        }else{
           return false; 
        }
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Blood_group_model.php */
/* Location: ./application/models/Blood_group_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-06-01 14:53:53 */
/* http://harviacode.com */