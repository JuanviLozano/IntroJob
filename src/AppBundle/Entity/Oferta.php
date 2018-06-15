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
    private $provincia;

    /**
     * @var string
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
    private $tipoPago;

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
    private $horario;

    /**
     * @var string
     */
    private $personalCargo;

    /**
     * @var boolean
     */
    private $estado;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $usuOferta;

    /**
     * @var \AppBundle\Entity\Empresa
     */
    private $empresa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->usuOferta = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set fechaCreacion
     *
     * @param string $fechaCreacion
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
     * @return string
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
     * Set tipoPago
     *
     * @param string $tipoPago
     *
     * @return Oferta
     */
    public function setTipoPago($tipoPago)
    {
        $this->tipoPago = $tipoPago;

        return $this;
    }

    /**
     * Get tipoPago
     *
     * @return string
     */
    public function getTipoPago()
    {
        return $this->tipoPago;
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
     * Set horario
     *
     * @param string $horario
     *
     * @return Oferta
     */
    public function setHorario($horario)
    {
        $this->horario = $horario;

        return $this;
    }

    /**
     * Get horario
     *
     * @return string
     */
    public function getHorario()
    {
        return $this->horario;
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
     * Set estado
     *
     * @param boolean $estado
     *
     * @return Oferta
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return boolean
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Add usuOfertum
     *
     * @param \AppBundle\Entity\usuario_oferta $usuOfertum
     *
     * @return Oferta
     */
    public function addUsuOfertum(\AppBundle\Entity\usuario_oferta $usuOfertum)
    {
        $this->usuOferta[] = $usuOfertum;

        return $this;
    }

    /**
     * Remove usuOfertum
     *
     * @param \AppBundle\Entity\usuario_oferta $usuOfertum
     */
    public function removeUsuOfertum(\AppBundle\Entity\usuario_oferta $usuOfertum)
    {
        $this->usuOferta->removeElement($usuOfertum);
    }

    /**
     * Get usuOferta
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuOferta()
    {
        return $this->usuOferta;
    }

    /**
     * Set empresa
     *
     * @param \AppBundle\Entity\Empresa $empresa
     *
     * @return Oferta
     */
    public function setEmpresa(\AppBundle\Entity\Empresa $empresa = null)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return \AppBundle\Entity\Empresa
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }
}
