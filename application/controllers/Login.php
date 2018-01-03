<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	private $menu = "login";
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['menu'] = $this->menu;
		$this->load->view('include/header', $data);
		$this->load->view('login/login');
		$this->load->view('include/footer');
	}
	function register()
	{
		$data['menu'] = $this->menu;
		$this->load->view('include/header', $data);
		$this->load->view('login/register');
		$this->load->view('include/footer');
	}

}
