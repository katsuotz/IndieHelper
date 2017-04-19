<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Indie Helper</title>
<?php foreach ($assets['css'] as $key => $value): ?>
	<link rel="stylesheet" type="text/css" href="<?= baseurl('assets/css/' . $value) ?>">
<?php endforeach; ?>

<?php

	echo "<script>";
	echo "window.base_url = '".baseurl()."';";
	// echo "window.sideNavChecker = '" . $session->get_session('sidenav') . "';";
	echo "</script>";

?>
</head>
<body>
	