<?php

namespace AppBundle\Entity;

/**
 * usuario_oferta
 */
class usuario_oferta
{
    /**
     * @var int
     */
    private $id;


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
     * @var \AppBundle\Entity\Oferta
     */
    private $oferta;


    /**
     * Set oferta
     *
     * @param \AppBundle\Entity\Oferta $oferta
     *
     * @return usuario_oferta
     */
    public function setOferta(\AppBundle\Entity\Oferta $oferta = null)
    {
        $this->oferta = $oferta;

        return $this;
    }

    /**
     * Get oferta
     *
     * @return \AppBundle\Entity\Oferta
     */
    public function getOferta()
    {
        return $this->oferta;
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
     * @return usuario_oferta
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
     * @var \DateTime
     */
    private $solicitud;


    /**
     * Set solicitud
     *
     * @param \DateTime $solicitud
     *
     * @return usuario_oferta
     */
    public function setSolicitud($solicitud)
    {
        $this->solicitud = $solicitud;

        return $this;
    }

    /**
     * Get solicitud
     *
     * @return \DateTime
     */
    public function getSolicitud()
    {
        return $this->solicitud;
    }
}
