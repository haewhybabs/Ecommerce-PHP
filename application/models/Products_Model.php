<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Products_Model extends CI_Model
{

    // The function to add products into database
    // public function AddProduct()
    // {
    //     return $this->db->insert('nr_products', $product);
    // }

    // The function to add product categories into database
    public function AddCategory($category)
    {
        return $this->db->insert('nr_product_categories',$category);
    }

    // The function to retrieve product categories from database
    public function get_category()
    {
        return $this->db->get('nr_product_categories')->result();
    }
    public function get_id(){
        $this->db->select('prod_id');
        $this->db->order_by('prod_id','DESC');
        $this->db->limit('1');
        return $this->db->get('nr_products')->result();
    //    if($query->num_rows() > 0){
    //        return $query->result();

    //    }else{
    //        return false;
    //    }

    }
    public function InsertData($data){
        $insert=array(
            'product_name'=>$data['product_name'],
            'product_price'=>$data['product_price'],
            'category_ID'=>$data['category'],
            'description'=>$data['description'],
           'product_images'=>$data['product_images'],
           'product_weight'=>$data['product_weight']
        );
        return $this->db->insert('nr_products',$insert);
       //return $data;
    }
    public function getAll(){
      $this->db->select('nr_products.*,nr_product_categories.*');
      $this->db->join('nr_product_categories','nr_products.category_ID=nr_product_categories.id');
        return $this->db->get('nr_products')->result();
    }
    public function getCat(){
        $query=$this->db->select('*')
        ->where('category_ID','1')
        ->order_by('prod_id','DESC')->limit('8')
        ->get('nr_products');
        if($query->num_rows() > 0){
             return $query->result();
        
        }else{
            return false;
        }
    }
    public function get_detail($id){
        return $this->db->select('*')
        ->where('prod_id',$id)
        ->get('nr_products')->row();

    }
     public function get_related($cat,$id){
       return $this->db->where('category_ID',$cat)
              ->limit('4')
             
              ->where('prod_id !=',$id)
              ->order_by('prod_id','RANDOM')
               ->get('nr_products')->result();

    }
    public function get_category_id($id){
        return $this->db->select('category_ID')
               ->where('prod_id',$id)
               ->get('nr_products')->row();
    }
    public function cat(){
        return $this->db->get('nr_product_categories')->result();
    }
    public function cat_not_id($id){
      return $this->db->where('id !=',$id)->get('nr_product_categories')->result();
    }
    public function get_productCategory($category,$per_page,$page){
        $this->db->limit($per_page, $per_page*$page-$per_page);
        $this->db->where('category_ID',$category)->order_by('prod_id','DESC');
       return $this->db->get('nr_products')->result();
    }
    public function getAll_product($per_page,$page){
        $this->db->limit($per_page, $per_page*$page-$per_page);
        return $this->db->get('nr_products')->result();
    }
    public function countAll(){
     return $this->db->count_all("nr_products");
    }
     public function countAll_by_cat($id){
     $this->db->where('category_ID',$id);
     $this->db->from('nr_products');
     return $this->db->count_all_results();

    }
    public function getAll_product_id($per_page,$page,$id){
       $this->db->limit($per_page, $per_page*$page-$per_page);
       return $this->db->where('category_ID',$id)->order_by('prod_id','DESC')
       ->get('nr_products')->result();

    }
    public function get_cat_name($id){
      return $this->db->where('id',$id)->get('nr_product_categories')
      ->row();
    }
    public function update_product($data,$id){
      $this->db->set($data)
      ->where('prod_id',$id)
      ->update('nr_products');
    }
    public function delete_product($id){
      $this->db->where('prod_id',$id)
      ->delete('nr_products');
    }
    public function get_shipping_price($id){
      return $this->db->where('city_id',$id)
      ->get('tbl_shipping_price')->result();
    }
    public function get_weight_range(){
      return $this->db->get('tbl_predefined_weight_range')->result();
    }
    public function insert_shipping($data){
      return $this->db->insert('tbl_shipping_price',$data);
    }
    public function update_shipping($data,$id){
      $this->db->set($data)
      ->where('shipping_price_id',$id)
      ->update('tbl_shipping_price');
    }
    public function get_cat_desc($id){
      return $this->db->where('id',$id)
      ->get('nr_product_categories')->row();
    }
    public function delete_category($id){
      $this->db->where('id',$id)
      ->delete('nr_product_categories');
    }
    public function cat_edit($cat,$id){
      $update=array(
         'category'=>$this->input->post('category'),
         'description'=>$this->input->post('description'),
         'images'=>$cat['images'],
      );
      $this->db->set($update)
      ->where('id',$id)
      ->update('nr_product_categories');
    }

    public function get_ranges(){
      return $this->db->get('tbl_predefined_weight_range')->result();
    }

    public function update_weight($data,$range_id){
      $this->db->set($data)
      ->where('weight_range_id',$range_id)
      ->update('tbl_predefined_weight_range');

    }
    public function get_transaction_details($ref){
      return $this->db->where('reference',$ref)
      ->get('transaction_status')->row();
    }

    public function update_trans_status($ref){
      $this->db->set('payment_status','1')
      ->where('reference',$ref)
      ->update('transaction_status');
    }
    public function insert_trans($data){
      return $this->db->insert('transaction_status',$data);
    }
    public function success_trans(){
      return $this->db->select('nr_users.*, transaction_status.*,tbl_city_town.*,tbl_state_region.*,tbl_country.*')
      ->join('nr_users','nr_users.id=transaction_status.user_id')
      ->join('tbl_city_town', 'tbl_city_town.city_id=transaction_status.city_id')
      ->join('tbl_state_region','tbl_state_region.state_id=tbl_city_town.state_id')
      ->join('tbl_country','tbl_country.id=tbl_state_region.country_id')
       ->where('transaction_status.payment_status','1')
      ->order_by('trans_id','DESC')
      ->get('transaction_status')->result();
    }
    public function insert_cart($data){
      return $this->db->insert('nr_cart_items',$data);
    }

    public function get_cart_products($ref){
      $this->db->select('nr_cart_items.*,nr_product_categories.*')
      ->join('nr_products','nr_products.prod_id=nr_cart_items.product_id')
      ->join('nr_product_categories','nr_product_categories.id=nr_products.category_ID');
      return $this->db->where('nr_cart_items.reference',$ref)
      ->get('nr_cart_items')->result();


    }
    public function deliver_product($ref){
      $this->db->set('delivery_status','1')
      ->where('reference',$ref)
      ->update('transaction_status');
    }
    public function get_this_product($id){
      return $this->db->where('prod_id',$id)
      ->get('nr_products')->row();
    }

    public function add_product_weight($data){
      return $this->db->insert('tbl_predefined_weight_range',$data);
    }
    public function get_success_transaction($id){
       return $this->db->select('nr_users.*, transaction_status.*,tbl_city_town.*,tbl_state_region.*,tbl_country.*')
      ->join('nr_users','nr_users.id=transaction_status.user_id')
      ->join('tbl_city_town', 'tbl_city_town.city_id=transaction_status.city_id')
      ->join('tbl_state_region','tbl_state_region.state_id=tbl_city_town.state_id')
      ->join('tbl_country','tbl_country.id=tbl_state_region.country_id')
      ->where('transaction_status.payment_status','1')
      ->where('transaction_status.user_id',$id)
      ->order_by('trans_id','DESC')
      ->get('transaction_status')->result();

    }

    public function get_cart_for_user($ref,$id){
       $this->db->select('nr_cart_items.*,nr_product_categories.*')
      ->join('nr_products','nr_products.prod_id=nr_cart_items.product_id')
      ->join('transaction_status','transaction_status.reference=nr_cart_items.reference')
      ->join('nr_product_categories','nr_product_categories.id=nr_products.category_ID');
      $this->db->where('nr_cart_items.reference',$ref);
      $this->db->where('transaction_status.user_id',$id);
      return $this->db->get('nr_cart_items')->result();
    }
    public function get_rtpr_cat(){
     return $this->db->get('tbl_rtpr_category')->result();
    }
     public function get_productCategory_rtpr($per_page,$page){
     return $this->db->where('category_ID','1')->get('nr_products')->result();

    }

    public function get_product_rtpr($category,$per_page,$page){
       $this->db->limit($per_page, $per_page*$page-$per_page);
     return $this->db->where('rtpr_cat_id',$category)->get('tbl_rtpr_products')->result();

    }

     public function countAll_by_cat_rtpr($category){
   // $this->db->join('tbl_rtpr_products','nr_products.prod_id=tbl_rtpr_products.prod.id');
    $this->db->where('rtpr_cat_id',$category);
    $this->db->from('tbl_rtpr_products');
    return $this->db->count_all_results();

    }
    public function insert_rtpr($cat,$id){
      $data=array(
          'prod_id'=>$id,
          'rtpr_cat_id'=>$cat,

      );
      return $this->db->insert('tbl_rtpr_products',$data);

    }
    public function get_8_cat(){
      $query=$this->db->get('nr_product_categories')->result();
      for ($i=0; $i<8; $i++){
        
        $data[]=$query[$i];
      }
      return $data;
    }

    public function get_16_cat(){
      $query=$this->db->get('nr_product_categories')->result();
      for ($i=0; $i<16; $i++){
        if($i<8){
          $data=[];
        }
        else{
          $data[]=$query[$i];

        }
        
      }
      return $data;
    }

    public function get_24_cat(){
      $this->db->from('nr_product_categories');
      $query=$this->db->get()->result();
      
      for ($i=0; $i<count($query); $i++){
        if($i<16){
          $data=[];
          
        }
        else{
          $data[]=$query[$i];

        }
        
      }
      return $data;
    }

}
