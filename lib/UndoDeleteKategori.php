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

	header("location:" . baseurl('../datakategori.php'));

?>