<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_post() {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->where('is_delete', 0);
        return $result = $this->db->get()->result_array();
    }

    public function get_post_by_id($id) {

        $this->db->select('*');
        $this->db->from('post');
        $this->db->where('is_delete', 0);
        $this->db->where('id', $id);
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }

    public function count_posts() {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->where('is_delete', 0);
        return $result = $this->db->get()->num_rows();
    }

    public function count_deleted_posts() {
        $this->db->select('*');
        $this->db->from('post');
        $this->db->where('is_delete', 1);
        return $result = $this->db->get()->num_rows();
    }



    public function get_all_post_by_paging($limit = NULL, $start = NULL) {
        $this->db->select('post.* , post_en.title as title_en , post_en.content as content_en , post_en.menu as menu_en');
        $this->db->from('post');
        $this->db->join('post_en','post_en.post_id = post.id','left');
        $this->db->where('post.is_delete', 0);
        $this->db->order_by("post.id", "desc");
        $this->db->limit($limit, $start);
        return $result = $this->db->get()->result_array();
    }
    public function get_last_id() {

        $this->db->select('id');
        $this->db->from('post');
        $this->db->order_by('id','DESC');
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }
    public function get_all_post_by_id($id) {
        $this->db->select('post.* , post_en.title as title_en , post_en.content as content_en , post_en.menu as menu_en');
        $this->db->from('post');
        $this->db->join('post_en','post_en.post_id = post.id','left');
        $this->db->where('post.is_delete', 0);
        $this->db->where('post.id', $id);
        $this->db->order_by("post.id", "desc");
        $this->db->limit(1);
        return $this->db->get()->row_array();
    }

    public function update_post_en($id, $data) {
        $this->db->where('post_id', $id);
        return $this->db->update('post_en', $data);
    }

    public function get_post_en_by_post_id($id) {
        $this->db->select('*');
        $this->db->from('post_en');
        $this->db->where('is_delete', 0);
        $this->db->where('post_id', $id);
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }
    public function update_post($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('post', $data);
    }
    public function get_all_post_en_by_paging($limit = NULL, $start = NULL) {
        $this->db->select('*');
        $this->db->from('post_en');
        $this->db->where('is_delete', 0);
        $this->db->order_by("id", "desc");
        $this->db->limit($limit, $start);
        return $result = $this->db->get()->result_array();
    }
}
