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
<<<<<<< HEAD
	  $this->load->view('include/header', $data);
	  $this->load->view('menu/main');
	  $this->load->view('include/footer');
=======
	$this->load->view('include/header', $data);
	$this->load->view('menu/main');
	$this->load->view('include/footer');
>>>>>>> 67588ebb4d71cfb457358daeaab3889a730b75af
  }

  function timeline()
  {
    $this -> menu = "timeline";
    $data['menu'] = $this->menu;
<<<<<<< HEAD
	  $this->load->view('include/header', $data);
	  $this->load->view('menu/timeline');
	  $this->load->view('include/footer');
=======
	$this->load->view('include/header', $data);
	$this->load->view('menu/timeline');
	$this->load->view('include/footer');
>>>>>>> 67588ebb4d71cfb457358daeaab3889a730b75af
  }

  function demov1()
  {
    $this -> menu = "demo";
    $data['menu'] = $this-> menu;
<<<<<<< HEAD
	  $this->load->view('include/header', $data);
	  $this->load->view('menu/commingsoon');
	  $this->load->view('include/footer');
=======
	$this->load->view('include/header', $data);
	$this->load->view('menu/commingsoon');
	$this->load->view('include/footer');
>>>>>>> 67588ebb4d71cfb457358daeaab3889a730b75af
  }

  function commingsoon()
  {
    $this -> menu = "demo";
    $data['menu'] = $this-> menu;
    $this->load->view('include/header', $data);
<<<<<<< HEAD
	  $this->load->view('menu/commingsoon');
	  $this->load->view('include/footer');
  }

  function sitemanual()
  {
    $this -> menu = "sitemanual";
    $data['menu'] = $this -> menu;
    $this->load->view('include/header', $data);
    $this->load->view('menu/sitemanual');
    $this->load->view('include/footer');
  }

  function contact()
  {
    $this -> menu = "contact";
    $data['menu'] = $this -> menu;
    $this->load->view('include/header', $data);
    $this->load->view('menu/contact');
    $this->load->view('include/footer');
=======
	$this->load->view('menu/commingsoon');
	$this->load->view('include/footer');
>>>>>>> 67588ebb4d71cfb457358daeaab3889a730b75af
  }
}
