<?php

namespace AppBundle\Entity;

/**
 * Usu_idioma
 */
class Usu_idioma
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $lenguaje;

    /**
     * @var string
     */
    private $nivel;


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
     * Set lenguaje
     *
     * @param string $lenguaje
     *
     * @return Usu_idioma
     */
    public function setLenguaje($lenguaje)
    {
        $this->lenguaje = $lenguaje;

        return $this;
    }

    /**
     * Get lenguaje
     *
     * @return string
     */
    public function getLenguaje()
    {
        return $this->lenguaje;
    }

    /**
     * Set nivel
     *
     * @param string $nivel
     *
     * @return Usu_idioma
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return string
     */
    public function getNivel()
    {
        return $this->nivel;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idioma;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idioma = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add idioma
     *
     * @param \AppBundle\Entity\Usuario_idioma $idioma
     *
     * @return Usu_idioma
     */
    public function addIdioma(\AppBundle\Entity\Usuario_idioma $idioma)
    {
        $this->idioma[] = $idioma;

        return $this;
    }

    /**
     * Remove idioma
     *
     * @param \AppBundle\Entity\Usuario_idioma $idioma
     */
    public function removeIdioma(\AppBundle\Entity\Usuario_idioma $idioma)
    {
        $this->idioma->removeElement($idioma);
    }

    /**
     * Get idioma
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdioma()
    {
        return $this->idioma;
    }
}
