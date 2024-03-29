<?php

class Home_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database(); // Load database
    }

    public function get_homestay($id = FALSE)
    {
        if($id == FALSE){
                $query = $this->db->get_where('homestay',array('statushs'=>0));
                return $query->result_array();
            }
            $query = $this->db->get_where('homestay', array('id_homestay'=>$id));
            return $query->row_array();
    }
	
	public function get_recommend_homestay($id = FALSE){
            if($id == FALSE){
                $this->db->order_by('homestay.harga', 'INCREMENT');
                $query = $this->db->get_where('homestay', array('statushs'=>'0'),12);
                
                return $query->result_array();
            }
            $query = $this->db->get_where('homestay', array('id_homestay'=>$id));
            return $query->row_array();
        }
}
