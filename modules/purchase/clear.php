<?php
if (!defined('FLUX_ROOT')) exit;

$this->loginRequired();

if ($server->cart && $server->cart->clear()) {
	$session->setMessageData("Your cart has been emptied.");
}
else {
	$session->setMessageData("Couldn't empty your cart, maybe it's already empty.");
}

$this->redirect($this->url('purchase'));
?>
