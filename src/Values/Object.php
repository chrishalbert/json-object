<?php

namespace ChrisHalbert\Json\Values;

use ChrisHalbert\Json\Exceptions\InvalidObjectType;

class Object implements ValuesInterface
{
    private $members = array();

    public function __construct($value = null)
    {
        if (isset($value) && !is_array($value) && !is_object($value)) {
            throw new InvalidObjectType($value);
        }
    }

    public function set($name, $value)
    {
        switch (gettype($value)) {
            case "object":
                $this->members[$name] = new Object($value);
                break;
            case "array":

            case "integer":
            case "double":
            case "float":
                $this->members[$name] = new Number($value);
                break;
            case "string":
                $this->members[$name] = new String($value);
                break;
            case "boolean":
                $this->members[$name] = new Boolean($value);
            default:
                break;
        }

        if ($value instanceof ValuesInterface) {
            $this->members[$name] = $value;
        }


    }

    public function get($name)
    {
        return isset($this->members[$name]) ? $this->members[$name] : new Null();
    }
}
