<?php

namespace ChrisHalbert\Json\Values;

/**
 * Interface ValuesInterface
 * @package ChrisHalbert\Json\Values
 */
interface ValueInterface
{
    /**
     * ValuesInterface constructor.
     * @param mixed $value A value to be assigned to be assigned to a key value pair..
     */
    public function __construct($value);

    /**
     * Returns the value.
     * @return mixed
     */
    public function value();
}
