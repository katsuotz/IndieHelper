<?php 
	include 'lib.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$data = $input->post('search');
		$wh = array();


		foreach ($data as $key => $value) {
			array_push($wh,$value);
		}
		  
		// print_r($wh);
		$db->logic_where('OR');
		$db->where_explore($wh);
		$db->get_tbl('project');
		$result = $db->result();
		echo json_encode($result);
		// print_r($result);
		// if(!empty($result)){

		// }
	}
 ?>