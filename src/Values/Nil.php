<?php

namespace ChrisHalbert\Json\Values;

/**
 * Class Null
 * @package ChrisHalbert\Json\Values
 */
class Nil extends AbstractValue
{
    /**
     * Null constructor.
     * @param mixed $value null.
     */
    public function __construct($value = null)
    {
        $this->value = null;
    }
}
