<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_Model extends CI_Model
{
    public $table='nr_users';
    public $id='id';

      public function CheckUsers($email,$password){

        $this->db->where('email',$email);
        $query=$this->db->get($this->table)->row();
        if(password_verify($password,$query->password)){
            return $query;
        }
        else{
            return false;
        }
      }
      public function insert_user($data,$pass){

        $insert=array(

            'first_name'=>$data['first_name'],
            'last_name'=>$data['last_name'],
            'username'=>$data['username'],
            'email'=>$data['email'],
            'password'=>$pass,
            'role_id'=>$data['role_id'],
            'mobile'=>$data['mobile'],
            'country'=>$data['country'],
            'status'=>$data['status'],
            'image'=>$data['image']



        );
          return  $this->db->insert('nr_users',$insert);
      }
      public function delete_user($id){
        $this->db->where('id',$id)
        ->delete('nr_users');
      }
      public function UserCheck($email,$password){
        $this->db->where('email',$email);
        $query=$this->db->get($this->table)->row();
        if($query==true){
          if(password_verify($password,$query->password)){
              return $query;
          }
          else{
              return false;
          }
        }
        else{
          return false;
        }
      }   
      public function get_details($id){
        return $this->db->where('id',$id)
               ->get('nr_users')->row();
      }
      public function update_image($id,$name){
        $this->db->set('image',$name)
        ->where('id',$id)
        ->update('nr_users');
      }

      public function insert_contact($data){
        return $this->db->insert('tbl_contact_us',$data);
      }
      public function get_messages(){
        $this->db->order_by('message_id','DESC');
         return $this->db->get('tbl_contact_us')->result();
      }
      public function general(){
        return $this->db->get('general_settings')->row();
      }
      public function count_messages(){
         $this->db->from('tbl_contact_us');
         return $this->db->count_all_results();
      }
      public function update_count($count){
        $this->db->set('total_messages',$count)
        ->where('id','1')
        ->update('general_settings');
      }
}
