<?php 

	include 'lib.php';

	$id_kategori = $input->get('id_kategori');
	$where = array('id_kategori' => $id_kategori);
	$db->where($where);
	$delete = $db->delete('kategori');
	$result = $db->affected_rows();

	echo $delete."<br>".$result;
	

?>