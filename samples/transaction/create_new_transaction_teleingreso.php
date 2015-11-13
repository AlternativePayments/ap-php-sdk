<?php

$customer = new \AlternativePayments\Model\Customer();
$customer->setEmail("john.doe@example.com");
$customer->setCountry("ES");
$customer->setFirstName("John");
$customer->setLastName("Doe");

$payment = new \AlternativePayments\Model\Payment();
$payment->setPaymentOption("Teleingreso");
$payment->setHolder("John Doe");

$transaction = new \AlternativePayments\Model\Transaction();
$transaction->setCustomer($customer);
$transaction->setPayment($payment);
$transaction->setAmount(4500);
$transaction->setCurrency("EUR");
$transaction->setIPAddress("227.100.15.72");

$redirectUrls = new AlternativePayments\Model\RedirectUrls();
$redirectUrls->setReturnUrl("http://plugins.alternativepayments.com/message/success.html");
$redirectUrls->setCancelUrl("http://plugins.alternativepayments.com/message/failure.html");
$transaction->setRedirectUrls($redirectUrls);

$res = \AlternativePayments\Transaction :: post($transaction);

var_dump($res);
