<?php

include 'lib/lib.php';
checkLogin();

$foto =array();
$fotohref = array('#one!','#two!','#three!','#four!','#five!');

$assets = array(
	'css' 	=> array('parent.css', 'profile.css', 'materialize.min.css', 'navbar.css','material-icon.css', 'font-awesome.min.css'),
	'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'profile.js','navbar.js')
	);
$where	= array('user.id_user' => $session->get_session('ID'));

$db->select(array('user.nama AS nama_user', 'user.foto AS foto_user','user.alamat','user.deskripsi AS desk_user','user.email','project.id_project','project.nama AS nama_project','project.foto AS foto_project','project.target','project.income'));
$db->where($where);
$db->join('project','','user.id_user','project.id_user');
$db->get_tbl('user');
$data = $db->row_result();

$db->select(array('project.nama','donasi.jumlah','donasi.feedback','donasi.status'));
$db->where(array('user.id_user' => $session->get_session('ID')));
$db->join('donasi','','user.id_user','donasi.id_user');
$db->join('project','','donasi.id_project','project.id_project');
$db->get_tbl('user');
$donasi = $db->result();

$db->where($where);
$db->join('user','','project.id_user','user.id_user');
$db->select(array('project.id_project', 'project.nama AS nama_project', 'project.foto', 'target','income', 'user.nama', 'alamat','user.foto AS foto_user'));
$db->get_tbl('project');
$project = $db->result();
foreach ($project as $key => $value) {
	array_push($foto, json_decode($value->foto));
}

include 'views/template/header.php';
include 'views/template/nanavbaran.php';
include 'views/user/profile.php';
include 'views/template/footer.php';

?>