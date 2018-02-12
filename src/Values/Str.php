<?php

namespace ChrisHalbert\Json\Values;

use ChrisHalbert\Json\Exceptions\InvalidArgument;

/**
 * Class StringObj
 * @package ChrisHalbert\Json\Values
 */
class Str extends AbstractValue
{
    /**
     * StringObj constructor.
     * @param string $value A string.
     * @throws InvalidArgument If the value is not a string.
     */
    public function __construct($value)
    {
        if (!is_string($value)) {
            throw new InvalidArgument("string", $value);
        }

        $this->value = $value;
    }
}
