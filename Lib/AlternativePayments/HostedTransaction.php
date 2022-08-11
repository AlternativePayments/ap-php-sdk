<?php

namespace AlternativePayments;

class HostedTransaction
{
    const RESOURCE = 'transactions/hosted';

    public static function post($data)
    {
        $service = new Request;
        return $service->post(self::RESOURCE, $data);
    }
}
