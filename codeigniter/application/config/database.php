<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/* LOAD ENVIROMENT VARS */
$dotenv = Dotenv\Dotenv::createImmutable(FCPATH);
$dotenv->load();
/* LOAD ENVIROMENT VARS END */

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => $_ENV['DB_HOST'],
	'username' => $_ENV['DB_USER'],
	'password' => $_ENV['DB_PASSWORD'],
	'database' => $_ENV['DB_NAME'],
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
