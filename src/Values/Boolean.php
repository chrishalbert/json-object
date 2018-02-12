<?php

namespace ChrisHalbert\Json\Values;

use ChrisHalbert\Json\Exceptions\InvalidArgument;

/**
 * Class Boolean
 * @package ChrisHalbert\Json\Values
 */
class Boolean extends AbstractValue
{
   /**
    * StringObj constructor.
    * @param string $value A string.
    * @throws InvalidArgument If the value is not a string.
    */
    public function __construct($value)
    {
        if (!is_bool($value)) {
            throw new InvalidArgument("bool", $value);
        }

        $this->value = $value;
    }
}
