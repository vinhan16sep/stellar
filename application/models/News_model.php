<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_news($limit = NULL, $start = NULL) {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('news_is_delete', 0);
        $this->db->limit($limit, $start);
        $this->db->order_by("news_id", "desc");

        return $result = $this->db->get()->result_array();
    }
    
    public function get_hot_news(){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('news_is_delete', 0);
        $this->db->where('news_is_hot', 1);
        $this->db->order_by("news_id", "desc");

        return $result = $this->db->get()->result_array();
    }

    public function count_news() {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('news_is_delete', 0);

        return $result = $this->db->get()->num_rows();
    }
    
    public function count_hot_news() {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('news_is_delete', 0);
        $this->db->where('news_is_hot', 1);

        return $result = $this->db->get()->num_rows();
    }

    public function count_deleted_news() {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('news_is_delete', 1);

        return $result = $this->db->get()->num_rows();
    }

    public function get_news_by_id($id) {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('news_is_delete', 0);
        $this->db->where('news_id', $id);
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }

    public function insert_news($news_data) {
        return $this->db->insert('news', $news_data);
    }

    public function update_news($id, $new_news_data) {
        $this->db->where('news_id', $id);

        return $this->db->update('news', $new_news_data);
    }

    public function delete_news($id, $set_delete) {
        $this->db->where('news_id', $id);

        return $this->db->update('news', $set_delete);
    }

}
