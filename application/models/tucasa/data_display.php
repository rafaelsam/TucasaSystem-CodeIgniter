<?php

class Data_display extends CI_Model{


    public function auditor_report(){

        $report = $this->db->query('select * from report');
        return $report->result();

    }


    public function auditor_anoucement(){

        $report = $this->db->query('select * from matangazo');
        return $report->result();

    }

    public function auditor_goal(){

        $report = $this->db->query('select * from goals');
        return $report->result();

    }


    public function songs(){

        $songs = $this->db->query('select song_id, song_name, album_name from songs inner join album on songs.song_id=album.album_id');

        return $songs->result();

    }


    public function singer(){

        $singers = $this->db->query('select singer_id, first_name, last_name, phone_number from singer');

        return $singers;

    }

    public function group_singer(){

        $group = $this->db->query('select group_id, name from group_of_singer');

        return $group;

    }


    public function miradi(){

        $miradi = $this->db->query('select investment_id, name from investment');

        return $miradi;

    }

    public function purchase(){

        $purchase = $this->db->query('select purchase_id, date_of_purchase, amount from purchase');

        return $purchase;

    }


    public function revenue(){

        $revenue = $this->db->query('select revenue_id, income_date, amount from revenue');

        return $revenue;

    }


    public function worker(){

        $worker = $this->db->query('select worker_id, first_name, last_name, phone_number from workers');

        return $worker;

    }




}
?>