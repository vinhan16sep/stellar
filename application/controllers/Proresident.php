<?php
include "class.phpmailer.php"; 
include "class.smtp.php"; 

defined('BASEPATH') OR exit('No direct script access allowed');

class proresident extends Public_Controller {
    
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('homepage_model');
		$this->load->model('references_model');
		$this->load->model('post_model');
		$this->load->helper('form');
        $this->data['lang'] = $this->session->userdata('langAbbreviation');
	}
    
	public function index() {
		$this->data['Post'] = ($this->lang->line('detector') == "en")? $this->post_model->get_post_en_by_post_id(4) : $this->post_model->get_all_post_by_id(4);
		$this->render('proresident');
	}
	

}