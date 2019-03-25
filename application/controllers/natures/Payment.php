<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Payment extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['Products_Model']);
        $this->load->library('form_validation');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->library('cart');
        $this->load->library('flutterwave');
    }

    public function index()
    { 

    }

     public function initialize(){
        $data1=$this->input->post();
         $curl = curl_init();
         $email=$this->session->userdata['logged_in']['email'];
         $user_id=$this->session->userdata['logged_in']['id'];
         $ship=$this->input->post('shipping');
         $reference=$this->input->post('rowid');
         $total=$this->cart->total() + $ship;

         $data=array(
           'payment_amount'=>$total,
            'reference'=>$reference,
            'user_id'=>$user_id,
            'payment_status'=>'0',
            'delivery_status'=>'0',
            'city_id'=>$this->input->post('city_id'),
            'address'=>$this->input->post('address'),


         );
         $this->Products_Model->insert_trans($data);


         //insert into cart details
          foreach ($this->cart->contents() as $items){

            $data=array(
                'product_name'=>$items['name'],
                'quantity'=>$items['qty'],
                'reference'=>$reference,
                'product_id'=>$items['id'],
                'price'=>$items['price'],

            );
            $this->Products_Model->insert_cart($data);


          }


      
       
        $currency = "USD";
        $txref =$this->input->post('rowid'); // ensure you generate unique references per transaction.
        $PBFPubKey ="FLWPUBK-d74c4e96806d18dde285513857f61092-X"; // get your public key from the dashboard.
        $redirect_url =base_url().'natures/Payment/payment_verification';

        $this->flutterwave->initialize($email,$total,$redirect_url,$txref,$PBFPubKey,$currency);
          
       

    }
    public function payment_verification(){
        if (isset($_GET['txref'])) {

             $ref = $_GET['txref'];
             $get_payment=$this->Products_Model->get_transaction_details($ref);
             $amount=$get_payment->payment_amount;
             $currency="USD";
             $secret="FLWSECK-155fa8add7f200b44166d9a5256701c6-X";
             $email=$this->session->userdata['logged_in']['email'];
             $username=$this->session->userdata['logged_in']['username'];

             if($this->flutterwave->verify($currency,$amount,$secret,$ref)==true){
                $this->Products_Model->update_trans_status($ref);


                    $config = Array(
                        'protocol'  => 'smtp',
                        'smtp_host' => 'smtp.office365.com',
                        'smtp_port' => '587',
                        'smtp_user' => 'support@xownsolutions.com',
                        'smtp_pass' => 'qwas_098@2@',
                        'mailtype'  => 'html',
                        'charset'   => 'utf-8',
                        'smtp_crypto'=>'tls',
                        'newline'   => "\r\n"
                    );
                    $this->email->initialize($config);

                 
                    $this->email->from('support@naturesrejuvenate.com', 'NaturesRejuvenate Support');
                    $this->email->to($email);
                    //$this->email->cc('support@xownsolutions.com');

                    $message='<p> Dear'.$username.'</p>
                              <p> Thank You for Patronizing NaturesRejuvenate.</P>
                              <p> Your Transaction was successful</p>
                               
                    ';

                    $this->email->subject('Transaction Successful');
                    $this->email->message($message);
                    $this->email->send();


            }
            else{
                redirect_url('/');
            }




        }

        else {
          die('No reference supplied');
        }

    

    }

}