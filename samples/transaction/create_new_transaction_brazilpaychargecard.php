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
$customer->setPhone("+5522711111");
$customer->setBirthDate("02/05/1974");

$payment = new \AlternativePayments\Model\Payment();
$payment->setPaymentOption("BrazilPayChargeCard");
$payment->setHolder("Roberto Doe");
$payment->setDocumentId("924.521.873-24");
$payment->setCreditCardNumber("4111111111111111");
$payment->setCVV2("123");
$payment->setExpirationMonth("12");
$payment->setExpirationYear("2018");
$payment->setCreditCardType("visa");

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
