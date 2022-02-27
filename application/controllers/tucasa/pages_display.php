<?php


 class Pages_display extends CI_Controller{

    public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('tucasa/data_display');
	}

    function auditor_report(){

        $this->load->model('tucasa/data_display');
  
        $disp['display'] = $this->data_display->auditor_report();

        $this->load->view('tucasa/back_end/auditor/auditor_report', $disp);

    }

    function auditor_anoucement(){

        $this->load->model('tucasa/data_display');
  
        $disp['display'] = $this->data_display->auditor_anoucement();

        $this->load->view('tucasa/back_end/auditor/auditor_anoucement', $disp);

    }

    function auditor_goal(){

        $this->load->model('tucasa/data_display');
  
        $disp['display'] = $this->data_display->auditor_goal();

        $this->load->view('tucasa/back_end/auditor/auditor_goal', $disp);

    }


// Chair % Secretary

function goal(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_goal();

    $this->load->view('tucasa/back_end/chair_katibu/goal', $disp);

}



function anoucement(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_anoucement();

    $this->load->view('tucasa/back_end/chair_katibu/anoucement', $disp);

}

function report(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_report();

    $this->load->view('tucasa/back_end/chair_katibu/report', $disp);

}



// Program coordinator


function cordinator_goal(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_goal();

    $this->load->view('tucasa/back_end/Coordinator/cordinator_goal', $disp);

}



function cordinator_anoucement(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_anoucement();

    $this->load->view('tucasa/back_end/Coordinator/cordinator_anoucement', $disp);

}

function cordinator_report(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_report();

    $this->load->view('tucasa/back_end/Coordinator/cordinator_report', $disp);

}



// Kiroho

function kiroho_goal(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_goal();

    $this->load->view('tucasa/back_end/kiroho/kiroho_goal', $disp);

}



function kiroho_anoucement(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_anoucement();

    $this->load->view('tucasa/back_end/kiroho/kiroho_anoucement', $disp);

}

function kiroho_report(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_report();

    $this->load->view('tucasa/back_end/kiroho/kiroho_report', $disp);

}

function member_kiroho(){

    $this->load->model('tucasa/data_model');
      $data['fetch_data']=$this->data_model->fetch_data();
      $this->load->view('tucasa/back_end/kiroho/member_kiroho', $data);

}

// Mawasiliano

function mawasiliano_goal(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_goal();

    $this->load->view('tucasa/back_end/mawasiliano/mawasiliano_goal', $disp);

}



function mawasiliano_anoucement(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_anoucement();

    $this->load->view('tucasa/back_end/mawasiliano/mawasiliano_anoucement', $disp);

}

function mawasiliano_report(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_report();

    $this->load->view('tucasa/back_end/mawasiliano/mawasiliano_report', $disp);

}


// Mhazini


function mhazini_goal(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_goal();

    $this->load->view('tucasa/back_end/mhazini/mhazini_goal', $disp);

}



function mhazini_anoucement(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_anoucement();

    $this->load->view('tucasa/back_end/mhazini/mhazini_anoucement', $disp);

}

function mhazini_report(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_report();

    $this->load->view('tucasa/back_end/mhazini/mhazini_report', $disp);

}






// Mkutubi


function mkutubi_goal(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_goal();

    $this->load->view('tucasa/back_end/mkutubi/mkutubi_goal', $disp);

}



function mkutubi_anoucement(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_anoucement();

    $this->load->view('tucasa/back_end/mkutubi/mkutubi_anoucement', $disp);

}

function mkutubi_report(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_report();

    $this->load->view('tucasa/back_end/mkutubi/mkutubi_report', $disp);

}




// Muziki


function muziki_goal(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_goal();

    $this->load->view('tucasa/back_end/muziki/muziki_goal', $disp);

}



function muziki_anoucement(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_anoucement();

    $this->load->view('tucasa/back_end/muziki/muziki_anoucement', $disp);

}

function muziki_report(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_report();

    $this->load->view('tucasa/back_end/muziki/muziki_report', $disp);

}


// uwakili


function uwakili_goal(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_goal();

    $this->load->view('tucasa/back_end/uwakili/uwakili_goal', $disp);

}



function uwakili_anoucement(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_anoucement();

    $this->load->view('tucasa/back_end/uwakili/uwakili_anoucement', $disp);

}

function uwakili_report(){

    $this->load->model('tucasa/data_display');

    $disp['display'] = $this->data_display->auditor_report();

    $this->load->view('tucasa/back_end/uwakili/uwakili_report', $disp);

}


public function delete_report()
{
    $this->load->model('tucasa/Hello_Model');
$id=$this->input->get('id');
$delete = $this->Hello_Model->delete_data_report($id);
redirect("tucasa/pages_display/auditor_report");
}

   
public function update_report()
{
$this->load->model('tucasa/Hello_Model');
$id=$this->input->get('id');
$result['data']=$this->Hello_Model->displayreportById($id);
$this->load->view('tucasa/back_end/auditor/report_update',$result);	

    if($this->input->post('update'))
    {
    $f=$this->input->post('name');
    $m=$this->input->post('date_of_upload');
    $this->Hello_Model->update_report($f,$m,$id);
    redirect("tucasa/pages_display/auditor_report");
    }
}


public function delete_anoucement()
{
    $this->load->model('tucasa/Hello_Model');
$id=$this->input->get('id');
$delete = $this->Hello_Model->delete_data_anoucement($id);
redirect("tucasa/pages_display/auditor_anoucement");
}

   
public function update_anoucememnt()
{
$this->load->model('tucasa/Hello_Model');
$id=$this->input->get('id');
$result['data']=$this->Hello_Model->displayanoucementById($id);
$this->load->view('tucasa/back_end/auditor/anoucement_update',$result);	

    if($this->input->post('update'))
    {
    $f=$this->input->post('maelezo');
    $m=$this->input->post('date');
    $s=$this->input->post('title');
    $this->Hello_Model->anoucement_report($f,$m,$s,$id);
    redirect("tucasa/pages_display/auditor_anoucement");
    }
}



 }
?>