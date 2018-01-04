<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * Visitors
 */
class Visitors
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var string
     */
    private $lg;

    /**
     * @var string
     */
    private $rf;

    /**
     * @var string
     */
    private $ua;

    private $traking_msg;

    public function __construct()
    {
        $this->traking_msg = new ArrayCollection();
    }
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
     * Set ip
     *
     * @param string $ip
     *
     * @return Visitors
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set lg
     *
     * @param string $lg
     *
     * @return Visitors
     */
    public function setLg($lg)
    {
        $this->lg = $lg;

        return $this;
    }

    /**
     * Get lg
     *
     * @return string
     */
    public function getLg()
    {
        return $this->lg;
    }

    /**
     * Set rf
     *
     * @param string $rf
     *
     * @return Visitors
     */
    public function setRf($rf)
    {
        $this->rf = $rf;

        return $this;
    }

    /**
     * Get rf
     *
     * @return string
     */
    public function getRf()
    {
        return $this->rf;
    }

    /**
     * Set ua
     *
     * @param string $ua
     *
     * @return Visitors
     */
    public function setUa($ua)
    {
        $this->ua = $ua;

        return $this;
    }

    /**
     * Get ua
     *
     * @return string
     */
    public function getUa()
    {
        return $this->ua;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $utm_params;


    /**
     * Add utmParam
     *
     * @param \AppBundle\Entity\Traking_msg $utmParam
     *
     * @return Visitors
     */
    public function addUtmParam(\AppBundle\Entity\Traking_msg $utmParam)
    {
        $this->utm_params[] = $utmParam;

        return $this;
    }

    /**
     * Remove utmParam
     *
     * @param \AppBundle\Entity\Traking_msg $utmParam
     */
    public function removeUtmParam(\AppBundle\Entity\Traking_msg $utmParam)
    {
        $this->utm_params->removeElement($utmParam);
    }

    /**
     * Get utmParams
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUtmParams()
    {
        return $this->utm_params;
    }
}
