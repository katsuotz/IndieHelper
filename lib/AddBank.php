<?php 

	include 'lib.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama_bank 		= $input->post('nama_bank');
		$nama_rekening 	= $input->post('nama_rekening');
		$rekening		= $input->post('rekening');

		$data_bank = array(
			'nama_bank' 	=> $nama_bank,
			'nama_rekening' => $nama_rekening,
			'rekening'		=> $rekening
			);

		$db->select_tbl('bank');
		$result = $db->insert($data_bank);
		$id_kategori = $db->return_id();
		echo $result;
	}

?>