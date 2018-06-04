<?php

namespace AppBundle\Entity;

/**
 * Nivel
 */
class Nivel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;


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
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Nivel
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
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
     * @return Nivel
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

    public function __toString()
    {
        return (string) $this->titulo;
    }
}
