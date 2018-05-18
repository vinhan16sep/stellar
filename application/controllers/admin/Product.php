<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('product_model');
        $this->load->library('session');
        $this->data['controller'] = "product";
    }

    public function index() {
        $this->load->library('pagination');
        $this->load->helper('form');
        $config = array();
        $base_url = base_url() . 'admin/product/index';
        $total_rows = 1;
        $total_rows = $this->product_model->count_products();
        $per_page = 10;
        $uri_segment = 4;
        $config = $this->pagination_config($base_url, $total_rows, $per_page, $uri_segment);
        $this->pagination->initialize($config);
        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->data['product'] = $this->product_model->get_all_product_by_paging($per_page, $this->data['page']);

        $this->render('admin/product/list_product_view');
    }

    public function edit($id) {
        $this->load->helper('form');
        $id = intval($id);
        if(empty($id)){
            redirect('admin/product', 'refresh');
        }
        $this->data['product'] = $this->product_model->get_all_product_by_id($id);
        if(empty($this->data['product'])){
            $this->session->set_flashdata('message_error',MESSAGE_ID_ERROR);
            redirect('admin/product','refresh');
        }
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('content', 'Content', 'required');
            if($this->form_validation->run() === TRUE){
                $product_data = array(
                    'title' => $this->input->post('title'),
                    'content' => $this->input->post('content')
                );
                $product_data_en = array(
                    'title' => $this->input->post('title_en'),
                    'content' => $this->input->post('content_en')
                );
                if(!empty($_FILES['image_shared']['name'])){
                    $this->check_img($_FILES['image_shared']['name'], $_FILES['image_shared']['size']);
                    $image = $this->upload_image('image_shared', $_FILES['image_shared']['name'], 'assets/upload/'.$this->data['controller'], 'assets/upload/'.$this->data['controller'].'/thumb');
                }
                if(isset($image)){
                    $product_data['avata'] = $image;
                }
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
                    $product_data['image'] = json_encode($image_array);
                }
                try {
                    $this->product_model->update_product($id,$product_data);
                    $product_en = $this->product_model->get_product_en_by_product_id($id);
                    if(!empty($product_en)){
                        $this->product_model->update_product_en($id,$product_data_en);
                    }else{
                        $product_data_en['product_id'] = $id;
                        $this->product_model->insert_product_en($product_data_en);
                    }
                    if(isset($image) && !empty($this->data['product']['avata'])){
                        if(file_exists('assets/upload/'. $this->data['controller'] .'/'.$this->data['product']['avata']))
                        unlink('assets/upload/'. $this->data['controller'] .'/'.$this->data['product']['avata']);
                    }
                    if(isset($image_array) && !empty($this->data['product']['image'])){
                        if(file_exists('assets/upload/'. $this->data['controller'] .'/'.$this->data['product']['image']))
                        unlink('assets/upload/'. $this->data['controller'] .'/'.$this->data['product']['image']);
                    }
                    $this->session->set_flashdata('message', 'product added successfully');
                } catch (Exception $e) {
                    $this->session->set_flashdata('message', 'There was an error inserting product ' . $e->getMessage());
                }
                redirect('admin/product', 'refresh');
            }else{
                $this->render('admin/product/edit_product_view');
            }
        }
        $this->render('admin/product/edit_product_view');
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
