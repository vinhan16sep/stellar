<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class product_category_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_product_category() {
        $this->db->select('*');
        $this->db->from('product_category');
        $this->db->where('is_delete', 0);
        return $result = $this->db->get()->result_array();
    }

    public function get_product_category_by_id($id) {

        $this->db->select('*');
        $this->db->from('product_category');
        $this->db->where('is_delete', 0);
        $this->db->where('id', $id);
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }

    public function count_product_categorys() {
        $this->db->select('*');
        $this->db->from('product_category');
        $this->db->where('is_delete', 0);
        return $result = $this->db->get()->num_rows();
    }

    public function count_deleted_product_categorys() {
        $this->db->select('*');
        $this->db->from('product_category');
        $this->db->where('is_delete', 1);
        return $result = $this->db->get()->num_rows();
    }



    public function get_all_product_category_by_paging($limit = NULL, $start = NULL) {
        $this->db->select('product_category.* , product_category_en.title as title_en , product_category_en.content as content_en , product_category_en.menu as menu_en');
        $this->db->from('product_category');
        $this->db->join('product_category_en','product_category_en.product_category_id = product_category.id','left');
        $this->db->where('product_category.is_delete', 0);
        $this->db->order_by("product_category.id", "desc");
        $this->db->limit($limit, $start);
        return $result = $this->db->get()->result_array();
    }
    public function get_last_id() {

        $this->db->select('id');
        $this->db->from('product_category');
        $this->db->order_by('id','DESC');
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }
    public function get_all_product_category_by_id($id) {
        $this->db->select('product_category.* , product_category_en.title as title_en , product_category_en.content as content_en , product_category_en.menu as menu_en');
        $this->db->from('product_category');
        $this->db->join('product_category_en','product_category_en.product_category_id = product_category.id','left');
        $this->db->where('product_category.is_delete', 0);
        $this->db->where('product_category.id', $id);
        $this->db->order_by("product_category.id", "desc");
        $this->db->limit(1);
        return $this->db->get()->row_array();
    }

    public function update_product_category_en($id, $data) {
        $this->db->where('product_category_id', $id);
        return $this->db->update('product_category_en', $data);
    }

    public function get_product_category_en_by_product_category_id($id) {
        $this->db->select('product_category_en.title,product_category_en.content,product_category.image as image,product_category.avata as avata');
        $this->db->from('product_category_en');
        $this->db->join('product_category','product_category.id = product_category_id','left');
        $this->db->where('product_category.is_delete', 0);
        $this->db->where('product_category_id', $id);
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }
    public function update_product_category($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('product_category', $data);
    }
    public function get_all_product_category_en_by_paging($limit = NULL, $start = NULL) {
        $this->db->select('*');
        $this->db->from('product_category_en');
        $this->db->where('is_delete', 0);
        $this->db->order_by("id", "desc");
        $this->db->limit($limit, $start);
        return $result = $this->db->get()->result_array();
    }
}
