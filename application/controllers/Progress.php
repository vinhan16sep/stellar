<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class progress extends Public_Controller {
    
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('references_model');
		$this->load->helper('form');
        $this->load->model('banners_model');
        $this->load->library('session');
	}
    
	public function index($id = NULL) {

        $this->load->library('session');
        $this->langAbbreviation = $this->session->userdata('langAbbreviation') ? $this->session->userdata('langAbbreviation') : 'vi';

        if($this->langAbbreviation == 'vi'){
            $data = $this->banners_model->get_all_banner_by_paging(4, 0);
            $this->data['Process'] = $data;
            $id = $id ? $id : ($data[0]['id'] ? intval($data[0]['id']) : 0);
        }else{
            $data = $this->banners_model->get_all_banner_lang_en_by_paging(4, 0);
            $this->data['Process'] = $data;
            $id = $id ? $id : ($data[0]['process_id'] ? intval($data[0]['process_id']) : 0);
        }

        $data = $this->banners_model->get_all_image_process($id);
        $this->data['images'] = $data;
        $this->data['id'] = intval($id);

		$this->render('progress');
	}
	

}