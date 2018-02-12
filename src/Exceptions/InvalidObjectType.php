<?php

namespace ChrisHalbert\Json\Exceptions;

class InvalidObjectType extends \Exception
{
    public function __construct($value)
    {
        $message = "Invalid object - expecting object or array, not `" . gettype($value) . "`";
        return parent::__construct($message, 400);
    }
}