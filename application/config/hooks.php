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

$hook['post_controller_constructor'][] = array(
  'class'		=> 'Auth',
  'function'	=> 'check_Login',
  'filename'	=> 'Auth.php',
  'filepath'	=> 'hooks'
);
