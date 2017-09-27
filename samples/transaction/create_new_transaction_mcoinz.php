<?php

$customer = new \AlternativePayments\Model\Customer();
$customer->setFirstName("John");
$customer->setLastName("Doe");
$customer->setEmail("john.doe@example.com");
$customer->setCountry("SA");

$payment = new \AlternativePayments\Model\Payment();
$payment->setPaymentOption("mcoinz");
$payment->setHolder("John Doe");
$payment->setPinCode("CEE32131321C7");

$transaction = new \AlternativePayments\Model\Transaction();
$transaction->setCustomer($customer);
$transaction->setPayment($payment);
$transaction->setAmount(4500);
$transaction->setCurrency("USD");
$transaction->setIPAddress("127.0.0.1");

$redirectUrls = new AlternativePayments\Model\RedirectUrls();
$redirectUrls->setReturnUrl("http://plugins.alternativepayments.com/message/success.html");
$redirectUrls->setCancelUrl("http://plugins.alternativepayments.com/message/failure.html");
$transaction->setRedirectUrls($redirectUrls);

$res = \AlternativePayments\Transaction :: post($transaction);

var_dump($res);

