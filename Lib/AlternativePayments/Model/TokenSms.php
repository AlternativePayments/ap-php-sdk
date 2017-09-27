<?php

namespace AlternativePayments\Model;

class TokenSms extends Element
{
    /*
     * @var string
     */
    protected $token;
    
    /*
     * @var string
     */
    protected $pin;

    /*
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }
    
    /*
     * @var string
     */
    public function setToken($token)
    {
        $this->token = $token;
    }
    /*
     * @var string
     */
    public function getPin()
    {
        return $this->pin;
    }
    /*
     * @var string
     */
    public function setPin($pin)
    {
        $this->pin = $pin;
    }
}
