<?php

namespace CFDI\Reader\DataTypes;

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
     * @return array
     */
    public function getTraslados()
    {
        return $this->traslados;
    }

    /**
     * @param TrasladoDTO $traslado
     */
    public function addTraslado(TrasladoDTO $traslado)
    {
        array_push($this->traslados, $traslado);
    }
}
