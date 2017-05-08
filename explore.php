<?php 
	include 'lib/lib.php';
	// error_reporting(0);
	$foto =array();

	$assets = array(
		'css' 	=> array('parent.css', 'explore.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
		'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'explore.js')
	);

	if(isset($_GET['ktg'])){
		$ktg = $input->get('ktg');
		$where = array('id_kategori' => $ktg);
		$db->where($where);
		$db->get_tbl('project');
		$data = $db->result();
	}
	else{
		$db->get_tbl('project');
		$data = $db->result();
	}
	foreach ($data as $key => $value) {
		array_push($foto, json_decode($value->foto));
	}


	include 'views/template/header.php';
	include 'views/template/nanavbaran.php';
	include 'views/explore/explore.php';
	include 'views/template/footer_admin.php';
?>
