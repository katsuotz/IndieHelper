<?php

include 'lib.php';

$data = array('ID', 'ID_AKUN', 'USERNAME', 'STATUS', 'NAMA', 'FOTO');
$session->unset_session($data);

location(baseurl('../login.php'));

?>