<?php

include 'lib/lib.php';

$assets = array(
	'css' 	=> array('parent.css', 'main.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
	'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'main.js')
	);

include 'views/template/header.php';
include 'views/template/navbar.php';
include 'views/project/detail.php';
include 'views/template/footer.php';

?>