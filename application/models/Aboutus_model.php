<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_aboutus_have_paginator($limit = NULL, $start = NULL) {
        $this->db->select('*');
        $this->db->from('aboutus');
        $this->db->where('aboutus_is_delete', 0);
        $this->db->order_by("aboutus_id", "desc");
        $this->db->limit($limit, $start);
        return $this->db->get()->result_array();
    }
    
    public function cout_aboutus(){
        $this->db->from('aboutus');
        $this->db->where('aboutus_is_delete', 0);
        
        return $this->db->get()->num_rows();
    }
    
    public function count_selected_aboutus(){
        $this->db->from('aboutus');
        $this->db->where('aboutus_is_delete', 0);
        $this->db->where('aboutus_is_select', 1);
        
        return $this->db->get()->num_rows();
    }
    
    public function get_aboutus_by_id($id) {
        $this->db->select('*');
        $this->db->from('aboutus');
        $this->db->where('aboutus_is_delete', 0);
        $this->db->where('aboutus_id', $id);
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }
    
    public function get_selected_aboutus() {
        $this->db->select('*');
        $this->db->from('aboutus');
        $this->db->where('aboutus_is_select', 1);
        $this->db->where('aboutus_is_delete', 0);
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }

    public function insert_aboutus($data) {
        return $this->db->insert('aboutus', $data);
    }
    
    public function update_aboutus($id, $data) {
        $this->db->where('aboutus_id', $id);
        return $this->db->update('aboutus', $data);
    }

    public function delete_aboutus($id, $set_delete) {
        $this->db->where('aboutus_id', $id);
        return $this->db->update('aboutus', $set_delete);
    }

}
