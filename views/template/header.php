<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indie Helper</title>
    <?php foreach ($assets['css'] as $key => $value): ?>
    <link rel="stylesheet" type="text/css" href="<?= baseurl('assets/css/' . $value) ?>">
    <?php endforeach; ?>

    <?php
	
	if ($session->get_session('sidenav')) {
		$sn = 0;
	} else {
		$sn = $session->get_session('sidenav');
	}

	echo "<script>";
	echo "window.base_url = '" . baseurl() . "';";
	echo "window.sideNavChecker = '" . $sn . "';";
	echo "</script>";

?>
</head>

<body>
