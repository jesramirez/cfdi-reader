<?php

namespace Sismut\CFDIReader\DataTypes;

/**
 * User: @fabianjuarezmx
 * Date: 29/01/2017
 * Time: 09:26 PM
 */
class EmisorDTO extends ContribuyenteAbstractDTO
{
    /**
     * @var DomicilioFiscalEmisorDTO
     */
    protected $domicilioFiscal;

    /**
     * @var RegimenFiscalDTO
     */
    protected $regimenFiscal;

    /**
     * @return DomicilioFiscalEmisorDTO
     */
    public function getDomicilioFiscal()
    {
        return $this->domicilioFiscal;
    }

    /**
     * @param DomicilioFiscalEmisorDTO $domicilioFiscal
     * @return EmisorDTO
     */
    public function setDomicilioFiscal($domicilioFiscal)
    {
        $this->domicilioFiscal = $domicilioFiscal;
        return $this;
    }

    /**
     * @return RegimenFiscalDTO
     */
    public function getRegimenFiscal()
    {
        return $this->regimenFiscal;
    }

    /**
     * @param RegimenFiscalDTO $regimenFiscal
     * @return EmisorDTO
     */
    public function setRegimenFiscal($regimenFiscal)
    {
        $this->regimenFiscal = $regimenFiscal;
        return $this;
    }
}
