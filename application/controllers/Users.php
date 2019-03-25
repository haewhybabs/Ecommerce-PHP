<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        
        // Url helper
       // $this->load->helper('url');
         $this->load->helper(array('form', 'url'));
        // Load database
        $this->load->model(['User_Model','Products_Model','Welcome_model']);
        $this->load->library('form_validation');
        $this->load->library('email');
        $this->load->library('session');
        $this->load->library('cart');
        $this->load->library('control');
    }

    public function index()
    {
       $user_data = $this->Welcome_model->get_all();
        $data = array(
            'title' => 'Admin Users',
            'user_data' => $user_data,
        );
         $reg=$this->User_Model->general();
        $data['previous']=$reg->total_messages;
        $data['latest']=$this->User_Model->count_messages();

        $this->template->load('admin', 'user/list', $data);
        
    }
    public function create_admin(){
      $data = array(
            'title' => 'New users',
           );
        $reg=$this->User_Model->general();
        $data['previous']=$reg->total_messages;
        $data['latest']=$this->User_Model->count_messages();
        $this->template->load('admin', 'user/form', $data); 
    }
    public function Admin_create(){
      $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]|max_length[12]');
      $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[nr_users.email]',
                  array(
                    'required'      => 'You have not provided %s.',
                    'is_unique'     => 'This %s already exists.'
            )

                 );
           $this->form_validation->set_rules(
            'username', 'Username',
            'required|min_length[4]|max_length[12]|is_unique[nr_users.username]',
            array(
                    'required'      => 'You have not provided %s.',
                    'is_unique'     => 'This %s already exists.'
            )
          );
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
            $this->form_validation->set_rules('mobile', 'Your Mobile Number ', 'required');
            $this->form_validation->set_rules('country', 'Your Country', 'required');
            $this->form_validation->set_rules('role', 'Role', 'required');

          if ($this->form_validation->run()) {
               $data=$this->input->post();
               $data['role_id']=$this->input->post('role');
               $data['image']='No_image';
               $data['status']='0';

               $password=$this->input->post('password');
                 $options = [
                    'cost' => 11,
                    ];
                $pass= password_hash($password, PASSWORD_BCRYPT, $options);

               $insert=$this->User_Model->insert_user($data,$pass);

               $this->session->set_flashdata('message', 'Admin is successfully created');
               redirect('welcome/dashboard');
              

              
          }
          else{
                $data = array(
                'title' => 'New users',
               );
            $reg=$this->User_Model->general();
            $data['previous']=$reg->total_messages;
            $data['latest']=$this->User_Model->count_messages();
            $this->template->load('admin', 'user/form', $data); 

          }

    }
    public function admin_delete($id){
       $this->User_Model->delete_user($id);
       $this->session->set_flashdata('message', 'User is Successfully deleted');
        redirect('Users');
              



    }

    public function login()
    {
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('password','Password','required');


        if ($this->form_validation->run())
        {
            $email=$this->input->post('email');
            $password=$this->input->post('password');
            $checkUser=$this->User_Model->CheckUsers($email,$password);

           
                if ($checkUser && $checkUser->role_id=='1' || $checkUser->role_id=='2')
                {
                    $sess_array = array(
                        'first_name' => $checkUser->first_name,
                        'last_name' => $checkUser->last_name,
                        'username'=>$checkUser->username,
                        'email' => $checkUser->email,
                        'role_id' => $checkUser->role_id,
                        'username'=>$checkUser->username,
                        'id' => $checkUser->id,
                    );

                    $this->session->set_userdata('logged', $sess_array);
                     $this->_checkUser();
                    
                    redirect(site_url('welcome/dashboard'));
                }
                
                else
                {
                      $data = array(
                        'title' => 'Login',
                        'action' => site_url('welcome/login'),
                      );
                     $this->session->set_flashdata('error', 'Invalid Email or Password');
                     $this->load->view('welcome/login', $data);
                }

            
        }
        else{
             $data = array(
                        'title' => 'Login',
                        'action' => site_url('welcome/login'),
                      );
                     $this->session->set_flashdata('error', 'Your Login details are required');
                     $this->load->view('welcome/login', $data);
        }

    }
    

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Welcome');
    }
    public function _checkUser()
    {
        if ($this->session->userdata('logged') == false) {
            redirect('welcome/logout');
        }
      
    }
    public function registration(){
           $data=array('success'=> false, 'message'=>array());

          
 
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]|max_length[12]');
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[nr_users.email]',
                  array(
                    'required'      => 'You have not provided %s.',
                    'is_unique'     => 'This %s already exists.'
            )

                 );
           $this->form_validation->set_rules(
            'username', 'Username',
            'required|min_length[4]|max_length[12]|is_unique[nr_users.username]',
            array(
                    'required'      => 'You have not provided %s.',
                    'is_unique'     => 'This %s already exists.'
            )
          );
            $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
            $this->form_validation->set_rules('passwordconf', 'Password Confirmation', 'trim|required|matches[password]');
            $this->form_validation->set_rules('mobile', 'Your Mobile Number ', 'required');
            $this->form_validation->set_rules('country', 'Your Country', 'required');
             $this->form_validation->set_error_delimiters('<p class="text-danger" style="color:red;">', '</p>');

          if ($this->form_validation->run()) {
               $data=$this->input->post();
               $data['role_id']='0';
               $data['image']='No_image';
               $data['status']='0';

               $password=$this->input->post('password');
                 $options = [
                    'cost' => 11,
                    ];
                $pass= password_hash($password, PASSWORD_BCRYPT, $options);

               $insert=$this->User_Model->insert_user($data,$pass);
              

              $data['success']=true;

          }
          else{

             foreach($_POST as $key=>$value){
                $data['messages'][$key]=form_error($key);
             }

          }
          echo json_encode($data);


    }
    public function user_login(){
        $data=array('success'=> false, 'message'=>array());

        $this->form_validation->set_rules('email_login','Email','required');
        $this->form_validation->set_rules('password_login','Password','required');
        $this->form_validation->set_error_delimiters('<p class="text-danger" style="color:red;">', '</p>');

        if ($this->form_validation->run()){
            $password=$this->input->post('password_login');
            $email=$this->input->post('email_login');
            $checkUser=$this->User_Model->UserCheck($email,$password);

            $data['success']=true;

            if ($checkUser)
            {
                    $sess_array = array(
                        'first_name' => $checkUser->first_name,
                        'last_name' => $checkUser->last_name,
                        'email' => $checkUser->email,
                        'username'=>$checkUser->username,
                        'role_id' => $checkUser->role_id,
                        'id' => $checkUser->id,
                    );

                    $this->session->set_userdata('logged_in', $sess_array);

                    $data['users']=true;
                   
            }
            else{
                    $data['users']=false;
            }

        }
        else{

             foreach($_POST as $key=>$value){
                $data['messages'][$key]=form_error($key);
             }

        }
         echo json_encode($data);
    }
    public function forgot_password(){
        $this->form_validation->set_rules('email','Email','required');
        if($this->form_validation->run()){
          $email=$this->input->post('email');
          //Check email
          $checkemail=$this->User_Model->checkMail($email);
          if($checkMail){

          }
          else{

          }
        }
        else{

        }

    }
    public function user_profile(){
       if($this->control->auth()==true){
           $id=$this->session->userdata['logged_in']['id'];
          $data['details']=$this->User_Model->get_details($id);
          $data['transaction']=$this->Products_Model->get_success_transaction($id);
          //$data['cart_details']=$this->Products_Model->get_cart_for_user($ref,$id);
          $this->load->view('natures/user_profile',$data);
         
       }
       else{
        redirect('/');
       }

       
      
    }
    public function update_image(){
       $id=$this->session->userdata['logged_in']['id'];
       //upload Image

        $config=[
            'upload_path'=>'./uploads/profile_images','allowed_types'=>'gif|jpg|png|jpeg','file_name'=>'image'.$id,
        ];
        $this->load->library('upload',$config);

       if ($this->upload->do_upload('userfile')){
         $info=$this->upload->data();
         $data=$info['file_name'];
         $update=$this->User_Model->update_image($id,$data);

         redirect('Users/user_profile');
       }
       else{
        echo validation_errors();
       }

    }
    public function user_logout(){
        $this->session->sess_destroy();
        redirect('HomeController');
    }
    public function contact_us(){
      $pre='';
     //$data=array('success'=> false, 'message'=>array());
       $captcha = $_POST['g-recaptcha-response'];
    
      if(strlen($captcha)<1){
          $pre='Pls Check the google Captcha';

      }
    
      else{
        $datap=$this->input->post();
        $insert=$this->User_Model->insert_contact($datap);   
        $pre='
                  Your Message is Successfully Sent

             ';
       
        
      }
      
       echo $pre;

    }
    public function message(){
      $get_all=$this->User_Model->get_messages();
      $gen_settings=$this->User_Model->general();
       $count=$this->User_Model->count_messages();
      $update=$this->User_Model->update_count($count);

      $data=array(
           'get_all'=>$get_all,
           'settings'=>$gen_settings,
           'title'=>'Contact Us',
            'previous'=>$gen_settings->total_messages,
            'latest'=>$count,

      );
      $this->template->load('admin','products/message',$data);
      //var_dump($count);
    }
}