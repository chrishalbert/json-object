<?php

namespace ChrisHalbert\Json\Values;

use ChrisHalbert\Json\Exceptions\InvalidArgument;

class String
{
    private $value;

    public function __construct($value)
    {
        if (!is_string($value)) {
            throw new InvalidArgument("string", $value);
        }

        $this->value = $value;
    }
}