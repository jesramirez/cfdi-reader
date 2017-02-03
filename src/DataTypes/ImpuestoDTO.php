<?php

namespace CFDI\Reader\DataTypes;

/**
 * User: @fabianjuarezmx
 * Date: 29/01/2017
 * Time: 09:28 PM
 */
class ImpuestoDTO
{
    /**
     * @var
     */
    protected $importe;

    /**
     * @var
     */
    protected $impuesto;

    /**
     * @var
     */
    protected $tasa;

    /**
     * @return mixed
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * @param mixed $importe
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;
    }

    /**
     * @return mixed
     */
    public function getImpuesto()
    {
        return $this->impuesto;
    }

    /**
     * @param mixed $impuesto
     */
    public function setImpuesto($impuesto)
    {
        $this->impuesto = $impuesto;
    }

    /**
     * @return mixed
     */
    public function getTasa()
    {
        return $this->tasa;
    }

    /**
     * @param mixed $tasa
     */
    public function setTasa($tasa)
    {
        $this->tasa = $tasa;
    }
}
