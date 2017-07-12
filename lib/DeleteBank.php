<?php 

	include 'lib.php';

	$id_bank = $input->get('id_bank');
	$where = array('id_bank' => $id_bank);

	$db->where($where);
	$delete = $db->delete('bank');
	$result = $db->affected_rows();

	if ($result)
		$result = "Berhasil";
	else
		$result = "Gagal";

	$result = json_encode(
		array(
			'msg' => $result, 
			'tbl' => 'bank'
			)
		);

	echo $result;
	
?>