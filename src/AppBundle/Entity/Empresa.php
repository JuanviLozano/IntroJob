<?php

namespace AppBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Empresa
 */
class Empresa implements UserInterface, \Serializable
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $alias;

    /**
     * @var string
     */
    private $municipio;

    /**
     * @var integer
     */
    private $codigoPostal;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var integer
     */
    private $telefono;

    /**
     * @var integer
     */
    private $fax;

    /**
     * @var string
     */
    private $web;

    /**
     * @var string
     */
    private $imagen;

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $facebook;

    /**
     * @var string
     */
    private $google;

    /**
     * @var string
     */
    private $twitter;

    /**
     * @var string
     */
    private $linkedin;

    /**
     * @var \AppBundle\Entity\Provincias
     */
    private $provincias;

    /**
     * @var \AppBundle\Entity\Paises
     */
    private $paises;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $oferta;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->oferta = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set email
     *
     * @param string $email
     *
     * @return Empresa
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Empresa
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Empresa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set alias
     *
     * @param string $alias
     *
     * @return Empresa
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;

        return $this;
    }

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set municipio
     *
     * @param string $municipio
     *
     * @return Empresa
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return string
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set codigoPostal
     *
     * @param integer $codigoPostal
     *
     * @return Empresa
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return integer
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Empresa
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Empresa
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return integer
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param integer $fax
     *
     * @return Empresa
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return integer
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set web
     *
     * @param string $web
     *
     * @return Empresa
     */
    public function setWeb($web)
    {
        $this->web = $web;

        return $this;
    }

    /**
     * Get web
     *
     * @return string
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Empresa
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Empresa
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
     * Set facebook
     *
     * @param string $facebook
     *
     * @return Empresa
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;

        return $this;
    }

    /**
     * Get facebook
     *
     * @return string
     */
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * Set google
     *
     * @param string $google
     *
     * @return Empresa
     */
    public function setGoogle($google)
    {
        $this->google = $google;

        return $this;
    }

    /**
     * Get google
     *
     * @return string
     */
    public function getGoogle()
    {
        return $this->google;
    }

    /**
     * Set twitter
     *
     * @param string $twitter
     *
     * @return Empresa
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;

        return $this;
    }

    /**
     * Get twitter
     *
     * @return string
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * Set linkedin
     *
     * @param string $linkedin
     *
     * @return Empresa
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;

        return $this;
    }

    /**
     * Get linkedin
     *
     * @return string
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * Set provincias
     *
     * @param \AppBundle\Entity\Provincias $provincias
     *
     * @return Empresa
     */
    public function setProvincias(\AppBundle\Entity\Provincias $provincias = null)
    {
        $this->provincias = $provincias;

        return $this;
    }

    /**
     * Get provincias
     *
     * @return \AppBundle\Entity\Provincias
     */
    public function getProvincias()
    {
        return $this->provincias;
    }

    /**
     * Set paises
     *
     * @param \AppBundle\Entity\Paises $paises
     *
     * @return Empresa
     */
    public function setPaises(\AppBundle\Entity\Paises $paises = null)
    {
        $this->paises = $paises;

        return $this;
    }

    /**
     * Get paises
     *
     * @return \AppBundle\Entity\Paises
     */
    public function getPaises()
    {
        return $this->paises;
    }

    /**
     * Add ofertum
     *
     * @param \AppBundle\Entity\Oferta $ofertum
     *
     * @return Empresa
     */
    public function addOfertum(\AppBundle\Entity\Oferta $ofertum)
    {
        $this->oferta[] = $ofertum;

        return $this;
    }

    /**
     * Remove ofertum
     *
     * @param \AppBundle\Entity\Oferta $ofertum
     */
    public function removeOfertum(\AppBundle\Entity\Oferta $ofertum)
    {
        $this->oferta->removeElement($ofertum);
    }

    /**
     * Get oferta
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOferta()
    {
        return $this->oferta;
    }


    public function getRoles()
    {
        return [
            'ROLE_EMPRESA'
        ];
    }

    public function getSalt()
    {
        return null;
    }


    public function getUsername()
    {
        return $this->getEmail();
    }

    public function eraseCredentials()
    {
        return null;
    }

    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->email,
            $this->password,
            $this->nombre,
            $this->paises,
            $this->web,
            $this->twitter,
            $this->telefono,
            $this->provincias,
            $this->oferta,
            $this->municipio,
            $this->linkedin,
            $this->google,
            $this->fax,
            $this->facebook,
            $this->direccion,
            $this->alias,
            $this->codigoPostal,
            $this->imagen,
            $this->descripcion,
        ));
    }

    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->email,
            $this->password,
            $this->nombre,
            $this->paises,
            $this->web,
            $this->twitter,
            $this->telefono,
            $this->provincias,
            $this->oferta,
            $this->municipio,
            $this->linkedin,
            $this->google,
            $this->fax,
            $this->facebook,
            $this->direccion,
            $this->alias,
            $this->codigoPostal,
            $this->imagen,
            $this->descripcion,
            ) = unserialize($serialized);
    }
}
