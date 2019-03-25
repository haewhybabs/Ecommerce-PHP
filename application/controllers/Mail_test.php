<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail_test extends MY_Controller {

        public function index()
        {
                 $this->load->library('email');
                         //  $host=$this->Settings_model->get_all();
                          //SMTP & mail configuration
                          $config = array(
                          'protocol'  => 'smtp',
                          'smtp_host' => 'smtp2.lfcww.org',
                          'smtp_port' =>  4500,
                          'smtp_user' =>'procure@lfcww.org',
                          'smtp_pass' => 'L!v!ngF@1th',
                          'mailtype'  => 'html',
                          'charset'   => 'utf-8',
                          'smtp_crypto'=>'tls'
                      );
                      $this->email->initialize($config);
                      $this->email->set_mailtype("html");
                      $this->email->set_newline("\r\n");

                      $option = array(
                                     'subject'   => 'Request For Quotation',
                                      'from'      => 'procure@lfcww.org',
                                      'from_name' => 'LFC eProcurement',
                                     
                                  );

                      $this->email->from($option['from'], $option['from_name']);
                      $this->email->to('babalolaisaac@gmail.com');
                      $this->email->subject('Testing');
                      $this->email->message('Mail Testing');
                      if ($this->email->send()){
                                echo "yes";
                            } 
                            else{
                                echo "No";
                            }
        }

}