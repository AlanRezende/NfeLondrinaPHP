<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tcRetornoNota StructType
 * @subpackage Structs
 */
class TcRetornoNota extends AbstractStructBase
{
    /**
     * The Resultado
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Resultado = null;
    /**
     * The Nota
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Nota = null;
    /**
     * The autenticidade
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $autenticidade = null;
    /**
     * The LinkImpressao
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LinkImpressao = null;
    /**
     * Constructor method for tcRetornoNota
     * @uses TcRetornoNota::setResultado()
     * @uses TcRetornoNota::setNota()
     * @uses TcRetornoNota::setAutenticidade()
     * @uses TcRetornoNota::setLinkImpressao()
     * @param int $resultado
     * @param int $nota
     * @param string $autenticidade
     * @param string $linkImpressao
     */
    public function __construct(?int $resultado = null, ?int $nota = null, ?string $autenticidade = null, ?string $linkImpressao = null)
    {
        $this
            ->setResultado($resultado)
            ->setNota($nota)
            ->setAutenticidade($autenticidade)
            ->setLinkImpressao($linkImpressao);
    }
    /**
     * Get Resultado value
     * @return int|null
     */
    public function getResultado(): ?int
    {
        return $this->Resultado;
    }
    /**
     * Set Resultado value
     * @param int $resultado
     * @return \StructType\TcRetornoNota
     */
    public function setResultado(?int $resultado = null): self
    {
        // validation for constraint: int
        if (!is_null($resultado) && !(is_int($resultado) || ctype_digit($resultado))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($resultado, true), gettype($resultado)), __LINE__);
        }
        $this->Resultado = $resultado;
        
        return $this;
    }
    /**
     * Get Nota value
     * @return int|null
     */
    public function getNota(): ?int
    {
        return $this->Nota;
    }
    /**
     * Set Nota value
     * @param int $nota
     * @return \StructType\TcRetornoNota
     */
    public function setNota(?int $nota = null): self
    {
        // validation for constraint: int
        if (!is_null($nota) && !(is_int($nota) || ctype_digit($nota))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($nota, true), gettype($nota)), __LINE__);
        }
        $this->Nota = $nota;
        
        return $this;
    }
    /**
     * Get autenticidade value
     * @return string|null
     */
    public function getAutenticidade(): ?string
    {
        return $this->autenticidade;
    }
    /**
     * Set autenticidade value
     * @param string $autenticidade
     * @return \StructType\TcRetornoNota
     */
    public function setAutenticidade(?string $autenticidade = null): self
    {
        // validation for constraint: string
        if (!is_null($autenticidade) && !is_string($autenticidade)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autenticidade, true), gettype($autenticidade)), __LINE__);
        }
        $this->autenticidade = $autenticidade;
        
        return $this;
    }
    /**
     * Get LinkImpressao value
     * @return string|null
     */
    public function getLinkImpressao(): ?string
    {
        return $this->LinkImpressao;
    }
    /**
     * Set LinkImpressao value
     * @param string $linkImpressao
     * @return \StructType\TcRetornoNota
     */
    public function setLinkImpressao(?string $linkImpressao = null): self
    {
        // validation for constraint: string
        if (!is_null($linkImpressao) && !is_string($linkImpressao)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($linkImpressao, true), gettype($linkImpressao)), __LINE__);
        }
        $this->LinkImpressao = $linkImpressao;
        
        return $this;
    }
}
