<?php

include 'lib/lib.php';
checkLogin();
$assets = array(
	'css' 	=> array('parent.css', 'admin.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
	'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'admin.js')
	);

$where = array('id_bank' => $input->get('id_bank'));

$db->where($where);
$db->get_tbl('bank');
$bank = $db->row_result();

include 'views/template/header.php';
include 'views/template/navbar_admin.php';
include 'views/admin/edit_bank.php';
include 'views/template/footer_admin.php';

?>