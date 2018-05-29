<?php

namespace AppBundle\Entity;

/**
 * Usu_habilidades
 */
class Usu_habilidades
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombreHabilidad;

    /**
     * @var int
     */
    private $porcentaje;


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
     * Set nombreHabilidad
     *
     * @param string $nombreHabilidad
     *
     * @return Usu_habilidades
     */
    public function setNombreHabilidad($nombreHabilidad)
    {
        $this->nombreHabilidad = $nombreHabilidad;

        return $this;
    }

    /**
     * Get nombreHabilidad
     *
     * @return string
     */
    public function getNombreHabilidad()
    {
        return $this->nombreHabilidad;
    }

    /**
     * Set porcentaje
     *
     * @param integer $porcentaje
     *
     * @return Usu_habilidades
     */
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;

        return $this;
    }

    /**
     * Get porcentaje
     *
     * @return int
     */
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }
}

