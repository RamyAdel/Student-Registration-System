<?php

class courses_model extends CI_Model {

    public function __construct()

    {

        $this->load->database();

    }
	public function get_coursescs()

    {

        $this->db->select('*');
        $this->db->where('section', 'Computer Science');

        $this->db->from('course');

        $query = $this->db->get();

        return $query->result_array(); 

    }
     public function get_coursesit()

    {

        $this->db->select('*');
$this->db->where('section', 'Engineering ');
        $this->db->from('course');

        $query = $this->db->get();

        return $query->result_array(); 

    }
    public function get_coursesba()

    {

        $this->db->select('*');
$this->db->where('section', 'Business ');
        $this->db->from('course');

        $query = $this->db->get();

        return $query->result_array(); 

    }
    public function get_coursesbio()

    {

        $this->db->select('*');
        $this->db->where('category', 'Bioinformatics');

        $this->db->from('course');

        $query = $this->db->get();

        return $query->result_array(); 

    }
    //Chemical Engineering
    public function get_courseschem()

    {

        $this->db->select('*');
        $this->db->where('category', 'Chemical Engineering');

        $this->db->from('course');

        $query = $this->db->get();

        return $query->result_array(); 

    }
    
    //Architectural Engineering
    public function get_coursesarch()

    {

        $this->db->select('*');
        $this->db->where('category', 'Architectural Engineering');

        $this->db->from('course');

        $query = $this->db->get();

        return $query->result_array(); 

    }
    //Civil engineering
    public function get_coursesciv()

    {

        $this->db->select('*');
        $this->db->where('category', 'Civil engineering');

        $this->db->from('course');

        $query = $this->db->get();

        return $query->result_array(); 

    }
    //Electrical Engineering
    public function get_coursesele()

    {

        $this->db->select('*');
        $this->db->where('category', 'Electrical Engineering');

        $this->db->from('course');

        $query = $this->db->get();

        return $query->result_array(); 

    }
    //Business
    public function get_coursesBusiness()

    {

        $this->db->select('*');
        $this->db->where('category', 'Business');

        $this->db->from('course');

        $query = $this->db->get();

        return $query->result_array(); 

    }




    public function get_coursesnet()

    {

        $this->db->select('*');
        $this->db->where('category', 'Computer Network');

        $this->db->from('course');

        $query = $this->db->get();

        return $query->result_array(); 

    }

    public function get_coursescecs()

    {

        $this->db->select('*');
        $this->db->where('category', 'Computer science');

        $this->db->from('course');

        $query = $this->db->get();

        return $query->result_array(); 

    }

     public function get_coursescecsis()

    {

        $this->db->select('*');
        $this->db->where('category', 'Information system');

        $this->db->from('course');

        $query = $this->db->get();

        return $query->result_array(); 

    }
    
    function update_course($id, $data)

    {

        $this->db->where('id', $id);

        $this->db->update('course', $data);

        $report = array();

        $report['error'] = $this->db->_error_number();

        $report['message'] = $this->db->_error_message();

        if($report !== 0){

            return true;

        }else{

            return false;

        }

    }
    function drop_course($id){

        $this->db->where('id', $id);

        $this->db->delete('courseload'); 

    }

    function trans_course($id, $stu){

        $this->db->where('course', $id);

        $this->db->where('student', $stu);

        $this->db->delete('courseload'); 

    }
   
    public function get_course_by_id($id)

    {

        $this->db->select('*');

        $this->db->from('course');

        $this->db->where('id', $id);

        $query = $this->db->get();

        return $query->result_array(); 

    }

    public function get_coursesss()

    {

        $this->db->select('*');

        $this->db->from('course');


        $query = $this->db->get();

        return $query->result_array(); 

    }
    public function get_advisors()

    {

        $this->db->select('*');

        $this->db->from('advisor');

        $query = $this->db->get();

        return $query->result_array(); 

    }
    function coursevalidate($id, $uuu)

        {

            $this->db->where('course', $id);

            $this->db->where('student', $uuu);

            $query = $this->db->get('courseload');

            if($query->num_rows == 1)

            {

                return true;

            }       

        }

        function transvalidate($id, $uuu)

        {

            $this->db->where('course', $id);

            $this->db->where('student', $uuu);

            $query = $this->db->get('transcript');

            if($query->num_rows == 1)

            {

                return true;

            }       

        }
    public function get_course_by_user($usernamex)

    {

        $this->db->select('*');

        $this->db->from('transcript');

        $this->db->where('student', $usernamex);

        $query = $this->db->get();

        return $query->result_array(); 

    }
    public function get_course_by_dr($usernamex)

    {

        $this->db->select('*');

        $this->db->from('course');

        $this->db->where('professor', $usernamex);

        $query = $this->db->get();

        return $query->result_array(); 

    }

    public function get_course_by_name($uname)

    {

        $this->db->select('*');

        $this->db->from('course');

        $this->db->where('name', $uname);

        $query = $this->db->get();

        return $query->result_array(); 

    }
    public function get_courseload_by_user($usernamex)

    {

        $this->db->select('*');

        $this->db->from('courseload');

        $this->db->where('student', $usernamex);

        $query = $this->db->get();

        return $query->result_array(); 

    }

    public function get_courseload_by_courseid($id)

    {

        $this->db->select('*');

        $this->db->from('courseload');

        $this->db->where('course', $id);

        $query = $this->db->get();

        return $query->result_array(); 

    }

    public function get_trans_1_1($usernamex)

    {

        $this->db->select('*');

        $this->db->from('transcript');

        $this->db->where('student', $usernamex);
        $this->db->where('year', '1');
        $this->db->where('semster', '1');

        $query = $this->db->get();

        return $query->result_array(); 

    }

    public function get_trans_1_2($usernamex)

    {

        $this->db->select('*');

        $this->db->from('transcript');

        $this->db->where('student', $usernamex);
        $this->db->where('year', '1');
        $this->db->where('semster', '2');

        $query = $this->db->get();

        return $query->result_array(); 

    }

    public function get_trans_2_1($usernamex)

    {

        $this->db->select('*');

        $this->db->from('transcript');

        $this->db->where('student', $usernamex);
        $this->db->where('year', '2');
        $this->db->where('semster', '1');

        $query = $this->db->get();

        return $query->result_array(); 

    }

    public function get_trans_2_2($usernamex)

    {

        $this->db->select('*');

        $this->db->from('transcript');

        $this->db->where('student', $usernamex);
        $this->db->where('year', '2');
        $this->db->where('semster', '2');

        $query = $this->db->get();

        return $query->result_array(); 

    }

    public function get_trans_3_1($usernamex)

    {

        $this->db->select('*');

        $this->db->from('transcript');

        $this->db->where('student', $usernamex);
        $this->db->where('year', '3');
        $this->db->where('semster', '1');

        $query = $this->db->get();

        return $query->result_array(); 

    }

    public function get_trans_3_2($usernamex)

    {

        $this->db->select('*');

        $this->db->from('transcript');

        $this->db->where('student', $usernamex);
        $this->db->where('year', '3');
        $this->db->where('semster', '2');

        $query = $this->db->get();

        return $query->result_array(); 

    }

    public function get_trans_4_1($usernamex)

    {

        $this->db->select('*');

        $this->db->from('transcript');

        $this->db->where('student', $usernamex);
        $this->db->where('year', '4');
        $this->db->where('semster', '1');

        $query = $this->db->get();

        return $query->result_array(); 

    }

    public function get_trans_4_2($usernamex)

    {

        $this->db->select('*');

        $this->db->from('transcript');

        $this->db->where('student', $usernamex);
        $this->db->where('year', '4');
        $this->db->where('semster', '2');

        $query = $this->db->get();

        return $query->result_array(); 

    }

    function store_courseload($data)

    {

        

        $insert = $this->db->insert('courseload', $data);

        return $insert;

    }



}