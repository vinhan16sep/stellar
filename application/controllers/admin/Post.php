<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('post_model');
        $this->load->library('session');
    }

    public function index() {
        $this->load->library('pagination');
        $this->load->helper('form');
        $config = array();
        $base_url = base_url() . 'admin/post/index';
        $total_rows = 1;
        $total_rows = $this->post_model->count_posts();
        $per_page = 10;
        $uri_segment = 4;
        $config = $this->pagination_config($base_url, $total_rows, $per_page, $uri_segment);
        $this->pagination->initialize($config);
        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->data['Post'] = $this->post_model->get_all_post_by_paging($per_page, $this->data['page']);

        $this->render('admin/post/list_post_view');
    }

    public function edit($id) {
        $this->load->helper('form');
        $id = intval($id);
        if(empty($id)){
            redirect('admin/post', 'refresh');
        }
        $this->data['Post'] = $this->post_model->get_all_post_by_id($id);

        if ($this->input->post()) {
            $post_data = array(
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content')
            );
            $post_data_en = array(
                'title' => $this->input->post('title_en'),
                'content' => $this->input->post('content_en')
            );

            try {
                $this->post_model->update_post($id,$post_data);

                $post_en = $this->post_model->get_post_en_by_post_id($id);
                if(!empty($post_en)){
                    $this->post_model->update_post_en($id,$post_data_en);
                }else{
                    $post_data_en['post_id'] = $id;
                    $this->post_model->insert_post_en($post_data_en);
                }
                $this->session->set_flashdata('message', 'Post added successfully');
            } catch (Exception $e) {
                $this->session->set_flashdata('message', 'There was an error inserting Post ' . $e->getMessage());
            }

            redirect('admin/post', 'refresh');
        }
        $this->render('admin/post/edit_post_view');
    }


}
