<?php

declare(strict_types=1);

namespace NfseLondrina\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tcDescricaoCancelaNota StructType
 * @subpackage Structs
 */
class TcDescricaoCancelaNota extends AbstractStructBase
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
     * The nota
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $nota;
    /**
     * The cod_cancelamento
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var int
     */
    protected int $cod_cancelamento;
    /**
     * The email
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $email;
    /**
     * Constructor method for tcDescricaoCancelaNota
     * @uses TcDescricaoCancelaNota::setCcm()
     * @uses TcDescricaoCancelaNota::setCnpj()
     * @uses TcDescricaoCancelaNota::setCpf()
     * @uses TcDescricaoCancelaNota::setSenha()
     * @uses TcDescricaoCancelaNota::setNota()
     * @uses TcDescricaoCancelaNota::setCod_cancelamento()
     * @uses TcDescricaoCancelaNota::setEmail()
     * @param int $ccm
     * @param string $cnpj
     * @param string $cpf
     * @param string $senha
     * @param int $nota
     * @param int $cod_cancelamento
     * @param string $email
     */
    public function __construct(int $ccm, string $cnpj, string $cpf, string $senha, int $nota, int $cod_cancelamento, string $email)
    {
        $this
            ->setCcm($ccm)
            ->setCnpj($cnpj)
            ->setCpf($cpf)
            ->setSenha($senha)
            ->setNota($nota)
            ->setCod_cancelamento($cod_cancelamento)
            ->setEmail($email);
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
     * @return \NfseLondrina\StructType\TcDescricaoCancelaNota
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
     * @return \NfseLondrina\StructType\TcDescricaoCancelaNota
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
     * @return \NfseLondrina\StructType\TcDescricaoCancelaNota
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
     * @return \NfseLondrina\StructType\TcDescricaoCancelaNota
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
     * Get nota value
     * @return int
     */
    public function getNota(): int
    {
        return $this->nota;
    }
    /**
     * Set nota value
     * @param int $nota
     * @return \NfseLondrina\StructType\TcDescricaoCancelaNota
     */
    public function setNota(int $nota): self
    {
        // validation for constraint: int
        if (!is_null($nota) && !(is_int($nota) || ctype_digit($nota))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nota, true), gettype($nota)), __LINE__);
        }
        $this->nota = $nota;
        
        return $this;
    }
    /**
     * Get cod_cancelamento value
     * @return int
     */
    public function getCod_cancelamento(): int
    {
        return $this->cod_cancelamento;
    }
    /**
     * Set cod_cancelamento value
     * @param int $cod_cancelamento
     * @return \NfseLondrina\StructType\TcDescricaoCancelaNota
     */
    public function setCod_cancelamento(int $cod_cancelamento): self
    {
        // validation for constraint: int
        if (!is_null($cod_cancelamento) && !(is_int($cod_cancelamento) || ctype_digit($cod_cancelamento))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($cod_cancelamento, true), gettype($cod_cancelamento)), __LINE__);
        }
        $this->cod_cancelamento = $cod_cancelamento;
        
        return $this;
    }
    /**
     * Get email value
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \NfseLondrina\StructType\TcDescricaoCancelaNota
     */
    public function setEmail(string $email): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
}
