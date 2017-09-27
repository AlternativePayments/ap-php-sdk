<?php

$phoneVerification = new \AlternativePayments\Model\PhoneVerification();

$phoneVerification->setKey("pk_test_7mVNfNOG0rebexxxxxxxxxx");
$phoneVerification->setPhone("+15555555555");
        
$res = \AlternativePayments\PhoneVerification:: post($phoneVerification);
var_dump($res);
