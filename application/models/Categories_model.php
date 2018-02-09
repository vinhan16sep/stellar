<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categories_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_categories($limit = NULL, $start = NULL) {
        $this->db->select('*');
        $this->db->from('categories');
        $this->db->where('is_delete', 0);
        $this->db->limit($limit, $start);
        $this->db->order_by("id", "desc");
        return $result = $this->db->get()->result_array();
    }

    public function count_categories() {
        $this->db->select('*');
        $this->db->from('categories');
        $this->db->where('is_delete', 0);
        return $result = $this->db->get()->num_rows();
    }
    
    public function count_main_categories(){
        $this->db->select('*');
        $this->db->from('categories');
        $this->db->where('is_delete', 0);
        $this->db->where('is_main', 1);
        return $result = $this->db->get()->num_rows();
    }

//    public function get_news_by_id($id) {
//        $this->db->select('*');
//        $this->db->from('news');
//        $this->db->where('is_delete', 0);
//        $this->db->where('id', $id);
//        $this->db->limit(1);
//
//        return $this->db->get()->row_array();
//    }

    public function insert_category($data) {
        return $this->db->insert('categories', $data);
    }

//    public function update_news($id, $new_news_data) {
//        $this->db->where('id', $id);
//        return $this->db->update('news', $new_news_data);
//    }

//    public function delete_member($member_id, $set_delete) {
//        $this->db->where('id', $member_id);
//        return $this->db->update('members', $set_delete);
//    }

}
