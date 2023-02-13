<?php

declare(strict_types=1);

namespace NfseLondrina\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Cancelar ServiceType
 * @subpackage Services
 */
class Cancelar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named CancelarNota
     * Meta information extracted from the WSDL
     * - documentation: Faz o cancelamento da nota fiscal eletrônica
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NfseLondrina\StructType\TcDescricaoCancelaNota $descricaoCancelaNota
     * @return array|bool
     */
    public function CancelarNota(\NfseLondrina\StructType\TcDescricaoCancelaNota $descricaoCancelaNota)
    {
        try {
            $this->setResult($resultCancelarNota = $this->getSoapClient()->__soapCall('CancelarNota', [
                $descricaoCancelaNota,
            ], [], [], $this->outputHeaders));
        
            return $resultCancelarNota;
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
