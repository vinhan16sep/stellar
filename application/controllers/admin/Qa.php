<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class qa extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('qa_model');
        $this->load->library('session');
    }

    public function index() {
        $this->load->library('pagination');
        $this->load->helper('form');
        if ($this->input->post('checkbox')) {

            $ids = array_keys($this->input->post('checkbox'));
            foreach ($ids as $id){
                $banner = $this->qa_model->get_banner_by_id($id);

                if (!$banner) {
                    redirect('admin/qa', 'refresh');
                }

                $set_delete = array('is_delete' => 1);
                try {
                    $this->qa_model->delete_banner($id, $set_delete);
                    $this->qa_model->delete_banner_en($id, $set_delete);
                    $this->session->set_flashdata('message', 'Item has deleted successful.');
                } catch (Exception $e) {
                    $this->session->set_flashdata('message', 'Have error while delete item: ' . $e->getMessage());
                }
                redirect('admin/qa', 'refresh');
            }
        }
        $config = array();
        $base_url = base_url() . 'admin/qa/index';
        $total_rows = 1;
        $total_rows = $this->qa_model->count_banners();
        $per_page = 10;
        $uri_segment = 4;
        foreach ($this->pagination_config($base_url, $total_rows, $per_page, $uri_segment) as $key => $value) {
            $config[$key] = $value;
        }
        $this->pagination->initialize($config);

        $this->data['page_links'] = $this->pagination->create_links();
        $this->data['page'] = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
        $this->data['Process'] = $this->qa_model->get_all_qa_by_paging($per_page, $this->data['page']);

        $this->render('admin/qa/list_banners_view');
    }

    public function create() {
        $this->load->helper('form');

        if ($this->input->post()) {
        $banner_data = array(
            'title' => $this->input->post('title'),
            'content' => $this->input->post('description')
        );

            $banner_data_en = array(
                'title' => $this->input->post('title_en'),
                'content' => $this->input->post('description_en')
            );

        try {
            $this->qa_model->insert_banner($banner_data);
            $qa_id = $this->qa_model->get_last_id();
            $qa_id = $qa_id ? intval($qa_id['id']) : 0;
            if($qa_id){
                $banner_data_en['qa_id'] = $qa_id;
                $this->qa_model->insert_banner_en($banner_data_en);
            }
            $this->session->set_flashdata('message', 'Banner added successfully');
        } catch (Exception $e) {
            $this->session->set_flashdata('message', 'There was an error inserting banner ' . $e->getMessage());
        }

        redirect('admin/qa', 'refresh');
        }
        $this->render('admin/qa/create_banner_view');
    }

    public function edit($id) {
        $this->load->helper('form');
        $id = intval($id);
        if(empty($id)){
            redirect('admin/qa', 'refresh');
        }
        $this->data['Process'] = $this->qa_model->get_all_qa_by_id($id);

        if ($this->input->post()) {
            $banner_data = array(
                'title' => $this->input->post('title'),
                'content' => $this->input->post('description')
            );
            $banner_data_en = array(
                'title' => $this->input->post('title_en'),
                'content' => $this->input->post('description_en')
            );

            try {
                $this->qa_model->update_qa($id,$banner_data);

                $qa_en = $this->qa_model->get_qa_en_by_qa_id($id);
                if(!empty($qa_en)){
                    $this->qa_model->update_qa_en($id,$banner_data_en);
                }else{
                    $banner_data_en['qa_id'] = $id;
                    $this->qa_model->insert_qa_en($banner_data_en);
                }
                $this->session->set_flashdata('message', 'QA added successfully');
            } catch (Exception $e) {
                $this->session->set_flashdata('message', 'There was an error inserting QA ' . $e->getMessage());
            }

            redirect('admin/qa', 'refresh');
        }
        $this->render('admin/qa/edit_banner_view');
    }


}
