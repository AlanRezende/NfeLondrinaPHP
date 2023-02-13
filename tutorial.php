<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://testeiss.londrina.pr.gov.br/ws/v1_03/sigiss_ws.php?wsdl ',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'http://testeiss.londrina.pr.gov.br/ws/v1_03/sigiss_ws.php?wsdl ',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
];
/**
 * Samples for Gerar ServiceType
 */
$gerar = new \NfseLondrina\ServiceType\Gerar($options);
/**
 * Sample call for GerarNota operation/method
 */
if ($gerar->GerarNota(new \NfseLondrina\StructType\TcDescricaoRps()) !== false) {
    print_r($gerar->getResult());
} else {
    print_r($gerar->getLastError());
}
/**
 * Samples for Cancelar ServiceType
 */
$cancelar = new \NfseLondrina\ServiceType\Cancelar($options);
/**
 * Sample call for CancelarNota operation/method
 */
if ($cancelar->CancelarNota(new \NfseLondrina\StructType\TcDescricaoCancelaNota()) !== false) {
    print_r($cancelar->getResult());
} else {
    print_r($cancelar->getLastError());
}
/**
 * Samples for Consultar ServiceType
 */
$consultar = new \NfseLondrina\ServiceType\Consultar($options);
/**
 * Sample call for ConsultarNfseServicoPrestado operation/method
 */
if ($consultar->ConsultarNfseServicoPrestado(new \NfseLondrina\StructType\TcConsultarNfseServicoPrestadoEnvio()) !== false) {
    print_r($consultar->getResult());
} else {
    print_r($consultar->getLastError());
}
/**
 * Sample call for ConsultarRpsServicoPrestado operation/method
 */
if ($consultar->ConsultarRpsServicoPrestado(new \NfseLondrina\StructType\TcConsultarRpsServicoPrestadoEnvio()) !== false) {
    print_r($consultar->getResult());
} else {
    print_r($consultar->getLastError());
}
/**
 * Sample call for ConsultarCadastroContribuinte operation/method
 */
if ($consultar->ConsultarCadastroContribuinte(new \NfseLondrina\StructType\TcConsultarCadastroContribuinteEnvio()) !== false) {
    print_r($consultar->getResult());
} else {
    print_r($consultar->getLastError());
}
