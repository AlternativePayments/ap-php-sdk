<?php

$customer = new \AlternativePayments\Model\Customer();
$customer->setFirstName("John");
$customer->setLastName("Doe");
$customer->setEmail("john@doe.com");
$customer->setCountry("SA");

$payment = new \AlternativePayments\Model\Payment();
$payment->setPaymentOption("mCoinz");
$payment->setHolder("John Doe");
$payment->setPinCode("12345");

$transaction = new \AlternativePayments\Model\Transaction();
$transaction->setCustomer($customer);
$transaction->setPayment($payment);
$transaction->setAmount(1000);
$transaction->setCurrency("USD");
$transaction->setIPAddress("127.0.0.1");

$redirectUrls = new AlternativePayments\Model\RedirectUrls();
$redirectUrls->setReturnUrl("http://alternativepayments.com/message/success.html");
$redirectUrls->setCancelUrl("http://alternativepayments.com/message/failure.html");
$transaction->setRedirectUrls($redirectUrls);

$res = \AlternativePayments\Transaction :: post($transaction);

var_dump($res);

