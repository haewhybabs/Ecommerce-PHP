<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Country_model extends CI_Model
{
  
    public function get_countries(){
      return $this->db->get('tbl_country')->result();
    }
     public function get_state($country_id){
        return $this->db->where('country_id',$country_id)
           ->get('tbl_state_region')->result();
      }

       public function get_city($state_id){
        return $this->db->where('state_id',$state_id)
           ->get('tbl_city_town')->result();
      }
      public function get_range($id){
         $this->db->where('weight_lower_band <=',$id)
        ->where('weight_upper_band >=',$id);
        return $this->db->get('tbl_predefined_weight_range')->row();
      }
      public function get_ship_price($range_id,$city_id){
        return $this->db->where('weight_range_id',$range_id)
        ->where('city_id',$city_id)
        ->get('tbl_shipping_price')->row();
      }
}