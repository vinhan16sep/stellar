<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('post_model');
        $this->load->library('session');
        $this->data['controller'] = "post";
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
        if(empty($this->data['Post'])){
            $this->session->set_flashdata('message_error',MESSAGE_ID_ERROR);
            redirect('admin/post','refresh');
        }
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('content', 'Content', 'required');
            if($this->form_validation->run() === TRUE){
                $post_data = array(
                'title' => $this->input->post('title'),
                'content' => $this->input->post('content')
                );
                $post_data_en = array(
                    'title' => $this->input->post('title_en'),
                    'content' => $this->input->post('content_en')
                );
                /*if(!empty($_FILES['image_shared']['name'])){
                    $this->check_img($_FILES['image_shared']['name'], $_FILES['image_shared']['size']);
                }
                if(!empty($_FILES['image_shared']['name'])){
                    $image = $this->upload_image('image_shared', $_FILES['image_shared']['name'], 'assets/upload/'.$this->data['controller'], 'assets/upload/'.$this->data['controller'].'/thumb');
                }*/
                if(!empty($_FILES['image_slide']['name'])){
                    $image_slide = $this->upload_file('./assets/upload/'.$this->data['controller'], 'image_slide', 'assets/upload/'.$this->data['controller'].'/thumb');
                    if(count($image_slide) > 0){
                        $this->check_img_slide($_FILES['image_slide']['name'], $_FILES['image_slide']['size']);
                        foreach ($image_slide as $key => $value) {
                            $image_array[] = $value;
                        }
                    } 
                }
                if(isset($image_array)){
                    $post_data['image'] = json_encode($image_array);
                }
                try {
                    $this->post_model->update_post($id,$post_data);
                    $post_en = $this->post_model->get_post_en_by_post_id($id);
                    if(!empty($post_en)){
                        $this->post_model->update_post_en($id,$post_data_en);
                    }else{
                        $post_data_en['post_id'] = $id;
                        $this->post_model->insert_post_en($post_data_en);
                    }
                    if(isset($image_array) && !empty($this->data['Post']['image'])){
                        if(file_exists('assets/upload/'. $this->data['controller'] .'/'.$this->data['Post']['image']))
                        unlink('assets/upload/'. $this->data['controller'] .'/'.$this->data['Post']['image']);
                    }
                    $this->session->set_flashdata('message', 'Post added successfully');
                } catch (Exception $e) {
                    $this->session->set_flashdata('message', 'There was an error inserting Post ' . $e->getMessage());
                }
                redirect('admin/post', 'refresh');
            }else{
                $this->render('admin/post/edit_post_view');
            }
        }
        $this->render('admin/post/edit_post_view');
    }


    protected function check_img($filename, $filesize){
        $map = strripos($filename, '.')+1;
        $fileextension = substr($filename, $map,(strlen($filename)-$map));
        if(!($fileextension == 'jpg' || $fileextension == 'jpeg' || $fileextension == 'png' || $fileextension == 'gif')){
            $this->session->set_flashdata('message_error', MESSAGE_FILE_EXTENSION_ERROR);
            redirect('admin/'.$this->data['controller']);
        }
        if ($filesize > 1228800) {
            $this->session->set_flashdata('message_error', sprintf(MESSAGE_PHOTOS_ERROR, 1200));
            redirect('admin/'.$this->data['controller']);
        }
    }
    protected function check_img_slide($filename, $filesize){
        // print_r($filesize);die;
        $images = array('jpg', 'jpeg', 'png', 'gif');
        foreach ($filename as $key => $value) {
            $map[] = explode('.',$value);
        }
        foreach ($map as $key => $value) {
            $new_map[] = $value[1];
        }
        if(array_diff($new_map, $images) != null){
            $this->session->set_flashdata('message_error', MESSAGE_FILE_EXTENSION_ERROR);
            redirect('admin/'.$this->data['controller']);
        }
        $image_size = array('success');

        foreach ($filesize as $key => $value) {
            if ($value > 1228800) {
                $check_size[] = 'error';
            }else{
                $check_size[] = 'success';
            }
        }
        if (array_diff($check_size, $image_size) != null) {
            $this->session->set_flashdata('message_error', sprintf(MESSAGE_PHOTOS_ERROR, 1200));
            redirect('admin/'.$this->data['controller']);
        }
    }
}
