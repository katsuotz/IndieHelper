<?php 

	include 'lib.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$id_kategori = $input->get('id_kategori');
		$nama_kategori = $session->get_session('nama_kategori');

		$data_kategori = array('id_kategori' => $id_kategori, 'nama_kategori' => $nama_kategori);

		$db->select_tbl('kategori');
		$result = $db->insert($data_kategori);
		$id_kategori = $db->return_id();
		echo $result;
	}

?>