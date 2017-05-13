<?php

include 'lib/lib.php';
checkLogin();
$assets = array(
	'css' 	=> array('parent.css', 'admin.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
	'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'admin.js')
	);

$db->select(array('akun.id_akun', 'foto', 'username', 'nama', 'jk', 'alamat'));
$db->join('user', '', 'akun.id_akun', 'user.id_akun');
$db->get_tbl('akun');
$user = $db->result();


$db->select(array('COUNT(id_project) AS hitung'));
$db->get_tbl('project');
$project = $db->row_result();

$db->select(array('COUNT(id_user) AS hitung'));
$db->get_tbl('user');
$user = $db->row_result();

$db->select(array('COUNT(id_donasi) AS hitung'));
$db->where(array('status'=>'Sudah'));
$db->get_tbl('donasi');
$donasi = $db->row_result();

include 'views/template/header.php';
include 'views/template/navbar_admin.php';
include 'views/admin/admin.php';
include 'views/template/footer_admin.php';

?>