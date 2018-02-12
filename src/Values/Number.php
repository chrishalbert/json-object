<?php

namespace ChrisHalbert\Json\Values;

use ChrisHalbert\Json\Exceptions\InvalidArgument;

class Number
{
    private $value;

    public function __construct($value)
    {
        if (!is_numeric($value)) {
            throw new InvalidArgument("number", $value);
        }

        $this->value = $value;
    }
}