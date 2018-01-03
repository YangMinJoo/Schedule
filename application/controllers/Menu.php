<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller
{
  private $menu = "menu";
	function __construct()
	{
		parent::__construct();
	}

  function main()
  {
    $this -> menu = "main";
    $data['menu'] = $this->menu;
		$this->load->view('include/header', $data);
		$this->load->view('menu/main');
		$this->load->view('include/footer');
  }

  function timeline()
  {
    $this -> menu = "timeline";
    $data['menu'] = $this->menu;
		$this->load->view('include/header', $data);
		$this->load->view('menu/timeline');
		$this->load->view('include/footer');
  }

  function demov1()
  {
    $this -> menu = "demo";
    $data['menu'] = $this-> menu;
		$this->load->view('include/header', $data);
		$this->load->view('menu/commingsoon');
		$this->load->view('include/footer');
  }

  function commingsoon()
  {
    $this -> menu = "demo";
    $data['menu'] = $this-> menu;
    $this->load->view('include/header', $data);
		$this->load->view('menu/commingsoon');
		$this->load->view('include/footer');
  }
}
