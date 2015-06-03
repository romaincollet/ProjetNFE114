<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/hooks.html
|
*/

$hook['display_override'][] = array('class'=>'Layout',
                                    'function'=>'show_layout',
                                    'filename'=>'Layout.php',
                                    'filepath'=>'hooks');

$hook['post_controller_constructor'][] = array('class'=>'Auth',
                                    'function'=>'authenticate',
                                    'filename'=>'AuthTest.php',
                                    'filepath'=>'hooks');

