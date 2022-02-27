<?php

Class User_model extends CI_Model {

// Insert registration data in database
public function registration_insert($data) {

// Query to check whether username already exist or not
$condition = "email =" . "'" . $data['email'] . "'";
$this->db->select('*');
$this->db->from('member');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
if ($query->num_rows() == 0) {


  // insert data into member table.
    $query = $this->db->query('INSERT INTO member(first_name, middle_name, last_name, sex, date_of_birth, email, phone_number, baptism, position,Year_of_study, password, level_id,faculty_id,program_id,
    place_of_residence,Marital_status,kin1_full_name,kin1_phone_number,kin1_Relation,kin2_full_name,kin2_phone_number,kin2_Relation) 
    VALUES("'.$data ['first_name'].'", "'.$data ['middle_name'].'", "'.$data['last_name'].'", "'.$data ['sex'].'", "'.$data ['date_of_birth'].'", 
     "'.$data['email'].'", "'.$data['phone_number'].'", "'.$data['baptism'].'", "'.$data['position'].'", "'.$data['Year_of_study'].'", "'.$data['password'].'", (select level_id from level where name = "'.$data['level_id'].'"),
     (select faculty_id from faculty where name = "'.$data['faculty'].'"),
     (select program_id from program where name = "'.$data['program'].'"),
     "'.$data['place_of_residence'].'", "'.$data['Marital_status'].'", "'.$data['kin1_full_name'].'",  "'.$data['kin1_phone_number'].'",
     "'.$data['kin1_Relation'].'",
     "'.$data['kin2_full_name'].'",
     "'.$data['kin2_phone_number'].'",
     "'.$data['kin2_Relation'].'") ');
    

  // insert data into associative table called karama_member 
   $karama = $this->db->query('INSERT INTO karama_member(karama_id,member_id) VALUES((select karama_id from karama where name = "'.$data['karama'].'"),
   (select member_id from member where email = "'.$data['email'].'"))');
  
 // insert data into associative table called  level_faculty 
 $faculty = $this->db->query('INSERT INTO level_faculty (level_id,faculty_id) VALUES((select level_id from level where name = "'.$data['level_id'].'"),
 (select faculty_id from faculty where name = "'.$data['faculty'].'"))');



if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}
}

// Read data using username and password
public function login($data) {

$condition = "email =" . "'" . $data['email'] . "' AND " . "password =" . "'" . $data['password'] . "'";
$this->db->select('*');
$this->db->from('member');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return true;
} else {
return false;
}
}

// Read data from database to show data in admin page
public function read_user_information($email) {

$condition = "email=" . "'" . $email . "'";
$this->db->select('*');
$this->db->from('member');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}
}

}

?>