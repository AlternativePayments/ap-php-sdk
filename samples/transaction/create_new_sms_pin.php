<?php

$phoneVerification = new \AlternativePayments\Model\PhoneVerification();

$phoneVerification->setKey("pk_test_7mVNfNOG0rebepqgy0VKuy6jKA8ustTm4EbbOFhq");
$phoneVerification->setPhone("+381612453385");
        
$res = \AlternativePayments\PhoneVerification:: post($phoneVerification);
var_dump($res);
