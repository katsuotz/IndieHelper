<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Indie Helper</title>
<?php foreach ($assets['css'] as $key => $value): ?>
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= baseurl('assets/css/' . $value) ?>">
<?php endforeach; ?>

<?php
	
	$sn = $session->get_session('sidenav');

	if ($session->get_session('sidenav') != 0) {
		$sn = 1;
	}

	if ($sn != 1) {
		// $sn = 3;
	} elseif ($sn != 0) {
		// $sn = 3;
	} else {
		$sn = $sn;
	}

	echo "<script>";
	echo "window.base_url = '" . baseurl() . "';";
	echo "window.sideNavChecker = '" . $sn . "';";
	echo "</script>";

?>
</head>
<body>
	