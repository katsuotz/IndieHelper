<?php

include 'lib.php';

$data = array('id', 'id_akun', 'username', 'status', 'nama', 'foto');
$session->unset_session($data);

location(baseurl('../login.php'));

?>