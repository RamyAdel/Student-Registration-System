<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class adminimg extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		
		
		/* Standard Libraries */
		$this->load->database();
		/* ------------------ */
		
		$this->load->helper('url'); 
		
		$this->load->library('image_CRUD');
	}
	
	function _example_output($output = null)
	{
		$this->load->view('admin/addimg',$output);	
	}

	function addimg()
	{

			$uid = $this->session->userdata('id');

		$image_crud = new image_CRUD();
		
		$image_crud->set_url_field('image');
		$image_crud->set_table('user')
			->set_image_path('assets/uploads')->set_user($uid);
			
		$output = $image_crud->render();
		
	
		if ($this->_example_output($output)){
			redirect('profile');

			
		};

	}

}