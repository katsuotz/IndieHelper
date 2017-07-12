<?php 

	include 'lib.php';

	$id_kategori 	= $session->get_session('id_kategori');
	$nama_kategori 	= $session->get_session('nama_kategori');

	$data_kategori 	= array(
		'id_kategori' => $id_kategori,
		'nama_kategori' => $nama_kategori
		);

	$db->select_tbl('kategori');
	$result = $db->insert($data_kategori);

	$data = array(
		'id_kategori' => $id_kategori
		);
	$db->where_null('id_kategori');
	$db->select_tbl('project');
	$return = $db->update($data);
	header("location:" . baseurl('../datakategori.php'));

?>