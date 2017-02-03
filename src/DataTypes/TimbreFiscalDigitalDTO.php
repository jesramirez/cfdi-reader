<?php

namespace CFDI\Reader\DataTypes;

/**
 * User: @fabianjuarezmx
 * Date: 02/02/2017
 * Time: 11:35 PM
 */
class TimbreFiscalDigitalDTO
{
    /**
     * @var string
     */
    protected $fechaTimbrado;

    /**
     * @var string
     */
    protected $UUID;

    /**
     * @var string
     */
    protected $noCertificado;

    /**
     * @var string
     */
    protected $selloCFD;

    /**
     * @var string
     */
    protected $selloSAT;

    /**
     * @var string
     */
    protected $version;

    /**
     * @return string
     */
    public function getFechaTimbrado()
    {
        return $this->fechaTimbrado;
    }

    /**
     * @param string $fechaTimbrado
     * @return TimbreFiscalDigitalDTO
     */
    public function setFechaTimbrado($fechaTimbrado)
    {
        $this->fechaTimbrado = $fechaTimbrado;
        return $this;
    }

    /**
     * @return string
     */
    public function getUUID()
    {
        return $this->UUID;
    }

    /**
     * @param string $UUID
     * @return TimbreFiscalDigitalDTO
     */
    public function setUUID($UUID)
    {
        $this->UUID = $UUID;
        return $this;
    }

    /**
     * @return string
     */
    public function getNoCertificado()
    {
        return $this->noCertificado;
    }

    /**
     * @param string $noCertificado
     * @return TimbreFiscalDigitalDTO
     */
    public function setNoCertificado($noCertificado)
    {
        $this->noCertificado = $noCertificado;
        return $this;
    }

    /**
     * @return string
     */
    public function getSelloCFD()
    {
        return $this->selloCFD;
    }

    /**
     * @param string $selloCFD
     * @return TimbreFiscalDigitalDTO
     */
    public function setSelloCFD($selloCFD)
    {
        $this->selloCFD = $selloCFD;
        return $this;
    }

    /**
     * @return string
     */
    public function getSelloSAT()
    {
        return $this->selloSAT;
    }

    /**
     * @param string $selloSAT
     * @return TimbreFiscalDigitalDTO
     */
    public function setSelloSAT($selloSAT)
    {
        $this->selloSAT = $selloSAT;
        return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     * @return TimbreFiscalDigitalDTO
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }
}
