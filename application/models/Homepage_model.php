<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_banner() {
        $this->db->select('*');
        $this->db->from('Process');
        $this->db->where('banner_is_delete', 0);
        return $result = $this->db->get()->result_array();
    }
    
    public function get_all_news($limit = NULL, $start = NULL) {
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('news_is_delete', 0);
        $this->db->limit($limit, $start);
        $this->db->order_by("news_id", "desc");
        return $result = $this->db->get()->result_array();
    }
}
