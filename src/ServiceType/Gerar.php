<?php

declare(strict_types=1);

namespace NfseLondrina\ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Gerar ServiceType
 * @subpackage Services
 */
class Gerar extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GerarNota
     * Meta information extracted from the WSDL
     * - documentation: Gera a nota fiscal eletrônica
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \NfseLondrina\StructType\TcDescricaoRps $descricaoRps
     * @return array|bool
     */
    public function GerarNota(\NfseLondrina\StructType\TcDescricaoRps $descricaoRps)
    {
        try {
            $this->setResult($resultGerarNota = $this->getSoapClient()->__soapCall('GerarNota', [
                $descricaoRps,
            ], [], [], $this->outputHeaders));
        
            return $resultGerarNota;
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
