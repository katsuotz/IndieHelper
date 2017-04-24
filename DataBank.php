<?php

include 'lib/lib.php';

$assets = array(
	'css' 	=> array('parent.css', 'admin.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
	'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'admin.js', 'admin-bank.js')
	);

$db->get_tbl('bank');
$bank = $db->result();

include 'views/template/header.php';
include 'views/template/navbar_admin.php';
include 'views/admin/data_bank.php';
include 'views/template/footer_admin.php';

?>