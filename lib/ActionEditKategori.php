<?php
	
	include 'lib.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$id_kategori = $input->get('id_kategori');
		$nama_kategori = $input->post('nama_kategori');

		$data_kategori = array(
			'nama_kategori' => $nama_kategori
			);

		$where = array('id_kategori' => $id_kategori);

		$db->where($where);
		$db->select_tbl('kategori');
		echo $db->update($data_kategori);
		
	}

?>