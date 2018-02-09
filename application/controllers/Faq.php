<?php
include "class.phpmailer.php"; 
include "class.smtp.php"; 

defined('BASEPATH') OR exit('No direct script access allowed');

class faq extends Public_Controller {
    
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('homepage_model');
		$this->load->model('references_model');
		$this->load->helper('form');
        $this->load->model('qa_model');
        $this->load->library('session');
	}
    
	public function index() {

        $this->load->library('session');

        $this->langAbbreviation = $this->session->userdata('langAbbreviation') ? $this->session->userdata('langAbbreviation') : 'vi';
        if($this->langAbbreviation == 'vi'){
            $this->data['Process'] = $this->qa_model->get_all_banner_by_paging(4, 0);
        }else{
            $this->data['Process'] = $this->qa_model->get_all_banner_en_by_paging(4, 0);
        }
		$this->render('faq');
	}
	

}