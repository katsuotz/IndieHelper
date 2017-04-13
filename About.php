<?php

include 'lib/lib.php';

$assets = array(
	'css' 	=> array('parent.css', 'about.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
	'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'about.js')
	);

include 'views/template/header.php';
include 'views/about/about.php';
include 'views/template/footer_admin.php';

?>