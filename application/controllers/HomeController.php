<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        
        // Url helper
        $this->load->helper('url');
        // Load database
        $this->load->database();
        $this->load->model('Products_Model');
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->library('cart');
    }

    public function index()
    {
        
        $data['get_all']=$this->Products_Model->getCat();
        $data['category']=$this->Products_Model->get_category();

        // Topmenu data
        $data['cat_8']=$this->Products_Model->get_8_cat();
        $data['cat_16']=$this->Products_Model->get_16_cat();
        $data['cat_24']=$this->Products_Model->get_24_cat();

        $this->load->view('natures/index', $data);
        //var_dump($data['cat_24']);
    
        
    }

    public function product_detail($id)
    {
        $data['get_single']=$this->Products_Model->get_detail($id);
        $cat=$this->Products_Model->get_category_id($id);
        $data['related']=$this->Products_Model->get_related($cat->category_ID,$id);
        $data['cat_desc']=$this->Products_Model->get_cat_desc($cat->category_ID);

        // Topmenu data
        $data['cat_8']=$this->Products_Model->get_8_cat();
        $data['cat_16']=$this->Products_Model->get_16_cat();
        $data['cat_24']=$this->Products_Model->get_24_cat();

        $this->load->view('natures/shop-single',$data);
         //var_dump($data['related']);
       //var_dump($cat->category_ID);


    }

    public function get_products()
    {
        $category=$this->input->post('category_id');

          $config=array();
          $config["base_url"]=base_url().'/HomeController/pagination_cat/'.$category;
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
            if($this->uri->segment(3)){
               $page=($this->uri->segment(3));
            }
            else{
              $page=1;
            }
            //$data['get_users']=$this->Admin_model->get_userList($config["per_page"],$page);
           // $data['get_all']=$this->Products_Model->getAll_product();
           
            //  Topmenu data
            $data['cat_8']=$this->Products_Model->get_8_cat();
            $data['cat_16']=$this->Products_Model->get_16_cat();
            $data['cat_24']=$this->Products_Model->get_24_cat();

            $data['count_users']=$total_row;
            $str_links=$this->pagination->create_links();
            $getCat=$this->Products_Model->get_productCategory($category,$config["per_page"],$page);
            $links=explode('&nbsp;',$str_links);
            

       // $category=1;
       
        
        $pre="";

        
        foreach ($getCat as $cat)
        {
            # code...
            // $pre .='<option value="'.$cat->prod_id.'">'.$cat->product_name.'</option>'; 



              $pre .=


              '   

                            <li class="product card_cont">
                                    <div class="card">
                                        <div class="card_content">
                                            <div class="image_column">
                                                <a href="'.base_url().'HomeController/product_detail/'.$cat->prod_id.'">
                                                    <div class="_thumbnail">
                                                        <img src="'.base_url().'uploads/'.$cat->product_images.'"/>
                                                       
                                                        <div class="preview_options">
                                                          
                                                            <div class="preview_options_cont">
                                                                <img src="'.base_url().'public_assets/images/add-cart.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="card_meta_data">
                                                <a href="'.base_url().'natures/Products/product_detail/'.$cat->prod_id.'">
                                                    <div class="product_data">  
                                                        <h5>'.$cat->product_name.'</h5>
                                                        <p class="_price">
                                                            <span><strong>$</strong></span>
                                                            <span><strong>11.02</strong></span>
                                                        </p>
                                                        <p class="desc">
                                                            '.$cat->description.'
                                                        </p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>




              '
                ;

        }
        $ul='</ul>';
        $style='<ul class="pagination">';
         foreach ($links as $link){
           $link.='<li class="page-item"><a href="#" class="page-link"></a>'.$link.'</li>';
         }
         $rtpr='<label for="sel1">Select Rtpr Categories :</label>
              <div style="width:100%">
                
                  <select class="form-control" id="rtpr" style="width:30%; border-color:#068a50;" >
                    
                ';

        $rtpr_cat=$this->Products_Model->get_rtpr_cat();
        if($category=='1'){
            echo $rtpr;
            echo '<option>Select Rtpr Category</option>';
            $tidy='';

            foreach ($rtpr_cat as $cat) {
                $tidy.=
                '    
                     <option value="'.$cat->id.'"> '.$cat->category.'</option>

                ';
                # code...
            }

            echo $tidy;
            $close='</select><br><br><br></div>';
            echo $close;
            

        }



        echo $pre;
        echo $ul;
        echo $style;
        echo $link;

    }

    public function pagination_cat()
    {
        $category=$this->uri->segment(3);
        $no=$this->uri->segment(4);

        if($category==false || $no==false)
        {
            redirect('product_page');
        }

        else
        {
            $config=array();
            $config["base_url"]=base_url().'/HomeController/pagination_cat/'.$category;
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
            
            if($this->uri->segment(4))
            {
                $page=($this->uri->segment(4));
            }

            else
            {
                $page=1;
            }

            // Topmenu data
            $data['cat_8']=$this->Products_Model->get_8_cat();
            $data['cat_16']=$this->Products_Model->get_16_cat();
            $data['cat_24']=$this->Products_Model->get_24_cat();

            $data['get_all']=$this->Products_Model->get_productCategory($category,$config["per_page"],$page);
            $data['count_users']=$total_row;
            $str_links=$this->pagination->create_links();
            $data["links"]=explode('&nbsp;',$str_links);
            $data['get_cat']=$this->Products_Model->cat();
            $this->load->view('natures/shop', $data);
        }
    }

    // Function to load the category page - real time
    public function product_category($id)
    {
        $data['cat_details']=$this->Products_Model->get_cat_name($id);

        // Topmenu data
        $data['cat_8']=$this->Products_Model->get_8_cat();
        $data['cat_16']=$this->Products_Model->get_16_cat();
        $data['cat_24']=$this->Products_Model->get_24_cat();

        $this->load->view('natures/product_category', $data);
    }

    // Function to load the category page - natures truth
    public function n_product_category()
    {
        // Topmenu data
        $data['cat_8']=$this->Products_Model->get_8_cat();
        $data['cat_16']=$this->Products_Model->get_16_cat();
        $data['cat_24']=$this->Products_Model->get_24_cat();

        $this->load->view('natures/n_product_category', $data);
    }

    // Function to load the about page
    public function about()
    {
        // Topmenu data
        $data['cat_8']=$this->Products_Model->get_8_cat();
        $data['cat_16']=$this->Products_Model->get_16_cat();
        $data['cat_24']=$this->Products_Model->get_24_cat();

        $this->load->view('natures/about', $data);
    }

    // Function to load the contact page
    public function contact()
    {
        // Topmenu data
        $data['cat_8']=$this->Products_Model->get_8_cat();
        $data['cat_16']=$this->Products_Model->get_16_cat();
        $data['cat_24']=$this->Products_Model->get_24_cat();

        $this->load->view('natures/contact-page', $data);
    }

    public function get_products_rtpr()
    {
        $category=$this->input->post('category_id');
        
        // Topmenu data
        $data['cat_8']=$this->Products_Model->get_8_cat();
        $data['cat_16']=$this->Products_Model->get_16_cat();
        $data['cat_24']=$this->Products_Model->get_24_cat();
        
         $config=array();
         // $config["base_url"]=base_url().'/HomeController/pagination_cat/'.$category;
          $total_row=$this->Products_Model->countAll_by_cat_rtpr($category);
          $config["total_rows"]=$total_row;
          $config["per_page"]=12;
          $config['use_page_numbers']=TRUE;
          $config['num_links']=$total_row;
          $config['cur_tag_open']='&nbsp;<a class="current">';
          $config['cur_tag_close']='</a>';
          $config['next_link']='Next';
          $config['prev_link']='Previous';
          $this->pagination->initialize($config);
            if($this->uri->segment(3)){
               $page=($this->uri->segment(3));
            }
            else{
              $page=1;
            }

         $nr=$this->Products_Model->get_productCategory_rtpr($category,$config["per_page"],$page);
         $rt=$this->Products_Model->get_product_rtpr($category,$config["per_page"],$page);
          $str_links=$this->pagination->create_links();
           $links=explode('&nbsp;',$str_links);

        $adds=array();
         foreach ($nr as $key) {
             foreach ($rt as $value) {
                if($key->prod_id==$value->prod_id){
                    $adds[]=array_merge((array)$key,(array)$value);
                 # code...
                }
             }
         }
         $pre='';
        

         foreach ($adds as $cat) {
            # code...
            // $pre .='<option value="'.$cat->prod_id.'">'.$cat->product_name.'</option>'; 



              $pre .=


              '   

                            <li class="product card_cont">
                                    <div class="card">
                                        <div class="card_content">
                                            <div class="image_column">
                                                <a href="'.base_url().'HomeController/product_detail/'.$cat['prod_id'].'">
                                                    <div class="_thumbnail">
                                                        <img src="'.base_url().'uploads/'.$cat['product_images'].'"/>
                                                       
                                                        <div class="preview_options">
                                                          
                                                            <div class="preview_options_cont">
                                                                <img src="'.base_url().'public_assets/images/add-cart.png">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="card_meta_data">
                                                <a href="'.base_url().'natures/Products/product_detail/'.$cat['prod_id'].'">
                                                    <div class="product_data">  
                                                        <h5>'.$cat['product_name'].'</h5>
                                                        <p class="_price">
                                                            <span><strong>$</strong></span>
                                                            <span><strong>11.02</strong></span>
                                                        </p>
                                                        <p class="desc">
                                                            '.$cat['description'].'
                                                        </p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>




              '
                ;

        }
        $ul='</ul>';
        $style='<ul class="pagination">';
         foreach ($links as $link){
           $link.='<li class="page-item">'.$link.'</li>';
         }

        echo $pre;
        echo $ul;
        echo $style;
        echo $link;

    }

}