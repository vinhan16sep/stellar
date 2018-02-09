<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('aboutus_model');
        $this->load->library('session');
    }

    public function index() {
        $this->load->library('pagination');
        $config = array();
        $base_url = base_url() . 'admin/articles/index';
        $total_rows = $this->aboutus_model->cout_aboutus();
        $per_page = 10;
        $uri_segment = 4;
        foreach ($this->pagination_config($base_url, $total_rows, $per_page, $uri_segment) as $key => $value) {
            $config[$key] = $value;
        }
        $this->pagination->initialize($config);

        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->data['aboutus'] = $this->aboutus_model->get_all_aboutus_have_paginator($per_page, $this->data['page']);

        $this->render('admin/aboutus/list_aboutus_view');
    }

    public function create() {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('aboutus_title', 'About us name', 'trim|required');
        
        $this->data['over_aboutus'] = 0;
        
        $aboutus_selected = $this->aboutus_model->count_selected_aboutus();

        if ($this->form_validation->run() == FALSE) {
            $this->render('admin/aboutus/create_aboutus_view');
        } elseif($this->input->post('aboutus_is_select') == 1 && $aboutus_selected >= 1){
            $this->data['over_aboutus'] = 1;
            $this->render('admin/aboutus/create_aboutus_view');
        }else {
            if ($this->input->post()) {
                $aboutus_data = array(
                    'aboutus_title' => $this->input->post('aboutus_title'),
                    'aboutus_content' => $this->input->post('aboutus_content'),
                    'aboutus_is_select' => $this->input->post('aboutus_is_select')
                );
                
                try{
                    $this->aboutus_model->insert_aboutus($aboutus_data);
                    $this->session->set_flashdata('message', 'About us added successfully');
                }catch(Exception $e){
                    $this->session->set_flashdata('message', 'There was an error inserting about us');
                }

                redirect('admin/aboutus', 'refresh');
            }
        }
    }

    public function edit($id = null) {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('aboutus_title', 'About us name', 'trim|required');
        
        $this->data['aboutus'] = $this->aboutus_model->get_aboutus_by_id($id);

        if (!$this->data['aboutus']) {
            redirect('admin/aboutus', 'refresh');
        }
        
        $this->data['over_aboutus'] = 0;
        $aboutus_selected = $this->aboutus_model->count_selected_aboutus();

        if ($this->form_validation->run() == FALSE) {
            $this->render('admin/aboutus/edit_aboutus_view');
        } elseif($this->input->post('aboutus_is_select') == 1 && $aboutus_selected >= 1 && $this->data['aboutus']['aboutus_is_select'] == 0){
            $this->data['over_aboutus'] = 1;
            $this->session->set_flashdata('message', 'You have selected another post to display in about us page');
            $this->render('admin/aboutus/edit_aboutus_view');
        }else {
            if ($this->input->post()) {
                $aboutus_data = array(
                    'aboutus_title' => $this->input->post('aboutus_title'),
                    'aboutus_content' => $this->input->post('aboutus_content'),
                    'aboutus_is_select' => $this->input->post('aboutus_is_select')
                );

                try{
                    $this->aboutus_model->update_aboutus($id, $aboutus_data);
                    $this->session->set_flashdata('message', 'About us updated successfully');
                }catch(Exception $e){
                    $this->session->set_flashdata('message', 'There was an error update about us');
                }

                redirect('admin/aboutus', 'refresh');
            }
        }
    }
    
    public function delete($id = NULL) {
        $aboutus = $this->aboutus_model->get_aboutus_by_id($id);

        if (!$aboutus) {
            redirect('admin/aboutus', 'refresh');
        }

        $set_delete = array('aboutus_is_delete' => 1);
        try {
            $this->aboutus_model->delete_aboutus($id, $set_delete);
            $this->session->set_flashdata('message', 'Item has deleted successful.');
        } catch (Exception $e) {
            $this->session->set_flashdata('message', 'Have error while delete item: ' . $e->getMessage());
        }
        
        redirect('admin/aboutus', 'refresh');
    }

}
