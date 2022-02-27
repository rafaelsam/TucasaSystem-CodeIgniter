<?php

class Data_model extends CI_Model{

    // Method fetch data from database
    public function fetch_data(){

        $query = $this->db->query('select * from member');
        return $query;
        
       
    }


    public function count(){
        $query = $this->db->query('select count(*) from member');
          return $query;
    }



    public function insert_worker($worker_data){

        // Query to check whether worker already exist or not
$condition = "phone_number =" . "'" .  $worker_data['phone_number'] . "'";
$this->db->select('*');
$this->db->from('workers');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
if ($query->num_rows() == 0) {


    $worker = $this->db->query('INSERT INTO workers(first_name, last_name, sex, phone_number, investment_id) 
    VALUES("'.$worker_data['first_name'].'", "'.$worker_data['last_name'].'", "'.$worker_data['gender'].'", "'.$worker_data['phone_number'].'", (select investment_id from investment where name = "'.$worker_data['place_work'].'")) ');

     return $worker;
  


if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}

}



// Method to insert data into investment table

public function insert_investment($investment_data){

    // Query to check whether worker already exist or not
$condition = "name =" . "'" .  $investment_data['Name_of_investment'] . "'";
$this->db->select('*');
$this->db->from('investment');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
if ($query->num_rows() == 0) {


    $investment = $this->db->query('INSERT INTO investment(name) 
VALUES("'.$investment_data['Name_of_investment'].'") ');

 return $investment;



if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}

}


// Method for inserting data into purchases.
public function add_purchase($purchase_data){

    $purchase = $this->db->query('INSERT INTO purchase(amount,purpose,date_of_purchase,investment_id) 
    VALUES("'.$purchase_data['amount'].'","'.$purchase_data['purpose'].'", "'.$purchase_data['date_of_upload'].'",
    (select investment_id from investment where name = "'.$purchase_data['investment'].'") ) ');
    
    return  $purchase;
    
}


// Method for inserting data into sales.
public function add_sales($sales_data){

    $sales = $this->db->query('INSERT INTO sales(amount,purpose,date_of_sales,investment_id) 
    VALUES("'.$sales_data['amount'].'","'.$sales_data['particulars'].'", "'.$sales_data['date_of_upload_sales'].'",
    (select investment_id from investment where name = "'.$sales_data['investment_sales'].'") ) ');
    return  $sales;  
}

public function add_revenue($add_revenue){

    $revenue = $this->db->query('INSERT INTO revenue(amount,description,income_date,investment_id) 
    VALUES("'.$revenue_data['amount'].'", "'.$revenue_data['particulars_revenue'].'", "'.$revenue_data['date_of_upload_revenue'].'",
    (select investment_id from investment where name = "'.$revenue_data['investment_revenue'].'") ) ');
   
    return  $revenue;  

}


public function uwakili_report($uwakili_report_data){

    $uwakili = $this->db->query('INSERT INTO report(name,file,date_of_upload,category_id) 
    VALUES("'.$uwakili_report_data['report_title'].'", "'.$uwakili_report_data['report_file'].'", "'.$uwakili_report_data['date_report'].'",
    (select category_id from report_category where category_name = "'.$uwakili_report_data['category_id'].'") ) ');
   
    return  $uwakili;  

}


public function uwakili_anoucement($uwakili_anounciment_data){

    $anounciment = $this->db->query('INSERT INTO matangazo(maelezo,title,date) 
    VALUES("'.$uwakili_anounciment_data['maelezo'].'", "'.$uwakili_anounciment_data['tangazo_title'].'", "'.$uwakili_anounciment_data['date_anounciment'].'" ) ');
    
    return  $anounciment;  

}


public function uwakili_goal($uwakili_goal_data){

    $goal = $this->db->query('INSERT INTO goals(name,file,date_of_upload,category_id) 
    VALUES("'.$uwakili_goal_data['goal_title'].'", "'.$uwakili_goal_data['goal_file'].'", "'.$uwakili_goal_data['date_goal'].'",
    (select category_id from goals_category where category_name = "'.$uwakili_goal_data['goal_category'].'") ) ');
    
    return  $goal;  

}

public function new_song($song_data){

    $song = $this->db->query('INSERT INTO songs(song_name,album_id,group_id) 
    VALUES("'.$song_data['song_name'].'",
    (select album_id from album where album_name = "'.$song_data['album_name'].'"),
    (select group_id from group_of_singer where name = "'.$song_data['singers'].'") ) ');
    
    return  $song;  

}

public function new_singer($singer_data){

    // Query to check whether Singer already exist or not
$condition = "phone_number =" . "'" .  $singer_data['phone_number'] . "'";
$this->db->select('*');
$this->db->from('singer');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
if ($query->num_rows() == 0) {


    $singer = $this->db->query('INSERT INTO singer(first_name,last_name,sex,melody,phone_number) 
VALUES("'.$singer_data['first_name'].'", "'.$singer_data['last_name'].'","'.$singer_data['sex'].'",
"'.$singer_data['melody'].'","'.$singer_data['phone_number'].'") ');

$singer_group = $this->db->query('INSERT INTO singer_group(singer_id,group_id) 
VALUES((select singer_id from singer where phone_number = "'.$singer_data['phone_number'].'" ),
(select group_id from group_of_singer where name = "'.$singer_data['group'].'" ) ) ');




if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}

}




public function new_group($group_data){

    // Query to check whether Singer already exist or not
$condition = "name =" . "'" .  $group_data['group_name'] . "'";
$this->db->select('*');
$this->db->from('group_of_singer');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
if ($query->num_rows() == 0) {


    $group = $this->db->query('INSERT INTO group_of_singer(name,date_formed,capacity,description) 
VALUES("'.$group_data['group_name'].'", "'.$group_data['date_creation'].'","'.$group_data['capacity'].'",
"'.$group_data['descr'].'") ');


if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}

}


public function group_leader($leader_data){

    // Query to check whether Singer already exist or not
$condition = "last_name =" . "'" .  $leader_data['last_name'] . "'";
$this->db->select('*');
$this->db->from('group_leader');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
if ($query->num_rows() == 0) {


    $group = $this->db->query('INSERT INTO group_leader(first_name,last_name,position,group_id) 
VALUES("'.$leader_data['first_name'].'", "'.$leader_data['last_name'].'","'.$leader_data['position'].'",
(select group_id from group_of_singer where name = "'.$leader_data['group'].'" )) ');


if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}

}




public function new_book($book_data){

    // Query to check whether Singer already exist or not
$condition = "book_tittle =" . "'" .  $book_data['book_name'] . "'";
$this->db->select('*');
$this->db->from('book');
$this->db->where($condition);
$this->db->limit(1);
$query = $this->db->get();
if ($query->num_rows() == 0) {

    $publisher = $this->db->query('INSERT INTO publisher(publisher_name) 
    VALUES("'.$book_data['publisher_name'].'") ');
    
    $book = $this->db->query('INSERT INTO book(book_tittle,book_file,publisher_id,category_id) 
VALUES("'.$book_data['book_name'].'", "'.$book_data['file'].'",
(select publisher_id from publisher where publisher_name = "'.$book_data['publisher_name'].'" ),
(select category_id from book_category where category_name = "'.$book_data['Category'].'" )) ');

$author = $this->db->query('INSERT INTO author(name) 
VALUES("'.$book_data['author_name'].'") ');

$book_author = $this->db->query('INSERT INTO book_author(book_id,author_id) 
VALUES((select book_id from book where book_tittle = "'.$book_data['book_name'].'" ),
(select author_id from author where name = "'.$book_data['author_name'].'" ) ) ');



if ($this->db->affected_rows() > 0) {
return true;
}
} else {
return false;
}
}


public function add_payments($payments_data){

    $payment = $this->db->query('INSERT INTO payment(amount,date_of_payment,member_id,purpose_id) 
    VALUES("'.$payments_data['amount_paid'].'", "'.$payments_data['date_paid'].'",
    (select member_id from member where first_name = "'.$payments_data['first_name'].'" and last_name = "'.$payments_data['last_name'].'" ),
    (select purpose_id from purpose where name = "'.$payments_data['payment_for'].'") ) ');
    
    return  $payment;  

}




// Method of updating data in member table
    function getById($member_id){
        return $this->db->get_where('member', array('member_id'=>$member_id))->row();
    }

function update($member_id){
    $arr['first_name']= $this->input->post('first_name');
    $arr['middle_name']= $this->input->post('middle_name');
    $arr['last_name']= $this->input->post('last_name');

    $this->db->where(array('member_id'=>$member_id));
    $this->db->insert('member',$arr);

}


// Method for delete data from member table
function delete($member_id){
    $this->db->where(array('member_id'=>$member_id));
    $this->db->delete('member');
}




// Methods for User changing password
function fetch_pass($session_id)
{
$fetch_pass=$this->db->query("select * from member where member_id='$session_id'");
$res=$fetch_pass->result();
}

function change_pass($session_id,$new_pass)
{
$update_pass=$this->db->query("UPDATE member set password='$new_pass'  where member_id='$session_id'");
}



}
?>