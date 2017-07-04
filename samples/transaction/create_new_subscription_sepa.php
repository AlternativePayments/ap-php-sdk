<?php

$subscription = new \AlternativePayments\Model\Subscription();
$subscription->setPlanId("pln_f0e8ddf8884e");
$subscription->setCustomerId("cus_e0b56f09fd284415b");
$subscription->setPaymentId("pay_f2d95bddaea645aa9");
$subscription->setIPAddress("127.0.0.1");
$res = \AlternativePayments\Subscription :: post($subscription);

var_dump($res);
