<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Banners_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_banner_by_paging($limit = NULL, $start = NULL) {
        $this->db->select('*');
        $this->db->from('process');
        $this->db->where('is_delete', 0);
        $this->db->order_by("id", "desc");
        $this->db->limit($limit, $start);
        return $result = $this->db->get()->result_array();
    }

    public function get_all_banner() {
        $this->db->select('*');
        $this->db->from('process');
        $this->db->where('is_delete', 0);
        return $result = $this->db->get()->result_array();
    }

    public function get_banner_by_id($id) {

        $this->db->select('*');
        $this->db->from('process');
        $this->db->where('is_delete', 0);
        $this->db->where('id', $id);
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }

    public function count_banners() {
        $this->db->select('*');
        $this->db->from('process');
        $this->db->where('is_delete', 0);
        return $result = $this->db->get()->num_rows();
    }

    public function count_deleted_banners() {
        $this->db->select('*');
        $this->db->from('process');
        $this->db->where('is_delete', 1);
        return $result = $this->db->get()->num_rows();
    }

    public function insert_banner($data) {
        return $this->db->insert('process', $data);
    }

    public function delete_banner($id, $set_delete) {
        $this->db->where('id', $id);
        $this->db->update('process', $set_delete);
        $this->db->where('process_id', $id);
        return $this->db->update('process_en', $set_delete);
    }
    public function get_last_id() {

        $this->db->select('id');
        $this->db->from('process');
        $this->db->order_by('id','DESC');
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }

    public function get_all_banner_en_by_paging($limit = NULL, $start = NULL) {
        $this->db->select('process.* , process_en.title as title_en , process_en.content as content_en');
        $this->db->from('process');
        $this->db->join('process_en','process_en.process_id = process.id','left');
        $this->db->where('process.is_delete', 0);
        $this->db->order_by("process.id", "desc");
        $this->db->limit($limit, $start);
        return $result = $this->db->get()->result_array();
    }
    public function get_process_by_process_id($id) {
        $this->db->select('process.* , process_en.title as title_en , process_en.content as content_en');
        $this->db->from('process');
        $this->db->join('process_en','process_en.process_id = process.id','left');
        $this->db->where('process.id', $id);
        $this->db->order_by("process.id", "desc");
        return $result = $this->db->get()->row_array();
    }
    public function update_process($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('process', $data);
    }

    public function get_all_banner_lang_en_by_paging($limit = NULL, $start = NULL) {
        $this->db->select('*');
        $this->db->from('process_en');
        $this->db->where('is_delete', 0);
        $this->db->order_by("id", "desc");
        $this->db->limit($limit, $start);
        return $result = $this->db->get()->result_array();
    }

    public function insert_banner_image($data) {
        if($data){
            return $this->db->insert_batch('images_process', $data);
        }
        return null;
    }

    public function get_all_image_process($id) {
        $this->db->select('*');
        $this->db->from('images_process');
        $this->db->where('is_delete', 0);
        $this->db->where('process_id', $id);
        return $result = $this->db->get()->result_array();
    }
    public function get_image_process_by_id($id) {
        $this->db->select('*');
        $this->db->from('images_process');
        $this->db->where('is_delete', 0);
        $this->db->where('id', $id);
        return $result = $this->db->get()->result_array();
    }

    public function delete_image_process($id) {

        $set_delete = array('is_delete' => 1);
        $this->db->where('id', $id);
        return $this->db->update('images_process', $set_delete);
    }

}
