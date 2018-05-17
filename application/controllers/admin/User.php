<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('ion_auth');
    }

    public function index() {
        
    }


    public function change_password(){
        $this->load->helper('form');
        $this->load->library('form_validation');
        if (!$this->ion_auth->logged_in()){
            redirect('admin/user/login', 'refresh');
        }
        $user = $this->ion_auth->user()->row();
        $this->data['user_id'] = $user->id;

        $this->form_validation->set_rules('old_password','Mật khẩu cũ','trim|required',
            array(
                'required' => '%s không được trống.'
            )
        );

        $this->form_validation->set_rules('new_password','Mật khẩu mới','trim|min_length[8]|max_length[20]|required',
            array(
                'required' => '%s không được trống.',
                'min_length' => '%s phải nhiều hơn %s ký tự',
                'max_length' => '%s phải ít hơn %s ký tự',
            )
        );
        $this->form_validation->set_rules('new_confirm','Xác nhận mật khẩu mới','trim|matches[new_password]|required',
            array(
                'required' => '%s không được trống.',
                'matches' => '%s không giống với %s',
            )
        );

        if ($this->form_validation->run() == FALSE) {
            $this->render('admin/user/change_password_view', 'admin_master');
        } else {
            if ($this->input->post()) {
                $identity = $this->session->userdata('identity');
                $change = $this->ion_auth->change_password($identity, $this->input->post('old_password'), $this->input->post('new_password'));
                if ($change){
                //if the password was successfully changed
                    $this->logout();
                    $this->session->set_flashdata('auth_message', 'Đổi mật khẩu thành công. Vui lòng đăng nhập lại!');
                    redirect('admin/user/login', 'refresh');
                }else{
                    $this->session->set_flashdata('auth_message', 'Mật khẩu không đúng vui lòng kiểm tra lại');
                    redirect('admin/user/change_password', 'refresh');
                }
            }
        }


        
    }
    public function register(){
        if($this->ion_auth->is_admin()===FALSE){
            redirect('admin/dashboard', 'refresh');
        }
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('first_name', 'Họ','trim|required',
            array('required' => '%s không được trống.')
        );
        $this->form_validation->set_rules('last_name', 'Tên','trim|required',
            array('required' => '%s không được trống.')
        );
        $this->form_validation->set_rules('username','Tên Tài Khoản','trim|required',
            array('required' => '%s không được trống.')
        );
        $this->form_validation->set_rules('email','Email','trim|valid_email|required|is_unique[users.email]',
            array(
                'required' => '%s không được trống.',
                'valid_email' => 'Định dạng %s không đúng',
                'is_unique' => '%s đã tồn tại'
            )
        );
        $this->form_validation->set_rules('password','Mật Khẩu','trim|min_length[8]|max_length[20]|required',
            array(
                'required' => '%s không được trống.',
                'min_length' => '%s phải nhiều hơn %s ký tự',
                'max_length' => '%s phải ít hơn %s ký tự',
            )
        );
        $this->form_validation->set_rules('confirm_password','Xác Nhận Mật Khẩu','trim|matches[password]|required',
            array(
                'required' => '%s không được trống.',
                'matches' => '%s không giống với %s',
            )
        );

        if($this->form_validation->run()===FALSE){
            $this->load->helper('form');
            $this->render('admin/user/register_view', 'admin_master');
        }
        else{
            $first_name = $this->input->post('first_name');
            $last_name = $this->input->post('last_name');
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $additional_data = array(
                'first_name' => $first_name,
                'last_name' => $last_name
            );
            $group = array('2');
            $this->load->library('ion_auth');
            if($this->ion_auth->register($username, $password, $email, $additional_data, $group)){
                $this->session->set_flashdata('auth_message', 'Đăng ký tài khoản thành công!.');
                redirect('admin/user/register', 'refresh');
            }
            else{
                $this->session->set_flashdata('auth_message', $this->ion_auth->errors());
                redirect('admin/user/register', 'refresh');
            }
        }

        
    }
    public function login() {
        if ($this->ion_auth->logged_in()) {
            redirect('admin', 'refresh');
        }
        $this->data['page_title'] = 'Login';
        if ($this->input->post()) {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('identity', 'Identity', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('remember', 'Remember me', 'integer');
            if ($this->form_validation->run() === TRUE) {
                $remember = (bool) $this->input->post('remember');
                if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)) {
                    redirect('admin', 'refresh');
                } else {
                    $this->session->set_flashdata('message', $this->ion_auth->errors());
                    redirect('admin/user/login', 'refresh');
                }
            }
        }
        $this->load->helper('form');
        $this->render('admin/login_view', 'admin_master');
    }

    public function logout() {
        $this->ion_auth->logout();
        redirect('admin/user/login', 'refresh');
    }

}
