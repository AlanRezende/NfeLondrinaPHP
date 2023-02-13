<?php

declare(strict_types=1);

namespace NfseLondrina\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for tcListaErrosAlertas StructType
 * @subpackage Structs
 */
class TcListaErrosAlertas extends AbstractStructBase
{
    /**
     * The item
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \NfseLondrina\StructType\TcEstruturaDescricaoErros[]
     */
    protected ?array $item = null;
    /**
     * Constructor method for tcListaErrosAlertas
     * @uses TcListaErrosAlertas::setItem()
     * @param \NfseLondrina\StructType\TcEstruturaDescricaoErros[] $item
     */
    public function __construct(?array $item = null)
    {
        $this
            ->setItem($item);
    }
    /**
     * Get item value
     * @return \NfseLondrina\StructType\TcEstruturaDescricaoErros[]
     */
    public function getItem(): ?array
    {
        return $this->item;
    }
    /**
     * This method is responsible for validating the values passed to the setItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemForArrayConstraintsFromSetItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $tcListaErrosAlertasItemItem) {
            // validation for constraint: itemType
            if (!$tcListaErrosAlertasItemItem instanceof \NfseLondrina\StructType\TcEstruturaDescricaoErros) {
                $invalidValues[] = is_object($tcListaErrosAlertasItemItem) ? get_class($tcListaErrosAlertasItemItem) : sprintf('%s(%s)', gettype($tcListaErrosAlertasItemItem), var_export($tcListaErrosAlertasItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The item property can only contain items of type \NfseLondrina\StructType\TcEstruturaDescricaoErros, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set item value
     * @throws InvalidArgumentException
     * @param \NfseLondrina\StructType\TcEstruturaDescricaoErros[] $item
     * @return \NfseLondrina\StructType\TcListaErrosAlertas
     */
    public function setItem(?array $item = null): self
    {
        // validation for constraint: array
        if ('' !== ($itemArrayErrorMessage = self::validateItemForArrayConstraintsFromSetItem($item))) {
            throw new InvalidArgumentException($itemArrayErrorMessage, __LINE__);
        }
        $this->item = $item;
        
        return $this;
    }
    /**
     * Add item to item value
     * @throws InvalidArgumentException
     * @param \NfseLondrina\StructType\TcEstruturaDescricaoErros $item
     * @return \NfseLondrina\StructType\TcListaErrosAlertas
     */
    public function addToItem(\NfseLondrina\StructType\TcEstruturaDescricaoErros $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \NfseLondrina\StructType\TcEstruturaDescricaoErros) {
            throw new InvalidArgumentException(sprintf('The item property can only contain items of type \NfseLondrina\StructType\TcEstruturaDescricaoErros, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->item[] = $item;
        
        return $this;
    }
}
