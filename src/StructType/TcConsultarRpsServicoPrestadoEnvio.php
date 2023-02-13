<?php

declare(strict_types=1);

namespace NfseLondrina\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tcConsultarRpsServicoPrestadoEnvio StructType
 * @subpackage Structs
 */
class TcConsultarRpsServicoPrestadoEnvio extends AbstractStructBase
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
     * The numero_rps
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $numero_rps;
    /**
     * The dia_rps
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $dia_rps;
    /**
     * The mes_rps
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $mes_rps;
    /**
     * The ano_rps
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $ano_rps;
    /**
     * Constructor method for tcConsultarRpsServicoPrestadoEnvio
     * @uses TcConsultarRpsServicoPrestadoEnvio::setCcm()
     * @uses TcConsultarRpsServicoPrestadoEnvio::setCnpj()
     * @uses TcConsultarRpsServicoPrestadoEnvio::setCpf()
     * @uses TcConsultarRpsServicoPrestadoEnvio::setSenha()
     * @uses TcConsultarRpsServicoPrestadoEnvio::setNumero_rps()
     * @uses TcConsultarRpsServicoPrestadoEnvio::setDia_rps()
     * @uses TcConsultarRpsServicoPrestadoEnvio::setMes_rps()
     * @uses TcConsultarRpsServicoPrestadoEnvio::setAno_rps()
     * @param int $ccm
     * @param string $cnpj
     * @param string $cpf
     * @param string $senha
     * @param int $numero_rps
     * @param int $dia_rps
     * @param int $mes_rps
     * @param int $ano_rps
     */
    public function __construct(int $ccm, string $cnpj, string $cpf, string $senha, int $numero_rps, int $dia_rps, int $mes_rps, int $ano_rps)
    {
        $this
            ->setCcm($ccm)
            ->setCnpj($cnpj)
            ->setCpf($cpf)
            ->setSenha($senha)
            ->setNumero_rps($numero_rps)
            ->setDia_rps($dia_rps)
            ->setMes_rps($mes_rps)
            ->setAno_rps($ano_rps);
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
     * @return \NfseLondrina\StructType\TcConsultarRpsServicoPrestadoEnvio
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
     * @return \NfseLondrina\StructType\TcConsultarRpsServicoPrestadoEnvio
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
     * @return \NfseLondrina\StructType\TcConsultarRpsServicoPrestadoEnvio
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
     * @return \NfseLondrina\StructType\TcConsultarRpsServicoPrestadoEnvio
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
     * Get numero_rps value
     * @return int
     */
    public function getNumero_rps(): int
    {
        return $this->numero_rps;
    }
    /**
     * Set numero_rps value
     * @param int $numero_rps
     * @return \NfseLondrina\StructType\TcConsultarRpsServicoPrestadoEnvio
     */
    public function setNumero_rps(int $numero_rps): self
    {
        // validation for constraint: int
        if (!is_null($numero_rps) && !(is_int($numero_rps) || ctype_digit($numero_rps))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numero_rps, true), gettype($numero_rps)), __LINE__);
        }
        $this->numero_rps = $numero_rps;
        
        return $this;
    }
    /**
     * Get dia_rps value
     * @return int
     */
    public function getDia_rps(): int
    {
        return $this->dia_rps;
    }
    /**
     * Set dia_rps value
     * @param int $dia_rps
     * @return \NfseLondrina\StructType\TcConsultarRpsServicoPrestadoEnvio
     */
    public function setDia_rps(int $dia_rps): self
    {
        // validation for constraint: int
        if (!is_null($dia_rps) && !(is_int($dia_rps) || ctype_digit($dia_rps))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($dia_rps, true), gettype($dia_rps)), __LINE__);
        }
        $this->dia_rps = $dia_rps;
        
        return $this;
    }
    /**
     * Get mes_rps value
     * @return int
     */
    public function getMes_rps(): int
    {
        return $this->mes_rps;
    }
    /**
     * Set mes_rps value
     * @param int $mes_rps
     * @return \NfseLondrina\StructType\TcConsultarRpsServicoPrestadoEnvio
     */
    public function setMes_rps(int $mes_rps): self
    {
        // validation for constraint: int
        if (!is_null($mes_rps) && !(is_int($mes_rps) || ctype_digit($mes_rps))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($mes_rps, true), gettype($mes_rps)), __LINE__);
        }
        $this->mes_rps = $mes_rps;
        
        return $this;
    }
    /**
     * Get ano_rps value
     * @return int
     */
    public function getAno_rps(): int
    {
        return $this->ano_rps;
    }
    /**
     * Set ano_rps value
     * @param int $ano_rps
     * @return \NfseLondrina\StructType\TcConsultarRpsServicoPrestadoEnvio
     */
    public function setAno_rps(int $ano_rps): self
    {
        // validation for constraint: int
        if (!is_null($ano_rps) && !(is_int($ano_rps) || ctype_digit($ano_rps))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($ano_rps, true), gettype($ano_rps)), __LINE__);
        }
        $this->ano_rps = $ano_rps;
        
        return $this;
    }
}
