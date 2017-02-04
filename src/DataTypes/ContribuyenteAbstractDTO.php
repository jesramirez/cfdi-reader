<?php

namespace Sismut\CFDIReader\DataTypes;

/**
 * User: @fabianjuarezmx
 * Date: 31/01/2017
 * Time: 11:55 PM
 */
abstract class ContribuyenteAbstractDTO
{
    /**
     * Razón social
     * @var string
     */
    protected $nombre;

    /**
     * Registro Federal de Contribuyentes
     * @var string
     */
    protected $rfc;

    /**
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param string $nombre
     * @return ContribuyenteAbstractDTO
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }

    /**
     * @return string
     */
    public function getRFC()
    {
        return $this->rfc;
    }

    /**
     * @param string $rfc
     * @return ContribuyenteAbstractDTO
     */
    public function setRFC($rfc)
    {
        $this->rfc = $rfc;
        return $this;
    }
}
