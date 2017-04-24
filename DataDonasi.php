<?php

include 'lib/lib.php';

$assets = array(
	'css' 	=> array('parent.css', 'admin.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
	'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'admin.js')
	);

$db->join('bank', '', 'donasi.id_bank', 'bank.id_bank');
$db->join('project', '', 'donasi.id_project', 'project.id_project');
$db->get_tbl('donasi');
$donasi = $db->result();

include 'views/template/header.php';
include 'views/template/navbar_admin.php';
include 'views/admin/data_donasi.php';
include 'views/template/footer_admin.php';

?>