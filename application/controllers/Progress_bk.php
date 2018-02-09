<?php
include "class.phpmailer.php"; 
include "class.smtp.php"; 

defined('BASEPATH') OR exit('No direct script access allowed');

class progress extends Public_Controller {
    
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('references_model');
		$this->load->helper('form');
        $this->load->model('banners_model');
        $this->load->model('process_en_model');
        $this->load->library('session');
	}
    
	public function index() {
        $this->load->library('session');
        $this->langAbbreviation = $this->session->userdata('langAbbreviation') ? $this->session->userdata('langAbbreviation') : 'vi';
        
        if($this->langAbbreviation == 'vi'){
            $this->data['Process'] = $this->banners_model->get_all_banner_by_paging(4, 0);
        }else{
            $this->data['Process'] = $this->process_en_model->get_all_banner_by_paging(4, 0);
        }


		$this->render('progress');
	}
	

}