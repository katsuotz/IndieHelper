<?php
	
	include 'lib.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$id = $input->get('id_bank');
		$nama_bank = $input->post('nama_bank');
		$nama_rekening = $input->post('nama_rekening');
		$rekening = $input->post('rekening');

		$data = array(
			'nama_bank' 	=> $nama_bank,
			'nama_rekening'	=> $nama_rekening,
			'rekening'		=> $rekening
			);

		$where = array('id_bank' => $id);

		$db->where($where);
		$db->select_tbl('bank');
		if($db->update($data) == 'Berhasil'){
			location('../databank.php');
		}
	}

?>