<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Register extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(['Register_model', 'Audit_model']);
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function index()
    {

        $register_data = $this->Register_model->get_all();

        $data = array(
            'title' => 'Registered',
            'register_data' => $register_data,
        );

        $this->template->load('admin', 'register/list', $data);

    }

    public function create()
    {

        $data = array(
            'button' => 'Register',
            'title' => 'Add new Web Page',
            'action' => site_url('register/create_action'),
        );
        $this->template->load('admin', 'register/form', $data);
    }
    public function audit($task)
    {
        $login = $this->session->userdata('logged_in');
        $user = $login['firstname'] . ' ' . $login['lastname'];
        $data_audit = array(
            'user' => $user,
            'task' => $task,
            'date_time' => date('Y-m-d H:i:s', time()),
        );

        $this->Audit_model->insert($data_audit);
    }
}