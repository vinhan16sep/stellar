<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_product() {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('is_delete', 0);
        return $result = $this->db->get()->result_array();
    }

    public function get_product_by_id($id) {

        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('is_delete', 0);
        $this->db->where('id', $id);
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }

    public function count_products() {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('is_delete', 0);
        return $result = $this->db->get()->num_rows();
    }

    public function count_deleted_products() {
        $this->db->select('*');
        $this->db->from('product');
        $this->db->where('is_delete', 1);
        return $result = $this->db->get()->num_rows();
    }



    public function get_all_product_by_paging($limit = NULL, $start = NULL) {
        $this->db->select('product.* , product_en.title as title_en , product_en.content as content_en');
        $this->db->from('product');
        $this->db->join('product_en','product_en.product_id = product.id','left');
        $this->db->where('product.is_delete', 0);
        $this->db->order_by("product.id", "desc");
        $this->db->limit($limit, $start);
        return $result = $this->db->get()->result_array();
    }
    public function get_last_id() {

        $this->db->select('id');
        $this->db->from('product');
        $this->db->order_by('id','DESC');
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }
    public function get_all_product_by_product_category_id($id) {
        $this->db->select('product.* , product_en.title as title_en , product_en.content as content_en');
        $this->db->from('product');
        $this->db->join('product_en','product_en.product_id = product.id','left');
        $this->db->where('product.is_delete', 0);
        $this->db->where(array('product_category_id' => $id));
        return $this->db->get()->result_array();
    }
    public function get_all_product_by_id($id) {
        $this->db->select('product.* , product_en.title as title_en , product_en.content as content_en');
        $this->db->from('product');
        $this->db->join('product_en','product_en.product_id = product.id','left');
        $this->db->where('product.is_delete', 0);
        $this->db->where(array('product.id' => $id));
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }

    public function update_product_en($id, $data) {
        $this->db->where('product_id', $id);
        return $this->db->update('product_en', $data);
    }

    public function get_product_en_by_product_category_id($id) {
        $this->db->select('product_en.title,product_en.content,product.image as image,product.avata as avata');
        $this->db->from('product_en');
        $this->db->join('product','product.id = product_id','left');
        $this->db->where('product.is_delete', 0);
        $this->db->where(array('product.product_category_id' => $id));
        return $this->db->get()->result_array();
    }
    public function get_product_en_by_product_id($id) {
        $this->db->select('product_en.title,product_en.content,product.image as image');
        $this->db->from('product_en');
        $this->db->join('product','product.id = product_id','left');
        $this->db->where('product.is_delete', 0);
        $this->db->where(array('product_en.product_id' => $id));
        $this->db->limit(1);
        return $this->db->get()->row_array();
    }
    public function update_product($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('product', $data);
    }
    public function get_all_product_en_by_paging($limit = NULL, $start = NULL) {
        $this->db->select('*');
        $this->db->from('product_en');
        $this->db->where('is_delete', 0);
        $this->db->order_by("id", "desc");
        $this->db->limit($limit, $start);
        return $result = $this->db->get()->result_array();
    }
}
