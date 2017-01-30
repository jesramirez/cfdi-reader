<?php

namespace CFDI\Reader\DataTypes;

/**
 * User: @fabianjuarezmx
 * Date: 29/01/2017
 * Time: 09:24 PM
 */
class ComprobanteDTO
{
    /**
     * @var Emisor
     */
    protected $emisor;

    /**
     * @var ImpuestosDTO
     */
    protected $impuestos;

    /**
     * @return Emisor
     */
    public function getEmisor()
    {
        return $this->emisor;
    }

    /**
     * @param Emisor $emisor
     */
    public function setEmisor($emisor)
    {
        $this->emisor = $emisor;
    }

    /**
     * @return ImpuestosDTO
     */
    public function getImpuestos()
    {
        return $this->impuestos;
    }

    /**
     * @param ImpuestosDTO $impuestos
     */
    public function setImpuestos($impuestos)
    {
        $this->impuestos = $impuestos;
    }
}
