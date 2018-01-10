<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

    function register()
    {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('userid', '유저아이디', 'required|max_length[20]');
        $this->form_validation->set_rules('username', '유저이름', 'required|max_length[20]');
        $this->form_validation->set_rules('password', '비밀번호', 'required|max_length[30]');

        if($this->form_validation->run() === false)
		{
          $this->load->view('include/header');
		  $this->load->view('login/login');
		  $this->load->view('include/footer');
        }
        else
        {
            if(!function_exists('password_hash'))
				$this->load->helper('password');

	            $hash = password_hash($this->input->post('password'), PASSWORD_BCRYPT); //단뱡향 hash

	            $this->load->model('auth_model');
	            $this->auth_model->add(array(
	                'userid'=>$this->input->post('userid'),
	                'password'=>$hash,
	                'username'=>$this->input->post('username')
	            ));

	            $this->session->set_flashdata('message', '회원가입에 성공했습니다.');
	            redirect('/');
    	}
    }

    function authentication()
    {
        $this->load->model('auth_model');
        $user = $this->auth_model->get(array('userid'=>$this->input->post('userid')));
        if(!function_exists('password_hash'))
            $this->load->helper('password');

        if($this->input->post('userid') == $user->userid && password_verify($this->input->post('password'), $user->password))
        {
			$new_user_data = array(
                   'user_name'  => $user->username,
                   'user_id'  	=> $this->input->post('userid'),
                   'is_login'		=> TRUE
            );
			$this->session->set_userdata($new_user_data);
            redirect("/main");
        }
        else
        {
            echo "불일치";
            redirect('/');
        }
    }

    function logout()
	{
        $this->session->sess_destroy();
        redirect("/login");
    }
}
