<?php

namespace ChrisHalbert\Json\Values;

use ChrisHalbert\Json\Exceptions\InvalidArgument;

/**
 * Class Number
 * @package ChrisHalbert\Json\Values
 */
class Number extends AbstractValue
{
   /**
    * ValuesInterface constructor.
    * @param mixed $value A number value.
    * @throws InvalidArgument If the value is not numeric.
    */
    public function __construct($value)
    {
        if (!is_numeric($value)) {
            throw new InvalidArgument("number", $value);
        }

        $this->value = $value;
    }
}
