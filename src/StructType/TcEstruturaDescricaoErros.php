<?php

declare(strict_types=1);

namespace NfseLondrina\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tcEstruturaDescricaoErros StructType
 * @subpackage Structs
 */
class TcEstruturaDescricaoErros extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $id;
    /**
     * The DescricaoProcesso
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DescricaoProcesso;
    /**
     * The DescricaoErro
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $DescricaoErro;
    /**
     * Constructor method for tcEstruturaDescricaoErros
     * @uses TcEstruturaDescricaoErros::setId()
     * @uses TcEstruturaDescricaoErros::setDescricaoProcesso()
     * @uses TcEstruturaDescricaoErros::setDescricaoErro()
     * @param string $id
     * @param string $descricaoProcesso
     * @param string $descricaoErro
     */
    public function __construct(string $id, string $descricaoProcesso, string $descricaoErro)
    {
        $this
            ->setId($id)
            ->setDescricaoProcesso($descricaoProcesso)
            ->setDescricaoErro($descricaoErro);
    }
    /**
     * Get id value
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \NfseLondrina\StructType\TcEstruturaDescricaoErros
     */
    public function setId(string $id): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        
        return $this;
    }
    /**
     * Get DescricaoProcesso value
     * @return string
     */
    public function getDescricaoProcesso(): string
    {
        return $this->DescricaoProcesso;
    }
    /**
     * Set DescricaoProcesso value
     * @param string $descricaoProcesso
     * @return \NfseLondrina\StructType\TcEstruturaDescricaoErros
     */
    public function setDescricaoProcesso(string $descricaoProcesso): self
    {
        // validation for constraint: string
        if (!is_null($descricaoProcesso) && !is_string($descricaoProcesso)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descricaoProcesso, true), gettype($descricaoProcesso)), __LINE__);
        }
        $this->DescricaoProcesso = $descricaoProcesso;
        
        return $this;
    }
    /**
     * Get DescricaoErro value
     * @return string
     */
    public function getDescricaoErro(): string
    {
        return $this->DescricaoErro;
    }
    /**
     * Set DescricaoErro value
     * @param string $descricaoErro
     * @return \NfseLondrina\StructType\TcEstruturaDescricaoErros
     */
    public function setDescricaoErro(string $descricaoErro): self
    {
        // validation for constraint: string
        if (!is_null($descricaoErro) && !is_string($descricaoErro)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($descricaoErro, true), gettype($descricaoErro)), __LINE__);
        }
        $this->DescricaoErro = $descricaoErro;
        
        return $this;
    }
}
