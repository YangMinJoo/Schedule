<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller
{
  private $menu = "schedule";
	function __construct()
	{
		parent::__construct();
	}

  function schedule_list()
  {
      $this->load->helper('file');
	  
      $data['menu'] = $this->menu;
      $this->load->view('include/header', $data);
      $data['ics'] = $ics;
      $this->load->view('schedule/list', $data);
      $this->load->view('include/footer');
  }
}
