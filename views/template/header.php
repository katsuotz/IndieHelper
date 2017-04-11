<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Indie Helper</title>
<?php foreach ($assets['css'] as $key => $value): ?>
	<link rel="stylesheet" type="text/css" href="<?= baseurl('assets/css/' . $value) ?>">
<?php endforeach; ?>
</head>
<body>
	