<?php

namespace AlternativePayments\Model;

class Plan extends Element
{

    /*
     * @var string
     */
    protected $name;
    
    /*
     * @var string
     */
    protected $description;

    /*
     * @var integer
     */
    protected $amount;

    /*
     * @var string
     */
    protected $currency;
    
    /*
     * @var string
     */
    protected $intervalUnit;
    
    /*
     * @var integer
     */
    protected $intervalCount;
    
    /*
     * @var integer
     */
    protected $billingCycles;
    
    /*
     * @var string
     */
    protected $isConversionRateFixed;
    
    /*
     * @var integer
     */
    protected $ipAddress;
    
    /*
     * @var integer
     */
    protected $trialPeriod;
    
    /*
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /*
     * @return string
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /*
     * @return integer
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /*
     * @return integer
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /*
     * @return integer
     */
    public function getAmount()
    {
        return $this->amount;
    }
    
    /*
     * @param integer
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }
    
    /*
     * @return integer
     */
    public function getCurrency()
    {
        return $this->currency;
    }
    
    /*
     * @return integer
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }
    
    /*
     * @return integer
     */
    public function getintervalUnit()
    {
        return $this->intervalUnit;
    }
    
    /*
     * @return integer
     */
    public function setIntervalUnit($intervalUnit)
    {
        $this->intervalUnit = $intervalUnit;
    }
    
    /*
     * @return integer
     */
    public function getIntervalCount($intervalCount)
    {
        return $this->intervalCount;
    }
    
    /*
     * @return integer
     */
    public function setIntervalCount($intervalCount)
    {
        $this->intervalCount = $intervalCount;
    }
    
    /*
     * @return integer
     */
    public function getBillingCycle()
    {
        return $this->billingCycles;
    }
    
    /*
     * @return integer
     */
    public function setBillingCycle($billingCycle)
    {
        $this->billingCycles = $billingCycle;
    }
    
    /*
     * @return integer
     */
    public function getIsConversionRateFixed()
    {
        return $this->isConversionRateFixed;
    }
    
    /*
     * @return integer
     */
    public function setIsConversionRateFixed($isConversionRateFixed)
    {
        $this->isConversionRateFixed = $isConversionRateFixed;
    }
    
    /*
     * @return integer
     */
    public function getIpAddress($ipAddress)
    {
        return $ipAddress->ipAddress;
    }
    
    /*
     * @return integer
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }
    
    /*
     * @return integer
     */
    public function getTrialPeriod()
    {
        return $this->trialPeriod;
    }
    
    /*
     * @return integer
     */
    public function setTrialPeriod($trialPeriod)
    {
        $this->trialPeriod = $trialPeriod;
    }
}
