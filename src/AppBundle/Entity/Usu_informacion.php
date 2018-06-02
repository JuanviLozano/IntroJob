<?php

namespace AppBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usu_informacion
 */
class Usu_informacion implements UserInterface, \Serializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $expectativaSalario;

    /**
     * @var string
     */
    private $nivelCarrera;

    /**
     * @var string
     */
    private $industria;

    /**
     * @var string
     */
    private $experiencia;

    /**
     * @var string
     */
    private $infoPersonal;


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
     * Set expectativaSalario
     *
     * @param integer $expectativaSalario
     *
     * @return Usu_informacion
     */
    public function setExpectativaSalario($expectativaSalario)
    {
        $this->expectativaSalario = $expectativaSalario;

        return $this;
    }

    /**
     * Get expectativaSalario
     *
     * @return int
     */
    public function getExpectativaSalario()
    {
        return $this->expectativaSalario;
    }

    /**
     * Set nivelCarrera
     *
     * @param string $nivelCarrera
     *
     * @return Usu_informacion
     */
    public function setNivelCarrera($nivelCarrera)
    {
        $this->nivelCarrera = $nivelCarrera;

        return $this;
    }

    /**
     * Get nivelCarrera
     *
     * @return string
     */
    public function getNivelCarrera()
    {
        return $this->nivelCarrera;
    }

    /**
     * Set industria
     *
     * @param string $industria
     *
     * @return Usu_informacion
     */
    public function setIndustria($industria)
    {
        $this->industria = $industria;

        return $this;
    }

    /**
     * Get industria
     *
     * @return string
     */
    public function getIndustria()
    {
        return $this->industria;
    }

    /**
     * Set experiencia
     *
     * @param string $experiencia
     *
     * @return Usu_informacion
     */
    public function setExperiencia($experiencia)
    {
        $this->experiencia = $experiencia;

        return $this;
    }

    /**
     * Get experiencia
     *
     * @return string
     */
    public function getExperiencia()
    {
        return $this->experiencia;
    }

    /**
     * Set infoPersonal
     *
     * @param string $infoPersonal
     *
     * @return Usu_informacion
     */
    public function setInfoPersonal($infoPersonal)
    {
        $this->infoPersonal = $infoPersonal;

        return $this;
    }

    /**
     * Get infoPersonal
     *
     * @return string
     */
    public function getInfoPersonal()
    {
        return $this->infoPersonal;
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
     * @return Usu_informacion
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
            $this->experiencia,
            $this->expectativaSalario,
            $this->nivelCarrera,
            $this->infoPersonal,
            $this->industria,
        ));
    }

    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->usuario,
            $this->experiencia,
            $this->expectativaSalario,
            $this->nivelCarrera,
            $this->infoPersonal,
            $this->industria,
        ) = $this->unserialize($serialized);
    }
}
