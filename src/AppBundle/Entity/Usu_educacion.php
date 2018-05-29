<?php

namespace AppBundle\Entity;

/**
 * Usu_educacion
 */
class Usu_educacion
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $tipoEducacion;

    /**
     * @var \DateTime
     */
    private $fechaInicion;

    /**
     * @var \DateTime
     */
    private $fechaFin;

    /**
     * @var string
     */
    private $centro;

    /**
     * @var string
     */
    private $rama;

    /**
     * @var string
     */
    private $descripcion;


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
     * Set tipoEducacion
     *
     * @param string $tipoEducacion
     *
     * @return Usu_educacion
     */
    public function setTipoEducacion($tipoEducacion)
    {
        $this->tipoEducacion = $tipoEducacion;

        return $this;
    }

    /**
     * Get tipoEducacion
     *
     * @return string
     */
    public function getTipoEducacion()
    {
        return $this->tipoEducacion;
    }

    /**
     * Set fechaInicion
     *
     * @param \DateTime $fechaInicion
     *
     * @return Usu_educacion
     */
    public function setFechaInicion($fechaInicion)
    {
        $this->fechaInicion = $fechaInicion;

        return $this;
    }

    /**
     * Get fechaInicion
     *
     * @return \DateTime
     */
    public function getFechaInicion()
    {
        return $this->fechaInicion;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     *
     * @return Usu_educacion
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set centro
     *
     * @param string $centro
     *
     * @return Usu_educacion
     */
    public function setCentro($centro)
    {
        $this->centro = $centro;

        return $this;
    }

    /**
     * Get centro
     *
     * @return string
     */
    public function getCentro()
    {
        return $this->centro;
    }

    /**
     * Set rama
     *
     * @param string $rama
     *
     * @return Usu_educacion
     */
    public function setRama($rama)
    {
        $this->rama = $rama;

        return $this;
    }

    /**
     * Get rama
     *
     * @return string
     */
    public function getRama()
    {
        return $this->rama;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Usu_educacion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}

