<?php

namespace AppBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Empresa
 */
class Empresa implements UserInterface, \Serializable
{
    /**
     * @var int
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
     * @var string
     */
    private $codigoPostal;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var int
     */
    private $telefono;

    /**
     * @var int
     */
    private $fax;

    /**
     * @var string
     */
    private $imagen;


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
     * @param string $codigoPostal
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
     * @return string
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
     * @return int
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
     * @return int
     */
    public function getFax()
    {
        return $this->fax;
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
     * @var \AppBundle\Entity\Provincias
     */
    private $provincias;

    /**
     * @var \AppBundle\Entity\Paises
     */
    private $paises;


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
     * @return string|void
     */
    public function serialize()
    {
        return serialize(array(
            $this->password,
            $this->id,
            $this->imagen,
            $this->email,
            $this->direccion,
            $this->telefono,
            $this->nombre,
            $this->alias,
            $this->municipio,
            $this->paises,
            $this->provincias
        ));
    }

    /**
     * @param string $serialized
     */
    public function unserialize($serialized)
    {
        list(
            $this->password,
            $this->id,
            $this->imagen,
            $this->email,
            $this->direccion,
            $this->telefono,
            $this->nombre,
            $this->alias,
            $this->municipio,
            $this->paises,
            $this->provincias
            ) = unserialize($serialized);
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

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->email;
    }


    public function eraseCredentials()
    {
        return null;
    }

    public function __toString()
    {
        return $this->serialize();
    }
}
