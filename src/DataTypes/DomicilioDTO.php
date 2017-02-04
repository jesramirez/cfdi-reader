<?php

namespace Sismut\CFDIReader\DataTypes;

/**
 * User: @fabianjuarezmx
 * Date: 01/02/2017
 * Time: 12:20 AM
 */
class DomicilioDTO
{
    /**
     * @var string
     */
    protected $calle;

    /**
     * @var string
     */
    protected $codigoPostal;

    /**
     * @var string
     */
    protected $colonia;

    /**
     * @var string
     */
    protected $estado;

    /**
     * @var string
     */
    protected $municipio;

    /**
     * @var string
     */
    protected $pais;

    /**
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * @param string $calle
     * @return DireccionAbstractDTO
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;
        return $this;
    }

    /**
     * @return string
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * @param string $codigoPostal
     * @return DireccionAbstractDTO
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;
        return $this;
    }

    /**
     * @return string
     */
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * @param string $colonia
     * @return DireccionAbstractDTO
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;
        return $this;
    }

    /**
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param string $estado
     * @return DireccionAbstractDTO
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }

    /**
     * @return string
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * @param string $municipio
     * @return DireccionAbstractDTO
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
        return $this;
    }

    /**
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * @param string $pais
     * @return DireccionAbstractDTO
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
        return $this;
    }
}
