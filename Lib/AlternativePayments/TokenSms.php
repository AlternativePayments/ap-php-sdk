<?php

namespace AlternativePayments;

class TokenSms
{
    const RESOURCE = 'tokensms';
    
    public static function getAll()
    {
        $service = new Request;
        return $service->getAll(self::RESOURCE);
    }

    public static function get($code)
    {
        $service = new Request;
        return $service->get(self::RESOURCE, $code);
    }

    public static function post($data)
    {
        $service = new Request;
        return $service->post(self::RESOURCE, $data);
    }
}
