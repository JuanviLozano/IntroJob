<?php

namespace AppBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usu_idioma
 */
class Usu_idioma implements UserInterface, \Serializable
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $leido;

    /**
     * @var string
     */
    private $hablado;

    /**
     * @var string
     */
    private $escrito;


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
     * Set leido
     *
     * @param string $leido
     *
     * @return Usu_idioma
     */
    public function setLeido($leido)
    {
        $this->leido = $leido;

        return $this;
    }

    /**
     * Get leido
     *
     * @return string
     */
    public function getLeido()
    {
        return $this->leido;
    }

    /**
     * Set hablado
     *
     * @param string $hablado
     *
     * @return Usu_idioma
     */
    public function setHablado($hablado)
    {
        $this->hablado = $hablado;

        return $this;
    }

    /**
     * Get hablado
     *
     * @return string
     */
    public function getHablado()
    {
        return $this->hablado;
    }

    /**
     * Set escrito
     *
     * @param string $escrito
     *
     * @return Usu_idioma
     */
    public function setEscrito($escrito)
    {
        $this->escrito = $escrito;

        return $this;
    }

    /**
     * Get escrito
     *
     * @return string
     */
    public function getEscrito()
    {
        return $this->escrito;
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
     * @return Usu_idioma
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
     * @var \AppBundle\Entity\Idioma
     */
    private $idiomas;


    /**
     * Set idiomas
     *
     * @param \AppBundle\Entity\Idioma $idiomas
     *
     * @return Usu_idioma
     */
    public function setIdiomas(\AppBundle\Entity\Idioma $idiomas = null)
    {
        $this->idiomas = $idiomas;

        return $this;
    }

    /**
     * Get idiomas
     *
     * @return \AppBundle\Entity\Idioma
     */
    public function getIdiomas()
    {
        return $this->idiomas;
    }
    /**
     * @var \AppBundle\Entity\Nivel
     */
    private $nivel;


    /**
     * Set nivel
     *
     * @param \AppBundle\Entity\Nivel $nivel
     *
     * @return Usu_idioma
     */
    public function setNivel(\AppBundle\Entity\Nivel $nivel = null)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return \AppBundle\Entity\Nivel
     */
    public function getNivel()
    {
        return $this->nivel;
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
            $this->escrito,
            $this->nivel,
            $this->leido,
            $this->idiomas,
            $this->hablado,
        ));
    }

    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->usuario,
            $this->escrito,
            $this->nivel,
            $this->leido,
            $this->idiomas,
            $this->hablado,
        ) = $this->unserialize($serialized);
    }

    public function __toString()
    {
        return (string) $this->getIdiomas();
    }
}
