<?php

namespace AppBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usu_educacion
 */
class Usu_educacion implements UserInterface, \Serializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $tipo;

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
    private $centro;

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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Usu_educacion
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set fechaInicio
     *
     * @param string $fechaInicio
     *
     * @return Usu_educacion
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
     * @return string
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
    /**
     * @var \AppBundle\Entity\Usuario
     */
    private $usuario;


    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Usu_educacion
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
            $this->tipo,
            $this->centro,
            $this->descripcion,
            $this->usuario,
        ));
    }

    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->tipo,
            $this->centro,
            $this->descripcion,
            $this->usuario,
        ) = $this->unserialize($serialized);
    }
}
