<?phpclass admin_dr extends CI_Controller {    public function __construct()    {        parent::__construct();        if(!$this->session->userdata('logged_in')){            redirect('login');        }    }    function addimg()    {        $image_crud = new image_CRUDs();                $image_crud->set_primary_key_field('id');        $image_crud->set_url_field('url');        $image_crud->set_table('offers')        ->set_relation_field('id')            ->set_image_path('assets/mainimg');            $image_crud->unset_delete();                    $output = $image_crud->render();                $this->_example_output($output);    }    public function profile()    {        $data['drtitles'] = $this->dr_model->get_titles(); $data['departments'] = $this->dr_model->get_department(); $id = $this->session->userdata('id');        if ($this->input->server('REQUEST_METHOD') === 'POST')        {                $data_to_store = array(                    'ttype' => $this->input->post('ttype'),                    'birthday' => $this->input->post('birthday'),                    'email_addres' => $this->input->post('email_addres'),                    'address' => $this->input->post('address'),                    'major' => $this->input->post('major')                );                if($this->dr_model->update_profile($id, $data_to_store) == TRUE){                    $this->session->set_flashdata('flash_message', 'updated');                }else{                    $this->session->set_flashdata('flash_message', 'not_updated');                }                redirect('drprofile');        }        $usernamex = $this->session->userdata('user_name');        $data['userxx'] = $this->Admin_model->get_user2($usernamex);        $data['main_content'] = 'admin/dr/profile';        $this->load->view('admin/includes/template', $data);      }        }