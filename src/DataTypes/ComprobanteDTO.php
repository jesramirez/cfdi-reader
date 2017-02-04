<?php

namespace Sismut\CFDIReader\DataTypes;

/**
 * User: @fabianjuarezmx
 * Date: 29/01/2017
 * Time: 09:24 PM
 */
class ComprobanteDTO
{
    /**
     * @var EmisorDTO
     */
    protected $emisor;

    /**
     * @var ReceptorDTO
     */
    protected $receptor;

    /**
     * @var array
     */
    protected $conceptos;

    /**
     * @var ImpuestosDTO
     */
    protected $impuestos;

    /**
     * @var TimbreFiscalDigitalDTO
     */
    protected $timbreFiscalDigital;

    /**
     * @return EmisorDTO
     */
    public function getEmisor()
    {
        return $this->emisor;
    }

    /**
     * @param EmisorDTO $emisor
     * @return ComprobanteDTO
     */
    public function setEmisor($emisor)
    {
        $this->emisor = $emisor;
        return $this;
    }

    /**
     * @return ReceptorDTO
     */
    public function getReceptor()
    {
        return $this->receptor;
    }

    /**
     * @param ReceptorDTO $receptor
     * @return ComprobanteDTO
     */
    public function setReceptor($receptor)
    {
        $this->receptor = $receptor;
        return $this;
    }

    /**
     * @return array
     */
    public function getConceptos()
    {
        return $this->conceptos;
    }

    /**
     * @param array $conceptos
     * @return ComprobanteDTO
     */
    public function setConceptos($conceptos)
    {
        $this->conceptos = $conceptos;
        return $this;
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
     * @return ComprobanteDTO
     */
    public function setImpuestos($impuestos)
    {
        $this->impuestos = $impuestos;
        return $this;
    }

    /**
     * @return TimbreFiscalDigitalDTO
     */
    public function getTimbreFiscalDigital()
    {
        return $this->timbreFiscalDigital;
    }

    /**
     * @param TimbreFiscalDigitalDTO $timbreFiscalDigital
     * @return ComprobanteDTO
     */
    public function setTimbreFiscalDigital($timbreFiscalDigital)
    {
        $this->timbreFiscalDigital = $timbreFiscalDigital;
        return $this;
    }
}
