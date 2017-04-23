<?php 

	include 'lib.php';

	$id_akun = $input->get('id_akun');
	$where = array('id_akun' => $id_akun);
	$db->where($where);
	$result = $db->delete('akun');
	 $db->affected_rows();

	echo $result;

?>