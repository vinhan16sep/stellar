<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Articles_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_articles($limit = NULL, $start = NULL) {
        $this->db->select('articles.*, project_id, project_title');
        $this->db->from('articles');
        $this->db->join('projects', 'project_id = article_project_id');
        $this->db->where('article_is_delete', 0);
        $this->db->order_by("project_id", "desc");
        $this->db->order_by("article_id", "desc");
        $this->db->limit($limit, $start);
        return $this->db->get()->result_array();
    }
    
    public function get_all_articles_by_project($limit = NULL, $start = NULL, $project_id = NULL) {
        $this->db->select('*');
        $this->db->from('articles');
        $this->db->where('article_is_delete', 0);
        $this->db->where('article_project_id', $project_id);
        $this->db->limit($limit, $start);
        $this->db->order_by("article_id", "desc");
        return $result = $this->db->get()->result_array();
    }

    public function count_articles() {
        $this->db->select('*');
        $this->db->from('articles');
        $this->db->where('article_is_delete', 0);
        return $this->db->get()->num_rows();
    }
    
    public function count_deleted_articles() {
        $this->db->select('*');
        $this->db->from('articles');
        $this->db->where('article_is_delete', 1);
        return $this->db->get()->num_rows();
    }

    public function get_article_by_id($id) {
        $this->db->select('*');
        $this->db->from('articles');
        $this->db->where('article_is_delete', 0);
        $this->db->where('article_id', $id);
        $this->db->limit(1);

        return $this->db->get()->row_array();
    }

    public function insert_article($data) {
        return $this->db->insert('articles', $data);
    }

    public function update_article($id, $data) {
        $this->db->where('article_id', $id);
        return $this->db->update('articles', $data);
    }

    public function delete_article($id, $set_delete) {
        $this->db->where('article_id', $id);
        return $this->db->update('articles', $set_delete);
    }

}
