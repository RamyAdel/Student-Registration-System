<?php

class Admin_user extends CI_Controller {



    public function __construct()

    {

        parent::__construct();

    }
	function index()

	{

        

		if($this->session->userdata('is_logged_in')){

			redirect('');

        }elseif($this->session->userdata('logged_in')){

            redirect('');

        }else{

            $data['main_content'] = 'admin/login';

        $this->load->view('admin/includes/template', $data); 

        }

	}
    function __encrip_password($password)

    {

        return md5($password);

    }
    function password()

    {

        



            $this->form_validation->set_rules('oldpassword', 'Old password', 'trim|required|min_length[4]|max_length[32]');

            $this->form_validation->set_rules('password', 'New password', 'trim|required|min_length[4]|max_length[32]');

            $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');

            $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><a class="close" data-dismiss="alert">�  </a><strong>', '</strong></div>');



        if ($this->form_validation->run())

            {   

                $data_to_store = array(

                 'oldpassword' => $this->input->post('oldpassword'),   

                'user_name' => $this->session->userdata('user_name'),

                'pass_word' => md5($this->input->post('password'))  

                );

                //if the insert has returned true then we show the flash message

                if($this->Admin_model->password($data_to_store)){

                    $data['flash_message'] = TRUE; 

                }else{

                    $data['flash_message'] = FALSE; 

                }



            }



        $data['main_content'] = 'admin/password';

        $this->load->view('admin/includes/template', $data);  

    }
	function validate_credentials()

	{	

        

		$this->load->model('Admin_model');

		$user_name = $this->input->post('user_name');

		$password = $this->__encrip_password($this->input->post('password'));

		$is_valid = $this->Admin_model->validate($user_name, $password);

        $usx = $this->Admin_model->get_user($user_name);

		if($is_valid)

		{

            if($usx->type == '0')

            {

                $data = array(

                'user_name' => $user_name,

                'id' =>  $usx->id,

                'is_logged_in' => true

            );

            $this->session->set_userdata($data);

            redirect('');

            } elseif ($usx->type == '1') {

              $data2 = array(

                'user_name' => $user_name,

                'id' =>  $usx->id,

                'logged_in' => true

            );

            $this->session->set_userdata($data2);

            redirect('');
            }

			





		}

		{

			$data['message_error'] = TRUE;	

            $data['main_content'] = 'admin/login';

        $this->load->view('admin/includes/template', $data); 	

		}

	}
    public function forget_password()

    {

        $this->load->model('Admin_model');

        



                    if ($this->input->server('REQUEST_METHOD') === 'POST'){

                    $this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');

                    $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><a class="close" data-dismiss="alert">�  </a><strong>', '</strong></div>');

                        if ($this->form_validation->run()){   

                            if($this->Admin_model->email_exists()){

                                $temp_pass = md5(uniqid());

                                $sets = $this->settings_model->get_sets();

                                $config['protocol'] = 'smtp';

                                $config['smtp_host'] = 'ssl://smtp.googlemail.com';

                                $config['smtp_port'] = 465;

                                $config['smtp_user'] = $sets['gmail1'];

                                $config['smtp_pass'] = $sets['gmail2'];

                                $config['mailtype'] = 'html';

                                $config['starttls'] = true;

                                $config['newline'] = "\r\n";

                                $this->load->library('email');

                                $this->email->initialize($config);

                                 $this->email->from($sets['site_email'], $sets['site_name']);

                                $this->email->reply_to($sets['site_email'], $sets['site_name']);

                                $this->email->to($this->input->post('email'));

                                $this->email->subject($sets['site_name']." - Reset your admin Password");

                                $message = "<p>This email has been sent as a request to reset our password</p>";

                                $message .= "<p><a href='".base_url()."reset_password/".$temp_pass."'>Click here </a>if you want to reset your password,

                                            if not, then ignore</p>";

                                $this->email->message($message);

                                if($this->email->send()){

                                    if($this->Admin_model->temp_reset_password($temp_pass)){

                                        $data['flash_message'] = 'TRUE2'; 

                                    }else{

                                         $data['flash_message'] = 'FALSE2';

                                    }

                                }else{

                                    $data['flash_message'] = 'ERROR2'; 

                                }

                            }else{

                            $data['flash_message'] = FALSE; 

                            }

                        }

                    }

                    $data['title'] = 'Forget password';

                    $data['main_content'] = 'admin/forget_password';

                    $this->load->view('admin/includes/template', $data);  



    }
    public function reset_password($temp_pass)

    {

        $this->load->model('Admin_model');

        





                    if($this->Admin_model->is_temp_pass_valid($temp_pass)){

                        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');

                        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');

                        $this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');

                        $this->form_validation->set_error_delimiters('<div class="alert alert-danger"><a class="close" data-dismiss="alert">�  </a><strong>', '</strong></div>');

                            if ($this->form_validation->run())

                            {   

                                $data_to_store = array(

                                 'reset_pass' => ucfirst($this->uri->segment(3)),   

                                'user_name' => $this->input->post('username'),

                                'pass_word' => md5($this->input->post('password'))  

                                );

                                if($this->Admin_model->change_password($data_to_store)){

                                    $data['flash_message'] = TRUE; 

                                }else{

                                    $data['flash_message'] = FALSE; 

                                }

                            }

                        $data['title'] = 'Reset password';

                        $data['main_content'] = 'admin/reset_password';

                        $this->load->view('admin/includes/template', $data); 

                    }else{

                         redirect('forget_password');  

                    }

    }
	function logout()

	{

        

		$this->session->unset_userdata('is_logged_in');
        $this->session->unset_userdata('logged_in');

		redirect('');

	}
}