<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
/**
 * UTM_params
 */
class UTM_params
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $campaign;

    /**
     * @var string
     */
    private $medium;

    /**
     * @var string
     */
    private $term;

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
     * Set source
     *
     * @param string $source
     *
     * @return UTM_params
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return UTM_params
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set campaign
     *
     * @param string $campaign
     *
     * @return UTM_params
     */
    public function setCampaign($campaign)
    {
        $this->campaign = $campaign;

        return $this;
    }

    /**
     * Get campaign
     *
     * @return string
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Set medium
     *
     * @param string $medium
     *
     * @return UTM_params
     */
    public function setMedium($medium)
    {
        $this->medium = $medium;

        return $this;
    }

    /**
     * Get medium
     *
     * @return string
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * Set term
     *
     * @param string $term
     *
     * @return UTM_params
     */
    public function setTerm($term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Get term
     *
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
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
     * @return UTM_params
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
