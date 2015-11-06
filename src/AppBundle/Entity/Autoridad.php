<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Autoridad
 *
 * @ORM\Table(name="autoridad")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\AutoridadRepository")
 */
class Autoridad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=50, nullable=true)
     */
    private $cargo;

    /**
     * @var string
     *
     * @ORM\Column(name="partido", type="string", length=80, nullable=true)
     */
    private $partido;

    /**
     * @var string
     *
     * @ORM\Column(name="genero", type="string", length=1, nullable=true)
     */
    private $genero;

    /**
     * @var string
     *
     * @ORM\Column(name="porcentaje", type="decimal", precision=6, scale=2, nullable=true)
     */
    private $porcentaje;

    /**
     * @var string
     *
     * @ORM\Column(name="titularidad", type="string", length=10, nullable=true)
     */
    private $titularidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="posicion", type="integer", nullable=true)
     */
    private $posicion;

    /**
     * @var string
     *
     * @ORM\Column(name="municipio", type="string", length=100, nullable=true)
     */
    private $municipio;

    /**
     * @var string
     *
     * @ORM\Column(name="departamento", type="string", length=50, nullable=true)
     */
    private $departamento;


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
     * Set nombre
     *
     * @param string $nombre
     * @return Autoridad
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
     * Set cargo
     *
     * @param string $cargo
     * @return Autoridad
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set partido
     *
     * @param string $partido
     * @return Autoridad
     */
    public function setPartido($partido)
    {
        $this->partido = $partido;

        return $this;
    }

    /**
     * Get partido
     *
     * @return string 
     */
    public function getPartido()
    {
        return $this->partido;
    }

    /**
     * Set genero
     *
     * @param string $genero
     * @return Autoridad
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return string 
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set porcentaje
     *
     * @param string $porcentaje
     * @return Autoridad
     */
    public function setPorcentaje($porcentaje)
    {
        $this->porcentaje = $porcentaje;

        return $this;
    }

    /**
     * Get porcentaje
     *
     * @return string 
     */
    public function getPorcentaje()
    {
        return $this->porcentaje;
    }

    /**
     * Set titularidad
     *
     * @param string $titularidad
     * @return Autoridad
     */
    public function setTitularidad($titularidad)
    {
        $this->titularidad = $titularidad;

        return $this;
    }

    /**
     * Get titularidad
     *
     * @return string 
     */
    public function getTitularidad()
    {
        return $this->titularidad;
    }

    /**
     * Set posicion
     *
     * @param integer $posicion
     * @return Autoridad
     */
    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;

        return $this;
    }

    /**
     * Get posicion
     *
     * @return integer 
     */
    public function getPosicion()
    {
        return $this->posicion;
    }

    /**
     * Set municipio
     *
     * @param string $municipio
     * @return Autoridad
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
     * Set departamento
     *
     * @param string $departamento
     * @return Autoridad
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return string 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }
}
