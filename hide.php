<?php
	// setcookie('hide', 'true', time()+3600*24*30, '/');
	// setcookie('hide', 'true', time()+10, '/');
	setcookie('hide', 'true', time() + mktime(0, 0, 0, date("m") + 1, date("d"),   date("Y")), '/');
	header('Location: ./index.php');
	exit;
?>