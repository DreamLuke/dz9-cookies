<?php
	require './Session.php';
	require './Cookie.php';

	$session = new Session();
	$id = $_GET['id'];

	if(empty($session->get('sum'))) {
		$session->set('sum', 0);
		$session->set('product1', 0);
		$session->set('product2', 0);
		$session->set('product3', 0);
		$session->set('product4', 0);
		$session->set('product5', 0);
	}

	if($id == 1) {
		$session->set('product1', $session->increment('product1'));
	}
	if($id == 2) {
		$session->set('product2', $session->increment('product2'));
	}
	if($id == 3) {
		$session->set('product3', $session->increment('product3'));
	}
	if($id == 4) {
		$session->set('product4', $session->increment('product4'));
	}
	if($id == 5) {
		$session->set('product5', $session->increment('product5'));
	}

	$sum = $session->get('product1') * 1 + $session->get('product2') * 2 + $session->get('product3') * 3 + $session->get('product4') * 4 + $session->get('product5') * 5;
	$session->set('sum', $sum);

	header('Location: ./shop.php');
	exit;

?>