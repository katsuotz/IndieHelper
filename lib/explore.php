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
		$result =  $db->get_tbl('project');
		// print_r($wh);
		// if(!empty($result)){

		// }
	}
 ?>