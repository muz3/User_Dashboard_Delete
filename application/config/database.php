<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$active_group = 'default';
$active_record = TRUE;

if(ENVIRONMENT == 'production')
{
	$db['default']['hostname'] = 'localhost';
	$db['default']['username'] = 'codingdojo';
	$db['default']['password'] = 'codingd0jo';
	$db['default']['database'] = 'user_dashboard';
}
else
{
	$db['default']['hostname'] = 'localhost';
	$db['default']['username'] = 'codingdojo';
	$db['default']['password'] = 'codingd0jo';
	$db['default']['database'] = 'user_dashboard';
}

$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = FALSE;
$db['default']['db_debug'] = FALSE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

//end of database.php
