<?php

namespace AppBundle\Entity;

/**
 * Oferta
 */
class Oferta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $pais;

    /**
     * @var string
     */
    private $provincia;

    /**
     * @var string
     */
    private $ciudad;

    /**
     * @var \DateTime
     */
    private $fechaCreacion;

    /**
     * @var integer
     */
    private $salarioInicio;

    /**
     * @var integer
     */
    private $salarioFin;

    /**
     * @var string
     */
    private $experienciaMin;

    /**
     * @var string
     */
    private $estudiosMin;

    /**
     * @var string
     */
    private $residente;

    /**
     * @var string
     */
    private $conocimientos;

    /**
     * @var string
     */
    private $requisitos;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $industria;

    /**
     * @var string
     */
    private $referencia;

    /**
     * @var string
     */
    private $categoria;

    /**
     * @var string
     */
    private $nivel;

    /**
     * @var integer
     */
    private $nVacantes;

    /**
     * @var string
     */
    private $duracionContrato;

    /**
     * @var string
     */
    private $personalCargo;


    /**
     * Get id
     *
     * @return integer
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
     * @return Oferta
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
     * Set pais
     *
     * @param string $pais
     *
     * @return Oferta
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Oferta
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return Oferta
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Oferta
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set salarioInicio
     *
     * @param integer $salarioInicio
     *
     * @return Oferta
     */
    public function setSalarioInicio($salarioInicio)
    {
        $this->salarioInicio = $salarioInicio;

        return $this;
    }

    /**
     * Get salarioInicio
     *
     * @return integer
     */
    public function getSalarioInicio()
    {
        return $this->salarioInicio;
    }

    /**
     * Set salarioFin
     *
     * @param integer $salarioFin
     *
     * @return Oferta
     */
    public function setSalarioFin($salarioFin)
    {
        $this->salarioFin = $salarioFin;

        return $this;
    }

    /**
     * Get salarioFin
     *
     * @return integer
     */
    public function getSalarioFin()
    {
        return $this->salarioFin;
    }

    /**
     * Set experienciaMin
     *
     * @param string $experienciaMin
     *
     * @return Oferta
     */
    public function setExperienciaMin($experienciaMin)
    {
        $this->experienciaMin = $experienciaMin;

        return $this;
    }

    /**
     * Get experienciaMin
     *
     * @return string
     */
    public function getExperienciaMin()
    {
        return $this->experienciaMin;
    }

    /**
     * Set estudiosMin
     *
     * @param string $estudiosMin
     *
     * @return Oferta
     */
    public function setEstudiosMin($estudiosMin)
    {
        $this->estudiosMin = $estudiosMin;

        return $this;
    }

    /**
     * Get estudiosMin
     *
     * @return string
     */
    public function getEstudiosMin()
    {
        return $this->estudiosMin;
    }

    /**
     * Set residente
     *
     * @param string $residente
     *
     * @return Oferta
     */
    public function setResidente($residente)
    {
        $this->residente = $residente;

        return $this;
    }

    /**
     * Get residente
     *
     * @return string
     */
    public function getResidente()
    {
        return $this->residente;
    }

    /**
     * Set conocimientos
     *
     * @param string $conocimientos
     *
     * @return Oferta
     */
    public function setConocimientos($conocimientos)
    {
        $this->conocimientos = $conocimientos;

        return $this;
    }

    /**
     * Get conocimientos
     *
     * @return string
     */
    public function getConocimientos()
    {
        return $this->conocimientos;
    }

    /**
     * Set requisitos
     *
     * @param string $requisitos
     *
     * @return Oferta
     */
    public function setRequisitos($requisitos)
    {
        $this->requisitos = $requisitos;

        return $this;
    }

    /**
     * Get requisitos
     *
     * @return string
     */
    public function getRequisitos()
    {
        return $this->requisitos;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Oferta
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
     * Set industria
     *
     * @param string $industria
     *
     * @return Oferta
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
     * Set referencia
     *
     * @param string $referencia
     *
     * @return Oferta
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     *
     * @return Oferta
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set nivel
     *
     * @param string $nivel
     *
     * @return Oferta
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
     * Set nVacantes
     *
     * @param integer $nVacantes
     *
     * @return Oferta
     */
    public function setNVacantes($nVacantes)
    {
        $this->nVacantes = $nVacantes;

        return $this;
    }

    /**
     * Get nVacantes
     *
     * @return integer
     */
    public function getNVacantes()
    {
        return $this->nVacantes;
    }

    /**
     * Set duracionContrato
     *
     * @param string $duracionContrato
     *
     * @return Oferta
     */
    public function setDuracionContrato($duracionContrato)
    {
        $this->duracionContrato = $duracionContrato;

        return $this;
    }

    /**
     * Get duracionContrato
     *
     * @return string
     */
    public function getDuracionContrato()
    {
        return $this->duracionContrato;
    }

    /**
     * Set personalCargo
     *
     * @param string $personalCargo
     *
     * @return Oferta
     */
    public function setPersonalCargo($personalCargo)
    {
        $this->personalCargo = $personalCargo;

        return $this;
    }

    /**
     * Get personalCargo
     *
     * @return string
     */
    public function getPersonalCargo()
    {
        return $this->personalCargo;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $empresa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->empresa = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add empresa
     *
     * @param \AppBundle\Entity\Empresa $empresa
     *
     * @return Oferta
     */
    public function addEmpresa(\AppBundle\Entity\Empresa $empresa)
    {
        $this->empresa[] = $empresa;

        return $this;
    }

    /**
     * Remove empresa
     *
     * @param \AppBundle\Entity\Empresa $empresa
     */
    public function removeEmpresa(\AppBundle\Entity\Empresa $empresa)
    {
        $this->empresa->removeElement($empresa);
    }

    /**
     * Get empresa
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }
}
