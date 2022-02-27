<?php

class user_authentication extends CI_controller{

    
public function __construct() {
    parent::__construct();
    
    // Load form helper library
    $this->load->helper('form');
    
    // Load form validation library
    $this->load->library('form_validation');
    
    // Load session library
    $this->load->library('session');
    
    // Load database
    $this->load->model('tucasa/user_model');
    }
    

    public function index(){
        $this->load->view('tucasa/front_end/login');
    }

    public function user_registration_page(){
        $this->load->view('tucasa/front_end/register');
    }


// Validate and store registration data in database
public function new_user_registration() {

    // Check validation for user input in SignUp form
    $this->form_validation->set_rules('first_name', 'first_name', 'required');
    $this->form_validation->set_rules('middle_name', 'middle_name', 'required');
    $this->form_validation->set_rules('last_name', 'last_name', 'required');
    $this->form_validation->set_rules('sex', 'sex', 'required');
    $this->form_validation->set_rules('email', 'email', 'required|valid_email');
    $this->form_validation->set_rules('phone_number', 'phone_number', 'required');
    $this->form_validation->set_rules('date_of_birth', 'date_of_birth', 'required');
    $this->form_validation->set_rules('position', 'Position', 'required');
    $this->form_validation->set_rules('Year_of_study', 'Year_of_study', 'required');
    $this->form_validation->set_rules('level', 'level', 'required');
    $this->form_validation->set_rules('faculty', 'faculty', 'required');
    $this->form_validation->set_rules('program', 'Program', 'required');
    $this->form_validation->set_rules('karama', 'karama', 'required');
    $this->form_validation->set_rules('baptism', 'baptism', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('confirm_pass', 'comfirm_pass', 'required');
    $this->form_validation->set_rules('Marital_status', 'Marital_status', 'required');
    $this->form_validation->set_rules('place_of_residence', 'place_of_residence', 'required');
    $this->form_validation->set_rules('kin1_full_name', 'kin1_full_name', 'required');
    $this->form_validation->set_rules('kin1_phone_number', 'kin1_phone_number', 'required');
    $this->form_validation->set_rules('kin1_Relation', 'kin1_Relation', 'required');
    $this->form_validation->set_rules('kin2_full_name', 'kin2_full_name', 'required');
    $this->form_validation->set_rules('kin2_phone_number', 'kin2_phone_number', 'required');
    $this->form_validation->set_rules('kin2_Relation', 'kin2_Relation', 'required');
    if ($this->form_validation->run() == FALSE) {
    $this->load->view('tucasa/back_end/admin/register');
    } else {
    $data = array(
    'first_name' => $this->input->post('first_name'),
    'middle_name' => $this->input->post('middle_name'),
    'last_name' => $this->input->post('last_name'),
    'sex' => $this->input->post('sex'),
    'email' => $this->input->post('email'),
    'phone_number' => $this->input->post('phone_number'),
    'date_of_birth' => $this->input->post('date_of_birth'),
    'karama' => $this->input->post('karama'),
    'baptism' => $this->input->post('baptism'),
    'position' => $this->input->post('position'),
    'Year_of_study' => $this->input->post('Year_of_study'),
    'level_id' => $this->input->post('level'),
    'faculty' => $this->input->post('faculty'),
    'program' => $this->input->post('program'),
    'Marital_status' => $this->input->post('Marital_status'),
    'place_of_residence' => $this->input->post('place_of_residence'),
    'kin1_full_name' => $this->input->post('kin1_full_name'),
    'kin1_phone_number' => $this->input->post('kin1_phone_number'),
    'kin1_Relation' => $this->input->post('kin1_Relation'),
    'kin2_full_name' => $this->input->post('kin2_full_name'),
    'kin2_phone_number' => $this->input->post('kin2_phone_number'),
    'kin2_Relation' => $this->input->post('kin2_Relation'),
    'password' => md5($this->input->post('password')),
    'confirm_pass' => md5($this->input->post('confirm_pass'))
    );

    $result = $this->user_model->registration_insert($data);
    
    
if ($result == TRUE) {  
    $data['message_display'] = 'Registration Successfully !';
    $this->load->view('tucasa/front_end/login', $data);
    } else {
    $data['message_display'] = 'Member already exist!';
    $this->load->view('tucasa/back_end/admin/register',$data);
    }
   
    }
    }


// Check for user login process
public function user_login_process() {

    $this->form_validation->set_rules('email', 'email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');
    
    
if ($this->form_validation->run() == FALSE) {
   
    if(isset($this->session->userdata['logged_in'])){
        $this->load->view('tucasa/front_end/login');
        }else{
        $this->load->view('tucasa/front_end/login');
        }
    }

     else {

    $data = array(
    'email' => $this->input->post('email'),
    'password' => md5($this->input->post('password'))
    );

    $result = $this->user_model->login($data);

    if ($result == TRUE) {

        $email = $this->input->post('email');

        $result = $this->user_model->read_user_information($email);

        if ($result != false) {
        $session_data = array(
        'email' => $result[0]->email,
        'last_name' => $result[0]->last_name,
        'middle_name' => $result[0]->middle_name,
        'first_name' => $result[0]->first_name,
        'baptism' => $result[0]->baptism,
        'place_of_residence' => $result[0]->place_of_residence,
        'marital_status' => $result[0]->marital_status,
        'kin1_full_name' => $result[0]->kin1_full_name,
        'kin2_full_name' => $result[0]->kin2_full_name,
        'kin1_phone_number' => $result[0]->kin1_phone_number,
        'kin2_phone_number' => $result[0]->kin2_phone_number,
        'kin1_relation' => $result[0]->kin1_relation,
        'kin2_relation' => $result[0]->kin2_relation,
        'level_id' => $result[0]->level_id,
        'position' => $result[0]->position,
        'program_id' => $result[0]->program_id,
        'faculty_id' => $result[0]->faculty_id,
        'date_of_birth' => $result[0]->date_of_birth,
        'Year_of_study' => $result[0]->Year_of_study,
        'sex' => $result[0]->sex,
        //'karama' => $result[0]->karama,
        'phone_number' => $result[0]->phone_number
        );
        // Add user data in session
        $this->session->set_userdata('logged_in', $session_data);


        if($session_data['position']==="Treasurer"){
           $this->load->view('tucasa/back_end/mhazini/mhazini');
        }

        elseif($session_data['position']==="Chairperson"){
            $this->load->view('tucasa/back_end/chair_katibu/Chair');
        }
       
        elseif($session_data['position']==="Member"){
            $this->load->view('tucasa/front_end/homepage');
        }
        elseif($session_data['position']==="Internal Auditor"){
            $this->load->view('tucasa/back_end/auditor/auditor');
        }
        elseif($session_data['position']==="Spiritual and Evangelism Coordinator"){
            $this->load->view('tucasa/back_end/kiroho/kiroho');
        }
        elseif($session_data['position']==="Excutive Secretary"){
            $this->load->view('tucasa/back_end/chair_katibu/Chair');
        }
        elseif($session_data['position']==="Librarian"){
            $this->load->view('tucasa/back_end/mkutubi/mkutubi');
        }
        elseif($session_data['position']==="Program coordinator"){
            $this->load->view('tucasa/back_end/coordinator/p_coordinator');
        }
        elseif($session_data['position']==="Music coordinator"){
            $this->load->view('tucasa/back_end/muziki/muziki');
        }
        elseif($session_data['position']==="Project Manager"){
            $this->load->view('tucasa/back_end/uwakili/uwakili');
        }
        elseif($session_data['position']==="Communication coordinator"){
            $this->load->view('tucasa/back_end/mawasiliano/mawasiliano');
        }
        elseif($session_data['position']==="Medical Missionary Coordinator"){
            $this->load->view('tucasa/front_end/homepage');
        }
        elseif($session_data['position']==="Religious liberty coordinator"){
            $this->load->view('tucasa/front_end/homepage');
        }
        elseif($session_data['position']==="admin"){
            $this->load->view('tucasa/back_end/admin/home');
        }

        }
    } 

    else{
        $data = array(
            'error_message' => 'Invalid email or Password'
            );
            $this->load->view('tucasa/front_end/login', $data);
    }
    
    }
    }

    
// Logout from admin page
public function logout() {

    // Removing session data
    $sess_array = array(
    'last_name' => ''
    );
    $this->session->unset_userdata('logged_in', $sess_array);
    $data['message_display'] = 'Successfully Logout';
    $this->load->view('tucasa/front_end/login', $data);
    }
}
?>