<?php

class Pages extends CI_Controller{
/**
 * These are front end web pages that will be 
 * displayed to normal user/members
 */
    public function homepage(){
        $this->load->view('tucasa/front_end/homepage');
    }

    public function User_particulars(){
        $this->load->view('tucasa/front_end/User_particulars');
    }
    public function payments(){
        $this->load->view('tucasa/front_end/payments');
    }
    public function Timetable(){
        $this->load->view('tucasa/front_end/Timetable');
    }
    public function Events(){
        $this->load->view('tucasa/front_end/Events');
    }
    
    public function Investment(){
      $this->load->model('tucasa/data_display');
      $miradi['uwakili'] = $this->data_display->miradi();
        $this->load->view('tucasa/front_end/Investment',$miradi);
    }

    public function Library(){
        $this->load->view('tucasa/front_end/Library');
    }


    public function Song_s(){
      $this->load->model('tucasa/data_display');
      $song['nyimbo'] = $this->data_display->songs();
        $this->load->view('tucasa/front_end/Songs', $song);
    }

    public function Leaders(){
        $this->load->view('tucasa/front_end/Leaders');
    }


    /**
     * These are back end web pages that will be displayed to 
     * staffs/leaders based on his or her position.
     */


     // Auditor allowed pages
     public function auditor_anoucemet(){
          // Check validation for user input in investment form
   $this->form_validation->set_rules('maelezo', 'maelezo', 'required');
   $this->form_validation->set_rules('tangazo_title', 'tangazo_title', 'required');
   $this->form_validation->set_rules('date_anounciment', 'date_anounciment', 'required');
 
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/auditor/auditor');
  } 
  else
   {

      $uwakili_anounciment_data = array(
  'maelezo' => $this->input->post('maelezo'),
  'tangazo_title' => $this->input->post('tangazo_title'),
  'date_anounciment' => $this->input->post('date_anounciment')
);

  $this->load->model('tucasa/data_model');
  $muziki_anoucement = $this->data_model->uwakili_anoucement($uwakili_anounciment_data);
 

if ($muziki_anoucement == TRUE) {
   $data['anounciment_message'] = 'Submission Successfully !';
   $this->load->view('tucasa/back_end/auditor/auditor',$data);

} 
else {
   $data['anounciment_message'] = 'Submission failed';
   $this->load->view('tucasa/back_end/auditor/auditor',$data);
}
}    
}

     public function auditor_report(){


        // Check validation for user input in investment form
       $this->form_validation->set_rules('category_id', 'category_id', 'required');
       $this->form_validation->set_rules('date_report', 'date_report', 'required');
       $this->form_validation->set_rules('report_title', 'report_title', 'required');
       $this->form_validation->set_rules('report_file', 'report_file', 'required');
     
       
      
   if ($this->form_validation->run() == FALSE) {
      $this->load->view('tucasa/back_end/auditor/auditor');
      } 
      else
       {
   
 
      $uwakili_report_data = array(
      'report_title' => $this->input->post('report_title'),
      'report_file' => $this->input->post('report_file'),
      'date_report' => $this->input->post('date_report'),
      'category_id' => $this->input->post('category_id')
   );
   
      $this->load->model('tucasa/data_model');
      $uwakili_report = $this->data_model->uwakili_report($uwakili_report_data);
   
      
   
   if ($uwakili_report == TRUE) {
       $uwakili['uwakili_message'] = 'Submission Successfully !';
       $this->load->view('tucasa/back_end/auditor/auditor', $uwakili);
      
      } else {
    $uwakili['uwakili_message'] = 'Submission failed';
    $this->load->view('tucasa/back_end/auditor/auditor', $uwakili);
   }
   }     
   }


     public function auditor_goal(){
         // Check validation for user input in investment form
   $this->form_validation->set_rules('goal_category', 'goal_category', 'required');
   $this->form_validation->set_rules('date_goal', 'date_goal', 'required');
   $this->form_validation->set_rules('goal_title', 'goal_title', 'required');
   $this->form_validation->set_rules('goal_file', 'goal_file', 'required');
 
   
  
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/auditor/auditor');
  } 
  else
   {

  $uwakili_goal_data = array(
  'date_goal' => $this->input->post('date_goal'),
  'goal_title' => $this->input->post('goal_title'),
  'goal_file' => $this->input->post('goal_file'),
  'goal_category' => $this->input->post('goal_category')
);

  $this->load->model('tucasa/data_model');
  $goal_report = $this->data_model->uwakili_goal($uwakili_goal_data);
 

if ($goal_report == TRUE) {
   $goal['goal_message'] = 'Submission Successfully !';
   $this->load->view('tucasa/back_end/auditor/auditor',$goal);
} else {
   $goal['goal_message'] = 'Submission failed';
   $this->load->view('tucasa/back_end/auditor/auditor',$goal);
}
}    
}



     public function auditor(){
        $this->load->view('tucasa/back_end/auditor/auditor');
     }


     public function change_pass(){
        $this->load->view('tucasa/back_end/auditor/change_pass');
     }


      // Chair_Katibu allowed pages
      public function anoucement(){
        // Check validation for user input in investment form
   $this->form_validation->set_rules('maelezo', 'maelezo', 'required');
   $this->form_validation->set_rules('tangazo_title', 'tangazo_title', 'required');
   $this->form_validation->set_rules('date_anounciment', 'date_anounciment', 'required');
 
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/chair_katibu/chair');
  } 
  else
   {

      $uwakili_anounciment_data = array(
  'maelezo' => $this->input->post('maelezo'),
  'tangazo_title' => $this->input->post('tangazo_title'),
  'date_anounciment' => $this->input->post('date_anounciment')
);

  $this->load->model('tucasa/data_model');
  $muziki_anoucement = $this->data_model->uwakili_anoucement($uwakili_anounciment_data);
 

if ($muziki_anoucement == TRUE) {
   $data['anounciment_message'] = 'Submission Successfully !';
   $this->load->view('tucasa/back_end/chair_katibu/chair',$data);

} else {
   $data['anounciment_message'] = 'Submission failed';
   $this->load->view('tucasa/back_end/chair_katibu/chair',$data);
}
}
}


     public function chair(){
        $this->load->view('tucasa/back_end/chair_katibu/chair');
     }


     public function goal(){
          // Check validation for user input in investment form
   $this->form_validation->set_rules('goal_category', 'goal_category', 'required');
   $this->form_validation->set_rules('date_goal', 'date_goal', 'required');
   $this->form_validation->set_rules('goal_title', 'goal_title', 'required');
   $this->form_validation->set_rules('goal_file', 'goal_file', 'required');
 
   
  
if ($this->form_validation->run() == FALSE) {
  $this->load->view('tucasa/back_end/chair_katibu/chair');
  } 
  else
   {

  $uwakili_goal_data = array(
  'date_goal' => $this->input->post('date_goal'),
  'goal_title' => $this->input->post('goal_title'),
  'goal_file' => $this->input->post('goal_file'),
  'goal_category' => $this->input->post('goal_category')
);

  $this->load->model('tucasa/data_model');
  $goal_report = $this->data_model->uwakili_goal($uwakili_goal_data);
 

if ($goal_report == TRUE) {
   $goal['goal_message'] = 'Submission Successfully !';
   $this->load->view('tucasa/back_end/chair_katibu/chair',$goal);

} else {
   $goal['goal_message'] = 'Submission failed';
  $this->load->view('tucasa/back_end/chair_katibu/chair',$goal);

}
}  
     }


     public function report(){
         // Check validation for user input in investment form
       $this->form_validation->set_rules('category_id', 'category_id', 'required');
       $this->form_validation->set_rules('date_report', 'date_report', 'required');
       $this->form_validation->set_rules('report_title', 'report_title', 'required');
       $this->form_validation->set_rules('report_file', 'report_file', 'required');
     
       
      
   if ($this->form_validation->run() == FALSE) {
      $this->load->view('tucasa/back_end/chair_katibu/chair');
      } 
      else
       {
   
 
      $uwakili_report_data = array(
      'report_title' => $this->input->post('report_title'),
      'report_file' => $this->input->post('report_file'),
      'date_report' => $this->input->post('date_report'),
      'category_id' => $this->input->post('category_id')
   );
   
      $this->load->model('tucasa/data_model');
      $uwakili_report = $this->data_model->uwakili_report($uwakili_report_data);
   
      
   
   if ($uwakili_report == TRUE) {
       $uwakili['uwakili_message'] = 'Submission Successfully !';
       $this->load->view('tucasa/back_end/chair_katibu/chair',$uwakili);
   } else {
    $uwakili['uwakili_message'] = 'Submission failed';
    $this->load->view('tucasa/back_end/chair_katibu/chair',$uwakili);
   }
   }   
}

     public function member(){
      $this->load->model('tucasa/data_model');
      $data['fetch_data']=$this->data_model->fetch_data();
      $this->load->view('tucasa/back_end/chair_katibu/member', $data);
     }

    
     public function deletedata()
     {
      $this->load->model('tucasa/Hello_Model');
     $id=$this->input->get('id');
     $this->Hello_Model->deleterecords($id);
     redirect("tucasa/pages/member");
     }
     
     public function updatedata()
     {
      $this->load->model('tucasa/Hello_Model');
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
        redirect("tucasa/pages/member");
        }
      }


     public function member_analysis(){
      $this->load->model('tucasa/data_model');
      $data['count']=$this->data_model->count();
      $this->load->view('tucasa/back_end/chair_katibu/member_analysis', $data);

   }
     public function change_pass_katibu(){
        $this->load->view('tucasa/back_end/chair_katibu/change_pass');
     }



       // Coordinator allowed pages
       public function coordinator_anoucemet(){
         // Check validation for user input in investment form
   $this->form_validation->set_rules('maelezo', 'maelezo', 'required');
   $this->form_validation->set_rules('tangazo_title', 'tangazo_title', 'required');
   $this->form_validation->set_rules('date_anounciment', 'date_anounciment', 'required');
 
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/coordinator/p_coordinator');
  } 
  else
   {

      $uwakili_anounciment_data = array(
  'maelezo' => $this->input->post('maelezo'),
  'tangazo_title' => $this->input->post('tangazo_title'),
  'date_anounciment' => $this->input->post('date_anounciment')
);

  $this->load->model('tucasa/data_model');
  $muziki_anoucement = $this->data_model->uwakili_anoucement($uwakili_anounciment_data);
 

if ($muziki_anoucement == TRUE) {
   $data['anounciment_message'] = 'Submission Successfully !';
   $this->load->view('tucasa/back_end/coordinator/p_coordinator',$data);

} else {
   $data['anounciment_message'] = 'Submission failed';
   $this->load->view('tucasa/back_end/coordinator/p_coordinator',$data);
}
}    
}



     public function P_coordinator(){
        $this->load->view('tucasa/back_end/coordinator/p_coordinator');
     }




     public function coordinator_goal(){
      // Check validation for user input in investment form
   $this->form_validation->set_rules('goal_category', 'goal_category', 'required');
   $this->form_validation->set_rules('date_goal', 'date_goal', 'required');
   $this->form_validation->set_rules('goal_title', 'goal_title', 'required');
   $this->form_validation->set_rules('goal_file', 'goal_file', 'required');
 
   
  
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/coordinator/p_coordinator');
  } 
  else
   {

  $uwakili_goal_data = array(
  'date_goal' => $this->input->post('date_goal'),
  'goal_title' => $this->input->post('goal_title'),
  'goal_file' => $this->input->post('goal_file'),
  'goal_category' => $this->input->post('goal_category')
);

  $this->load->model('tucasa/data_model');
  $goal_report = $this->data_model->uwakili_goal($uwakili_goal_data);
 

if ($goal_report == TRUE) {
   $goal['goal_message'] = 'Submission Successfully !';
   $this->load->view('tucasa/back_end/coordinator/p_coordinator',$goal);

} else {
   $goal['goal_message'] = 'Submission failed';
   $this->load->view('tucasa/back_end/coordinator/p_coordinator',$goal);

}
}     
}



     public function coordinator_report(){
       // Check validation for user input in investment form
       $this->form_validation->set_rules('category_id', 'category_id', 'required');
       $this->form_validation->set_rules('date_report', 'date_report', 'required');
       $this->form_validation->set_rules('report_title', 'report_title', 'required');
       $this->form_validation->set_rules('report_file', 'report_file', 'required');
     
       
      
   if ($this->form_validation->run() == FALSE) {
      $this->load->view('tucasa/back_end/coordinator/p_coordinator');
      } 
      else
       {
   
 
      $uwakili_report_data = array(
      'report_title' => $this->input->post('report_title'),
      'report_file' => $this->input->post('report_file'),
      'date_report' => $this->input->post('date_report'),
      'category_id' => $this->input->post('category_id')
   );
   
      $this->load->model('tucasa/data_model');
      $uwakili_report = $this->data_model->uwakili_report($uwakili_report_data);
   
      
   
   if ($uwakili_report == TRUE) {
       $uwakili['uwakili_message'] = 'Submission Successfully !';
       $this->load->view('tucasa/back_end/coordinator/p_coordinator', $uwakili);
   } else {
    $uwakili['uwakili_message'] = 'Submission failed';
    $this->load->view('tucasa/back_end/coordinator/p_coordinator', $uwakili);

   }
   }     
}

     public function change_pass_coordinaor(){
        $this->load->view('tucasa/back_end/coordinator/change_pass');
     }


      // Kiroho allowed pages
      public function Kiroho_anoucemet(){
        // Check validation for user input in investment form
   $this->form_validation->set_rules('maelezo', 'maelezo', 'required');
   $this->form_validation->set_rules('tangazo_title', 'tangazo_title', 'required');
   $this->form_validation->set_rules('date_anounciment', 'date_anounciment', 'required');
 
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/kiroho/kiroho');
  } 
  else
   {

      $uwakili_anounciment_data = array(
  'maelezo' => $this->input->post('maelezo'),
  'tangazo_title' => $this->input->post('tangazo_title'),
  'date_anounciment' => $this->input->post('date_anounciment')
);

  $this->load->model('tucasa/data_model');
  $muziki_anoucement = $this->data_model->uwakili_anoucement($uwakili_anounciment_data);
 

if ($muziki_anoucement == TRUE) {
   $data['anounciment_message'] = 'Submission Successfully !';
   $this->load->view('tucasa/back_end/kiroho/kiroho',$data);

} else {
   $data['anounciment_message'] = 'Submission failed';
   $this->load->view('tucasa/back_end/kiroho/kiroho',$data);
}
}
}


     public function member_kiroho(){
      $this->load->view('tucasa/back_end/kiroho/kiroho');
     }

     
     public function Kiroho_goal(){
         // Check validation for user input in investment form
   $this->form_validation->set_rules('goal_category', 'goal_category', 'required');
   $this->form_validation->set_rules('date_goal', 'date_goal', 'required');
   $this->form_validation->set_rules('goal_title', 'goal_title', 'required');
   $this->form_validation->set_rules('goal_file', 'goal_file', 'required');
 
   
  
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/kiroho/kiroho');
  } 
  else
   {

  $uwakili_goal_data = array(
  'date_goal' => $this->input->post('date_goal'),
  'goal_title' => $this->input->post('goal_title'),
  'goal_file' => $this->input->post('goal_file'),
  'goal_category' => $this->input->post('goal_category')
);

  $this->load->model('tucasa/data_model');
  $goal_report = $this->data_model->uwakili_goal($uwakili_goal_data);
 

if ($goal_report == TRUE) {
   $goal['goal_message'] = 'Submission Successfully !';
   $this->load->view('tucasa/back_end/kiroho/kiroho', $goal);
} else {
   $goal['goal_message'] = 'Submission failed';
   $this->load->view('tucasa/back_end/kiroho/kiroho', $goal);

}
}  
}



     public function Kiroho_report(){
        // Check validation for user input in investment form
        $this->form_validation->set_rules('category_id', 'category_id', 'required');
        $this->form_validation->set_rules('date_report', 'date_report', 'required');
        $this->form_validation->set_rules('report_title', 'report_title', 'required');
        $this->form_validation->set_rules('report_file', 'report_file', 'required');
      
        
       
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('tucasa/back_end/kiroho/kiroho');
       } else
        {
    
  
       $uwakili_report_data = array(
       'report_title' => $this->input->post('report_title'),
       'report_file' => $this->input->post('report_file'),
       'date_report' => $this->input->post('date_report'),
       'category_id' => $this->input->post('category_id')
    );
    
       $this->load->model('tucasa/data_model');
       $uwakili_report = $this->data_model->uwakili_report($uwakili_report_data);
    
       
    
    if ($uwakili_report == TRUE) {
        $uwakili['uwakili_message'] = 'Submission Successfully !';
        $this->load->view('tucasa/back_end/kiroho/kiroho',$uwakili);
    } else {
     $uwakili['uwakili_message'] = 'Submission failed';
     $this->load->view('tucasa/back_end/kiroho/kiroho',$uwakili);
 
    }
    }
    }



     public function Kiroho(){
        $this->load->view('tucasa/back_end/kiroho/kiroho');
     }
     public function change_pass_kiroho(){
        $this->load->view('tucasa/back_end/kiroho/change_pass');
     }

      // Mawasiliano allowed pages
      public function mawasiliano(){
        $this->load->view('tucasa/back_end/mawasiliano/mawasiliano');
     }



     public function mawasiliano_anoucement(){
               // Check validation for user input in investment form
   $this->form_validation->set_rules('maelezo', 'maelezo', 'required');
   $this->form_validation->set_rules('tangazo_title', 'tangazo_title', 'required');
   $this->form_validation->set_rules('date_anounciment', 'date_anounciment', 'required');
 
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/mawasiliano/mawasiliano');
  } 
  else
   {

      $uwakili_anounciment_data = array(
  'maelezo' => $this->input->post('maelezo'),
  'tangazo_title' => $this->input->post('tangazo_title'),
  'date_anounciment' => $this->input->post('date_anounciment')
);

  $this->load->model('tucasa/data_model');
  $muziki_anoucement = $this->data_model->uwakili_anoucement($uwakili_anounciment_data);
 

if ($muziki_anoucement == TRUE) {
   $data['anounciment_message'] = 'Submission Successfully !';
   $this->load->view('tucasa/back_end/mawasiliano/mawasiliano',$data);

} else {
   $data['anounciment_message'] = 'Submission failed';
   $this->load->view('tucasa/back_end/mawasiliano/mawasiliano',$data);

}
}
}


     public function mawasiliano_goal(){
       // Check validation for user input in investment form
   $this->form_validation->set_rules('goal_category', 'goal_category', 'required');
   $this->form_validation->set_rules('date_goal', 'date_goal', 'required');
   $this->form_validation->set_rules('goal_title', 'goal_title', 'required');
   $this->form_validation->set_rules('goal_file', 'goal_file', 'required');
 
   
  
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/mawasiliano/mawasiliano');
  } 
  else
   {

  $uwakili_goal_data = array(
  'date_goal' => $this->input->post('date_goal'),
  'goal_title' => $this->input->post('goal_title'),
  'goal_file' => $this->input->post('goal_file'),
  'goal_category' => $this->input->post('goal_category')
);

  $this->load->model('tucasa/data_model');
  $goal_report = $this->data_model->uwakili_goal($uwakili_goal_data);
 

if ($goal_report == TRUE) {
   $goal['goal_message'] = 'Submission Successfully !';
   $this->load->view('tucasa/back_end/mawasiliano/mawasiliano',$goal);

} else {
   $goal['goal_message'] = 'Submission failed';
   $this->load->view('tucasa/back_end/mawasiliano/mawasiliano',$goal);

}
}   
}


     public function mawasiliano_report(){
     // Check validation for user input in investment form
       $this->form_validation->set_rules('category_id', 'category_id', 'required');
       $this->form_validation->set_rules('date_report', 'date_report', 'required');
       $this->form_validation->set_rules('report_title', 'report_title', 'required');
       $this->form_validation->set_rules('report_file', 'report_file', 'required');
     
       
      
   if ($this->form_validation->run() == FALSE) {
      $this->load->view('tucasa/back_end/mawasiliano/mawasiliano');
      } else
       {
   
 
      $uwakili_report_data = array(
      'report_title' => $this->input->post('report_title'),
      'report_file' => $this->input->post('report_file'),
      'date_report' => $this->input->post('date_report'),
      'category_id' => $this->input->post('category_id')
   );
   
      $this->load->model('tucasa/data_model');
      $uwakili_report = $this->data_model->uwakili_report($uwakili_report_data);
   
      
   
   if ($uwakili_report == TRUE) {
       $uwakili['uwakili_message'] = 'Submission Successfully !';
       $this->load->view('tucasa/back_end/mawasiliano/mawasiliano',$uwakili);
   } else {
    $uwakili['uwakili_message'] = 'Submission failed';
    $this->load->view('tucasa/back_end/mawasiliano/mawasiliano',$uwakili);

   }
   } 
}
     
     public function change_pass_mawasiliano(){
        $this->load->view('tucasa/back_end/mawasiliano/change_pass');
     }




      // Mhazini allowed pages
      public function mhazini(){
        $this->load->view('tucasa/back_end/mhazini/mhazini');
     }


     
     public function add_payments(){
      // Check validation for user input in investment form
$this->form_validation->set_rules('first_name', 'first_name', 'required');
$this->form_validation->set_rules('last_name', 'last_name', 'required');
$this->form_validation->set_rules('amount_paid', 'amount_paid', 'required');
$this->form_validation->set_rules('date_paid', 'date_paid', 'required');
$this->form_validation->set_rules('payment_for', 'payment_for', 'required');

if ($this->form_validation->run() == FALSE) {
$this->load->view('tucasa/back_end/mhazini/mhazini');
} 
else
{

$payments_data = array(
'first_name' => $this->input->post('first_name'),
'last_name' => $this->input->post('last_name'),
'amount_paid' => $this->input->post('amount_paid'),
'date_paid' => $this->input->post('date_paid'),
'payment_for' => $this->input->post('payment_for')
);

$this->load->model('tucasa/data_model');
$payments= $this->data_model->add_payments($payments_data);


if ($payments == TRUE) {
$data['payments_message'] = 'Payments added Successfully !';
$this->load->view('tucasa/back_end/mhazini/mhazini',$data);
} else {
$data['payments_message'] = 'Submission failed';
$this->load->view('tucasa/back_end/mhazini/mhazini',$data);
}
}
}


     public function mhazini_anoucement(){
            // Check validation for user input in investment form
   $this->form_validation->set_rules('maelezo', 'maelezo', 'required');
   $this->form_validation->set_rules('tangazo_title', 'tangazo_title', 'required');
   $this->form_validation->set_rules('date_anounciment', 'date_anounciment', 'required');
 
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/mhazini/mhazini');
  } 
  else
   {

      $uwakili_anounciment_data = array(
  'maelezo' => $this->input->post('maelezo'),
  'tangazo_title' => $this->input->post('tangazo_title'),
  'date_anounciment' => $this->input->post('date_anounciment')
);

  $this->load->model('tucasa/data_model');
  $muziki_anoucement = $this->data_model->uwakili_anoucement($uwakili_anounciment_data);
 

if ($muziki_anoucement == TRUE) {
   $data['anounciment_message'] = 'Submission Successfully !';
   $this->load->view('tucasa/back_end/mhazini/mhazini',$data);
} else {
   $data['anounciment_message'] = 'Submission failed';
   $this->load->view('tucasa/back_end/mhazini/mhazini',$data);
}
}
}
     
     public function mhazini_goal(){
         // Check validation for user input in investment form
   $this->form_validation->set_rules('goal_category', 'goal_category', 'required');
   $this->form_validation->set_rules('date_goal', 'date_goal', 'required');
   $this->form_validation->set_rules('goal_title', 'goal_title', 'required');
   $this->form_validation->set_rules('goal_file', 'goal_file', 'required');
 
   
  
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/mhazini/mhazini');
  } 
  else
   {

  $uwakili_goal_data = array(
  'date_goal' => $this->input->post('date_goal'),
  'goal_title' => $this->input->post('goal_title'),
  'goal_file' => $this->input->post('goal_file'),
  'goal_category' => $this->input->post('goal_category')
);

  $this->load->model('tucasa/data_model');
  $goal_report = $this->data_model->uwakili_goal($uwakili_goal_data);
 

if ($goal_report == TRUE) {
   $goal['goal_message'] = 'Submission Successfully !';
   $this->load->view('tucasa/back_end/mhazini/mhazini',$goal);
} else {
   $goal['goal_message'] = 'Submission failed';
   $this->load->view('tucasa/back_end/mhazini/mhazini',$goal);
}
}
}


     public function mhazini_report(){
       // Check validation for user input in investment form
       $this->form_validation->set_rules('category_id', 'category_id', 'required');
       $this->form_validation->set_rules('date_report', 'date_report', 'required');
       $this->form_validation->set_rules('report_title', 'report_title', 'required');
       $this->form_validation->set_rules('report_file', 'report_file', 'required');
     
       
      
   if ($this->form_validation->run() == FALSE) {
      $this->load->view('tucasa/back_end/mhazini/mhazini');
      } else
       {
   
 
      $uwakili_report_data = array(
      'report_title' => $this->input->post('report_title'),
      'report_file' => $this->input->post('report_file'),
      'date_report' => $this->input->post('date_report'),
      'category_id' => $this->input->post('category_id')
   );
   
      $this->load->model('tucasa/data_model');
      $uwakili_report = $this->data_model->uwakili_report($uwakili_report_data);
   
      
   
   if ($uwakili_report == TRUE) {
       $uwakili['uwakili_message'] = 'Submission Successfully !';
       $this->load->view('tucasa/back_end/mhazini/mhazini',$uwakili);
   } else {
    $uwakili['uwakili_message'] = 'Submission failed';
    $this->load->view('tucasa/back_end/mhazini/mhazini',$uwakili);
   }
   } 
   }


     public function Individual_payment(){

      $this->load->model('tucasa/data_model');
      $data['fetch_data']=$this->data_model->fetch_data();
        $this->load->view('tucasa/back_end/mhazini/Individual_payment',$data);
     }
     
     public function payment_analysis(){
        $this->load->view('tucasa/back_end/mhazini/payment_analysis');
     }
     public function change_pass_mhazini(){
        $this->load->view('tucasa/back_end/mhazini/change_pass_mhazini');
     }

 // Mkutubi allowed pages
 public function mkutubi(){
    $this->load->view('tucasa/back_end/mkutubi/mkutubi');
 }


 public function new_book(){
   // Check validation for user input in investment form
$this->form_validation->set_rules('book_name', 'book_name', 'required');
$this->form_validation->set_rules('publisher_name', 'publisher_name', 'required');
$this->form_validation->set_rules('author_name', 'author_name', 'required');
$this->form_validation->set_rules('Category', 'Category', 'required');
$this->form_validation->set_rules('file', 'file', 'required');

if ($this->form_validation->run() == FALSE) {
$this->load->view('tucasa/back_end/mkutubi/mkutubi');
} 
else
{

   $book_data = array(
'book_name' => $this->input->post('book_name'),
'publisher_name' => $this->input->post('publisher_name'),
'author_name' => $this->input->post('author_name'),
'Category' => $this->input->post('Category'),
'file' => $this->input->post('file')
);

$this->load->model('tucasa/data_model');
$book = $this->data_model->new_book($book_data);


if ($book == TRUE) {
$disp['book_message'] = 'Book added Successfully !';
$this->load->view('tucasa/back_end/mkutubi/mkutubi',$disp);
} else {
   $disp['book_message'] = 'Book already exist';
$this->load->view('tucasa/back_end/mkutubi/mkutubi',$disp);
}
}
}




 public function mkutubi_anoucement(){
      // Check validation for user input in investment form
   $this->form_validation->set_rules('maelezo', 'maelezo', 'required');
   $this->form_validation->set_rules('tangazo_title', 'tangazo_title', 'required');
   $this->form_validation->set_rules('date_anounciment', 'date_anounciment', 'required');
 
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/mkutubi/mkutubi');
  } 
  else
   {

      $uwakili_anounciment_data = array(
  'maelezo' => $this->input->post('maelezo'),
  'tangazo_title' => $this->input->post('tangazo_title'),
  'date_anounciment' => $this->input->post('date_anounciment')
);

  $this->load->model('tucasa/data_model');
  $muziki_anoucement = $this->data_model->uwakili_anoucement($uwakili_anounciment_data);
 

if ($muziki_anoucement == TRUE) {
   $data['anounciment_message'] = 'Submission Successfully !';
   $this->load->view('tucasa/back_end/mkutubi/mkutubi',$data);
} else {
   $data['anounciment_message'] = 'Submission failed';
   $this->load->view('tucasa/back_end/mkutubi/mkutubi',$data);
}
}
 }


 public function mkutubi_goal(){
     // Check validation for user input in investment form
   $this->form_validation->set_rules('goal_category', 'goal_category', 'required');
   $this->form_validation->set_rules('date_goal', 'date_goal', 'required');
   $this->form_validation->set_rules('goal_title', 'goal_title', 'required');
   $this->form_validation->set_rules('goal_file', 'goal_file', 'required');
 
   
  
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/mkutubi/mkutubi');
  } 
  else
   {

  $uwakili_goal_data = array(
  'date_goal' => $this->input->post('date_goal'),
  'goal_title' => $this->input->post('goal_title'),
  'goal_file' => $this->input->post('goal_file'),
  'goal_category' => $this->input->post('goal_category')
);

  $this->load->model('tucasa/data_model');
  $goal_report = $this->data_model->uwakili_goal($uwakili_goal_data);
 

if ($goal_report == TRUE) {
   $goal['goal_message'] = 'Submission Successfully !';
   $this->load->view('tucasa/back_end/mkutubi/mkutubi',$goal);
} else {
   $goal['goal_message'] = 'Submission failed';
   $this->load->view('tucasa/back_end/mkutubi/mkutubi',$goal);
}
}
}


 public function mkutubi_report(){
      // Check validation for user input in investment form
      $this->form_validation->set_rules('category_id', 'category_id', 'required');
      $this->form_validation->set_rules('date_report', 'date_report', 'required');
      $this->form_validation->set_rules('report_title', 'report_title', 'required');
      $this->form_validation->set_rules('report_file', 'report_file', 'required');
    
      
     
  if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/mkutubi/mkutubi');
     } else
      {
  

     $uwakili_report_data = array(
     'report_title' => $this->input->post('report_title'),
     'report_file' => $this->input->post('report_file'),
     'date_report' => $this->input->post('date_report'),
     'category_id' => $this->input->post('category_id')
  );
  
     $this->load->model('tucasa/data_model');
     $uwakili_report = $this->data_model->uwakili_report($uwakili_report_data);
    
  
  if ($uwakili_report == TRUE) {
      $uwakili['uwakili_message'] = 'Submission Successfully !';
      $this->load->view('tucasa/back_end/mkutubi/mkutubi',$uwakili);
  } else {
   $uwakili['uwakili_message'] = 'Submission failed';
   $this->load->view('tucasa/back_end/mkutubi/mkutubi',$uwakili);
  }
  } 
 }


 public function afya(){
    $this->load->view('tucasa/back_end/mkutubi/afya');
 }
 public function lesoni(){
    $this->load->view('tucasa/back_end/mkutubi/lesoni');
 }
 public function mahusiano(){
    $this->load->view('tucasa/back_end/mkutubi/mahusiano');
 }
 public function books(){
    $this->load->view('tucasa/back_end/mkutubi/books');
 }
 public function magazeti(){
    $this->load->view('tucasa/back_end/mkutubi/magazeti');
 }
 public function makala(){
    $this->load->view('tucasa/back_end/mkutubi/makala');
 }
 
 public function change_pass_mkutubi(){
    $this->load->view('tucasa/back_end/mkutubi/change_pass');
 }


 

 // Muziki allowed pages
 public function muziki(){
    $this->load->view('tucasa/back_end/muziki/muziki');
 }

 
public function new_song(){
   $this->form_validation->set_rules('song_name', 'song_name', 'required');
   $this->form_validation->set_rules('album_name', 'album_name', 'required');
   $this->form_validation->set_rules('singers', 'singers', 'required');
 
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/muziki/muziki');
  } 
  else
   {

      $song_data = array(
  'song_name' => $this->input->post('song_name'),
  'album_name' => $this->input->post('album_name'),
  'singers' => $this->input->post('singers')
);


  $this->load->model('tucasa/data_model');
  $song = $this->data_model->new_song($song_data);
 

if ($song == TRUE) {
   $song_mes['song_message'] = 'Song added Successfully !';
   $this->load->view('tucasa/back_end/muziki/muziki', $song_mes);
} else {
   $song_mes['song_message'] = 'Submission failed';
   $this->load->view('tucasa/back_end/muziki/muziki', $song_mes);
}
}
}


 
public function new_singer(){
   $this->form_validation->set_rules('first_name', 'first name', 'required');
   $this->form_validation->set_rules('last_name', 'last name', 'required');
   $this->form_validation->set_rules('sex', 'sex', 'required');
   $this->form_validation->set_rules('melody', 'melody', 'required');
   $this->form_validation->set_rules('phone_number', 'phone_number', 'required');
   $this->form_validation->set_rules('group', 'group of', 'required');
 
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/muziki/muziki');
  } 
  else
   {

      $singer_data = array(
  'first_name' => $this->input->post('first_name'),
  'last_name' => $this->input->post('last_name'),
  'sex' => $this->input->post('sex'),
  'melody' => $this->input->post('melody'),
  'phone_number' => $this->input->post('phone_number'),
  'group' => $this->input->post('group')
);

  $this->load->model('tucasa/data_model');
  $singer = $this->data_model->new_singer($singer_data);
 

if ($singer == TRUE) {
   $singer_mes['singer_message'] = 'Singer added Successfully !';
   $this->load->view('tucasa/back_end/muziki/muziki', $singer_mes);
} else {
   $singer_mes['singer_message'] = 'Singer Already Exist';
   $this->load->view('tucasa/back_end/muziki/muziki', $singer_mes);
}
}
}



public function new_group(){
   $this->form_validation->set_rules('group_name', 'group_name', 'required');
   $this->form_validation->set_rules('capacity', 'capacity', 'required');
   $this->form_validation->set_rules('date_creation', 'date_creation', 'required');
   $this->form_validation->set_rules('descr', 'descr', 'required');
 
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/muziki/muziki');
  } 
  else
   {

      $group_data = array(
  'group_name' => $this->input->post('group_name'),
  'capacity' => $this->input->post('capacity'),
  'date_creation' => $this->input->post('date_creation'),
  'descr' => $this->input->post('descr')
);

  $this->load->model('tucasa/data_model');
  $group = $this->data_model->new_group($group_data);
 

if ($group == TRUE) {
   $group_mes['group_message'] = 'Group added Successfully !';
   $this->load->view('tucasa/back_end/muziki/muziki', $group_mes);
} else {
   $group_mes['group_message'] = 'Group Already Exist';
   $this->load->view('tucasa/back_end/muziki/muziki', $group_mes);
}
}
}


public function group_leader(){
   $this->form_validation->set_rules('first_name', 'first_name', 'required');
   $this->form_validation->set_rules('last_name', 'last_name', 'required');
   $this->form_validation->set_rules('position', 'position', 'required');
   $this->form_validation->set_rules('group', 'group', 'required');
  
 
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/muziki/muziki');
  } 
  else
   {

      $leader_data = array(
  'first_name' => $this->input->post('first_name'),
  'last_name' => $this->input->post('last_name'),
  'position' => $this->input->post('position'),
  'group' => $this->input->post('group')
);

  $this->load->model('tucasa/data_model');
  $leader = $this->data_model->group_leader($leader_data);
 

if ($leader  == TRUE) {
   $leader_mes['leader_message'] = 'Submission Successfully !';
   $this->load->view('tucasa/back_end/muziki/muziki', $leader_mes);
} else {
   $leader_mes['leader_message'] = 'Group leader Already Exist';
   $this->load->view('tucasa/back_end/muziki/muziki', $leader_mes);
}
}
}

 public function muziki_anoucement(){
     // Check validation for user input in investment form
   $this->form_validation->set_rules('maelezo', 'maelezo', 'required');
   $this->form_validation->set_rules('tangazo_title', 'tangazo_title', 'required');
   $this->form_validation->set_rules('date_anounciment', 'date_anounciment', 'required');
 
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/muziki/muziki');
  } 
  else
   {

      $uwakili_anounciment_data = array(
  'maelezo' => $this->input->post('maelezo'),
  'tangazo_title' => $this->input->post('tangazo_title'),
  'date_anounciment' => $this->input->post('date_anounciment')
);

  $this->load->model('tucasa/data_model');
  $muziki_anoucement = $this->data_model->uwakili_anoucement($uwakili_anounciment_data);
 

if ($muziki_anoucement == TRUE) {
   $data['anounciment_message'] = 'Submission Successfully !';
   $this->load->view('tucasa/back_end/muziki/muziki',$data);
} else {
   $data['anounciment_message'] = 'Submission failed';
   $this->load->view('tucasa/back_end/muziki/muziki',$data);
}
}
}


 public function muziki_goal(){
     // Check validation for user input in investment form
   $this->form_validation->set_rules('goal_category', 'goal_category', 'required');
   $this->form_validation->set_rules('date_goal', 'date_goal', 'required');
   $this->form_validation->set_rules('goal_title', 'goal_title', 'required');
   $this->form_validation->set_rules('goal_file', 'goal_file', 'required');
 
   
  
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/muziki/muziki');
  } 
  else
   {

  $uwakili_goal_data = array(
  'date_goal' => $this->input->post('date_goal'),
  'goal_title' => $this->input->post('goal_title'),
  'goal_file' => $this->input->post('goal_file'),
  'goal_category' => $this->input->post('goal_category')
);

  $this->load->model('tucasa/data_model');
  $goal_report = $this->data_model->uwakili_goal($uwakili_goal_data);
 

if ($goal_report == TRUE) {
   $goal['goal_message'] = 'Submission Successfully !';
   $this->load->view('tucasa/back_end/muziki/muziki',$goal);
} else {
   $goal['goal_message'] = 'Submission failed';
   $this->load->view('tucasa/back_end/muziki/muziki',$goal);
}
}
}



 public function muziki_report(){
    // Check validation for user input in investment form
    $this->form_validation->set_rules('category_id', 'category_id', 'required');
    $this->form_validation->set_rules('date_report', 'date_report', 'required');
    $this->form_validation->set_rules('report_title', 'report_title', 'required');
    $this->form_validation->set_rules('report_file', 'report_file', 'required');
  
    
   
if ($this->form_validation->run() == FALSE) {
   $this->load->view('tucasa/back_end/muziki/muziki');
   } else
    {


   $uwakili_report_data = array(
   'report_title' => $this->input->post('report_title'),
   'report_file' => $this->input->post('report_file'),
   'date_report' => $this->input->post('date_report'),
   'category_id' => $this->input->post('category_id')
);

   $this->load->model('tucasa/data_model');
   $uwakili_report = $this->data_model->uwakili_report($uwakili_report_data);
  

if ($uwakili_report == TRUE) {
    $uwakili['uwakili_message'] = 'Submission Successfully !';
    $this->load->view('tucasa/back_end/muziki/muziki',$uwakili);
} else {
 $uwakili['uwakili_message'] = 'Submission failed';
 $this->load->view('tucasa/back_end/muziki/muziki',$uwakili);
}
} 
}


 public function songs(){

   $this->load->model('tucasa/data_display');
   $song['nyimbo'] = $this->data_display->songs();
    $this->load->view('tucasa/back_end/muziki/songs', $song);
 }
 
 public function singers(){
   $this->load->model('tucasa/data_display');
   $singer['nyimbo'] = $this->data_display->singer();
    $this->load->view('tucasa/back_end/muziki/singers',$singer);
 }

 public function singer_group(){
   $this->load->model('tucasa/data_display');
   $group['nyimbo'] = $this->data_display->group_singer();
    $this->load->view('tucasa/back_end/muziki/singer_group',$group);
 }
 
 public function change_pass_muziki(){
    $this->load->view('tucasa/back_end/muziki/change_pass');
 }






 // Muziki allowed pages
 public function uwakili(){
    $this->load->view('tucasa/back_end/uwakili/uwakili');
 }

 public function uwakili_anoucement(){
     // Check validation for user input in investment form
   $this->form_validation->set_rules('maelezo', 'maelezo', 'required');
   $this->form_validation->set_rules('tangazo_title', 'tangazo_title', 'required');
   $this->form_validation->set_rules('date_anounciment', 'date_anounciment', 'required');
 
if ($this->form_validation->run() == FALSE) {
  $this->load->view('tucasa/back_end/uwakili/uwakili');
  } 
  else
   {

  $uwakili_anounciment_data = array(
  'maelezo' => $this->input->post('maelezo'),
  'tangazo_title' => $this->input->post('tangazo_title'),
  'date_anounciment' => $this->input->post('date_anounciment')
);

  $this->load->model('tucasa/data_model');
  $anounciment_data = $this->data_model->uwakili_anoucement($uwakili_anounciment_data);
 

if ($anounciment_data == TRUE) {
   $data['anounciment_message'] = 'Submission Successfully !';
$this->load->view('tucasa/back_end/uwakili/uwakili', $data);
} else {
   $data['anounciment_message'] = 'Submission failed';
$this->load->view('tucasa/back_end/uwakili/uwakili_report', $data);
}
}
 }






 public function uwakili_goal(){ 
   // Check validation for user input in investment form
   $this->form_validation->set_rules('goal_category', 'goal_category', 'required');
   $this->form_validation->set_rules('date_goal', 'date_goal', 'required');
   $this->form_validation->set_rules('goal_title', 'goal_title', 'required');
   $this->form_validation->set_rules('goal_file', 'goal_file', 'required');
 
   
  
if ($this->form_validation->run() == FALSE) {
  $this->load->view('tucasa/back_end/uwakili/uwakili');
  } 
  else
   {

  $uwakili_goal_data = array(
  'date_goal' => $this->input->post('date_goal'),
  'goal_title' => $this->input->post('goal_title'),
  'goal_file' => $this->input->post('goal_file'),
  'goal_category' => $this->input->post('goal_category')
);

  $this->load->model('tucasa/data_model');
  $goal_report = $this->data_model->uwakili_goal($uwakili_goal_data);
 

if ($goal_report == TRUE) {
   $goal['goal_message'] = 'Submission Successfully !';
$this->load->view('tucasa/back_end/uwakili/uwakili', $goal);
} else {
   $goal['goal_message'] = 'Submission failed';
$this->load->view('tucasa/back_end/uwakili/uwakili_report', $goal);
}
}
 }



 public function uwakili_report(){
      // Check validation for user input in investment form
      $this->form_validation->set_rules('category_id', 'category_id', 'required');
      $this->form_validation->set_rules('date_report', 'date_report', 'required');
      $this->form_validation->set_rules('report_title', 'report_title', 'required');
      $this->form_validation->set_rules('report_file', 'report_file', 'required');
    
      
     
  if ($this->form_validation->run() == FALSE) {
     $this->load->view('tucasa/back_end/uwakili/uwakili');
     } else
      {
  

     $uwakili_report_data = array(
     'report_title' => $this->input->post('report_title'),
     'report_file' => $this->input->post('report_file'),
     'date_report' => $this->input->post('date_report'),
     'category_id' => $this->input->post('category_id')
  );
  
     $this->load->model('tucasa/data_model');
     $uwakili_report = $this->data_model->uwakili_report($uwakili_report_data);
    
  
  if ($uwakili_report == TRUE) {
      $uwakili['uwakili_message'] = 'Submission Successfully !';
  $this->load->view('tucasa/back_end/uwakili/uwakili', $uwakili);
  } else {
   $uwakili['uwakili_message'] = 'Submission failed';
  $this->load->view('tucasa/back_end/uwakili/uwakili', $uwakili);
  }
  }  
  }
 


 public function Income(){
   $this->load->model('tucasa/data_display');
   $revenue['Income'] = $this->data_display->revenue();
    $this->load->view('tucasa/back_end/uwakili/Income',$revenue);
 }

 public function miradi(){
   $this->load->model('tucasa/data_display');
   $miradi['uwakili'] = $this->data_display->miradi();
    $this->load->view('tucasa/back_end/uwakili/miradi',$miradi);
 }

 public function Expenses(){
    $this->load->view('tucasa/back_end/uwakili/Expenses');
 }

 public function Investment_analysis(){
   $this->load->model('tucasa/data_display');
   $miradi['purchase'] = $this->data_display->purchase();
    $this->load->view('tucasa/back_end/uwakili/Investment_analysis',$miradi);
 }



 public function add_sales(){

   $this->form_validation->set_rules('particulars', 'particulars', 'required');
    $this->form_validation->set_rules('date_of_upload_sales', 'date_of_upload', 'required');
    $this->form_validation->set_rules('amount_sale', 'amount', 'required');
    $this->form_validation->set_rules('investment_sales', 'investment', 'required');

    if ($this->form_validation->run() == FALSE) {
        $this->load->view('tucasa/back_end/uwakili/uwakili');
        }
        else{
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


 public function workers(){
   $this->load->model('tucasa/data_display');
   $worker['employee'] = $this->data_display->worker();
    $this->load->view('tucasa/back_end/uwakili/workers',$worker);
 }

 public function sales(){
   $this->load->view('tucasa/back_end/uwakili/sales');
}

 public function profit_loss(){
    $this->load->view('tucasa/back_end/uwakili/profit_loss');
 }
 public function change_pass_uwakili(){
    $this->load->view('tucasa/back_end/uwakili/change_pass');
 }







  //  allowed pages for Admin
  public function home(){
   $this->load->view('tucasa/back_end/admin/home');
}



public function member_analysis_admin(){
   $this->load->model('tucasa/data_model');
   $member['total']=$this->data_model->count();
   $this->load->view('tucasa/back_end/admin/member_analysis',$member);
}
public function register(){ 
   $this->load->view('tucasa/back_end/admin/register');
}

public function delete(){
   $this->load->view('tucasa/back_end/admin/delete');
}
public function update(){
   $this->load->view('tucasa/back_end/admin/update');
}


public function change_pass_admin(){
   $this->load->view('tucasa/back_end/admin/change_pass');
}




}
?>