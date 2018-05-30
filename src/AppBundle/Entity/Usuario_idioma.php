<?php

namespace AppBundle\Entity;

/**
 * Usuario_idioma
 */
class Usuario_idioma
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idUsuario;

    /**
     * @var integer
     */
    private $idIdioma;

    /**
     * @var string
     */
    private $conocimiento;

    /**
     * @var \AppBundle\Entity\Usuario
     */
    private $usuario;

    /**
     * @var \AppBundle\Entity\Usu_idioma
     */
    private $idioma;


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
     * Set idUsuario
     *
     * @param integer $idUsuario
     *
     * @return Usuario_idioma
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return integer
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set idIdioma
     *
     * @param integer $idIdioma
     *
     * @return Usuario_idioma
     */
    public function setIdIdioma($idIdioma)
    {
        $this->idIdioma = $idIdioma;

        return $this;
    }

    /**
     * Get idIdioma
     *
     * @return integer
     */
    public function getIdIdioma()
    {
        return $this->idIdioma;
    }

    /**
     * Set conocimiento
     *
     * @param string $conocimiento
     *
     * @return Usuario_idioma
     */
    public function setConocimiento($conocimiento)
    {
        $this->conocimiento = $conocimiento;

        return $this;
    }

    /**
     * Get conocimiento
     *
     * @return string
     */
    public function getConocimiento()
    {
        return $this->conocimiento;
    }

    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Usuario_idioma
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

    /**
     * Set idioma
     *
     * @param \AppBundle\Entity\Usu_idioma $idioma
     *
     * @return Usuario_idioma
     */
    public function setIdioma(\AppBundle\Entity\Usu_idioma $idioma = null)
    {
        $this->idioma = $idioma;

        return $this;
    }

    /**
     * Get idioma
     *
     * @return \AppBundle\Entity\Usu_idioma
     */
    public function getIdioma()
    {
        return $this->idioma;
    }
}

