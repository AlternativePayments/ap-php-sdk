<?php

namespace AlternativePayments\Model;

/**
 * Abstract Model class inherented by all model classes
 */
abstract class Element
{

    /*
     * @var string
     */
    protected $id;

    /*
     * @var string
     */
    protected $created;

    /*
     * @var string
     */
    protected $updated;

    /*
     * @var string
     */
    protected $version;

    /*
     * @return string
     */
    public function __construct()
    {
        $this->version = "1.0.1";
    }

    /*
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /*
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

     /*
     * @param string
     */
    public function setId($id)
    {
        $this->id = $id;
    }

     /*
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /*
     * @param string
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /*
     * @return string
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /*
     * @param string
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    }
}
