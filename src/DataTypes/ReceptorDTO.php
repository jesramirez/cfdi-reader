<?php

namespace CFDI\Reader\DataTypes;

/**
 * Datos del nodo Receptor
 * User: @fabianjuarezmx
 * Date: 29/01/2017
 * Time: 09:27 PM
 */
class ReceptorDTO extends ContribuyenteAbstractDTO
{
    /**
     * @var DomicilioDTO
     */
    protected $domicilio;

    /**
     * @return DomicilioDTO
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * @param DomicilioDTO $domicilio
     * @return ReceptorDTO
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;
        return $this;
    }
}
