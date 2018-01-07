<?php

namespace AppBundle\Entity;

/**
 * TrakingMsg
 */
class TrakingMsg
{
    /**
     * @var string
     */
    private $cid;

    /**
     * @var string
     */
    private $trk;

    /**
     * @var string
     */
    private $url;

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
    private $endpoint;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\UtmParams
     */
    private $fkeyUtmParams;

    /**
     * @var \AppBundle\Entity\Visitors
     */
    private $fkeyVisitors;


    /**
     * Set cid
     *
     * @param string $cid
     *
     * @return TrakingMsg
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
     * Set trk
     *
     * @param string $trk
     *
     * @return TrakingMsg
     */
    public function setTrk($trk)
    {
        $this->trk = $trk;

        return $this;
    }

    /**
     * Get trk
     *
     * @return string
     */
    public function getTrk()
    {
        return $this->trk;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return TrakingMsg
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

    /**
     * Set sid
     *
     * @param string $sid
     *
     * @return TrakingMsg
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
     * @return TrakingMsg
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
     * Set endpoint
     *
     * @param string $endpoint
     *
     * @return TrakingMsg
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    /**
     * Get endpoint
     *
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
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
     * Set fkeyUtmParams
     *
     * @param \AppBundle\Entity\UtmParams $fkeyUtmParams
     *
     * @return TrakingMsg
     */
    public function setFkeyUtmParams(\AppBundle\Entity\UtmParams $fkeyUtmParams = null)
    {
        $this->fkeyUtmParams = $fkeyUtmParams;

        return $this;
    }

    /**
     * Get fkeyUtmParams
     *
     * @return \AppBundle\Entity\UtmParams
     */
    public function getFkeyUtmParams()
    {
        return $this->fkeyUtmParams;
    }

    /**
     * Set fkeyVisitors
     *
     * @param \AppBundle\Entity\Visitors $fkeyVisitors
     *
     * @return TrakingMsg
     */
    public function setFkeyVisitors(\AppBundle\Entity\Visitors $fkeyVisitors = null)
    {
        $this->fkeyVisitors = $fkeyVisitors;

        return $this;
    }

    /**
     * Get fkeyVisitors
     *
     * @return \AppBundle\Entity\Visitors
     */
    public function getFkeyVisitors()
    {
        return $this->fkeyVisitors;
    }
}

