<?php

$payment = new \AlternativePayments\Model\Payment();
$payment->setPaymentOption("SEPA");
$payment->setHolder("John Doe");
$payment->setIBAN("DE71701307008136XXXXXX");
$res = \AlternativePayments\Request :: post("Payment", $payment);

var_dump($res);
