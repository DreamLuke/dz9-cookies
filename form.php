<?php
	$status = true;
	$birth = $_POST['birth'];
	$colors = $_POST['colors'];
	echo json_encode(compact(['status'], ['birth'], ['colors']));
?>