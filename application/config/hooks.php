<?php

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['post_controller_constructor'][] = function()
{
  $CI =& get_instance();
	isset($CI->session) OR $CI->load->library('session');
	$CI->load->helper('url');
	$CI->session->has_userdata('user_name') OR $CI->session->set_userdata('user_name', 'guest');
	$username = $CI->session->userdata('user_name');

  //if(!(current_url() === "http://www.cherrypie.co.kr/login") && !(current_url() === "http://www.cherrypie.co.kr/") && !(current_url() === "http://www.cherrypie.co.kr/login") && !(current_url() === "http://www.cherrypie.co.kr/auth/authentication"))
  if(!(strpos(current_url(), "authentication")) && !(strpos(current_url(), "login")) && !(current_url() === "http://www.cherrypie.co.kr") && !(current_url() === "http://www.cherrypie.co.kr/"))
  { //로그인 주소창은 제외해줌..ㅠㅠ
	   if($username==='guest' && !(isset($CI->allowed_method) && in_array($CI->router->method, $CI->allowed_method)))
       redirect("/");
  }
};
