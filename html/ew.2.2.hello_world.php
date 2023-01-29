<?php
define('WP_USE_THEMES', true);

$_GET['p'] = 1;
$_SERVER['SERVER_PROTOCOL'] = 'HTTP/1.1';
$_SERVER['REQUEST_METHOD'] = 'GET';
$_SERVER['REQUEST_URI'] = '/?p=1';
$_SERVER['HTTP_HOST'] = 'localhost:8000';

require_once( 'wp-load.php' );
wp();
require_once( ABSPATH . WPINC . '/template-loader.php' );