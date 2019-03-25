<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Control
{

  
    public function index()
    { 
         
    }
    public function auth(){
        $CI=& get_instance();

      if ($CI->session->userdata('logged_in')==false){
           return false;
      }
      if ($CI->session->userdata('logged_in')==true){
       return true;
      }
    }

    public function cart_count(){
         $CI=& get_instance();
      return count($CI->cart->contents());
    }

}