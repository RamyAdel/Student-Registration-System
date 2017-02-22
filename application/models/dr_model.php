<?php

class dr_model extends CI_Model {

	function validate($user_name, $password)

		{

			$this->db->where('user_name', $user_name);

			$this->db->where('pass_word', $password);

			$query = $this->db->get('user');

			if($query->num_rows == 1)

			{

				return true;

			}		

		}
    public function get_user($user_name)

    {

        $this->db->select('*');

        $this->db->where('user_name', $user_name);

        $this->db->from('user');

        $query = $this->db->get();

        return $query->row(); 

    }
    public function get_titles()

    {

        $this->db->select('*');

        $this->db->from('drtitles');

        $query = $this->db->get();

        return $query->result_array(); 

    }
    public function get_department()

    {

        $this->db->select('*');

        $this->db->from('department');

        $query = $this->db->get();

        return $query->result_array(); 

    }
    public function get_user2($user_name)

    {

        $this->db->select('*');

        $this->db->where('user_name', $user_name);

        $this->db->from('user');

        $query = $this->db->get();

        return $query->result_array(); 

    }
    function add_course($data)

    {

        $insert = $this->db->insert('course', $data);

        return $insert;

    }

    function add_grade($data)

    {

        $insert = $this->db->insert('transcript', $data);

        return $insert;

    }
    public function get_adminid($id)

    {

        $this->db->select('*');

        $this->db->where('id', $id);

        $this->db->from('user');

        $query = $this->db->get();

        return $query->row(); 

    }
	function get_db_session_data()

		{

			$query = $this->db->select('user_data')->get('ci_sessions');

			$user = array();

			foreach ($query->result() as $row)

			{

			    $udata = unserialize($row->user_data);

			    $user['user_name'] = $udata['user_name']; 

			    $user['is_logged_in'] = $udata['is_logged_in']; 

			}

			return $user;

		}
    public function email_exists()

    {

		$this->db->select('user.email_addres');

		$this->db->from('user');

		$this->db->where('email_addres', $this->input->post('email'));

		$query = $this->db->get();

        if($row = $query->row()){

            return TRUE;

        }else{

            return FALSE;

        }

    }
    function update_profile($id, $data)

    {

        $this->db->where('id', $id);

        $this->db->update('user', $data);

        $report = array();

        $report['error'] = $this->db->_error_number();

        $report['message'] = $this->db->_error_message();

        if($report !== 0){

            return true;

        }else{

            return false;

        }

    }
    public function temp_reset_password($temp_pass)

        {

            $data =array(

                        'email_addres' =>$this->input->post('email'),

                        'reset_pass'=>$temp_pass);

                $email = $data['email_addres'];

            if($data){

                $this->db->where('email_addres', $email);

                $this->db->update('user', $data);  

                return TRUE;

            }else{

                return FALSE;

            }

        }
    public function is_temp_pass_valid($temp_pass)

        {

            $this->db->where('reset_pass', $temp_pass);

            $query = $this->db->get('user');

            if($query->num_rows() == 1){

                return TRUE;

            }

            else{ return FALSE;}

        }
    function Change_password($data_to_store)

            {   

                $this->db->select('user_name');

        		$this->db->from('user');

        		$this->db->where('user_name', $data_to_store['user_name']);

                $this->db->where('reset_pass', $data_to_store['reset_pass']);

        		$query = $this->db->get();

        		if($query->num_rows() == 1){

        			$data = array(

                              'pass_word' => md5($this->input->post('password')),

                              'reset_pass' => md5(uniqid())

                                );

        		$user = $data_to_store['user_name'];

        		$this->db->where('user_name', $user);

        		$update = $this->db->update('user', $data);

        		return TRUE;

                }else{ return FALSE;}

            }
	function password($data_to_store)

		{   

	        $this->db->select('user_name');

			$this->db->from('user');

			$this->db->where('user_name', $data_to_store['user_name']);

			$this->db->where('pass_word', md5($data_to_store['oldpassword']));

			$query = $this->db->get();

			if($query->num_rows() == 1){

				$data = array(

	                      'pass_word' => md5($this->input->post('password')),

	                     );

			$user = $data_to_store['user_name'];

			$this->db->where('user_name', $user);

			$update = $this->db->update('user', $data);

			return TRUE;

	    	}else{

	    	return FALSE;}

	    }
}