<?php
	require './Session.php';
	require './Cookie.php';

	$session = new Session();
	$id = $_GET['id'];

	if(empty($session->get('sum'))) {
		$session->set('sum', 0);
	}

	if($id == 1) {
		if(empty($session->get('product1'))) {
			$session->set('product1', 1);
			$session->set('sum', $session->increment('sum'));
		} else {
			$session->set('product1', $session->increment('product1'));
			$session->set('sum', $session->increment('sum'));
		}
	}
	if($id == 2) {
		if(empty($session->get('product2'))) {
			$session->set('product2', 1);
			$session->set('sum', $session->increment('sum'));
		} else {
			$session->set('product2', $session->increment('product2'));
			$session->set('sum', $session->increment('sum'));
		}
	}
	if($id == 3) {
		if(empty($session->get('product3'))) {
			$session->set('product3', 1);
			$session->set('sum', $session->increment('sum'));
		} else {
			$session->set('product3', $session->increment('product3'));
			$session->set('sum', $session->increment('sum'));
		}
	}
	if($id == 4) {
		if(empty($session->get('product4'))) {
			$session->set('product4', 1);
			$session->set('sum', $session->increment('sum'));
		} else {
			$session->set('product4', $session->increment('product4'));
			$session->set('sum', $session->increment('sum'));
		}
	}
	if($id == 5) {
		if(empty($session->get('product5'))) {
			$session->set('product5', 1);
			$session->set('sum', $session->increment('sum'));
		} else {
			$session->set('product5', $session->increment('product5'));
			$session->set('sum', $session->increment('sum'));
		}
	}

	header('Location: ./shop.php');
	exit;

?>
