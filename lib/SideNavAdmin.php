<?php 
	include 'lib.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$sidenav = $input->post('sidenav');
		$session->set_session(array('sidenav' => $sidenav));
		echo $session->get_session('sidenav');
	}

?>