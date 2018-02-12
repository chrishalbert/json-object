<?php

namespace ChrisHalbert\Json\Values;

/**
 * Class AbstractValue
 * @package ChrisHalbert\Json\Values
 */
abstract class AbstractValue implements ValueInterface
{
    /**
     * Value of an abstract value type.
     * @var mixed
     */
    protected $value;

    /**
     * Returns the value.
     * @return mixed
     */
    public function value()
    {
        return $this->value;
    }
}
