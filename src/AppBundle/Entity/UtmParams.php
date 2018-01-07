<?php

namespace AppBundle\Entity;

/**
 * UtmParams
 */
class UtmParams
{
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

    /**
     * @var integer
     */
    private $id;


    /**
     * Set source
     *
     * @param string $source
     *
     * @return UtmParams
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
     * @return UtmParams
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
     * @return UtmParams
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
     * @return UtmParams
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
     * @return UtmParams
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

