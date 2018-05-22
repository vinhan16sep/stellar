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
		$this->form_validation->set_rules('name', 'Your name', 'trim|required');
		$this->form_validation->set_rules('mail', 'Your email', 'trim|required|valid_email');
		$this->form_validation->set_rules('tel', 'Your phone number', 'trim|required|numeric');
		
		if($this->form_validation->run() == FALSE){
			$this->data['references'] = $this->references_model->fetch_all(); 
			$this->data['location'] = 'homepage';
			$this->render('homepage_view');
		}else{
	        if($post){
		        $mail = new PHPMailer();
	            $mail->IsSMTP(); // set mailer to use SMTP
	            $mail->Host = "smtp.gmail.com"; // specify main and backup server
	            $mail->Port = 465; // set the port to use
	            $mail->SMTPAuth = true; // turn on SMTP authentication
	            $mail->SMTPSecure = 'ssl';
	            $mail->Username = "web.mail.stellargarden@gmail.com"; // your SMTP username or your gmail username
	            $mail->Password = "xmlvanvxcmnvgick"; // your SMTP password or your gmail password
	            $from = "web.mail.stellargarden@gmail.com"; // Reply to this email
	            $to = "trang.ttt@kinhdotcigroup.com"; // Recipients email ID
	            $toCC = "nam.tq@kinhdotcigroup.com"; // Recipients email ID
	            $name = 'trang.ttt@kinhdotcigroup.com'; // Recipient's name
	            $nameCC = "nam.tq@kinhdotcigroup.com"; // Recipient's name
	            $mail->From = $from;
	            $mail->FromName = $name; // Name to indicate where the email came from when the recepient received
	            $mail->AddAddress($to, $name);
	            $mail->AddCC($toCC, $nameCC);
	            $mail->CharSet = 'UTF-8';
	            $mail->WordWrap = 50; // set word wrap
	            $mail->IsHTML(true); // send as HTML
	            
	            $mail->Subject = "[stellargarden.vn] Mail from: " . $post['name'] . " (" . $post['mail'] . ")";
	            
	            $bank_check = (!empty($post['bank_check'])) ? strip_tags($post['bank_check']) : 'Không';
		        $message = '<html><body>';
		        $message .= '<p> you got mail, let\'s check it now:</p>';
		        $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
		        $message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($post['name']) . "</td></tr>";
	            $message .= "<tr><td><strong>address:</strong> </td><td>" . strip_tags($post['address']) . "</td></tr>";
	            $message .= "<tr><td><strong>tel:</strong> </td><td>" . strip_tags($post['tel']) . "</td></tr>";
	            $message .= "<tr><td><strong>mail:</strong> </td><td>" . strip_tags($post['mail']) . "</td></tr>";
	            $message .= "<tr><td><strong>acreage:</strong> </td><td>" . (isset($post['acreage'])? strip_tags($post['acreage']) : '') . "</td></tr>";
	            $message .= "<tr><td><strong>ads:</strong> </td><td>" . (isset($post['ads'])? strip_tags($post['ads']) : '') . "</td></tr>";
	            $message .= "<tr><td><strong>add question:</strong> </td><td>" . strip_tags($post['add_question']) . "</td></tr>";
	            $message .= "<tr><td><strong>bank check:</strong> </td><td>" . $bank_check . "</td></tr>";
		        $message .= "</table>";
		        $message .= "</body></html>";
		
		        $mail->Body = $message; //HTML Body
		        
		        try{
		            $mail->Send();
		            $this->session->set_flashdata('send_mail_message', 'success');
		            redirect('homepage', 'refresh');
		        }catch(Exception $e){
		            $this->session->set_flashdata('send_mail_message', 'fail');
		        }
		    }
		}
	}

}