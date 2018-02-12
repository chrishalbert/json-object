<?php

namespace ChrisHalbert\Json\Exceptions;

/**
 * Class InvalidArgument
 * @package ChrisHalbert\Json\Exceptions
 */
class InvalidArgument extends \Exception
{
    /**
     * InvalidObjectType constructor.
     * @param string $expecting A value that is not an array or object.
     * @param mixed  $actual    The mixed value that was actually passed.
     */
    public function __construct($expecting, $actual)
    {
        $message = "Invalid argument - expecting `" . $expecting . "` not actual `" . gettype($actual) . "`";
        return parent::__construct($message, 400);
    }
}
