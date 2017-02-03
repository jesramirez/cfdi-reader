<?php

namespace CFDI\Interfaces;

/**
 * User: @fabianjuarezmx
 * Date: 01/02/2017
 * Time: 11:44 PM
 */
interface TaxReceiptReaderInterface
{
    /**
     * @return string
     */
    public function getLugarExpedicion();

    /**
     * @return string
     */
    public function getMoneda();

    /**
     * @return string
     */
    public function getCertificado();

    /**
     * @return string
     */
    public function getFecha();

    /**
     * @return string
     */
    public function getFolio();

    /**
     * @return string
     */
    public function getFormaDePago();

    /**
     * @return string
     */
    public function getMetodoDePago();

    /**
     * @return string
     */
    public function getNoCertificado();

    /**
     * @return string
     */
    public function getSello();

    /**
     * @return string
     */
    public function getSubTotal();

    /**
     * @return string
     */
    public function getTipoDeComprobante();

    /**
     * @return string
     */
    public function getTotal();

    /**
     * @return string
     */
    public function getVersion();

    /**
     * @return string
     */
    public function getEmisorNombre();

    /**
     * @return string
     */
    public function getEmisorRFC();

    /**
     * @return string
     */
    public function getEmisorDomicilioFiscalCalle();

    /**
     * @return string
     */
    public function getEmisorDomicilioFiscalCodigoPostal();

    /**
     * @return string
     */
    public function getEmisorDomicilioFiscalColonia();

    /**
     * @return string
     */
    public function getEmisorDomicilioFiscalEstado();

    /**
     * @return string
     */
    public function getEmisorDomicilioFiscalMunicipio();

    /**
     * @return string
     */
    public function getEmisorDomicilioFiscalNoExterior();

    /**
     * @return string
     */
    public function getEmisorDomicilioFiscalPais();

    /**
     * @return string
     */
    public function getEmisorRegimenFiscal();

    /**
     * @return string
     */
    public function getReceptorNombre();

    /**
     * @return string
     */
    public function getReceptorRFC();

    /**
     * @return string
     */
    public function getReceptorDomicilioCalle();

    /**
     * @return string
     */
    public function getReceptorDomicilioCodigoPostal();

    /**
     * @return string
     */
    public function getReceptorDomicilioColonia();

    /**
     * @return string
     */
    public function getReceptorDomicilioEstado();

    /**
     * @return string
     */
    public function getReceptorDomicilioMunicipio();

    /**
     * @return string
     */
    public function getReceptorDomicilioPais();

    /**
     * @return array
     */
    public function getConceptos();

    /**
     * @return array
     */
    public function getImpuestos();

    /**
     * @return string
     */
    public function getTotalImpuestosRetenidos();

    /**
     * @return string
     */
    public function getTotalImpuestosTrasladados();

    /**
     * @return string
     */
    public function getTFDFechaTimbrado();

    /**
     * @return string
     */
    public function getTFDUUID();

    /**
     * @return string
     */
    public function getTFDNoCertificadoSAT();

    /**
     * @return string
     */
    public function getTFDSelloCFD();

    /**
     * @return string
     */
    public function getTFDSelloSAT();

    /**
     * @return string
     */
    public function getTFDVersion();
}
