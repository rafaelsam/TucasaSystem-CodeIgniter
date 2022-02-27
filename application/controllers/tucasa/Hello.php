<?php
class Hello extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('tucasa/Hello_Model');
	}

	
	public function dispdata()
	{  
	$result['data']=$this->Hello_Model->displayrecords();
	$this->load->view('tucasa/back_end/admin/member',$result);
	}
	

	public function viewdata(){

	$this->load->view('tucasa/back_end/admin/member_view');
	 
	 }


	 public function searchdata(){

		$this->load->model('tucasa/Hello_Model');

		 $key = $this->input->post('name');

		$result['data'] = $this->Hello_Model->search($key);
		
		$this->load->view('tucasa/back_end/admin/search',$result);


	 }


	public function deletedata()
	{
	$id=$this->input->get('id');
	$this->Hello_Model->deleterecords($id);
	redirect("tucasa/Hello/dispdata");
	}
	
	public function updatedata()
	{
	$id=$this->input->get('id');
	$result['data']=$this->Hello_Model->displayrecordsById($id);
	$this->load->view('tucasa/back_end/admin/update',$result);	
	
		if($this->input->post('update'))
		{
		$f=$this->input->post('first_name');
		$m=$this->input->post('middle_name');
        $l=$this->input->post('last_name');
        $p=$this->input->post('phone_number');
		$this->Hello_Model->updaterecords($f,$m,$l,$p,$id);
		redirect("tucasa/Hello/dispdata");
		}
	}
}
?>
