<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usuario
 */
class Usuario implements UserInterface, \Serializable
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $username;

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
    private $apellidos;

    /**
     * @var string
     */
    private $fechaNacimiento;

    /**
     * @var string
     */
    private $sexo;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var integer
     */
    private $codPostal;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $telefono;

    /**
     * @var string
     */
    private $especialidad;

    /**
     * @var string
     */
    private $imagen;


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
     * Set username
     *
     * @param string $username
     *
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuario
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
     * @return Usuario
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
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Usuario
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set fechaNacimiento
     *
     * @param string $fechaNacimiento
     *
     * @return Usuario
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;

        return $this;
    }

    /**
     * Get fechaNacimiento
     *
     * @return string
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     *
     * @return Usuario
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get sexo
     *
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Usuario
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
     * Set codPostal
     *
     * @param integer $codPostal
     *
     * @return Usuario
     */
    public function setCodPostal($codPostal)
    {
        $this->codPostal = $codPostal;

        return $this;
    }

    /**
     * Get codPostal
     *
     * @return integer
     */
    public function getCodPostal()
    {
        return $this->codPostal;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuario
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
     * Set telefono
     *
     * @param integer $telefono
     *
     * @return Usuario
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
     * Set especialidad
     *
     * @param string $especialidad
     *
     * @return Usuario
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
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Usuario
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

    public function getRoles()
    {
        return [
            'ROLE_USER'
        ];
    }

    public function getSalt()
    {
        return null;
    }

    public function eraseCredentials()
    {
        return null;
    }

    public function getPais()
    {
    }

    /**
     * @return string
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->nombre,
            $this->apellidos,
            $this->sexo,
            $this->telefono,
            $this->direccion,
            $this->paises,
            $this->provincias,
            $this->codPostal,
            $this->imagen,
            $this->email,
            $this->fechaNacimiento,
        ));
    }

    /**
     * @param string $serialized
     */
    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->username,
            $this->password,
            $this->nombre,
            $this->apellidos,
            $this->sexo,
            $this->telefono,
            $this->paises,
            $this->provincias,
            $this->direccion,
            $this->codPostal,
            $this->imagen,
            $this->email,
            $this->fechaNacimiento,
            ) = unserialize($serialized);
    }

    /**
     * @var \Doctrine\Common\Collections
     */
    private  $usuario;


    /**
     * Add usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Usuario
     */
    public function addUsuario(\AppBundle\Entity\Usuario $usuario)
    {
        $this->usuario[] = $usuario;

        return $this;
    }

    /**
     * Remove usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     */
    public function removeUsuario(\AppBundle\Entity\Usuario $usuario)
    {
        $this->usuario->removeElement($usuario);
    }

    /**
     * Get usuario
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuarios()
    {
        return $this->usuario;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $idioma;


    /**
     * Add idioma
     *
     * @param \AppBundle\Entity\Usu_idioma $idioma
     *
     * @return Usuario
     */
    public function addIdioma(\AppBundle\Entity\Usu_idioma $idioma)
    {
        $this->idioma[] = $idioma;

        return $this;
    }

    /**
     * Remove idioma
     *
     * @param \AppBundle\Entity\Usu_idioma $idioma
     */
    public function removeIdioma(\AppBundle\Entity\Usu_idioma $idioma)
    {
        $this->idioma->removeElement($idioma);
    }

    /**
     * Get idioma
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $conocimiento;


    /**
     * Add conocimiento
     *
     * @param \AppBundle\Entity\Usu_conocimiento $conocimiento
     *
     * @return Usuarios
     */
    public function addConocimiento(\AppBundle\Entity\Usu_conocimiento $conocimiento)
    {
        $this->conocimiento[] = $conocimiento;

        return $this;
    }

    /**
     * Remove conocimiento
     *
     * @param \AppBundle\Entity\Usu_conocimiento $conocimiento
     */
    public function removeConocimiento(\AppBundle\Entity\Usu_conocimiento $conocimiento)
    {
        $this->conocimiento->removeElement($conocimiento);
    }

    /**
     * Get conocimiento
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getConocimiento()
    {
        return $this->conocimiento;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->conocimiento = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->serialize();
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $educacion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $experiencia;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $informacion;


    /**
     * Add educacion
     *
     * @param \AppBundle\Entity\Usu_educacion $educacion
     *
     * @return Usuario
     */
    public function addEducacion(\AppBundle\Entity\Usu_educacion $educacion)
    {
        $this->educacion[] = $educacion;

        return $this;
    }

    /**
     * Remove educacion
     *
     * @param \AppBundle\Entity\Usu_educacion $educacion
     */
    public function removeEducacion(\AppBundle\Entity\Usu_educacion $educacion)
    {
        $this->educacion->removeElement($educacion);
    }

    /**
     * Get educacion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEducacion()
    {
        return $this->educacion;
    }

    /**
     * Add experiencium
     *
     * @param \AppBundle\Entity\Usu_exp_laboral $experiencium
     *
     * @return Usuario
     */
    public function addExperiencium(\AppBundle\Entity\Usu_exp_laboral $experiencium)
    {
        $this->experiencia[] = $experiencium;

        return $this;
    }

    /**
     * Remove experiencium
     *
     * @param \AppBundle\Entity\Usu_exp_laboral $experiencium
     */
    public function removeExperiencium(\AppBundle\Entity\Usu_exp_laboral $experiencium)
    {
        $this->experiencia->removeElement($experiencium);
    }

    /**
     * Get experiencia
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExperiencia()
    {
        return $this->experiencia;
    }

    /**
     * Add informacion
     *
     * @param \AppBundle\Entity\Usu_informacion $informacion
     *
     * @return Usuario
     */
    public function addInformacion(\AppBundle\Entity\Usu_informacion $informacion)
    {
        $this->informacion[] = $informacion;

        return $this;
    }

    /**
     * Remove informacion
     *
     * @param \AppBundle\Entity\Usu_informacion $informacion
     */
    public function removeInformacion(\AppBundle\Entity\Usu_informacion $informacion)
    {
        $this->informacion->removeElement($informacion);
    }

    /**
     * Get informacion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInformacion()
    {
        return $this->informacion;
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
     * @return Usuario
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
     * @return Usuario
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
}
