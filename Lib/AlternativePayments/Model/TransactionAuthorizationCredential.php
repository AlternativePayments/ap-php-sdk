<?php

namespace AlternativePayments\Model;

class TransactionAuthorizationCredential extends Element
{

    /*
     * @var string
     */
    protected $username;

    /*
     * @var string
     */
    protected $password;

    /*
     * @var string
     */
    protected $authorizationMethodId;

    /*
     * @var string
     */
    protected $description;

    /*
     * @var string
     */
    protected $authorizationMethodType;

    /*
     * @var string list
     */
    protected $authorizationOptions;

    /*
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
    /*
     * @param string
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /*
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
    /*
     * @param string
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /*
     * @return string
     */
    public function getAuthorizationMethodId()
    {
        return $this->authorizationMethodId;
    }
    /*
     * @param string
     */
    public function setAuthorizationMethodId($authorizationMethodId)
    {
        $this->authorizationMethodId = $authorizationMethodId;
    }

    /*
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /*
     * @param string
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /*
     * @return string
     */
    public function getAuthorizationMethodType()
    {
        return $this->authorizationMethodType;
    }
    /*
     * @param string
     */
    public function setAuthorizationMethodType($authorizationMethodType)
    {
        $this->authorizationMethodType = $authorizationMethodType;
    }

    /*
     * @return string list
     */
    public function getAuthorizationOptions()
    {
        return $this->authorizationOptions;
    }
    /*
     * @param string list
     */
    public function setAuthorizationOptions($authorizationOptions)
    {
        $this->authorizationOptions = $authorizationOptions;
    }

}
