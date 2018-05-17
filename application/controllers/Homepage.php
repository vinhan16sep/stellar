<?php
include "class.phpmailer.php"; 
include "class.smtp.php"; 

defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends Public_Controller {

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
		$this->data['references'] = $this->references_model->fetch_all(); 
		$this->data['location'] = 'homepage';
		$this->data['Post'] = ($this->lang->line('detector') == "en")? $this->post_model->get_post_en_by_post_id(1) : $this->post_model->get_all_post_by_id(1);
		$this->render('homepage_view');
	}

    public function register() {
	    if($_POST){
            $this->references_model->insert_register_home($_POST);
            $this->send_mail($_POST);
        }
        $this->data['references'] = $this->references_model->fetch_all();
        $this->data['location'] = 'homepage';
        redirect('homepage', 'refresh');
    }
	
	public function send_mail($post) {
		$this->load->helper('form');
		$this->load->library('form_validation');
// 		echo '<pre>';
// 		print_r($post);
		$this->form_validation->set_rules('name', 'Your name', 'trim|required');
		$this->form_validation->set_rules('mail', 'Your email', 'trim|required|valid_email');
		$this->form_validation->set_rules('tel', 'Your phone number', 'trim|required|numeric');
		
		if($this->form_validation->run() == FALSE){
			$this->data['references'] = $this->references_model->fetch_all(); 
			$this->data['location'] = 'homepage';
			$this->render('homepage_view');
		}else{
		  //  if($this->input->post('submit') == 'SEND' || $this->input->post('submit') == 'GỬI THƯ'){
		        if($post){
		  //      $mail = new PHPMailer(); // create a new object
    // 			$mail->IsSMTP(); // enable SMTP
    // 			$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    // 			$mail->SMTPAuth = true; // authentication enabled
    // 			$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    // 			$mail->Host = "smtp.gmail.com";
    // 			$mail->Port = 465; // or 587
		  //      $mail->Username = "stellargardenvn@gmail.com"; // your SMTP username or your gmail username
		  //      $mail->Password = "nuwqaqppjfcqsdqh"; // your SMTP password or your gmail password
		  //      $mail->CharSet = 'UTF-8';
		  //      $from = "stellargardenvn@gmail.com"; // Reply to this email
		  //      $to="trang.ttt@kinhdotcigroup.com"; // Recipients email ID
		  //      $name="trang.ttt@kinhdotcigroup.com"; // Recipient's name
		  //      $mail->From = $from;
		  //      $mail->FromName = "From site"; // Name to indicate where the email came from when the recepient received
		  //      $mail->AddAddress($to,$name);
		  //      $mail->AddReplyTo($from);
		  //      $mail->WordWrap = 50; // set word wrap
		  //      $mail->IsHTML(true); // send as HTML
		  //      $mail->Subject = "[stellar] Email from " . $this->input->post('contact_email');
		        
		        $mail = new PHPMailer();
                $mail->IsSMTP(); // set mailer to use SMTP
                $mail->Host = "host06.emailserver.vn"; // specify main and backup server
                $mail->Port = 465; // set the port to use
                $mail->SMTPAuth = true; // turn on SMTP authentication
                $mail->SMTPSecure = 'ssl';
                $mail->Username = "webemail@stellargarden.vn"; // your SMTP username or your gmail username
                $mail->Password = "123456Aa"; // your SMTP password or your gmail password
                $from = "webemail@stellargarden.vn"; // Reply to this email
                $to = "trang.ttt@kinhdotcigroup.com"; // Recipients email ID
                $toCC = "nam.tq@kinhdotcigroup.com"; // Recipients email ID
                $name = "trang.ttt@kinhdotcigroup.com"; // Recipient's name
                $nameCC = "nam.tq@kinhdotcigroup.com"; // Recipient's name
                $mail->From = $from;
                $mail->FromName = "webemail@stellargarden.vn"; // Name to indicate where the email came from when the recepient received
                $mail->AddAddress($to, $name);
                $mail->AddCC($toCC, $nameCC);
                $mail->AddReplyTo($from);
                $mail->CharSet = 'UTF-8';
                $mail->WordWrap = 50; // set word wrap
                $mail->IsHTML(true); // send as HTML
                $mail->Subject = "[stellargarden.vn] Mail from: " . $post['name'] . " (" . $post['mail'] . ")";
                
                $bank_check = (!empty($post['bank_check'])) ? strip_tags($post['bank_check']) : 'Không';
		        $message = '<html><body>';
		        $message .= '<p> you got mail, let\'s check it now:</p>';
		        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
		        $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($post['name']) . "</td></tr>";
		        //$message .= "<tr><td><strong>workplace:</strong> </td><td>" . strip_tags($post['workplace']) . "</td></tr>";
                //$message .= "<tr><td><strong>grade:</strong> </td><td>" . strip_tags($post['grade']) . "</td></tr>";
                $message .= "<tr><td><strong>address:</strong> </td><td>" . strip_tags($post['address']) . "</td></tr>";
                $message .= "<tr><td><strong>tel:</strong> </td><td>" . strip_tags($post['tel']) . "</td></tr>";
                $message .= "<tr><td><strong>mail:</strong> </td><td>" . strip_tags($post['mail']) . "</td></tr>";
                $message .= "<tr><td><strong>acreage:</strong> </td><td>" . strip_tags($post['acreage']) . "</td></tr>";
                $message .= "<tr><td><strong>ads:</strong> </td><td>" . strip_tags($post['ads']) . "</td></tr>";
                $message .= "<tr><td><strong>add question:</strong> </td><td>" . strip_tags($post['add_question']) . "</td></tr>";
                $message .= "<tr><td><strong>bank check:</strong> </td><td>" . $bank_check . "</td></tr>";
		        $message .= "</table>";
		        $message .= "</body></html>";
		
		        $mail->Body = $message; //HTML Body
		        //$mail->SMTPDebug = 2;
		        
		        try{
		            $mail->Send();
		            $this->session->set_flashdata('send_mail_message', 'success');
		            redirect('homepage', 'refresh');
		        }catch(Exception $e){
		            //$this->session->set_flashdata('send_mail_message', '<h1>Oops, Error: "'. $mail->ErrorInfo . '</h1>');
		            $this->session->set_flashdata('send_mail_message', 'fail');
		        }
		    }
		}
	}

}