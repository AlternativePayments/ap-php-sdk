<?php

$customer = new \AlternativePayments\Model\Customer();
$customer->setFirstName("Roberto");
$customer->setLastName("Doe");
$customer->setEmail("Roberto@Doe.com");
$customer->setAddress("Av Max Teixeira");
$customer->setAddress2("1040");
$customer->setCity("Manaus");
$customer->setZip("69050-240");
$customer->setCountry("BR");
$customer->setState("AM");
$customer->setBirthDate("02/05/1974");
$customer->setPhone("+5522711111");


$payment = new \AlternativePayments\Model\Payment();
$payment->setPaymentOption("BrazilPayChargeCard");
$payment->setHolder("Roberto Doe");
$payment->setDocumentId("652.717.156-04");
$payment->setCreditCardType("visa");
$payment->setCreditCardNumber("4111111111111111");
$payment->setCVV2("123");
$payment->setExpirationMonth("12");
$payment->setExpirationYear("2018");


$transaction = new \AlternativePayments\Model\Transaction();
$transaction->setCustomer($customer);
$transaction->setPayment($payment);
$transaction->setAmount(4500);
$transaction->setCurrency("EUR");
$transaction->setIPAddress("127.0.0.1");

$redirectUrls = new AlternativePayments\Model\RedirectUrls();
$redirectUrls->setReturnUrl("http://alternativepayments.com/message/success.html");
$redirectUrls->setCancelUrl("http://alternativepayments.com/message/failure.html");
$transaction->setRedirectUrls($redirectUrls);

$res = \AlternativePayments\Transaction :: post($transaction);

var_dump($res);
