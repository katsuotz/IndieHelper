<?php

include 'lib/lib.php';

$assets = array(
	'css' 	=> array('parent.css', 'form.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
	'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'form.js')
	);

$kategori = $db->gettable('kategori');

include 'views/template/header.php';
include 'views/project/form-project.php';
include 'views/template/footer_admin.php';

?>