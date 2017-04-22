<?php

include 'lib/lib.php';

$assets = array(
	'css' 	=> array('parent.css', 'admin.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
	'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'admin.js', 'form-admin.js')
	);

$where = array('id_project' => $input->get('id_project'));

$db->where($where);
$db->get_tbl('project');
$project = $db->row_result();
$db->get_tbl('kategori');
$kategori = $db->result();

$img_project = json_decode($project->foto);

include 'views/template/header.php';
include 'views/template/navbar_admin.php';
include 'views/admin/edit_project.php';
include 'views/template/footer_admin.php';

?>