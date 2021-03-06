<?php

namespace Sismut\CFDIReader\DataTypes;

/**
 * User: @fabianjuarezmx
 * Date: 01/02/2017
 * Time: 12:32 AM
 */
class DomicilioFiscalEmisorDTO extends DomicilioDTO
{
    /**
     * @var string
     */
    protected $noExterior;

    /**
     * @return string
     */
    public function getNoExterior()
    {
        return $this->noExterior;
    }

    /**
     * @param string $noExterior
     * @return DomicilioFiscalEmisorDTO
     */
    public function setNoExterior($noExterior)
    {
        $this->noExterior = $noExterior;
        return $this;
    }
}
