<?php

include 'lib/lib.php';
error_reporting(0);
$assets = array(
	'css' 	=> array('parent.css', 'home.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
	'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'home.js')
	);

include 'views/template/header.php';
// include 'views/template/nanavbaran.php';
include 'views/home/home.php';
include 'views/template/footer_admin.php';

?>