<?php 

	include 'lib.php';

	$id_user = $input->get('id_user');
	$where = array('id_user' => $id_user);
	$db->where($where);
	$db->delete('akun');
	$db->where($where);
	$db->delete('user');
	$result = $db->affected_rows();

	echo $result;

?>