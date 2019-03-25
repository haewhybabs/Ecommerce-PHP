<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cart extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['Products_Model','Country_model']);
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->library('cart');
        $this->load->library('control');
    }

    public function index()
    { 

    }
    public function Add(){
      $data=array('success'=> false, 'message'=>array());

      $this->form_validation->set_rules('quantity1','Quantity','required');
      $this->form_validation->set_error_delimiters('<p class="text-danger" style="color:red;">', '</p>');
      $q=$this->input->post('quantity1');
      if ($this->form_validation->run()){

                $datap=array( 

               'qty' =>$this->input->post('quantity1'),
               'price' =>$this->input->post('price'),
               'id'=> $this->input->post('prod_id'),
               'name' => $this->input->post('product_name'),
               'options' =>array('weight'=>$this->input->post('weight'))

              );
               $this->cart->insert($datap);

                $data['cart']=true;
           
      }
      else{

         $data['error']=false;
      }

         
          

           echo json_encode($data);

       
        
    } 

    public function cart_view(){
      
      //  Topmenu data
      $data['cat_8']=$this->Products_Model->get_8_cat();
      $data['cat_16']=$this->Products_Model->get_16_cat();
      $data['cat_24']=$this->Products_Model->get_24_cat();
           
      $this->load->view('natures/cart', $data);
    }
    public function cart_destroy(){
      $this->cart->destroy();
      redirect('natures/Cart/cart_view', 'refresh');
    }
    public function update_cart($in_cart=null){


     $data=$this->input->post();
     $this->cart->update($data);
      $datap['message']=true;
       echo json_encode($datap);
           


     }


     /*

     @ Create a remove button at view page and add row id with link. After that create a function and pass row id and put quantity 0 and pass that array in update function.
     */
    public function remove_cart_product($data) {
        $row_id=$data;
        $qty=0;
        $array=array('rowid' =>$row_id ,'qty'=>$qty );
        $this->cart->update($array);
       redirect('natures/Cart/cart_view', 'refresh');
    }
    public function cart_content(){
      $rows = count($this->cart->contents());
      echo $rows;
    }
    public function checkout(){
      if($this->control->auth()==false){
        redirect('/');
      }
           $total_weight=0;
          foreach ($this->cart->contents() as $items){
            foreach ($items['options'] as $key) {  
          }
              $w=$items['qty'] * $key;
              $total_weight=$total_weight+$w;
         }    
         $get_weight=$this->Country_model->get_range($total_weight);


      $country=$this->Country_model->get_countries();

      $data=array(
        'country'=>$country,
        'range_id'=>$get_weight->weight_range_id
      );

      //  Topmenu data
      $data['cat_8']=$this->Products_Model->get_8_cat();
      $data['cat_16']=$this->Products_Model->get_16_cat();
      $data['cat_24']=$this->Products_Model->get_24_cat();

      $this->load->view('natures/shipping_info_page',$data);
       
          
          // var_dump($get_range);
          
       
    }
    public function get_state(){
      $country_id=$this->input->post('country_id');
      $get_state=$this->Country_model->get_state($country_id);
      $pre='<option>Select State</option>';
      foreach ($get_state as $key) {
        $pre.='<option value="'.$key->state_id.'" name="state[]">'.$key->state_name.'</option>';
       
      }
      echo $pre;
    }
    public function get_city(){
      $state_id=$this->input->post('state_id');
      $get_city=$this->Country_model->get_city($state_id);
      $pre='<option>Select City</option>';
       foreach ($get_city as $key) {
        $pre.='<option value="'.$key->city_id.'" name="city">'.$key->city_town_name.'</option>';
       
      }
      echo $pre;

    }
    public function get_ship(){
      $range_id=$this->input->post('range_id');
      $city_id=$this->input->post('city_id');
      $get_price=$this->Country_model->get_ship_price($range_id,$city_id);
      if($get_price==false){
         $x=3.00;
      }
      else{

        $x=$get_price->shipping_price;
      }
      $pre=$x;
       
         echo "$".number_format($pre, 2);

     
 

    }

    public function get_ship_a(){
      $range_id=$this->input->post('range_id');
      $city_id=$this->input->post('city_id');
      $get_price=$this->Country_model->get_ship_price($range_id,$city_id);
      if($get_price==false){
         $x=3.00;
      }
      else{

        $x=$get_price->shipping_price;
      }
      $pre=$x;

      echo '<input type="hidden" value="'.$pre.'" id="shipo" name="shipping">';
 

    }
    public function get_ship_total(){

      $range_id=$this->input->post('range_id');
      $city_id=$this->input->post('city_id');
      $get_price=$this->Country_model->get_ship_price($range_id,$city_id);
      if($get_price==false){
         $x=3.00;
      }
      else{

        $x=$get_price->shipping_price;
      }
      $pre=$this->cart->total()+$x ;
      echo "$".number_format($pre, 2);
      
    }


}