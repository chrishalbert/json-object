<?php

namespace ChrisHalbert\Json\Exceptions;

/**
 * Class InvalidObjectType
 * @package ChrisHalbert\Json\Exceptions
 */
class InvalidObjectType extends \Exception
{
    /**
     * InvalidObjectType constructor.
     * @param string $value A value that is not an array or object.
     */
    public function __construct($value)
    {
        $message = "Invalid object - expecting object or array, not `" . gettype($value) . "`";
        return parent::__construct($message, 400);
    }
}
