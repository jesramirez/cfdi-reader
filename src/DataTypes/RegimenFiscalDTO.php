<?php

namespace Sismut\CFDIReader\DataTypes;

/**
 * User: @fabianjuarezmx
 * Date: 01/02/2017
 * Time: 12:43 AM
 */
class RegimenFiscalDTO
{
    /**
     * Regimen Fiscal
     * @var string
     */
    protected $regimen;

    /**
     * @return string
     */
    public function getRegimen()
    {
        return $this->regimen;
    }

    /**
     * @param string $regimen
     * @return RegimenFiscalDTO
     */
    public function setRegimen($regimen)
    {
        $this->regimen = $regimen;
        return $this;
    }
}
