<?php 

	include 'lib.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama_kategori = $input->post('nama_kategori');

		$data_kategori = array('nama_kategori' => $nama_kategori);

		$db->select_tbl('kategori');
		$result = $db->insert($data_kategori);
		$id_kategori = $db->return_id();
		echo $result;
	}

?>