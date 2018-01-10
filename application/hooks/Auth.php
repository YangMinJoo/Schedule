<?php
class Auth {
	function check_login() {
		$CI =& get_instance();
	  	isset($CI->session) OR $CI->load->library('session'); //session 변수가 할당되었는지 체크,
	  	$CI->session->has_userdata('user_name') OR $CI->session->set_userdata('user_name', 'guest');
	  	$username = $CI->session->userdata('user_name');

	    if(!(current_url() === "http://schedule.cherrypie.co.kr/authentication") && !(current_url() === "http://schedule.cherrypie.co.kr") && !(current_url() === "http://schedule.cherrypie.co.kr/"))
	    { //인증창, 로그인 창은 제외해줌. 이창을 제외한 모든 페이지는 로그인 검사를 거쳐야함.
		   if($username === 'guest')
				redirect('/');
	    }
	}
}
?>
