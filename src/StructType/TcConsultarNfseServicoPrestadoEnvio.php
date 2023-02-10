<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tcConsultarNfseServicoPrestadoEnvio StructType
 * @subpackage Structs
 */
class TcConsultarNfseServicoPrestadoEnvio extends AbstractStructBase
{
    /**
     * The ccm
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $ccm;
    /**
     * The cnpj
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $cnpj;
    /**
     * The cpf
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $cpf;
    /**
     * The senha
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $senha;
    /**
     * The numero_nfse
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $numero_nfse;
    /**
     * Constructor method for tcConsultarNfseServicoPrestadoEnvio
     * @uses TcConsultarNfseServicoPrestadoEnvio::setCcm()
     * @uses TcConsultarNfseServicoPrestadoEnvio::setCnpj()
     * @uses TcConsultarNfseServicoPrestadoEnvio::setCpf()
     * @uses TcConsultarNfseServicoPrestadoEnvio::setSenha()
     * @uses TcConsultarNfseServicoPrestadoEnvio::setNumero_nfse()
     * @param int $ccm
     * @param string $cnpj
     * @param string $cpf
     * @param string $senha
     * @param int $numero_nfse
     */
    public function __construct(int $ccm, string $cnpj, string $cpf, string $senha, int $numero_nfse)
    {
        $this
            ->setCcm($ccm)
            ->setCnpj($cnpj)
            ->setCpf($cpf)
            ->setSenha($senha)
            ->setNumero_nfse($numero_nfse);
    }
    /**
     * Get ccm value
     * @return int
     */
    public function getCcm(): int
    {
        return $this->ccm;
    }
    /**
     * Set ccm value
     * @param int $ccm
     * @return \StructType\TcConsultarNfseServicoPrestadoEnvio
     */
    public function setCcm(int $ccm): self
    {
        // validation for constraint: int
        if (!is_null($ccm) && !(is_int($ccm) || ctype_digit($ccm))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ccm, true), gettype($ccm)), __LINE__);
        }
        $this->ccm = $ccm;
        
        return $this;
    }
    /**
     * Get cnpj value
     * @return string
     */
    public function getCnpj(): string
    {
        return $this->cnpj;
    }
    /**
     * Set cnpj value
     * @param string $cnpj
     * @return \StructType\TcConsultarNfseServicoPrestadoEnvio
     */
    public function setCnpj(string $cnpj): self
    {
        // validation for constraint: string
        if (!is_null($cnpj) && !is_string($cnpj)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cnpj, true), gettype($cnpj)), __LINE__);
        }
        $this->cnpj = $cnpj;
        
        return $this;
    }
    /**
     * Get cpf value
     * @return string
     */
    public function getCpf(): string
    {
        return $this->cpf;
    }
    /**
     * Set cpf value
     * @param string $cpf
     * @return \StructType\TcConsultarNfseServicoPrestadoEnvio
     */
    public function setCpf(string $cpf): self
    {
        // validation for constraint: string
        if (!is_null($cpf) && !is_string($cpf)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cpf, true), gettype($cpf)), __LINE__);
        }
        $this->cpf = $cpf;
        
        return $this;
    }
    /**
     * Get senha value
     * @return string
     */
    public function getSenha(): string
    {
        return $this->senha;
    }
    /**
     * Set senha value
     * @param string $senha
     * @return \StructType\TcConsultarNfseServicoPrestadoEnvio
     */
    public function setSenha(string $senha): self
    {
        // validation for constraint: string
        if (!is_null($senha) && !is_string($senha)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($senha, true), gettype($senha)), __LINE__);
        }
        $this->senha = $senha;
        
        return $this;
    }
    /**
     * Get numero_nfse value
     * @return int
     */
    public function getNumero_nfse(): int
    {
        return $this->numero_nfse;
    }
    /**
     * Set numero_nfse value
     * @param int $numero_nfse
     * @return \StructType\TcConsultarNfseServicoPrestadoEnvio
     */
    public function setNumero_nfse(int $numero_nfse): self
    {
        // validation for constraint: int
        if (!is_null($numero_nfse) && !(is_int($numero_nfse) || ctype_digit($numero_nfse))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numero_nfse, true), gettype($numero_nfse)), __LINE__);
        }
        $this->numero_nfse = $numero_nfse;
        
        return $this;
    }
}
