<?php

$customer = new \AlternativePayments\Model\Customer();
$customer->setEmail("john.doe@gmail.com");
$customer->setCountry("DE");
$customer->setFirstName("John");
$customer->setLastName("Doe");

$payment = new \AlternativePayments\Model\Payment();
$payment->setPaymentOption("SEPA");
$payment->setHolder("John Doe");
$payment->setIBAN("DE89370400440xxxxxx");

$phoneVerification = new \AlternativePayments\Model\TokenSms();
$phoneVerification->setToken("cac2fc997f5348f19e967d6e2cc3ec28");
$phoneVerification->setPin("1234");

$transaction = new \AlternativePayments\Model\Transaction();
$transaction->setCustomer($customer);
$transaction->setPayment($payment);
$transaction->setPhoneVerification($phoneVerification);
$transaction->setAmount(4500);
$transaction->setCurrency("EUR");
$transaction->setDescription("test sepa php sdk");
$transaction->setMerchantPassThruData("test_sepa_123");
$transaction->setMerchantTransactionId("tr1123321");
$transaction->setIPAddress("127.0.0.1");

$res = \AlternativePayments\Transaction :: post($transaction);

var_dump($res);
