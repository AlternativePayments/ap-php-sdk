<?php

$customer = new \AlternativePayments\Model\Customer();
$customer->setFirstName("John");
$customer->setLastName("Doe");
$customer->setEmail("john@doe.com");
$customer->setCountry("DE");


$payment = new \AlternativePayments\Model\Payment();
$payment->setPaymentOption("SEPA");
$payment->setHolder("John Doe");
$payment->setIBAN("DE89370400440xxxxxx");

$phoneVerification = new \AlternativePayments\Model\TokenSms();
$phoneVerification->setToken("c3ba69529b154262b00b949a0ff1f80f");
$phoneVerification->setPin("1234");

$transaction = new \AlternativePayments\Model\Transaction();
$transaction->setCustomer($customer);
$transaction->setPayment($payment);
$transaction->setPhoneVerification($phoneVerification);
$transaction->setAmount(1000);
$transaction->setCurrency("EUR");
$transaction->setDescription("test sepa php sdk");
$transaction->setMerchantPassThruData("test_sepa_123");
$transaction->setMerchantTransactionId("tr1123321");
$transaction->setIPAddress("127.0.0.1");

$res = \AlternativePayments\Transaction :: post($transaction);

var_dump($res);
