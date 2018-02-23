<?php
include "class.phpmailer.php"; 
include "class.smtp.php"; 

defined('BASEPATH') OR exit('No direct script access allowed');

class promall extends Public_Controller {
    
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('homepage_model');
		$this->load->model('references_model');
		$this->load->helper('form');
        $this->data['lang'] = $this->session->userdata('langAbbreviation');
	}
    
	public function index() {
		$this->render('promall');
	}
	

}