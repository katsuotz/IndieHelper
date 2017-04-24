<?php 

	include 'lib.php';

	$id_kategori = $input->get('id_kategori');
	$where = array('id_kategori' => $id_kategori);

	$db->where($where);
	$db->get_tbl('kategori');
	$kategori = $db->row_array();

	$session->set_session($kategori);

	$db->where($where);
	$delete = $db->delete('kategori');
	$result = $db->affected_rows();

	if ($result)
		$result = "Berhasil";
	else
		$result = "Gagal";

	echo $result;
	

?>