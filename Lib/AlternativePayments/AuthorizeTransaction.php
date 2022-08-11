<?php

namespace AlternativePayments;

class AuthorizeTransaction
{
    const RESOURCE = 'transactions/authorize';

    public static function post($data)
    {
        $service = new Request;
        return $service->post(self::RESOURCE, $data);
    }
}