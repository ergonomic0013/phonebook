<?php

namespace AppBundle\Entity;

/**
 * Session_msg
 */
class Session_msg
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $cid;

    /**
     * @var string
     */
    private $sid;

    /**
     * @var string
     */
    private $uid;

    /**
     * @var string
     */
    private $url;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cid
     *
     * @param string $cid
     *
     * @return Session_msg
     */
    public function setCid($cid)
    {
        $this->cid = $cid;

        return $this;
    }

    /**
     * Get cid
     *
     * @return string
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * Set sid
     *
     * @param string $sid
     *
     * @return Session_msg
     */
    public function setSid($sid)
    {
        $this->sid = $sid;

        return $this;
    }

    /**
     * Get sid
     *
     * @return string
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * Set uid
     *
     * @param string $uid
     *
     * @return Session_msg
     */
    public function setUid($uid)
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * Get uid
     *
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Session_msg
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}
