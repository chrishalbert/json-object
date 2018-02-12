<?php

namespace ChrisHalbert\Json\Values;

use ChrisHalbert\Json\Exceptions\InvalidArgument;

class Null
{
    private $value;

    public function __construct()
    {
        $this->value = null;
    }
}