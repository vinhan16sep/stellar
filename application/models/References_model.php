<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class References_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function count(){
        $this->db->select('*');
        $this->db->from('references');
        $this->db->where('is_delete', 0);

        return $result = $this->db->get()->num_rows();
    }
    
    public function get_by_id($id) {
        $this->db->select('*');
        $this->db->from('references');
        $this->db->where('is_delete', 0);
        $this->db->where('id', $id);
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }
    
    public function get_by_sorting($sorting){
    	$this->db->select('*');
        $this->db->from('references');
        $this->db->where('is_delete', 0);
        $this->db->where('sorting', $sorting);
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }
    
    public function fetch_all(){
        $this->db->select('*');
        $this->db->from('references');
        $this->db->where('is_delete', 0);
        $this->db->order_by('sorting', 'asc');
        return $result = $this->db->get()->result_array();
    }
    
    public function fetch_all_with_pagination($limit = NULL, $start = NULL){
        $this->db->select('*');
        $this->db->from('references');
        $this->db->where('is_delete', 0);
        $this->db->limit($limit, $start);
        $this->db->order_by("sorting", "asc");
        $this->db->order_by("title", "asc");

        return $result = $this->db->get()->result_array();
    }
    
    public function insert($data = array()){
        return $this->db->insert('references', $data);
    }
    
    public function update($id, $new_reference_data) {
        $this->db->where('id', $id);

        return $this->db->update('references', $new_reference_data);
    }
    
    public function delete($id, $set_delete) {
        $this->db->where('id', $id);

        return $this->db->update('references', $set_delete);
    }
    public function insert_register_home($data = array()){
        return $this->db->insert('register_home', $data);
    }
}