<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Products extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['Products_Model','Country_model','User_Model']);
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->library('cart');
    }

    public function index()
    { 
        $data['category']=$this->Products_Model->get_category();
        $data['title']='Add New Product';
        $reg=$this->User_Model->general();
        $data['previous']=$reg->total_messages;
        $data['latest']=$this->User_Model->count_messages();
        $data['rtpr']=$this->Products_Model-> get_rtpr_cat();

        $this->template->load('admin','products/add',$data);
    }

    // Post Action to add Products
    public function AddProduct()
     {

        $get_product_id=$this->Products_Model->get_id();
        if($get_product_id==false){
            $product_id=1;
        }
        else{
            foreach($get_product_id as $id){   
            }
            $prod_id=$id->prod_id;
            $product_id=$prod_id+1;
       }


        $config=[
            'upload_path'=>'./uploads','allowed_types'=>'gif|jpg|png|jpeg|svg','file_name'=>'product'.$product_id,
        ];
        $this->load->library('upload',$config);
        $this->upload->do_upload('userfile');
        $cat=$this->input->post('category');

        $this->form_validation->set_rules('product_name','Product Name','required');
        $this->form_validation->set_rules('product_price','Product Price','required');
        $this->form_validation->set_rules('category','Product Category','required');
        $this->form_validation->set_rules('description','Product Description','required');

        if ($this->form_validation->run()){
            $info=$this->upload->data();
            $data=$this->input->post();

            //  Topmenu data
            $data['cat_8']=$this->Products_Model->get_8_cat();
            $data['cat_16']=$this->Products_Model->get_16_cat();
            $data['cat_24']=$this->Products_Model->get_24_cat();

            $data['product_images']=$info['file_name'];
            $insert_data=$this->Products_Model->InsertData($data);
            if($cat=='1'){
               
              
              $this->Products_Model->insert_rtpr($this->input->post('rtpr_cat'),$product_id);
            }

            $this->session->set_flashdata('message', 'Product is Successfully Added');
            redirect(site_url('products'));
            
        }
        else{
            $this->session->set_flashdata('error', 'Please fill the neccessary details');
            redirect(site_url('category'));
       }
       // var_dump($insert_data);
            
            
      
        
    }

    // Load Add Category Page
    public function category_page()
    {
        $data['title']='Category list';
        $data['category']=$this->Products_Model->get_category();
        $reg=$this->User_Model->general();
        $data['previous']=$reg->total_messages;
        $data['latest']=$this->User_Model->count_messages();

        $this->template->load('admin','products/category',$data);
    }

   // Page to add Products Category
    public function Add_category_page()
    {
        $data['title']='Add Category';
        $reg=$this->User_Model->general();
        $data['previous']=$reg->total_messages;
        $data['latest']=$this->User_Model->count_messages();
        $this->template->load('admin','products/category_page',$data);
    }
    public function Edit_cat($id){
      $reg=$this->User_Model->general();
        $data['previous']=$reg->total_messages;
        $data['latest']=$this->User_Model->count_messages();

      $data['category']=$this->Products_Model->get_cat_desc($id);
      $data['title']='Edit Category';
      $this->template->load('admin','products/edit_category',$data);
    }
    public function category_edit(){
      $id=$this->input->post('cat_id');

       $config=[
            'upload_path'=>'./uploads/category','allowed_types'=>'gif|jpg|png|jpeg|svg','file_name'=>'product'.$id,
        ];
        $this->load->library('upload',$config);
        $this->upload->do_upload('userfile');


    
       $info=$this->upload->data();
       $data=$this->input->post();
       $data['images']=$info['file_name'];
       $this->Products_Model->cat_edit($data,$id);

       $this->session->set_flashdata('message', 'Category is Successfully Updated');
                redirect(site_url('category'));


    }
    public function Delete_cat($id){
      $this->Products_Model->delete_category($id);
      $this->session->set_flashdata('message', 'Category is Successfully Deleted');
      redirect(site_url('category'));

    }
    // Post Action to add Products Category
    public function Add_category()
    {
        $this->form_validation->set_rules('category','Category','required');
        if ($this->form_validation->run())
        {
         $category=$this->input->post();
         $add_category=$this->Products_Model->AddCategory($category);
         $this->session->set_flashdata('message', 'Category is Successfully Added');
                redirect(site_url('category'));
        }
        else
        {

        }
    }
     public function product_detail($id){
        $data['get_single']=$this->Products_Model->get_detail($id);
        $cat=$this->Products_Model->get_category_id($id);
        $data['cat_desc']=$this->Products_Model->get_cat_desc($cat->category_ID);

        //  Topmenu data
        $data['cat_8']=$this->Products_Model->get_8_cat();
        $data['cat_16']=$this->Products_Model->get_16_cat();
        $data['cat_24']=$this->Products_Model->get_24_cat();

         $data['related']=$this->Products_Model->get_related($cat->category_ID,$id);
        $this->load->view('natures/shop-single',$data);
         

    }
    public function product_list(){
        $data['get_all']=$this->Products_Model->getAll();
        $data['title']='Products List';
        $reg=$this->User_Model->general();
        $data['previous']=$reg->total_messages;
        $data['latest']=$this->User_Model->count_messages();
        $this->template->load('admin','products/product_list', $data);

    }
    public function product_edit($id){
        $data['title']='Products List';
        $reg=$this->User_Model->general();
        $data['previous']=$reg->total_messages;
        $data['latest']=$this->User_Model->count_messages();

        $data['product']=$this->Products_Model->get_this_product($id);
        $this->template->load('admin','products/product_edit',$data);

    }
    public function product_page(){

      $config=array();
      $config["base_url"]=base_url().'/natures/Products/product_page';
      $total_row=$this->Products_Model->countAll();
      $config["total_rows"]=$total_row;
      $config["per_page"]=12;
      $config['use_page_numbers']=TRUE;
      $config['num_links']=$total_row;
      $config['cur_tag_open']='&nbsp;<a class="current">';
      $config['cur_tag_close']='</a>';
      $config['next_link']='Next';
      $config['prev_link']='Previous';
      $this->pagination->initialize($config);
        if($this->uri->segment(4)){
           $page=($this->uri->segment(4));
        }
        else{
          $page=1;
        }
        //$data['get_users']=$this->Admin_model->get_userList($config["per_page"],$page);
        $data['get_all']=$this->Products_Model->getAll_product($config["per_page"],$page);
        $data['count_users']=$total_row;
        $str_links=$this->pagination->create_links();
        $data["links"]=explode('&nbsp;',$str_links);
        $data['get_cat']=$this->Products_Model->cat();

        //  Topmenu data
        $data['cat_8']=$this->Products_Model->get_8_cat();
        $data['cat_16']=$this->Products_Model->get_16_cat();
        $data['cat_24']=$this->Products_Model->get_24_cat();

        $this->load->view('natures/shop', $data);
    }
    public function cart_count(){
       $rows = count($this->cart->contents());
       echo $rows;
    }

    public function products_view($id){
      $config=array();
      $config["base_url"]=base_url().'/natures/Products/products_view/'.$id;
      $total_row=$this->Products_Model->countAll_by_cat($id);
      $config["total_rows"]=$total_row;
      $config["per_page"]=12;
      $config['use_page_numbers']=TRUE;
      $config['num_links']=$total_row;
      $config['cur_tag_open']='&nbsp;<a class="current">';
      $config['cur_tag_close']='</a>';
      $config['next_link']='Next';
      $config['prev_link']='Previous';
      $this->pagination->initialize($config);
        if($this->uri->segment(5)){
           $page=($this->uri->segment(5));
        }
        else{
          $page=1;
        }
        //$data['get_users']=$this->Admin_model->get_userList($config["per_page"],$page);
        $data['get_all']=$this->Products_Model->getAll_product($config["per_page"],$page);
        $data['get_cat']=$this->Products_Model->cat_not_id($id);
        $data['get_all_id']=$this->Products_Model->getAll_product_id($config["per_page"],$page,$id);
        $data['get_cat_id']=$this->Products_Model->get_cat_name($id);
        $data['count_rows']=$total_row;
        $str_links=$this->pagination->create_links();
        $data["links"]=explode('&nbsp;',$str_links);

        //  Topmenu data
        $data['cat_8']=$this->Products_Model->get_8_cat();
        $data['cat_16']=$this->Products_Model->get_16_cat();
        $data['cat_24']=$this->Products_Model->get_24_cat();
        
        $this->load->view('natures/shop_view', $data);
       // var_dump($data['get_all_id']);

    }
    public function Edit_product(){
      
      $id=$this->input->post('prod_id');
      $config=[
            'upload_path'=>'./uploads','allowed_types'=>'gif|jpg|png|jpeg|svg','file_name'=>'product_update'.$id,
        ];
        $this->load->library('upload',$config);
        if($this->upload->do_upload('product_images')){

         $info=$this->upload->data();
         $data=$this->input->post();
         $data['product_images']=$info['file_name'];
         $Update=$this->Products_Model->update_product($data,$id);
         $this->session->set_flashdata('message', 'Product is successfully updated');
         redirect(site_url('product_list'));

        }
        else{

           $this->session->set_flashdata('error', 'Product not updated');
         redirect(site_url('product_list'));


        }



    
       
    
    }
    public function delete_product($id){
      $this->Products_Model->delete_product($id);
      $this->session->set_flashdata('message', 'Product is successfully deleted');
            redirect(site_url('product_list'));
    }

    public function product_price(){
       // $data['category']=$this->Products_Model->get_category();
      $data['country']=$this->Country_model->get_countries();
      $data['title']='Product Price';
      $reg=$this->User_Model->general();
      $data['previous']=$reg->total_messages;
      $data['latest']=$this->User_Model->count_messages();

        $this->template->load('admin','products/price',$data);
    }
    public function get_shipping_price(){
      $id=$this->input->post('city_id');
      $pre='';
      $get=$this->Products_Model->get_shipping_price($id);

      if($get==false){
        $get_range=$this->Products_Model->get_weight_range();
        foreach ($get_range as $range) {

             $pre.='

             <input type="hidden" name="city_id" value="'.$id.'">
              

                    <div class="form-group">
                     <input type="hidden" name="weight_range[]" value="'.$range->weight_range_id.'">
                      <label for="shipping_price">Weight Range '.$range->weight_lower_band.'--'.$range->weight_upper_band.':</label>
                      <input type="number" class="form-control" id="email" name="shipping_price[]" placeholder="shipping price" step="0.01">
                    </div>



                    ';
        }


      }else{


            $get_range=$this->Products_Model->get_weight_range();

            foreach ($get as $key) {
              foreach ($get_range as $range) {
                if($key->weight_range_id==$range->weight_range_id){
                  $range_l=$range->weight_lower_band;
                  $range_u=$range->weight_upper_band;
                 }
              }
              $pre.='<input type="hidden" name="city_id" value="'.$id.'">
                     <input type="hidden" name="price_id[]" value="'.$key->shipping_price_id.'">

                    <div class="form-group">
                      <label for="email">Weight Range '.$range_l.'--'.$range_u.':</label>
                      <input type="number" class="form-control" id="email" name="shipping_price[]" value="'.$key->shipping_price.'" step="0.01">
                    </div>



                    ';
              # code...
            }
            
      }
      echo $pre;

    }
    public function update_shipping_price(){
      $id=$this->input->post('city_id');

      $get=$this->Products_Model->get_shipping_price($id);
      if ($get==false){
        for($count=0; $count<count($this->input->post('shipping_price')); $count++){
              $data=array(
                  'weight_range_id'=>$this->input->post('weight_range')[$count],
                  'city_id'=>$this->input->post('city_id'),
                  'shipping_price'=>$this->input->post('shipping_price')[$count]
              );
              $this->Products_Model->insert_shipping($data);
        }

        //  Topmenu data
        $data['cat_8']=$this->Products_Model->get_8_cat();
        $data['cat_16']=$this->Products_Model->get_16_cat();
        $data['cat_24']=$this->Products_Model->get_24_cat();

         $this->session->set_flashdata('message', 'Product is successfully inserted');
            redirect(site_url('natures/Products/product_price'));


      }
      else{
            for($count=0; $count<count($this->input->post('price_id')); $count++){
              $ship_id=$this->input->post('price_id')[$count];

              $data=array(
                  'shipping_price'=>$this->input->post('shipping_price')[$count]
              );
              $this->Products_Model->update_shipping($data,$ship_id);
            }

            //  Topmenu data
            $data['cat_8']=$this->Products_Model->get_8_cat();
            $data['cat_16']=$this->Products_Model->get_16_cat();
            $data['cat_24']=$this->Products_Model->get_24_cat();

            $this->session->set_flashdata('message', 'Product is successfully updated');
            redirect(site_url('natures/Products/product_price'));


      }


    }
    public function product_weight(){
       $reg=$this->User_Model->general();
       $data['title']='Product Weight';
      $data['previous']=$reg->total_messages;
      $data['latest']=$this->User_Model->count_messages();
      $data['ranges']=$this->Products_Model->get_ranges();

      $this->template->load('admin','products/weight',$data);

    }
    public function weight_update(){
      for($count=0; $count<count($this->input->post('range_id')); $count++){
          $range_id=$this->input->post('range_id')[$count];
        $data=array(
            'weight_lower_band'=>$this->input->post('weight_lower_band')[$count],
            'weight_upper_band'=>$this->input->post('weight_upper_band')[$count],


        );

        $this->Products_Model->update_weight($data,$range_id);
      }
      $this->session->set_flashdata('message', 'Weight Updated Successfully');
      redirect(site_url('natures/Products/product_weight'));
    }

    public function product_success(){
       $reg=$this->User_Model->general();
       $data['title']='Product Weight';
      $data['previous']=$reg->total_messages;
      $data['latest']=$this->User_Model->count_messages();
      $data['success']=$this->Products_Model->success_trans();

      $this->template->load('admin','products/success_trans',$data);
      //var_dump($data['success']);


    }

    public function success_products($ref){

       $reg=$this->User_Model->general();
       $data['title']='Product Weight';
      $data['previous']=$reg->total_messages;
      $data['latest']=$this->User_Model->count_messages();

      $data['products']=$this->Products_Model->get_cart_products($ref);

     $this->template->load('admin','products/success_prod',$data);
      //var_dump($data['products']);

    }
    public function deliver_product($reference){
       $reg=$this->User_Model->general();
       $data['title']='Product Weight';
      $data['previous']=$reg->total_messages;
      $data['latest']=$this->User_Model->count_messages();

      //  Topmenu data
      $data['cat_8']=$this->Products_Model->get_8_cat();
      $data['cat_16']=$this->Products_Model->get_16_cat();
      $data['cat_24']=$this->Products_Model->get_24_cat();

      $deliver=$this->Products_Model->deliver_product($reference);
      redirect('natures/Products/product_success');

    }

    public function add_product_weight(){
      $data=$this->input->post();
      $this->Products_Model->add_product_weight($data);

      $this->session->set_flashdata('message', 'Weight Added Successfully');
      redirect(site_url('natures/Products/product_weight'));

    }

    public function get_rtpr(){

      //  Topmenu data
      $data['cat_8']=$this->Products_Model->get_8_cat();
      $data['cat_16']=$this->Products_Model->get_16_cat();
      $data['cat_24']=$this->Products_Model->get_24_cat();

      $category='1';

       $config=array();
      $config["base_url"]=base_url().'/natures/Products/get_rtpr';
      $total_row=$this->Products_Model->countAll_by_cat($category);
      $config["total_rows"]=$total_row;
      $config["per_page"]=12;
      $config['use_page_numbers']=TRUE;
      $config['num_links']=$total_row;
      $config['cur_tag_open']='&nbsp;<a class="current">';
      $config['cur_tag_close']='</a>';
      $config['next_link']='Next';
      $config['prev_link']='Previous';
      $this->pagination->initialize($config);
        if($this->uri->segment(4)){
           $page=($this->uri->segment(4));
        }
        else{
          $page=1;
        }
       $data['get_all']=$this->Products_Model->get_productCategory($category,$config["per_page"],$page);
        //$data['get_all']=$this->Products_Model->getAll_product_rtpr($config["per_page"],$page);
        $data['rtpr_cat']=$this->Products_Model->get_rtpr_cat();
        //$data['count_rows']=$total_row;
        $str_links=$this->pagination->create_links();
        $data["links"]=explode('&nbsp;',$str_links);

        $this->load->view('natures/shop_rtpr',$data);

    }
    public function get_nt_products($category){
      if($category==1){
          redirect('natures/Products/get_rtpr');
        }
        else{

        $data['cat_8']=$this->Products_Model->get_8_cat();
        $data['cat_16']=$this->Products_Model->get_16_cat();
        $data['cat_24']=$this->Products_Model->get_24_cat();
         
          
        
      //  Topmenu data
          
            $config=array();
            $config["base_url"]=base_url().'natures/Products/get_nt_products/'.$category;
            $total_row=$this->Products_Model->countAll_by_cat($category);
            $config["total_rows"]=$total_row;
            $config["per_page"]=12;
            $config['use_page_numbers']=TRUE;
            $config["uri_segment"] = 5;
            $config["page_query_string"] = TRUE;
            $config['num_links']=$total_row;
            $config['cur_tag_open']='&nbsp;<a class="current">';
            $config['cur_tag_close']='</a>';
            $config['next_link']='Next';
            $config['prev_link']='Previous';
             $this->pagination->initialize($config);
              if($this->uri->segment(5)){
                 $page=$this->uri->segment(5);
              }
              else{
                $page=1;
              }


             $data['get_all']=$this->Products_Model->get_productCategory($category,$config["per_page"],$page);
             
              $data['nt_cat']=$this->Products_Model->get_cat_name($category);
              $data['count_rows']=$total_row;
              $str_links=$this->pagination->create_links();
              $data["links"]=explode('&nbsp;',$str_links);

              $this->load->view('natures/shop_nt',$data);
              //var_dump($data['links']);

            




        }


        
       

    }

   public function getRealIpAddr()
  {
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return$ip;
  }


    
    

}