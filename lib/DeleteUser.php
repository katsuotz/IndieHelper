<?php 

	include 'lib.php';

	$id_akun = $input->get('id_akun');
	$where = array('id_akun' => $id_akun);

	$db->where($where);
	$db->get_tbl('akun');
	$akun = $db->row_array();

	$db->where($where);
	$db->get_tbl('user');
	$user = $db->row_array();

	$session->set_session($akun);
	$session->set_session($user);

	$db->where($where);
	$db->delete('akun');
	$result = $db->affected_rows();

	if ($result)
		$result = "Berhasil";
	else
		$result = "Gagal";

	$result = json_encode(
		array(
			'msg' => $result, 
			'tbl' => 'user'
			)
		);

	echo $result;

?>