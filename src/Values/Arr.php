<?php

namespace ChrisHalbert\Json\Values;

use ChrisHalbert\Json\Exceptions\InvalidArgument;

/**
 * Class Arr array
 * @package ChrisHalbert\Json\Values
 */
class Arr extends AbstractValue
{
   /**
    * StringObj constructor.
    * @param string $value A string.
    * @throws InvalidArgument If the value is not a string.
    */
    public function __construct($value)
    {
        if (!is_array($value)) {
            throw new InvalidArgument("array", $value);
        }

        $this->value = $value;
    }
}
