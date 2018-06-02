<?php

namespace AppBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usu_exp_laboral
 */
class Usu_exp_laboral implements UserInterface, \Serializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $oficio;

    /**
     * @var string
     */
    private $nombreEmpresa;

    /**
     * @var string
     */
    private $fechaInicio;

    /**
     * @var string
     */
    private $fechaFin;

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
     * Set oficio
     *
     * @param string $oficio
     *
     * @return Usu_exp_laboral
     */
    public function setOficio($oficio)
    {
        $this->oficio = $oficio;

        return $this;
    }

    /**
     * Get oficio
     *
     * @return string
     */
    public function getOficio()
    {
        return $this->oficio;
    }

    /**
     * Set nombreEmpresa
     *
     * @param string $nombreEmpresa
     *
     * @return Usu_exp_laboral
     */
    public function setNombreEmpresa($nombreEmpresa)
    {
        $this->nombreEmpresa = $nombreEmpresa;

        return $this;
    }

    /**
     * Get nombreEmpresa
     *
     * @return string
     */
    public function getNombreEmpresa()
    {
        return $this->nombreEmpresa;
    }

    /**
     * Set fechaInicio
     *
     * @param string $fechaInicio
     *
     * @return Usu_exp_laboral
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return string
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFin
     *
     * @param string $fechaFin
     *
     * @return Usu_exp_laboral
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return string
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Usu_exp_laboral
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
    /**
     * @var \AppBundle\Entity\Usuario
     */
    private $usuario;


    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Usu_exp_laboral
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }


    public function getRoles()
    {
        return null;
    }

    public function getPassword()
    {
        return null;
    }

    public function getSalt()
    {
        return null;
    }

    public function getUsername()
    {
        return null;
    }

    public function eraseCredentials()
    {
        return null;
    }

    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->usuario,
            $this->descripcion,
            $this->fechaFin,
            $this->fechaInicio,
            $this->nombreEmpresa,
            $this->oficio,
        ));
    }

    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->usuario,
            $this->descripcion,
            $this->fechaFin,
            $this->fechaInicio,
            $this->nombreEmpresa,
            $this->oficio,
        ) = $this->unserialize($serialized);
    }
}
