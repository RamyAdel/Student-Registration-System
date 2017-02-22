<?php

class Admin_home extends CI_Controller {

 

    public function __construct()

    {
        parent::__construct();
    }
    public function index()

    {

        

        $data['main_content'] = 'admin/home';

        $this->load->view('admin/includes/template', $data);  

    }

    public function contact()

    {
        $usernamex = $this->session->userdata('user_name');
        
        if ($this->input->server('REQUEST_METHOD') === 'POST'){
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
            $this->form_validation->set_rules('messege', 'Messege', 'trim|required');
            $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><a class="close" data-dismiss="alert">×  </a><strong>', '</strong></div>');
                if ($this->form_validation->run()){ 
                    $sets = $this->settings_model->get_sets();
                    $config['protocol'] = 'smtp';
                    $config['smtp_host'] = 'ssl://smtp.googlemail.com';
                    $config['smtp_port'] = 465;
                    $config['smtp_user'] = 'srs.srs993@gmail.com';
                    $config['smtp_pass'] = '123456789AA';
                    $config['mailtype'] = 'html';
                    $config['newline'] = "\r\n";
                    $this->load->library('email');
                    $this->email->initialize($config);
                    $this->email->from($this->input->post('email'), $this->input->post('name'));
                    $this->email->reply_to($this->input->post('email'));
                    $this->email->to('srs.srs993@gmail.com');
                    $this->email->subject($sets['site_name']." - Contact Messege");
                    $message = $this->input->post('messege');
                    $this->email->message($message);
                    $this->email->send();
                    $data['flash_message'] = TRUE; 
                }
            }


        
        $data['userxx'] = $this->Admin_model->get_user2($usernamex);
        $data['main_content'] = 'admin/contact';

        $this->load->view('admin/includes/template', $data);  

    }

}