<?php

namespace AppBundle\Entity;

/**
 * Idioma
 */
class Idioma
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $idioma;


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
     * Set idioma
     *
     * @param string $idioma
     *
     * @return Idioma
     */
    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;

        return $this;
    }

    /**
     * Get idioma
     *
     * @return string
     */
    public function getIdioma()
    {
        return $this->idioma;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $usuIdioma;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuIdioma = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add usuIdioma
     *
     * @param \AppBundle\Entity\Usu_idioma $usuIdioma
     *
     * @return Idioma
     */
    public function addUsuIdioma(\AppBundle\Entity\Usu_idioma $usuIdioma)
    {
        $this->usuIdioma[] = $usuIdioma;

        return $this;
    }

    /**
     * Remove usuIdioma
     *
     * @param \AppBundle\Entity\Usu_idioma $usuIdioma
     */
    public function removeUsuIdioma(\AppBundle\Entity\Usu_idioma $usuIdioma)
    {
        $this->usuIdioma->removeElement($usuIdioma);
    }

    /**
     * Get usuIdioma
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuIdioma()
    {
        return $this->usuIdioma;
    }
}
