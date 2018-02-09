<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class qa_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_banner_by_paging($limit = NULL, $start = NULL) {
        $this->db->select('*');
        $this->db->from('qa');
        $this->db->where('is_delete', 0);
        $this->db->order_by("id", "desc");
        $this->db->limit($limit, $start);
        return $result = $this->db->get()->result_array();
    }

    public function get_all_banner() {
        $this->db->select('*');
        $this->db->from('qa');
        $this->db->where('is_delete', 0);
        return $result = $this->db->get()->result_array();
    }

    public function get_banner_by_id($id) {

        $this->db->select('*');
        $this->db->from('qa');
        $this->db->where('is_delete', 0);
        $this->db->where('id', $id);
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }

    public function count_banners() {
        $this->db->select('*');
        $this->db->from('qa');
        $this->db->where('is_delete', 0);
        return $result = $this->db->get()->num_rows();
    }

    public function count_deleted_banners() {
        $this->db->select('*');
        $this->db->from('qa');
        $this->db->where('is_delete', 1);
        return $result = $this->db->get()->num_rows();
    }

    public function insert_banner($data) {
        return $this->db->insert('qa', $data);
    }

    public function delete_banner($id, $set_delete) {
        $this->db->where('id', $id);
        return $this->db->update('qa', $set_delete);
    }
    public function delete_banner_en($id, $set_delete) {
        $this->db->where('qa_id', $id);
        return $this->db->update('qa_en', $set_delete);
    }



    public function get_all_qa_by_paging($limit = NULL, $start = NULL) {
        $this->db->select('qa.* , qa_en.title as title_en , qa_en.content as content_en');
        $this->db->from('qa');
        $this->db->join('qa_en','qa_en.qa_id = qa.id','left');
        $this->db->where('qa.is_delete', 0);
        $this->db->order_by("qa.id", "desc");
        $this->db->limit($limit, $start);
        return $result = $this->db->get()->result_array();
    }
    public function get_last_id() {

        $this->db->select('id');
        $this->db->from('qa');
        $this->db->order_by('id','DESC');
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }
    public function insert_banner_en($data) {
        return $this->db->insert('qa_en', $data);
    }
    public function get_all_qa_by_id($id) {
        $this->db->select('qa.* , qa_en.title as title_en , qa_en.content as content_en');
        $this->db->from('qa');
        $this->db->join('qa_en','qa_en.qa_id = qa.id','left');
        $this->db->where('qa.is_delete', 0);
        $this->db->where('qa.id', $id);
        $this->db->order_by("qa.id", "desc");
        $this->db->limit(1);
        return $this->db->get()->row_array();
    }

    public function update_qa_en($id, $data) {
        $this->db->where('qa_id', $id);
        return $this->db->update('qa_en', $data);
    }

    public function get_qa_en_by_qa_id($id) {

        $this->db->select('*');
        $this->db->from('qa_en');
        $this->db->where('is_delete', 0);
        $this->db->where('qa_id', $id);
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }
    public function insert_qa_en($data) {
        return $this->db->insert('qa_en', $data);
    }
    public function update_qa($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('qa', $data);
    }
    public function get_all_banner_en_by_paging($limit = NULL, $start = NULL) {
        $this->db->select('*');
        $this->db->from('qa_en');
        $this->db->where('is_delete', 0);
        $this->db->order_by("id", "desc");
        $this->db->limit($limit, $start);
        return $result = $this->db->get()->result_array();
    }
}
