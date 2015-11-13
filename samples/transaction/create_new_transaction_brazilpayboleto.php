<?php

$customer = new \AlternativePayments\Model\Customer();
$customer->setEmail("larissa.santos@example.com");
$customer->setCountry("BR");
$customer->setFirstName("Larissa");
$customer->setLastName("Santos Souza");
$customer->setAddress("Rua Padre Olivério Kraemer");
$customer->setAddress2("1148");
$customer->setCity("Rio de Janeiro");
$customer->setState("RJ");
$customer->setZip("20541-270");
$customer->setPhone("(21) 5336-9131");
$customer->setBirthDate("12/12/1965");

$payment = new \AlternativePayments\Model\Payment();
$payment->setPaymentOption("BrazilPayBoleto");
$payment->setHolder("Larissa Santos Souza");
$payment->setDocumentId("252.243.166-85");

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
