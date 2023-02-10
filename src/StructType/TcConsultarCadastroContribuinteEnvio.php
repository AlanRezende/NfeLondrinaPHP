<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tcConsultarCadastroContribuinteEnvio StructType
 * @subpackage Structs
 */
class TcConsultarCadastroContribuinteEnvio extends AbstractStructBase
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
     * The cnpj_cpf_cadastro
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $cnpj_cpf_cadastro;
    /**
     * Constructor method for tcConsultarCadastroContribuinteEnvio
     * @uses TcConsultarCadastroContribuinteEnvio::setCcm()
     * @uses TcConsultarCadastroContribuinteEnvio::setCnpj()
     * @uses TcConsultarCadastroContribuinteEnvio::setCpf()
     * @uses TcConsultarCadastroContribuinteEnvio::setSenha()
     * @uses TcConsultarCadastroContribuinteEnvio::setCnpj_cpf_cadastro()
     * @param int $ccm
     * @param string $cnpj
     * @param string $cpf
     * @param string $senha
     * @param string $cnpj_cpf_cadastro
     */
    public function __construct(int $ccm, string $cnpj, string $cpf, string $senha, string $cnpj_cpf_cadastro)
    {
        $this
            ->setCcm($ccm)
            ->setCnpj($cnpj)
            ->setCpf($cpf)
            ->setSenha($senha)
            ->setCnpj_cpf_cadastro($cnpj_cpf_cadastro);
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
     * @return \StructType\TcConsultarCadastroContribuinteEnvio
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
     * @return \StructType\TcConsultarCadastroContribuinteEnvio
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
     * @return \StructType\TcConsultarCadastroContribuinteEnvio
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
     * @return \StructType\TcConsultarCadastroContribuinteEnvio
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
     * Get cnpj_cpf_cadastro value
     * @return string
     */
    public function getCnpj_cpf_cadastro(): string
    {
        return $this->cnpj_cpf_cadastro;
    }
    /**
     * Set cnpj_cpf_cadastro value
     * @param string $cnpj_cpf_cadastro
     * @return \StructType\TcConsultarCadastroContribuinteEnvio
     */
    public function setCnpj_cpf_cadastro(string $cnpj_cpf_cadastro): self
    {
        // validation for constraint: string
        if (!is_null($cnpj_cpf_cadastro) && !is_string($cnpj_cpf_cadastro)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cnpj_cpf_cadastro, true), gettype($cnpj_cpf_cadastro)), __LINE__);
        }
        $this->cnpj_cpf_cadastro = $cnpj_cpf_cadastro;
        
        return $this;
    }
}
