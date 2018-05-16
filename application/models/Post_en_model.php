<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class qa_en_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_qa_en_by_paging($limit = NULL, $start = NULL) {
        $this->db->select('*');
        $this->db->from('qa_en');
        $this->db->where('is_delete', 0);
        $this->db->order_by("id", "desc");
        $this->db->limit($limit, $start);
        return $result = $this->db->get()->result_array();
    }

    public function get_all_qa_en() {
        $this->db->select('*');
        $this->db->from('qa_en');
        $this->db->where('is_delete', 0);
        return $result = $this->db->get()->result_array();
    }

    public function get_qa_en_by_id($id) {

        $this->db->select('*');
        $this->db->from('qa_en');
        $this->db->where('is_delete', 0);
        $this->db->where('id', $id);
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }

    public function count_qa_en() {
        $this->db->select('*');
        $this->db->from('qa_en');
        $this->db->where('is_delete', 0);
        return $result = $this->db->get()->num_rows();
    }

    public function count_deleted_qa_en() {
        $this->db->select('*');
        $this->db->from('qa');
        $this->db->where('is_delete', 1);
        return $result = $this->db->get()->num_rows();
    }

    public function insert_qa_en($data) {
        return $this->db->insert('qa_en', $data);
    }

    public function delete_qa_en($id, $set_delete) {
        $this->db->where('id', $id);
        return $this->db->update('qa_en', $set_delete);
    }

}
