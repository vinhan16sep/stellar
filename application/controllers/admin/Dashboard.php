<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('news_model');
        $this->load->model('articles_model');
        $this->load->model('banners_model');
    }

    public function index() {        
        $this->render('admin/dashboard_view');
    }

}
