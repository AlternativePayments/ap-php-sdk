<?php

$plan = new \AlternativePayments\Model\Plan();

$plan->setName("Gold Unlimited");
$plan->setDescription("Monthly subscription to Gold Plan - 1 year");
$plan->setAmount("1000");
$plan->setCurrency("EUR");
$plan->setIntervalUnit("Month");
$plan->setIntervalCount("1");
$plan->setBillingCycle("12");
$plan->setIsConversionRateFixed("true");
$plan->setIpAddress("127.0.0.1");
$plan->setTrialPeriod("7");
        
$res = \AlternativePayments\Plan :: post($plan);
var_dump($res);
