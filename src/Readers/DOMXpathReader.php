<?php

namespace Sismut\CFDIReader\Reader;

use DOMDocument;
use DOMXPath;
use Sismut\CFDIReader\Interfaces\TaxReceiptReaderInterface;

/**
 * User: @fabianjuarezmx
 * Date: 03/02/2017
 * Time: 10:28 PM
 */
class DOMXpathReader implements TaxReceiptReaderInterface
{
    /**
     * @var DOMXPath
     */
    protected $DOMXPath;

    /**
     * @param $CFDIString
     * @return $this
     */
    public function loadXML($CFDIString)
    {
        $dom = new DOMDocument();
        $dom->loadXML($CFDIString);

        $this->DOMXPath = new DOMXPath($dom);
        $this->DOMXPath->registerNamespace('cfdi', self::NAMESPACE_CFDI);
        $this->DOMXPath->registerNamespace('tfd', self::NAMESPACE_TFD);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getLugarExpedicion()
    {
        // TODO: Implement getLugarExpedicion() method.
    }

    /**
     * @inheritDoc
     */
    public function getMoneda()
    {
        // TODO: Implement getMoneda() method.
    }

    /**
     * @inheritDoc
     */
    public function getCertificado()
    {
        // TODO: Implement getCertificado() method.
    }

    /**
     * @inheritDoc
     */
    public function getFecha()
    {
        // TODO: Implement getFecha() method.
    }

    /**
     * @inheritDoc
     */
    public function getFolio()
    {
        // TODO: Implement getFolio() method.
    }

    /**
     * @inheritDoc
     */
    public function getFormaDePago()
    {
        // TODO: Implement getFormaDePago() method.
    }

    /**
     * @inheritDoc
     */
    public function getMetodoDePago()
    {
        // TODO: Implement getMetodoDePago() method.
    }

    /**
     * @inheritDoc
     */
    public function getNoCertificado()
    {
        // TODO: Implement getNoCertificado() method.
    }

    /**
     * @inheritDoc
     */
    public function getSello()
    {
        // TODO: Implement getSello() method.
    }

    /**
     * @inheritDoc
     */
    public function getSubTotal()
    {
        // TODO: Implement getSubTotal() method.
    }

    /**
     * @inheritDoc
     */
    public function getTipoDeComprobante()
    {
        // TODO: Implement getTipoDeComprobante() method.
    }

    /**
     * @inheritDoc
     */
    public function getTotal()
    {
        // TODO: Implement getTotal() method.
    }

    /**
     * @inheritDoc
     */
    public function getVersion()
    {
        // TODO: Implement getVersion() method.
    }

    /**
     * @inheritDoc
     */
    public function getEmisorNombre()
    {
        // TODO: Implement getEmisorNombre() method.
    }

    /**
     * @inheritDoc
     */
    public function getEmisorRFC()
    {
        // TODO: Implement getEmisorRFC() method.
    }

    /**
     * @inheritDoc
     */
    public function getEmisorDomicilioFiscalCalle()
    {
        // TODO: Implement getEmisorDomicilioFiscalCalle() method.
    }

    /**
     * @inheritDoc
     */
    public function getEmisorDomicilioFiscalCodigoPostal()
    {
        // TODO: Implement getEmisorDomicilioFiscalCodigoPostal() method.
    }

    /**
     * @inheritDoc
     */
    public function getEmisorDomicilioFiscalColonia()
    {
        // TODO: Implement getEmisorDomicilioFiscalColonia() method.
    }

    /**
     * @inheritDoc
     */
    public function getEmisorDomicilioFiscalEstado()
    {
        // TODO: Implement getEmisorDomicilioFiscalEstado() method.
    }

    /**
     * @inheritDoc
     */
    public function getEmisorDomicilioFiscalMunicipio()
    {
        // TODO: Implement getEmisorDomicilioFiscalMunicipio() method.
    }

    /**
     * @inheritDoc
     */
    public function getEmisorDomicilioFiscalNoExterior()
    {
        // TODO: Implement getEmisorDomicilioFiscalNoExterior() method.
    }

    /**
     * @inheritDoc
     */
    public function getEmisorDomicilioFiscalPais()
    {
        // TODO: Implement getEmisorDomicilioFiscalPais() method.
    }

    /**
     * @inheritDoc
     */
    public function getEmisorRegimenFiscal()
    {
        // TODO: Implement getEmisorRegimenFiscal() method.
    }

    /**
     * @inheritDoc
     */
    public function getReceptorNombre()
    {
        // TODO: Implement getReceptorNombre() method.
    }

    /**
     * @inheritDoc
     */
    public function getReceptorRFC()
    {
        // TODO: Implement getReceptorRFC() method.
    }

    /**
     * @inheritDoc
     */
    public function getReceptorDomicilioCalle()
    {
        // TODO: Implement getReceptorDomicilioCalle() method.
    }

    /**
     * @inheritDoc
     */
    public function getReceptorDomicilioCodigoPostal()
    {
        // TODO: Implement getReceptorDomicilioCodigoPostal() method.
    }

    /**
     * @inheritDoc
     */
    public function getReceptorDomicilioColonia()
    {
        // TODO: Implement getReceptorDomicilioColonia() method.
    }

    /**
     * @inheritDoc
     */
    public function getReceptorDomicilioEstado()
    {
        // TODO: Implement getReceptorDomicilioEstado() method.
    }

    /**
     * @inheritDoc
     */
    public function getReceptorDomicilioMunicipio()
    {
        // TODO: Implement getReceptorDomicilioMunicipio() method.
    }

    /**
     * @inheritDoc
     */
    public function getReceptorDomicilioPais()
    {
        // TODO: Implement getReceptorDomicilioPais() method.
    }

    /**
     * @inheritDoc
     */
    public function getConceptos()
    {
        // TODO: Implement getConceptos() method.
    }

    /**
     * @inheritDoc
     */
    public function getImpuestos()
    {
        // TODO: Implement getImpuestos() method.
    }

    /**
     * @inheritDoc
     */
    public function getTotalImpuestosRetenidos()
    {
        // TODO: Implement getTotalImpuestosRetenidos() method.
    }

    /**
     * @inheritDoc
     */
    public function getTotalImpuestosTrasladados()
    {
        // TODO: Implement getTotalImpuestosTrasladados() method.
    }

    /**
     * @inheritDoc
     */
    public function getTFDFechaTimbrado()
    {
        // TODO: Implement getTFDFechaTimbrado() method.
    }

    /**
     * @inheritDoc
     */
    public function getTFDUUID()
    {
        // TODO: Implement getTFDUUID() method.
    }

    /**
     * @inheritDoc
     */
    public function getTFDNoCertificadoSAT()
    {
        // TODO: Implement getTFDNoCertificadoSAT() method.
    }

    /**
     * @inheritDoc
     */
    public function getTFDSelloCFD()
    {
        // TODO: Implement getTFDSelloCFD() method.
    }

    /**
     * @inheritDoc
     */
    public function getTFDSelloSAT()
    {
        // TODO: Implement getTFDSelloSAT() method.
    }

    /**
     * @inheritDoc
     */
    public function getTFDVersion()
    {
        // TODO: Implement getTFDVersion() method.
    }
}
