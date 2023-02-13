<?php

declare(strict_types=1);

namespace NfseLondrina\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Consultar ServiceType
 * @subpackage Services
 */
class Consultar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ConsultarNfseServicoPrestado
     * Meta information extracted from the WSDL
     * - documentation: Consulta uma nota fiscal emitida
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NfseLondrina\StructType\TcConsultarNfseServicoPrestadoEnvio $consultarNfseServicoPrestadoEnvio
     * @return array|bool
     */
    public function ConsultarNfseServicoPrestado(\NfseLondrina\StructType\TcConsultarNfseServicoPrestadoEnvio $consultarNfseServicoPrestadoEnvio)
    {
        try {
            $this->setResult($resultConsultarNfseServicoPrestado = $this->getSoapClient()->__soapCall('ConsultarNfseServicoPrestado', [
                $consultarNfseServicoPrestadoEnvio,
            ], [], [], $this->outputHeaders));
        
            return $resultConsultarNfseServicoPrestado;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ConsultarRpsServicoPrestado
     * Meta information extracted from the WSDL
     * - documentation: Consulta uma nota fiscal emitida por RPS
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NfseLondrina\StructType\TcConsultarRpsServicoPrestadoEnvio $consultarRpsServicoPrestadoEnvio
     * @return array|bool
     */
    public function ConsultarRpsServicoPrestado(\NfseLondrina\StructType\TcConsultarRpsServicoPrestadoEnvio $consultarRpsServicoPrestadoEnvio)
    {
        try {
            $this->setResult($resultConsultarRpsServicoPrestado = $this->getSoapClient()->__soapCall('ConsultarRpsServicoPrestado', [
                $consultarRpsServicoPrestadoEnvio,
            ], [], [], $this->outputHeaders));
        
            return $resultConsultarRpsServicoPrestado;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named ConsultarCadastroContribuinte
     * Meta information extracted from the WSDL
     * - documentation: Consulta dados cadastrais de um contribuinte
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NfseLondrina\StructType\TcConsultarCadastroContribuinteEnvio $consultarCadastroContribuinteEnvio
     * @return array|bool
     */
    public function ConsultarCadastroContribuinte(\NfseLondrina\StructType\TcConsultarCadastroContribuinteEnvio $consultarCadastroContribuinteEnvio)
    {
        try {
            $this->setResult($resultConsultarCadastroContribuinte = $this->getSoapClient()->__soapCall('ConsultarCadastroContribuinte', [
                $consultarCadastroContribuinteEnvio,
            ], [], [], $this->outputHeaders));
        
            return $resultConsultarCadastroContribuinte;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return array
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
