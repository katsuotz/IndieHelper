<?php 
	include 'lib.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$data = $input->post('search');

		$where = array(
			'' => $data,
			);
		$db->form('');
		$db->logic_where('OR');
		$db->where($where);

		$result = $db->gettable();

		if(!empty($result)){

		}
	}
 ?>