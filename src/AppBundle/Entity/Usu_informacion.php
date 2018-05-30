<?php

namespace AppBundle\Entity;

/**
 * Usu_informacion
 */
class Usu_informacion
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $expectativaSalarial;

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
    private $calificacion;

    /**
     * @var string
     */
    private $especialidad;

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
     * Set expectativaSalarial
     *
     * @param integer $expectativaSalarial
     *
     * @return Usu_informacion
     */
    public function setExpectativaSalarial($expectativaSalarial)
    {
        $this->expectativaSalarial = $expectativaSalarial;

        return $this;
    }

    /**
     * Get expectativaSalarial
     *
     * @return int
     */
    public function getExpectativaSalarial()
    {
        return $this->expectativaSalarial;
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
     * Set calificacion
     *
     * @param string $calificacion
     *
     * @return Usu_informacion
     */
    public function setCalificacion($calificacion)
    {
        $this->calificacion = $calificacion;

        return $this;
    }

    /**
     * Get calificacion
     *
     * @return string
     */
    public function getCalificacion()
    {
        return $this->calificacion;
    }

    /**
     * Set especialidad
     *
     * @param string $especialidad
     *
     * @return Usu_informacion
     */
    public function setEspecialidad($especialidad)
    {
        $this->especialidad = $especialidad;

        return $this;
    }

    /**
     * Get especialidad
     *
     * @return string
     */
    public function getEspecialidad()
    {
        return $this->especialidad;
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
}
