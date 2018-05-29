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
}

