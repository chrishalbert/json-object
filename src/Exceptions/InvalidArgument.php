<?php

namespace ChrisHalbert\Json\Exceptions;

class InvalidArgument extends \Exception
{
    public function __construct($expecting, $actual)
    {
        $message = "Invalid argument - expecting `" . $expecting . "` not actual `" . gettype($value) . "`";
        return parent::__construct($message, 400);
    }
}