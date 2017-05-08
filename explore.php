<?php 
	include 'lib/lib.php';
	// error_reporting(0);
	$foto =array();

	$assets = array(
		'css' 	=> array('parent.css', 'explore.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css','navbar.css'),
		'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'explore.js','navbar.js')
	);

	if(isset($_GET['ktg'])){
		$ktg = $input->get('ktg');
		$where = array('id_kategori' => $ktg);
		$db->logic_where('OR');
		$db->where_explore($where);
		$db->get_tbl('project');
		$data = $db->result();
	}
	if(isset($_GET['search'])){
		$search		= $input->get('search');
		$where		= array('nama' => $search);
		$db->logic_where('OR');
		$db->where_explore($where);
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
