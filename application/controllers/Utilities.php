<?php
include "class.phpmailer.php"; 
include "class.smtp.php"; 

defined('BASEPATH') OR exit('No direct script access allowed');

class utilities extends Public_Controller {
    
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('homepage_model');
		$this->load->model('references_model');
		$this->load->model('product_category_model');
		$this->load->helper('form');
        $this->data['lang'] = $this->session->userdata('langAbbreviation');
	}
    
	public function index() {
		$this->data['Product_category'] = ($this->lang->line('detector') == "en")? $this->product_category_model->get_product_category_en_by_product_category_id(3) : $this->product_category_model->get_all_product_category_by_id(3);
		$this->render('utilities');
	}
	

}