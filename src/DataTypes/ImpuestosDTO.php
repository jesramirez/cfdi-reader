<?php

namespace Sismut\CFDIReader\DataTypes;

/**
 * User: @fabianjuarezmx
 * Date: 29/01/2017
 * Time: 09:37 PM
 */
class ImpuestosDTO
{
    /**
     * @var array
     */
    protected $traslados = [];

    /**
     * @var array
     */
    protected $retenciones = [];

    /**
     * @return array
     */
    public function getTraslados()
    {
        return $this->traslados;
    }

    /**
     * @param ImpuestoDTO $traslado
     * @return $this
     */
    public function addTraslado(ImpuestoDTO $traslado)
    {
        array_push($this->traslados, $traslado);
        return $this;
    }

    /**
     * @return array
     */
    public function getRetenciones()
    {
        return $this->retenciones;
    }

    /**
     * @param ImpuestoDTO $retencion
     * @return $this
     */
    public function addRetencion(ImpuestoDTO $retencion)
    {
        array_push($this->retenciones, $retencion);
        return $this;
    }
}
