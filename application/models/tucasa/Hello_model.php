<?php
class Hello_Model extends CI_Model 
{
	
	
	function displayrecords()
	{
	$query=$this->db->query("select * from member");
	return $query->result();
	}
	
	function deleterecords($id)
	{
	$this->db->query("delete  from member where member_id='".$id."'");
	}
	
	function displayrecordsById($id)
	{
	$query=$this->db->query("select * from member where member_id='".$id."'");
	return $query->result();
	}
	

	function view_data($id)
	{
	$query=$this->db->query("select * from member where member_id = '".$id."' ");
	return $query;
	}


	function updaterecords($first_name,$middle_name,$last_name,$phone_number,$id)
	{
	$query=$this->db->query("update member SET first_name='$first_name',middle_name='$middle_name',last_name='$last_name',phone_number='$phone_number' where member_id='".$id."'");
	}	


	// Search Data Member
	function search($key){
		$this->db->like('first_name',$key);
		$query = $this->db->get('member');
		return $query;	
	}



	// Report
	function delete_data_report($id)
	{
	$this->db->query("delete  from report where report_id='".$id."'");
	}


	function update_report($name,$date_of_upload,$id)
	{
	$query=$this->db->query("update report SET name='$name',date_of_upload='$date_of_upload' where report_id='".$id."'");
	}	

	function displayreportById($id)
	{
	$query=$this->db->query("select * from report where report_id='".$id."'");
	return $query->result();
	}
	
	//anoucememnt
	function delete_data_anoucement($id)
	{
	$this->db->query("delete  from matangazo where id='".$id."'");
	}


	function anoucement_report($descr,$title, $date, $id)
	{
	$query=$this->db->query("update matangazo SET maelezo='$descr', title='$title' , date='$date' where id='".$id."'");
	}	

	function displayanoucementById($id)
	{
	$query=$this->db->query("select * from matangazo where id='".$id."'");
	return $query->result();
	}
}
?>
