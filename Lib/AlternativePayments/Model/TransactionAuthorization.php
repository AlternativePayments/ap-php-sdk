<?php

namespace AlternativePayments\Model;

class TransactionAuthorization extends Element
{

    /*
     * @var string
     */
    protected $transactionCode;

    /*
     * @var string
     */
    protected $transactionStatus;

    /*
     * @var string
     */
    protected $transactionAuthorizationStatus;

    /*
     * @var TransactionAuthorizationCredential
     */
    protected $credentials;

    /*
     * @var string
     */
    protected $redirectUrl;

    /*
     * @var string
     */
    protected $qrCodeUrl;

    /*
     * @var integer
     */
    protected $remainingLoginAttempts;

    /*
     * @return string
     */
    public function getTransactionCode()
    {
        return $this->transactionCode;
    }
    /*
     * @param string
     */
    public function setTransactionCode($transactionCode)
    {
        $this->transactionCode = $transactionCode;
    }

    /*
     * @return string
     */
    public function getTransactionStatus()
    {
        return $this->transactionStatus;
    }
    /*
     * @param string
     */
    public function setTransactionStatus($transactionStatus)
    {
        $this->transactionStatus = $transactionStatus;
    }

    /*
     * @return string
     */
    public function getTransactionAuthorizationStatus()
    {
        return $this->transactionAuthorizationStatus;
    }
    /*
     * @param string
     */
    public function setTransactionAuthorizationStatus($transactionAuthorizationStatus)
    {
        $this->transactionAuthorizationStatus = $transactionAuthorizationStatus;
    }

    /*
     * @return TransactionAuthorizationCredential
     */
    public function getCredentials()
    {
        return $this->credentials;
    }
    /*
     * @param TransactionAuthorizationCredential
     */
    public function setCredentials($credentials)
    {
        $this->credentials = $credentials;
    }

    /*
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }
    /*
     * @param string
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }

    /*
     * @return string
     */
    public function getQrCodeUrl()
    {
        return $this->qrCodeUrl;
    }
    /*
     * @param string
     */
    public function setQrCodeUrl($qrCodeUrl)
    {
        $this->qrCodeUrl = $qrCodeUrl;
    }

    /*
     * @return integer
     */
    public function getRemainingLoginAttempts()
    {
        return $this->remainingLoginAttempts;
    }
    /*
     * @param integer
     */
    public function setRemainingLoginAttempts($remainingLoginAttempts)
    {
        $this->remainingLoginAttempts = $remainingLoginAttempts;
    }
}
