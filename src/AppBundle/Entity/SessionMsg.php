<?php

namespace AppBundle\Entity;

/**
 * SessionMsg
 */
class SessionMsg
{
    /**
     * @var string
     */
    private $sessData;

    /**
     * @var integer
     */
    private $sessTime;

    /**
     * @var integer
     */
    private $sessLifetime;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $sessId;


    /**
     * Set sessData
     *
     * @param string $sessData
     *
     * @return SessionMsg
     */
    public function setSessData($sessData)
    {
        $this->sessData = $sessData;

        return $this;
    }

    /**
     * Get sessData
     *
     * @return string
     */
    public function getSessData()
    {
        return $this->sessData;
    }

    /**
     * Set sessTime
     *
     * @param integer $sessTime
     *
     * @return SessionMsg
     */
    public function setSessTime($sessTime)
    {
        $this->sessTime = $sessTime;

        return $this;
    }

    /**
     * Get sessTime
     *
     * @return integer
     */
    public function getSessTime()
    {
        return $this->sessTime;
    }

    /**
     * Set sessLifetime
     *
     * @param integer $sessLifetime
     *
     * @return SessionMsg
     */
    public function setSessLifetime($sessLifetime)
    {
        $this->sessLifetime = $sessLifetime;

        return $this;
    }

    /**
     * Get sessLifetime
     *
     * @return integer
     */
    public function getSessLifetime()
    {
        return $this->sessLifetime;
    }

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return SessionMsg
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get sessId
     *
     * @return string
     */
    public function getSessId()
    {
        return $this->sessId;
    }
}

