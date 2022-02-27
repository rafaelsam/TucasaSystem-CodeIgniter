<?php

class Data_management extends CI_Controller{

    public function __contruct(){

        parent::__contruct();

    // Load form helper library
    $this->load->helper('form');
    
    // Load form validation library
    $this->load->library('form_validation');
    
    // Load session library
    $this->load->library('session');
    

    // load database
        $this->load->model('tucasa/data_model');
        
    }



    // Method to insert data of workers

    public function insert_workers(){
         // Check validation for user input in report form
         $this->form_validation->set_rules('gender', 'gender', 'required');
         $this->form_validation->set_rules('first_name', 'first name', 'required');
        $this->form_validation->set_rules('last_name', 'last_name', 'required');
        $this->form_validation->set_rules('place_work', 'place_work', 'required');
        $this->form_validation->set_rules('phone_number', 'phone_number', 'required');
        

    if ($this->form_validation->run() == FALSE) {
        $this->load->view('tucasa/back_end/uwakili/uwakili');
        } else {
        $worker_data = array(
        'first_name' => $this->input->post('first_name'),
        'last_name' => $this->input->post('last_name'),
        'gender' => $this->input->post('gender'),
        'phone_number' => $this->input->post('phone_number'),
        'place_work' => $this->input->post('place_work')
        );
     
        $this->load->model('tucasa/data_model');
        $result = $this->data_model->insert_worker($worker_data);

    if ($result == TRUE) {
    $data['message_display'] = 'Submission Successfully !';
    $this->load->view('tucasa/back_end/uwakili/uwakili', $data);
    } else {
    $data['message_display'] = 'Worker already exist!';
    $this->load->view('tucasa/back_end/uwakili/uwakili', $data);
    }
    }  
}


// Method to insert new data in investment table

public function insert_investment(){

    // Check validation for user input in investment form
    $this->form_validation->set_rules('Name_of_investment', 'Name_of_investment', 'required');
    
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/uwakili/uwakili');
   } else {
   $investment_data = array(
   'Name_of_investment' => $this->input->post('Name_of_investment'));

   $this->load->model('tucasa/data_model');
   $result = $this->data_model->insert_investment($investment_data);

if ($result == TRUE) {
    $investment['message_investment'] = 'Submission Successfully !';
$this->load->view('tucasa/back_end/uwakili/uwakili', $investment);
} else {
$investment['message_investment'] = 'Investment already exist!';
$this->load->view('tucasa/back_end/uwakili/uwakili', $investment);
}
}  
}


public function add_purchase(){


    // Check validation for user input in investment form
    $this->form_validation->set_rules('purpose', 'purpose', 'required');
    $this->form_validation->set_rules('date_of_upload', 'date_of_upload', 'required');
    $this->form_validation->set_rules('amount', 'amount', 'required');
    $this->form_validation->set_rules('investment', 'investment', 'required');

   
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/uwakili/uwakili');
   } else {

   $purchase_data = array(
   'purpose' => $this->input->post('purpose'),
   'date_of_upload' => $this->input->post('date_of_upload'),
   'amount' => $this->input->post('amount'),
   'investment' => $this->input->post('investment')
);

   $this->load->model('tucasa/data_model');
   $purchase_result = $this->data_model->add_purchase($purchase_data);
  

if ($purchase_result == TRUE) {
    $purchase['purchase_message'] = 'Submission Successfully !';
$this->load->view('tucasa/back_end/uwakili/uwakili', $purchase);
} else {
    $purchase['purchase_message'] = 'Submission failed ';
$this->load->view('tucasa/back_end/uwakili/uwakili', $purchase);
}


}  
}


public function add_sales(){
    if ($this->form_validation->run() == FALSE) {
        $this->load->view('tucasa/back_end/uwakili/uwakili');
        }
        else{
    $this->form_validation->set_rules('particulars', 'particulars', 'required');
    $this->form_validation->set_rules('date_of_upload_sales', 'date_of_upload', 'required');
    $this->form_validation->set_rules('amount_sale', 'amount', 'required');
    $this->form_validation->set_rules('investment_sales', 'investment', 'required');

    $sales_data = array(
        'particulars' => $this->input->post('particulars'),
        'date_of_upload_sales' => $this->input->post('date_of_upload_sales'),
        'amount_sale' => $this->input->post('amount_sale'),
        'investment_sales' => $this->input->post('investment_sales')
     );

     $sales_result = $this->data_model->add_sales($sales_data);

     if ($sales_result == TRUE) {
        $sales['sales_message'] = 'Submission Successfully !';
    $this->load->view('tucasa/back_end/uwakili/uwakili', $sales);
    } else {
        $sales['sales_message'] = 'Submission failed ';
    $this->load->view('tucasa/back_end/uwakili/uwakili', $sales);
    }
}
}


public function add_revenue(){

    $this->form_validation->set_rules('particulars_revenue', 'particulars_revenue', 'required');
    $this->form_validation->set_rules('date_of_upload_revenue', 'date_of_upload_revenue', 'required');
    $this->form_validation->set_rules('amount_revenue', 'amount_revenue', 'required');
    $this->form_validation->set_rules('investment_revenue', 'investment_revenue', 'required');

    if ($this->form_validation->run() == FALSE) {
        $this->load->view('tucasa/back_end/uwakili/uwakili');
        }
        else{
    
    $add_revenue = array(
        'particulars_revenue' => $this->input->post('particulars_revenue'),
        'date_of_upload_revenue' => $this->input->post('date_of_upload_revenue'),
        'amount_revenue' => $this->input->post('amount_revenue'),
        'investment_revenue' => $this->input->post('investment_revenue')
     );

     $revenue_result = $this->data_model->add_revenue($add_revenue);

     if ($revenue_result == TRUE) {
        $revenue['revenue_message'] = 'Submission Successfully !';
    $this->load->view('tucasa/back_end/uwakili/uwakili', $revenue);
    } else {
        $revenue['revenue_message'] = 'Submission failed';
    $this->load->view('tucasa/back_end/uwakili/uwakili', $revenue);
    }
}
}




function edit($member_id){
    $this->load->model('tucasa/data_model');
    $data['record'] = $this->data_model->getById($member_id);
    $this->load->view("tucasa/back_end/admin/update",$data);
}

function update($member_id){
    $this->load->model('tucasa/data_model');
    $this->session->set_flashdata('success', 'Data saved successfuly');
    redirect('tucasa/back_end/admin/member');
}

function delete($member_id){
    $this->load->model('tucasa/data_model');
    $this->session->set_flashdata('success', 'Data deleted successfuly');
    redirect('tucasa/back_end/admin/member');
}


public function change_pass()
	{
       
		$this->load->view('tucasa/back_end/admin/change_pass');	
	}





}
?>