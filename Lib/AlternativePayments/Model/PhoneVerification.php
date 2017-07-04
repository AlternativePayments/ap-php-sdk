<?php

namespace AlternativePayments\Model;

class PhoneVerification extends Element
{
    /*
     * @var string
     */
    protected $phone;
    
    /*
     * @var string
     */
    protected $key;

    /*
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }
    
    /*
     * @var string
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
     
    /*
     * @var string
     */
    public function getKey()
    {
        return $this->key;
    }
    
    /*
     * @var string
     */
    public function setKey($key)
    {
        $this->key = $key;
    }
}
