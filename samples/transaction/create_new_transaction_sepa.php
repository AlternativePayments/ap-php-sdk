<?php

$customer = new \AlternativePayments\Model\Customer();
$customer->setEmail("john.doe@example.com");
$customer->setCountry("BE");
$customer->setFirstName("John");
$customer->setLastName("Doe");

$payment = new \AlternativePayments\Model\Payment();
$payment->setPaymentOption("SEPA");
$payment->setHolder("John Doe");
$payment->setIBAN("BE88271080782541");

$transaction = new \AlternativePayments\Model\Transaction();
$transaction->setCustomer($customer);
$transaction->setPayment($payment);
$transaction->setAmount(4500);
$transaction->setCurrency("EUR");
$transaction->setDescription("test sepa php sdk");
$transaction->setMerchantPassThruData("test_sepa_123");
$transaction->setIPAddress("127.0.0.1");

$res = \AlternativePayments\Transaction :: post($transaction);

var_dump($res);
