<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product_category_en_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_product_category_en_by_paging($limit = NULL, $start = NULL) {
        $this->db->select('*');
        $this->db->from('product_category_en');
        $this->db->where('is_delete', 0);
        $this->db->order_by("id", "desc");
        $this->db->limit($limit, $start);
        return $result = $this->db->get()->result_array();
    }

    public function get_all_product_category_en() {
        $this->db->select('*');
        $this->db->from('product_category_en');
        $this->db->where('is_delete', 0);
        return $result = $this->db->get()->result_array();
    }

    public function get_product_category_en_by_id($id) {

        $this->db->select('*');
        $this->db->from('product_category_en');
        $this->db->where('is_delete', 0);
        $this->db->where('id', $id);
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }

    public function count_product_category_en() {
        $this->db->select('*');
        $this->db->from('product_category_en');
        $this->db->where('is_delete', 0);
        return $result = $this->db->get()->num_rows();
    }

    public function count_deleted_product_category_en() {
        $this->db->select('*');
        $this->db->from('product_category_en');
        $this->db->where('is_delete', 1);
        return $result = $this->db->get()->num_rows();
    }

    public function insert_product_category_en($data) {
        return $this->db->insert('product_category_en', $data);
    }

    public function delete_product_category_en($id, $set_delete) {
        $this->db->where('id', $id);
        return $this->db->update('product_category_en', $set_delete);
    }

}
