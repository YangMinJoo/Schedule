<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->load->view('include/header');
		$this->load->view('login/register');
		$this->load->view('include/footer');
	}

}
