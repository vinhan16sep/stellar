<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Descriptions_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_descriptions() {
        $this->db->select('*');
        $this->db->from('descriptions');
        $this->db->where('description_is_delete', 0);
        return $result = $this->db->get()->result_array();
    }
    
    public function get_description_by_id($id = NULL){
        $this->db->select('*');
        $this->db->from('descriptions');
        $this->db->where('description_id', $id);
        $this->db->where('description_is_delete', 0);
        $this->db->limit(1);
        
        return $this->db->get()->row_array();
    }
    
    public function get_description_by_location($location = ''){
        $this->db->select('*');
        $this->db->from('descriptions');
        $this->db->where('description_from_page', (string)$location);
        $this->db->where('description_is_delete', 0);
        $this->db->limit(1);
        
        return $this->db->get()->row_array();
    }
    
    public function update_description($id = NULL, $data = array()){
        $this->db->where('description_id', $id);
        return $this->db->update('descriptions', $data);
    }
}
