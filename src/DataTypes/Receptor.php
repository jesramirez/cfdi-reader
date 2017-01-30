<?php

namespace CFDI\Reader\DataTypes;

/**
 * Datos del nodo Receptor
 * User: @fabianjuarezmx
 * Date: 29/01/2017
 * Time: 09:27 PM
 */
class ReceptorDTO
{
    /**
     * @var
     */
    protected $nombre;

    /**
     * @var
     */
    protected $rfc;

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getRfc()
    {
        return $this->rfc;
    }

    /**
     * @param mixed $rfc
     */
    public function setRfc($rfc)
    {
        $this->rfc = $rfc;
    }
}
