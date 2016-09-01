<?php

$customer = new \AlternativePayments\Model\Customer();
$customer->setEmail("Roberto@Doe.com");
$customer->setCountry("BR");
$customer->setFirstName("Roberto");
$customer->setLastName("Doe");
$customer->setAddress("Av Max Teixeira");
$customer->setAddress2("1040");
$customer->setCity("Manaus");
$customer->setState("AM");
$customer->setZip("69050-240");
$customer->setPhone("+55AA711111");
$customer->setBirthDate("13/05/1974");

$payment = new \AlternativePayments\Model\Payment();
$payment->setPaymentOption("BrazilPayBoleto");
$payment->setHolder("Roberto Doe");
$payment->setDocumentId("924.521.873-24");

$transaction = new \AlternativePayments\Model\Transaction();
$transaction->setCustomer($customer);
$transaction->setPayment($payment);
$transaction->setAmount(4500);
$transaction->setCurrency("EUR");
$transaction->setIPAddress("127.0.0.1");

$redirectUrls = new AlternativePayments\Model\RedirectUrls();
$redirectUrls->setReturnUrl("http://plugins.alternativepayments.com/message/success.html");
$redirectUrls->setCancelUrl("http://plugins.alternativepayments.com/message/failure.html");
$transaction->setRedirectUrls($redirectUrls);

$res = \AlternativePayments\Transaction :: post($transaction);

var_dump($res);
